<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::resource('categories', CategoryController::class);
Route::resource('colors', ColorController::class);
Route::resource('tags', TagController::class);
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);

