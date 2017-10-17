<?php


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



Route::get('/orders/create', 'OrdersController@create')->name('order.create');
Route::post('/orders/', 'OrdersController@store')->name('order.submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/completed', 'HomeController@completed')->name('user.completed.orders');
Route::get('/logout', 'Auth\LoginController@userLogout')->name('logout');


Route::prefix('admin')->group(function() {

	Route::get('/login', 'Auth\AdminsLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminsLoginController@login')->name('admin.login.submit');
	Route::get('/logout', 'Auth\AdminsLoginController@logout')->name('admin.logout');
	Route::get('/', 'AdminsController@index')->name('admin.dashboard');


	// Password reset routes
	Route::post('/password/email', 'Auth\AdminsForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminsForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminsResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminsResetPasswordController@showResetForm')->name('admin.password.reset');
});


Route::prefix('carrier')->group(function() {

	Route::get('/login', 'Auth\CarriersLoginController@showLoginForm')->name('carrier.login');
	Route::post('/login', 'Auth\CarriersLoginController@login')->name('carrier.login.submit');
	Route::get('/logout', 'Auth\CarriersLoginController@logout')->name('carrier.logout');

	Route::get('/', 'CarriersController@index')->name('carrier.dashboard');
	Route::get('/add-info', 'CarriersController@edit')->name('carrier.add-info');
	Route::post('/add-info', 'CarriersController@update')->name('carrier.add-info.submit');


	// Password reset routes
	Route::post('/password/email', 'Auth\CarriersForgotPasswordController@sendResetLinkEmail')->name('carrier.password.email');
	Route::get('/password/reset', 'Auth\CarriersForgotPasswordController@showLinkRequestForm')->name('carrier.password.request');
	Route::post('/password/reset', 'Auth\CarriersResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\CarriersResetPasswordController@showResetForm')->name('carrier.password.reset');

	//Register
	Route::get('/register', 'Auth\CarriersRegisterController@showRegistrationForm')->name('carrier.register');
	Route::post('/register', 'Auth\CarriersRegisterController@register')->name('carrier.register.submit');


});