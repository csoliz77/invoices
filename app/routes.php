<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
		return View::make('hello');
});

Route::resource('invoice', 'InvoicesController');
Route::resource('items','ItemsController');
Route::resource('user','UsersController');
Route::resource('address', 'AddressesController');
Route::resource('clients', 'ClientsController');
