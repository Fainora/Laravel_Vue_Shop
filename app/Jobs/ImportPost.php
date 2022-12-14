<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class ImportPost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private ?string $apiUrl;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->apiUrl = 'https://jsonplaceholder.typicode.com/posts';
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->getData();

        $this->log->info('Finish');
    }

    public function getData() {
        try {
            $response = Http::get($this->apiUrl);

            return $response->json();
        } catch (\Throwable $th) {
            $this->log->error($th->getMessage());
        }
    }
}
