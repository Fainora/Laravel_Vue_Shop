<?php

use App\Http\Controllers\API\Blog\IndexController as BlogIndexController;
use App\Http\Controllers\API\Product\IndexController;
use App\Http\Controllers\API\Product\ShowController;
use App\Jobs\ImportPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', IndexController::class);
Route::get('/products/{product}', ShowController::class);

// Route::get('/blog', BlogIndexController::class);
