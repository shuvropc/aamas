<?php
Route::group([ 'middleware' => 'UserLoginCheck'], function() {
    Route::get('/checkout','CheckoutController@checkout')->name('checkout');
});


Route::get('/admin','AdminController@index')->name('admin');
Route::get('/','HomeController@index')->name('homepage');
Route::get('/user/registration', 'UserController@registration')->name('userRegistration');
Route::post('/user/registration', 'UserController@createAccount');
Route::get('/user/login', 'UserController@userLogin')->name('userLogin');
Route::post('/user/login','UserController@login' );
Route::get('/user/information', 'UserController@information')->name('user.setInformation');
Route::post('/user/information', 'UserController@setInformation');
Route::get('/user/edit', 'UserController@edit')->name('user.edit');
Route::post('/user/edit', 'UserController@update' );
Route::get('/user/passwordchange', 'UserController@changePassword')->name('user.Passwordchange');
Route::post('/user/passwordchange', 'UserController@updatePassword' );


Route::get('/logout','UserController@logOut' );



//Vendor
Route::get('/vendor/register','VendorController@register')->name('vendor.registration');
Route::post('/vendor/register','VendorController@registerVendor');
Route::get('/vendor/addproduct','VendorController@add_product')->name('vendor.addproduct');
Route::get('/vendor/orders','VendorController@orders')->name('vendor.orders');



















//Route::get('/cart','CartController@cart')->name('cart');



//Route::get('/searchresults','ProductController@searchResult')->name('searchresults');


//Route::get('/api','ApiController@index')->name('api');
//
//Route::get('/api/getallproducts','ApiController@getAllProducts')->name('getAllProducts.api');
//
//Route::get('/api/getproduct/{id}','ApiController@getProduct')->name('getProduct.api');


