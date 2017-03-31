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
    return view('index');
});

Route::get('/products', 'ProductController@index');
Route::get('/products/figures', 'ProductController@figures');
Route::get('/products/clothes', 'ProductController@clothes');
Route::get('/products/movies', 'ProductController@movies');
Route::get('/products/plushies', 'ProductController@plushies');
Route::get('/cart', 'ShoppingCartController@index');
Route::get('/products/{product}', 'ProductController@show');

Route::get('/dashboard', 'DashboardController@index');

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

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');