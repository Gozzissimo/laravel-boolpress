<?php

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
    return view('guest.welcome');
});

Auth::routes();

Route::middleware('auth') //controllo se sono loggato
->namespace('Admin') //cartella controller
->name('admin.') //name
->prefix('admin') //prefisso uri
->group(function () {
    Route::get('/', 'HomeController@index')
    ->name('home');
    Route::resource('posts', 'PostController');
});

Route::get('{any?}', function ($name = null) {
    return view('guest.welcome');
})->where('any', '.*');