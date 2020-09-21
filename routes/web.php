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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/suppliers', 'HomeController@supplier');
Route::get('/accounts', 'HomeController@accounts');
Route::get('/products', 'HomeController@products');
Route::get('/orders', 'HomeController@orders');
Route::get('/sales', 'HomeController@sales');
Route::get('/transactions', 'HomeController@transactions');

