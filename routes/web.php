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

//Route::get('/cart','CartController@cart')->name('cart');

Route::get('/test/checkout','CheckoutController@checkout')->name('checkout');

//Route::get('/searchresults','ProductController@searchResult')->name('searchresults');


//Route::get('/api','ApiController@index')->name('api');
//
//Route::get('/api/getallproducts','ApiController@getAllProducts')->name('getAllProducts.api');
//
//Route::get('/api/getproduct/{id}','ApiController@getProduct')->name('getProduct.api');

Route::get('/admin','AdminController@index')->name('admin');

Route::get('/user/registration', 'UserController@registration')->name('userRegistration');
Route::post('/user/registration', 'UserController@createAccount');

Route::get('/user/login', 'UserController@userLogin')->name('userLogin');
Route::post('/user/login','UserController@login' );

