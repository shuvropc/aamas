<?php


use Gloudemans\Shoppingcart\Facades\Cart;

Route::group([ 'middleware' => 'UserLoginCheck'], function() {
    Route::get('/checkout','CheckoutController@checkout')->name('checkout');

    Route::get('/user/edit', 'UserController@edit')->name('user.edit');
    Route::post('/user/edit', 'UserController@update' );

    Route::get('/user/passwordchange', 'UserController@changePassword')->name('user.Passwordchange');
    Route::post('/user/passwordchange', 'UserController@updatePassword' );

    Route::get('/user/information', 'UserController@information')->name('user.setInformation');
    Route::post('/user/information', 'UserController@setInformation');

    Route::get('/user/profile', 'UserController@profile')->name('user.profile');
    Route::get('/user/orders', 'UserController@orders')->name('user.orders');
    Route::get('/user/deliveries', 'UserController@deliveries')->name('user.deliveries');

    Route::get('/logout','UserController@logOut')->name('vendor.logout');

});


Route::group(['middleware' => 'VendorLoginCheck'], function (){

    Route::get('/vendor/edit', 'VendorController@edit')->name('vendor.edit');
    Route::post('/vendor/edit', 'VendorController@update');

    Route::get('/vendor/addProduct', 'ProductController@addProductByVendor')->name('vendor.addProduct');
    Route::post('/vendor/addProduct', 'ProductController@addNewProductByVendor');



    Route::get('/vendor/passwordChange', 'VendorController@changePassword')->name('vendor.passwordChange');
    Route::post('/vendor/passwordChange', 'VendorController@updatePassword');


    Route::get('/vendor/logout', 'VendorController@logout')->name('vendor.logout');
    Route::get('/vendor/index', 'VendorController@index')->name('vendor.index');

    
});


Route::group([ 'middleware' => 'CheckEmployeeLogin'], function() {

    Route::get('/employee/create','EmployeeController@create')->name('employee.create');
    Route::post('/employee/create','EmployeeController@CreateEmployee');

    Route::get('/employee/edit', 'EmployeeController@edit')->name('employee.edit');
    Route::post('/employee/edit', 'EmployeeController@update' );


    Route::get('/employee/changePassword', 'EmployeeController@changePassword')->name('employee.Passwordchange');
    Route::post('/employee/changePassword', 'EmployeeController@updatePassword' );


    Route::get('/employee/sales/addproduct','ProductController@addProduct')->name('sales.addproduct');
    Route::post('/employee/sales/addproduct','ProductController@addNewProduct');


    Route::get('/employee/logout','EmployeeController@logOut')->name('employee.logout');

    Route::get('/employee/hr/index','EmployeeController@HRindex')->name('hr.index');
    Route::get('/employee/sales/index','EmployeeController@salesExcecutiveindex')->name('sales.index');

    Route::post('/employee/hr/imagechange','EmployeeController@imagechange')->name('employee.image');
    Route::post('/employee/sales/imagechange','EmployeeController@imagechange')->name('employee.image');
    Route::get('/employee/hr/allemployee','EmployeeController@allemployee')->name('hr.allemployee');

    Route::post('/employee/hr/active','EmployeeController@active')->name('employee.active');

});




Route::get('/admin','AdminController@index')->name('admin.index');
Route::get('/admin/featureproduct','AdminController@featured')->name('admin.featured');

Route::get('/','HomeController@index')->name('homepage');
Route::get('/searchproduct','HomeController@searchProduct')->name('searchProduct');
Route::get('/user/registration', 'UserController@registration')->name('userRegistration');
Route::post('/user/registration', 'UserController@createAccount');
Route::get('/user/login', 'UserController@userLogin')->name('userLogin');
Route::post('/user/login','UserController@login');






//Vendor
Route::get('/vendor/register','VendorController@register')->name('vendor.registration');
Route::post('/vendor/register','VendorController@registerVendor');



Route::get('/vendor/addcategory/{name}','VendorController@addCategory')->name('vendor.addcategory');
Route::get('/vendor/adddetail/{size}/{color}/{quantity}','VendorController@addDetail')->name('vendor.addDetail');

Route::get('/vendor/orders','VendorController@orders')->name('vendor.orders');
Route::get('/vendor/login', 'VendorController@vendorLogin')->name('vendor.login');
Route::post('/vendor/login', 'VendorController@login')->name('vendor.login');



Route::post('/product/delete', 'ProductController@delete');






Route::get('/cart', 'CartController@cart')->name('user.cart');
Route::get('/wishlist', 'WishlistController@wishlist')->name('user.wishlist');
Route::get('/faq', 'FAQController@faq')->name('faq');
Route::get('/contact', 'ContactUsController@contact')->name('contact');
Route::post('/contact', 'ContactUsController@storeContact');



