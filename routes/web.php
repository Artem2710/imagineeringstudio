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

Route::get('categories', 'CategoryController@index')->name('categories');


//Route::put('categories', 'CategoryController@edit')->name('categoryEdit');
Route::put('categories/{category}', 'CategoryController@edit')->name('events.update');

Route::get('categories/{category}/edit', 'CategoryController@update')->name('events.edit');


Route::delete('categories/{category}', 'CategoryController@delete')->name('deleteCategory');
Route::post('categories', 'CategoryController@createCategory')->name('createCategory');
