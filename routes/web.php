<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/getPosts', 'App\Http\Controllers\PostController@index');
Route::post('/posts', 'App\Http\Controllers\PostController@store');
Route::get('/getPostById', 'App\Http\Controllers\PostController@getPostById');
Route::post('/deletePost', 'App\Http\Controllers\PostController@deletePost');
Route::post('/editPost', 'App\Http\Controllers\PostController@updatePost');
Route::get('/getCurrentUser', 'App\Http\Controllers\PostController@getCurrentUser');
Route::post('/send', 'App\Http\Controllers\MailerController@sendMail');
Route::get('/{any}', function () {
    return view('welcome');
})->where("any",".*");