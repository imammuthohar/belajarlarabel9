<?php

use Illuminate\Support\Facades\Route;
use Mockery\Generator\Method;

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

Route::get('/', function () {
    return view ('welcome');
});

// route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

// Route::get('/hai',[\App\Http\Controllers\PostController::class,'hello'])->name('hello');

// Method
// get 
// post 
// PUT
// Delete 
// hai_hai
// HaiHai

