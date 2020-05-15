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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');


/////////////////////////////////////////////////////////////////////
///////////////////////////BACK END//////////////////////////////////
/////////////////////////////////////////////////////////////////////


//////////////// dashboard page ////////////////
 
// layout page show
Route::get("/dashboard", "AdminController@dashboard");

//////////////// sections page ////////////////

// getSection page show
Route::get("/admin/get-sections", 'SectionController@getAllSections');

// addSection page show
Route::get("/admin/add-sections", 'SectionController@addSection');	

// addSection page show, when click on the save button and POST because there is data sending
Route::post("/admin/add-sections/create", 'SectionController@saveSection');

// editSection page show, when click on the button in the sections page
Route::get("admin/section/edit/{id}", "SectionController@editSection");

// editSection page show, when click on the edit button and POST because there is data sending
Route::post("/admin/section/update/{id}", 'SectionController@updateSection');

// deleteSection , when click on the delete button and POST because there is data sending
Route::post("/admin/section/delete/{id}", 'SectionController@deleteSection');

// delete section has laptops in it , when click on the delete button in the daleteAll page 
Route::get("/admin/section/deleteAll/{id}", 'SectionController@deleteAll');

//////////////// laptops page ////////////////

// getlaptops page to show all laptops in the database 
Route::get("/admin/get-laptops", 'LaptopController@getAllLaptops');

// to show create laptop page 
Route::get("/admin/laptops/create", 'LaptopController@create');

// to save new laptop
Route::post("/admin/laptops/save", 'LaptopController@save');

// to edit exist laptop, to show the information
Route::get('/admin/laptops/edit/{id}', 'LaptopController@edit');

// to update exist laptop and save in the database
Route::post('/admin/laptops/update/{id}', 'LaptopController@update');

// to delete exist laptop 
Route::post('/admin/laptops/delete/{id}', 'LaptopController@delete');

//////////////// orders page ////////////////

// getOrders page to show all orders in the database 
Route::get("/admin/get-orders", 'OrderController@getAllOrders');

// change laptop state / pindding
Route::get("/admin/order/pending/{id}", 'OrderController@pindding');

// change laptop state / accept
Route::get("/admin/order/accept/{id}", 'OrderController@accept');

// change laptop state / reject
Route::get("/admin/order/reject/{id}", 'OrderController@reject');


/////////////////////////////////////////////////////////////////////
///////////////////////////FRONT END/////////////////////////////////
/////////////////////////////////////////////////////////////////////

// to show order page by clicking on add to cart button
//Route::get("/order/{id}", "HomeController@order");

// to save laptop order 
Route::post("/new-order", "HomeController@addOrder");

// to show all laptops as the same section
Route::get("/section/getLaptop/{id}", "SectionController@getAllLaptops");

// to show AllLaptops page 
Route::get("/laptops", "HomeController@laptop");

// to show contact page 
Route::get("/contact", "HomeController@contact");

// to show about page 
Route::get("/about", "HomeController@about");

// to  save/execute order ajax code
Route::post("order", "HomeController@saveOrderAjax");

// to execute payment method
Route::post('/make-payment', 'PaymentsController@pay');

// facebook login
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

// send Email
//Route::get('send-main', 'OrderController@accept');

