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
Route::get('/about', 'Pages@about')->name('about');
Route::get('/contact', 'Pages@contact')->name('contact');

Route::get('/products/{product}/delete', 'ProductsController@delete');
Route::resource('/products', 'ProductsController');

Route::group(['middleware' => ['auth'], 'prefix' => 'account'], function () {
    Route::resource('/orders', 'OrdersController');
});

Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    });
});

Route::get('/home', 'HomeController@index')->name('home');
