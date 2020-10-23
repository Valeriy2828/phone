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

Route::get('/', 'MainController@index')->name('home');

Route::get('/contact/{id}', 'MainController@show')->name('show');

Route::get('/addContact', 'MainController@add')->name('add');
Route::post('/addContact/add', 'MainController@store');

Route::get('/delete/{id}', 'MainController@destroy')->name('destroy');

Route::get('/edit/{id}', 'MainController@edit')->name('edit');
Route::post('/edit/{id}/update', 'MainController@update');