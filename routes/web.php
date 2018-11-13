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

Route::get('/', 'Pages@home');
Route::get('/about', 'Pages@about');
Route::get('/contact', 'Pages@contact');

Route::get('/products/{product}/delete', 'ProductsController@delete');
Route::resource('/products', 'ProductsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