//Employee
Route::get('/employee/login', 'EmployeeController@employeeLogin')->name('employee.login');
Route::post('/employee/login', 'EmployeeController@login');




Route::get('/product/details/{id}', 'ProductController@details')->name('product.details');





Route::post('/product/addToCart', 'ProductController@addToCart');
Route::get('/product/removeFromCart/{id}', 'ProductController@removeFromCart')->name('product.removeFromCart');;

Route::get('/showcart',function (){
    return Cache::get('cart');;
});


Route::post('/product/quantityByDetails', 'ProductController@quantityByDetails');


Route::get('/admin/product', 'AdminController@product')->name('admin.product');


Route::post('/admin/product', 'AdminController@product');
Route::get('/admin/login', 'AdminController@getLogin')->name('admin.login');
Route::post('/admin/login', 'AdminController@postLogin');
Route::get('/admin/registration', 'AdminController@getRegistration')->name('admin.registration');
Route::post('/admin/registration', 'AdminController@postRegistration');




Route::post('/admin/addOrRemoveFeaturedProduct', 'AdminController@addOrRemoveFeaturedProduct');

Route::get('/admin/searchByAnything', 'AdminController@searchByAnything');

Route::get('/admin/vendorList', 'VendorController@vendorList');

Route::post('/vendor/changeVendorstatus', 'VendorController@changeVendorstatus');

Route::get('/admin/vendorDetails/{id}', 'VendorController@vendorDetails')->name('vendor.details');

Route::post('/admin/setNumberInAPage', 'AdminController@setNumberInAPage');


Route::get('/vendor/product', 'ProductController@showAllProduct')->name('vendor.product');


Route::get('/vendor/employeeList/{type}', 'VendorController@employeeList')->name('vendor.emp-list');


Route::post('/vendor/changeEmployeeStatus', 'VendorController@changeEmployeeStatus');



Route::get('/vendor/productStatus', 'VendorController@productStatus')->name('product.status');
Route::get('/sales/productStatus', 'EmployeeController@productStatus')->name('sales.product.status');


Route::get('/details/deleteDetailsByDetailsId', 'ProductController@deleteDetailsByDetailsId');


Route::get('/addeEmployee', 'EmployeeController@employeeCreateByVendor')->name('vendor.addEmployee');
Route::post('/addeEmployee', 'EmployeeController@createEmployeeByVendor');




Route::get('/employee/employeeList/{type}', 'EmployeeController@employeeList')->name('hr.emp-list');





Route::get('/product/showProductByCategoryId/{id}', 'ProductController@showProductByCategoryId')->name('vendor.product.category');





Route::post('/product/changeProductAvability', 'ProductController@changeProductAvability');

Route::get('vendor/product/edit/{id}','ProductController@editProductByVendor')->name('vendor.product.edit');

Route::post('vendor/product/edit/{id}','ProductController@updateProductByVendor');

Route::get('/cart','CartController@cart')->name('cart');
Route::get('/confirmcheckout','CheckoutController@confirmCheckout')->name('confirmCheckout');


Route::get('/showcart',function (\Illuminate\Http\Request $request){

//    return Cart::destroy();
    return Cart::content();

});

Route::get('employee/product', 'EmployeeController@allProduct')->name('employee.all.product');

Route::get('sales/product/details/{id}','EmployeeController@productDetails')->name('sales.product.details');
Route::get('sales/product/edit/{id}','EmployeeController@editProduct')->name('sales.product.edit');
Route::post('sales/product/edit/{id}','EmployeeController@updateProduct');
Route::post('sales/product/delete','EmployeeController@deleteProduct');
Route::get('/category/search/{type}','ProductController@searchByCategory')->name('search.category');




Route::get('/admin/sliders','AdminController@sliders')->name('admin.sliders');

Route::get('/admin/addSlider','AdminController@getAddSlider')->name('admin.addSlider');

Route::post('/admin/addSlider','AdminController@postAddSlider');


Route::get('/admin/deleteSlider/{id}','AdminController@deleteSlider')->name('admin.deleteSlider');






Route::get('/show',function (\Illuminate\Http\Request $request){

    return $request->session()->get('employee.vendor_id');

});





//Route::get('/searchresults','ProductController@searchResult')->name('searchresults');


//Route::get('/api','ApiController@index')->name('api');
//
//Route::get('/api/getallproducts','ApiController@getAllProducts')->name('getAllProducts.api');
//
//Route::get('/api/getproduct/{id}','ApiController@getProduct')->name('getProduct.api');
