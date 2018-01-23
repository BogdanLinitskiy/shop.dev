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

Route::get('/', 'HomeController@home');

//Route::get('/products/show/{id}','ProductsController@show_single');
//Route::get('/orders/show/{id}','OrdersController@show_single');
//Route::get('/pages/show/{id}','PagesController@show_single');
//
//Route::get('/products/show','ProductsController@show');
//Route::get('/orders/show','OrdersController@show');
//Route::get('/pages/show','PagesController@show');

Route::get('/orders/{order}/delete','OrdersController@delete');

Route::resources([
    'orders' => 'OrdersController',
    'pages' => 'PagesController',
    'products' => 'ProductsController'
]);

