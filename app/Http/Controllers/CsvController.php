<?php

namespace App\Http\Controllers;

use App\Actions\CsvArrayAction;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class CsvController extends Controller
{
    public function __invoke(CsvArrayAction $action): Factory|View|Application
    {
        return view('csv', [
            'data' => $action->handle()
        ]);
    }
}
