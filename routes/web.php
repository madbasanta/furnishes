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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/product/{product}/details', 'ProductController@detail')->name('p.details');

Route::get('/search', 'ProductController@searchPage');

Route::get('/wishlist', 'ProductController@wishlistPage');

Route::get('/cart', 'ProductController@cart');

Route::get('/checkout', 'ProductController@checkout');

include 'route_product.php';