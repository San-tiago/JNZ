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
Route::get('/stocks', 'HomeController@stocks');

//Customer Routes!
Route::get('/add-order', 'CustomerController@create');
Route::get('/customer/edit/{id}', 'CustomerController@edit');
Route::get('/customer/delete/{id}', 'CustomerController@delete');
Route::post('/customer-add', 'CustomerController@store');
Route::post('/customer/update/{id}', 'CustomerController@update');


//Stock Routes!
Route::get('/add-stock', 'StockController@create');
Route::get('/stock/edit/{id}', 'StockController@edit');
Route::get('/stock/delete/{id}', 'StockController@delete');
Route::post('/stock-add', 'StockController@store');
Route::post('/stock/update/{id}', 'StockController@update');


//Supplier Routes!

Route::get('/add-supplier', 'SupplierController@create');
Route::get('/supplier/edit/{id}', 'SupplierController@edit');
Route::get('/supplier/delete/{id}', 'SupplierController@delete');
Route::post('/supplier-add', 'SupplierController@store');
Route::post('/supplier/update/{id}', 'SupplierController@update');

//Products Routes!
Route::get('/add-product', 'ProductController@create');
Route::post('/product-add', 'ProductController@store');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/update/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@delete');
