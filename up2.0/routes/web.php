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

// FRONT PAGE
Route::get('/', 'HomeController@index');

// CUSTOMER SECTION

Route::get('/customers', 'CustomersController@index');

Route::get('/customers/{customer}', 'CustomersController@show');

Route::get('/customers/{customer}/create', 'CustomersController@create');