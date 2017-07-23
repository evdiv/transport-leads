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

Route::get('/', 'OrdersController@index');






Route::get('/takelaj', 'TakelajController@index');

Route::get('/takelaj/create', 'TakelajController@create');

Route::post('/takelaj/', 'TakelajController@store');

Route::get('/takelaj/{order}', 'TakelajController@show');

Route::put('/takelaj/{order}', 'TakelajController@update');

Route::post('/takelaj/{order}/comments', 'CommentsController@store');



Route::get('/carriers/', 'CarriersController@index');

Route::get('/carriers/create', 'CarriersController@create');

Route::post('/carriers/', 'CarriersController@store');

Route::get('/carriers/{carrier}', 'CarriersController@show');

Route::put('/carriers/{carrier}', 'CarriersController@update');



Route::get('/users/', 'UsersController@index');

Route::get('/user/create', 'UsersController@create');

Route::post('/users/', 'UsersController@store');

Route::get('/users/{user}', 'UsersController@show');

Route::put('/users/{user}', 'UsersController@update');



Route::get('/orders/create', 'OrdersController@create')->name('create-order');

Route::post('/orders/', 'Auth\RegisterController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@userLogout')->name('logout');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminsLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminsLoginController@login')->name('admin.login.submit');
	Route::get('/logout', 'Auth\AdminsLoginController@logout')->name('admin.logout');
	Route::get('/', 'AdminsController@index')->name('admin.dashboard');
});


Route::prefix('carrier')->group(function() {

	Route::get('/login', 'Auth\CarriersLoginController@showLoginForm')->name('carrier.login');
	Route::post('/login', 'Auth\CarriersLoginController@login')->name('carrier.login.submit');
	Route::get('/logout', 'Auth\CarriersLoginController@logout')->name('carrier.logout');
	Route::get('/', 'CarriersController@index')->name('carrier.dashboard');
});