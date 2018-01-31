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


Route::get('/orders/{order}/delete','OrdersController@delete');
Route::get('/pages/{page}/delete','PagesController@delete');
Route::get('/products/{product}/delete','ProductsController@delete');

Route::resources([
    'orders' => 'OrdersController',
    'pages' => 'PagesController',
    'products' => 'ProductsController',
    'admin/products' => 'Admin\ProductsController',
]);

Route::get('/categories/{category}','CategoriesController@show');

Route::get('/admin_panel','Admin\MainController@index');
Route::get('/admin_panel/main','Admin\MainController@main');
Route::post('/auth_check','Admin\SessionsController@store');


Route::get('/login','SessionsController@create')->name('login');
Route::post('/sessions','SessionsController@store');

Route::get('/logout','SessionsController@destroy');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

