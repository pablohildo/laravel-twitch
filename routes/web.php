<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/noticias','PostController@index')->name('noticias.index');

Route::get('/noticias/new', 'PostController@create')->name('noticias.create');

Route::post('/noticias', 'PostController@store')->name('noticias.store');
