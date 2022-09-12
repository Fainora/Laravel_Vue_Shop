<?php

namespace App\Http\Controllers\API\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    private $apiUrl = 'https://jsonplaceholder.typicode.com/posts';

    public function __invoke()
    {
        try {
            $response = Http::get($this->apiUrl);
            $this->log->info('Finish');

            return $response->json();
        } catch (\Throwable $th) {
            $this->log->error($th->getMessage());
        }
    }
}
