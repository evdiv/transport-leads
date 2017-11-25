<?php

//**************************
//Static Pages
//**************************
Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/select-service', 'PageController@select')->name('select.service');
Route::post('/contact', 'PageController@store')->name('contact.submit');


//**************************
//Order Pages
Route::get('/orders', 'OrdersController@index')->name('orders');
Route::get('/orders/{order}', 'OrdersController@show')->name('order.show');


//Takelaj 
Route::get('/takelaj', 'TakelajController@index');
Route::get('/takelaj/create', 'TakelajController@create')->name('create.takelaj');
Route::get('/takelaj/{id}', 'TakelajController@show');
Route::post('/takelaj/', 'TakelajController@store');
Route::put('/takelaj/{id}', 'TakelajController@update');


//Gruzchiki
Route::get('/gruzchiki', 'GruzchikiController@index');
Route::get('/gruzchiki/{id}', 'GruzchikiController@show');
Route::get('/gruzchiki/create', 'GruzchikiController@create')->name('create.gruzchiki');
Route::post('/gruzchiki/', 'gruzchikiController@store');
Route::put('/gruzchiki/{id}', 'gruzchikiController@update');


//Auto
Route::get('/auto', 'AutoController@index');
Route::get('/auto/{id}', 'AutoController@show');
Route::get('/auto/create', 'AutoController@create')->name('create.auto');
Route::post('/auto/', 'AutoController@store');
Route::put('/auto/{id}', 'AutoController@update');



//**************************
//Comments
//Route::post('/comments', 'CommentController@store');



//**************************
//Proposals
//Route::post('/proposals', 'ProposalController@store');
//Route::put('/proposals/{proposal}', 'ProposalController@update');




//Commented out on 24.11
/*
Route::get('/', 'OrdersController@index');
Route::get('/orders/create', 'OrdersController@create')->name('order.create');
Route::get('/orders/{order}', 'OrdersController@show')->name('order.show');
Route::post('/orders/', 'OrdersController@store')->name('order.submit');

Route::post('/orders/{order}/proposals', 'ProposalController@store');
Route::post('/orders/{order}/accept/{proposal}', 'ProposalController@accept');
Route::post('/orders/{order}/comments', 'CommentController@store');

Route::post('/proposals/{proposal}/message', 'MessageController@store');
*/




Route::get('/carriers/', 'CarriersController@index');
Route::get('/carriers/{carrier}', 'CarriersController@show');
Route::get('/carriers/create', 'CarriersController@create');
Route::post('/carriers/', 'CarriersController@store');
Route::put('/carriers/{carrier}', 'CarriersController@update');


Route::get('/users/', 'UsersController@index');
Route::get('/user/create', 'UsersController@create');
Route::post('/users/', 'UsersController@store');
Route::get('/users/{user}', 'UsersController@show');
Route::put('/users/{user}', 'UsersController@update');


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

	Route::get('/', 'Admin\CarriersDashboardController@index')->name('carrier.dashboard');
	Route::get('/add-info', 'Admin\CarriersDashboardController@edit')->name('carrier.add-info');
	Route::post('/add-info', 'Admin\CarriersDashboardController@update')->name('carrier.add-info.submit');


	// Password reset routes
	Route::post('/password/email', 'Auth\CarriersForgotPasswordController@sendResetLinkEmail')->name('carrier.password.email');
	Route::get('/password/reset', 'Auth\CarriersForgotPasswordController@showLinkRequestForm')->name('carrier.password.request');
	Route::post('/password/reset', 'Auth\CarriersResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\CarriersResetPasswordController@showResetForm')->name('carrier.password.reset');


	//Register
	Route::get('/register', 'Auth\CarriersRegisterController@showRegistrationForm')->name('carrier.register');
	Route::post('/register', 'Auth\CarriersRegisterController@register')->name('carrier.register.submit');


});