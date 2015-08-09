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

use App\User as User; 
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::group(['middleware' => 'auth'], function () {

    Route::get('/resellers', 'SupplierController@index');
    Route::get('/resellers/all', 'SupplierController@all');
    Route::get('/resellers/apply/{id}', 'ResellerController@apply');
    Route::get('/suppliers', 'ResellerController@index');
    Route::get('/suppliers/all', 'ResellerController@all');
    Route::get('/supplier/hire/{id}', 'SupplierController@hire');
    Route::get('products/new', function(){ return view('products.supplier-add');});
    Route::resource('products', 'ProductsController');
   	Route::get('products/{product}/add', 'ProductsController@addProduct');

});

Route::get('/{company_name}/store', function($company_name){
    
    // dump(User::find(4)->products);
    return view('store.index');
});
Route::get('/', function () {
    return view('welcome');
});
