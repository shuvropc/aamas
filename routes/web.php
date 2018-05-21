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


Route::get('/','HomeController@index')->name('homepage');

Route::get('/cart','CartController@cart')->name('cart');

Route::get('/checkout','CheckoutController@checkout')->name('checkout');

Route::get('/searchresults','ProductController@searchResult')->name('searchresults');

Route::get('/men','MenController@index')->name('men.homepage');

Route::get('/women','WomenController@index')->name('women.homepage');
