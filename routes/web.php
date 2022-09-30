<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Main\IndexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('index');
// });

Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->middleware('admin')->group(function() {
    Route::get('/', IndexController::class)->name('main.index');
    Route::resource('categories', CategoryController::class);
    Route::resource('colors', ColorController::class);
    Route::resource('tags', TagController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{any}', function() {
    return view('index');
})->where('any', '.*')->name('main');
