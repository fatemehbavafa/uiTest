<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Auth::routes();
Route::resource('home', \App\Http\Controllers\HomeController::class);
Route::resource('website', \App\Http\Controllers\WebsiteController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::resource('question', \App\Http\Controllers\QuestionController::class);
Route::resource('test', \App\Http\Controllers\TestController::class);

