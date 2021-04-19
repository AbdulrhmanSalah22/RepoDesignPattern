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

Route::get('all','ProductsController@getall') ;
Route::get('index','ProductsController@index');
Route::get('create','ProductsController@create');
Route::post('store','ProductsController@store')->name('Store');
Route::get('edit/{id}','ProductsController@edit');
Route::post('update/{id}','ProductsController@update')->name('Update');
Route::get('delete/{id}','ProductsController@destroy');

