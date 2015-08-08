<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/resellers', function() { return 'resllers';});
    Route::get('/suppliers', function() { return 'suppliers';});
    Route::resource('products', 'ProductsController');
        
});

Route::get('/', function () {
    return view('welcome');
});
