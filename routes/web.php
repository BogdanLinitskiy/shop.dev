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

Route::get('/orders/{order}','OrdersController@show');
Route::get('/pages/{page}','PagesController@show');
Route::get('/products/{product}','ProductsController@show');

Route::resources([
    'admin/orders' => 'Admin\OrdersController',
    'admin/pages' => 'Admin\PagesController',
    'admin/products' => 'Admin\ProductsController',
]);

Route::get('/categories/{category}','CategoriesController@show');

Route::get('/login','SessionsController@create')->name('login');
Route::post('/sessions','SessionsController@store');
Route::get('/logout','SessionsController@destroy');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/admin/orders/{order}/delete','Admin\OrdersController@delete');
Route::get('/admin/pages/{page}/delete','Admin\PagesController@delete');
Route::get('/admin/products/{product}/delete','Admin\ProductsController@delete');

Route::get('/admin/','Admin\MainController@index');
Route::get('/admin/login',['as' => 'admin.login','uses' => 'Admin\LoginController@showLoginForm']);
Route::post('/admin/login',['uses' => 'Admin\LoginController@login']);
Route::get('/admin/logout',['as' => 'admin.logout','uses' => 'Admin\LoginController@logout']);
