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

//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/admin', 'admincontroller@index');
Route::get('/form', 'admincontroller@book_index');
Route::get('/admin_comment', 'admincontroller@comment_show');
Route::post('/bookupload', 'admincontroller@book_store');
Route::get('/bookdetails', 'admincontroller@book_show');
Route::get('/searchbook', 'admincontroller@book');

//HomepageController
Route::get('/', 'Homepagecontroller@welcome')->name('/.welcome');;
Route::get('/', 'Homepagecontroller@book');
Route::get('/comment_page', 'Homepagecontroller@comment_index');
Route::post('/comment', 'Homepagecontroller@comment');
Route::get('/view/{id}', 'Homepagecontroller@view');


//Admincontroller
//  Admincontroller BOOKS
Route::get('/edit/{id}', 'admincontroller@edit');
Route::post('/update_book/{id}', 'admincontroller@update');
Route::Delete('/destroy/{id}', 'admincontroller@destroy');
Route::get('admin', 'admincontroller@order_details');
Route::get('order_edit/{id}', 'admincontroller@order_edit');
Route::post('order_update/{id}', 'admincontroller@order_update');
Route::get('order_view/{id}', 'admincontroller@order_view');


//ADD TO CART
route::get('cart', 'AddTocartcontroller@cart')->name('cart');
Route::get('add-to-cart/{id}', 'AddTocartcontroller@addToCart');
Route::patch('update-cart', 'AddTocartcontroller@update');
Route::delete('remove-cart', 'AddTocartcontroller@remove');

//USER DETALIS Usercontroller
Route::resource('/userdetails', 'Userdetailscontroller');
Route::post('update/{id}', 'Userdetailscontroller@update');


//CHECKOUT  Checkoutcontroller
Route::get('checkout', 'Checkoutcontoller@index');
Route::post('Oder_complete', 'Checkoutcontoller@Oder_complete');


Route::get('mail', 'admincontroller@mail_page');
Route::get('send_book/{id}', 'admincontroller@send_book');
Route::Delete('delete_comment/{id}', 'admincontroller@comment_replay');
Route::post('sendemail', 'admincontroller@send_book_email');




//Route::get('send','admincontroller@send');


Route::get('order_history','Homepagecontroller@order_history');

