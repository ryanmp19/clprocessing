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
    return view('home');
});

/*
==============================================================
	User
==============================================================
/
/ look into routing/router.php
/
*/

Auth::routes();


/*
==============================================================
	User - Action
==============================================================
*/

Route::get('/action/', 'SessionController@index');
Route::get('/action/create', 'SessionController@create');
Route::post('/action', 'SessionController@store');

/*
==============================================================
	Application
==============================================================
*/

Route::get('/application', 'ApplicationController@index');
Route::get('/application/create', 'ApplicationController@create');
Route::get('/application/', 'ApplicationController@store');
Route::get('/application/{application-id}', 'ApplicationController@show');
// Route::get('/application/create', 'ApplicationController@create');

/*
==============================================================
	Customer
==============================================================
*/

Route::get('/customer', 'CustomersController@index');
Route::get('/customer/create', 'CustomersController@create');
Route::post('/customer', 'CustomersController@store');
Route::get('/customer/{user-id}', 'CustomersController@show');
// Route::post('/customer/delete', 'CustomersController@destroy');




Route::get('/home', 'HomeController@index')->name('home');
