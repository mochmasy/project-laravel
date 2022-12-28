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
    return view('welcome');
});

Route::get('/book', 'App\Http\Controllers\BookController@index');
Route::get('/book/create', 'App\Http\Controller\BookController@create');
Route::get('/book/edit', 'App\Http\Controller\BookController@edit');
Route::get('/book/update', 'App\Http\Controller\BookController@update');
Route::get('/book/delete', 'App\Http\Controller\ BookController@delete');