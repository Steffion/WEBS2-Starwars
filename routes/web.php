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

use App\Product;

Route::get('/', function () {
    return view('index');
});

Route::get('/movies', function () {
    $movies = Product::where('category', '=', 'movies')->get();

    return view('movies', compact('movies'));
});

Route::get('/products', 'ProductController@index');
Route::get('/products/figures', 'FiguresController@index');
Route::get('/products/{product}', 'ProductController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');
