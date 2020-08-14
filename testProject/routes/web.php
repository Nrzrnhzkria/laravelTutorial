<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/ 

Route::get('/', function(){
    return view('product');
});

Route::post('store', 'ProductController@create');

Route::get('show/feature/{id}', 'ProductController@show');

Route::get('view/{id}', 'ProductController@view');

Route::get('update/{id}', 'ProductController@edit');

Route::post('update/product/{id}',  'ProductController@update');

Route::get('delete/{id}', 'ProductController@destroy');