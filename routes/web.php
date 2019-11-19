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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/orders', 'OrdersController');

Route::get('/orders/destroy/{id}', 'OrdersController@destroy');

Route::get('/search', 'OrdersController@search');

Route::get('/search_order_byID_orbyName', 'OrdersController@search_order_byID_orbyName');

Route::resource('/newpizzas', 'NewpizzasController');




