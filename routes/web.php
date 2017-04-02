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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('sale', function () {
    return view('sale');
});

Route::get('forbidden', function () {
    return view('errors.403');
});

Route::get('/search', 'ProductController@search');

Route::get('/products', 'ProductController@index');
Route::get('/products/{category}', 'ProductController@filter');
Route::get('/products/view/{product}', 'ProductController@show');

Route::get('/cart', 'ShoppingCartController@index');
Route::get('/cart/add/{product}', 'ShoppingCartController@addToCart');
Route::get('/cart/remove/{product}', 'ShoppingCartController@removeFromCart');
Route::get('/cart/clear', 'ShoppingCartController@destroy');
Route::get('/cart/clear/{product}', 'ShoppingCartController@clearFromCart');
Route::get('/cart/checkout', 'ShoppingCartController@checkout');

Route::get('/dashboard', 'DashboardController@index');

Route::post('/dashboard/account/edit', 'AccountController@update');
Route::get('/dashboard/account/delete', 'AccountController@destroy');

Route::get('/dashboard/orders', 'OrdersController@index');
Route::get('/dashboard/orders-admin', 'OrdersController@indexAdmin')->middleware('isadmin');

Route::get('/dashboard/products', 'ProductsManageController@index');
Route::get('/dashboard/products/create', 'ProductsManageController@create');
Route::post('/dashboard/products/create', 'ProductsManageController@store');
Route::get('/dashboard/products/edit/{product}', 'ProductsManageController@edit');
Route::post('/dashboard/products/edit/{product}', 'ProductsManageController@update');
Route::get('/dashboard/products/delete/{product}', 'ProductsManageController@destroy');

Route::get('/dashboard/users', 'UsersManageController@index');
Route::get('/dashboard/users/create', 'UsersManageController@create');
Route::post('/dashboard/users/create', 'UsersManageController@store');
Route::get('/dashboard/users/edit/{user}', 'UsersManageController@edit');
Route::post('/dashboard/users/edit/{user}', 'UsersManageController@update');
Route::get('/dashboard/users/delete/{user}', 'UsersManageController@destroy');

Route::get('/dashboard/categories', 'CategoriesManageController@index');
Route::get('/dashboard/categories/create', 'CategoriesManageController@create');
Route::post('/dashboard/categories/create', 'CategoriesManageController@store');
Route::get('/dashboard/categories/edit/{category}', 'CategoriesManageController@edit');
Route::post('/dashboard/categories/edit/{category}', 'CategoriesManageController@update');
Route::get('/dashboard/categories/delete/{category}', 'CategoriesManageController@destroy');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');