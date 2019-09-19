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
    return view('farmconnect/index');
});
 
Route::get('about', function () {
    return view('farmconnect/about');
});

Route::get('contact', function () {
    return view('farmconnect/contact');
});
Route::get('checkout', function () {
    return view('farmconnect/checkout');
});

Route::get('blog', function () {
    return view('farmconnect/blog');
});

Route::get('cart', function () {
    return view('farmconnect/cart');
});
Route::get('shop', function () {
    return view('farmconnect/shop');
});

Route::get('blog-single', function () {
    return view('farmconnect/blog-single');
});
Route::get('wishlist', function () {
    return view('farmconnect/wishlist');
});

Route::get('product-single', function () {
    return view('farmconnect/product-single');
});
Route::get('/login', function () {
    return view('/login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('farmconnect/index');

Auth::routes();

Route::get('/home', 'HomeController@contact')->name('farmconnect/contact');

Auth::routes();

Route::get('/home', 'HomeController@about')->name('farmconnect/about');

Route::get('/dashboard', 'DashboardController@index');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

Route::resource('system-management/category', 'CategoryController');
Route::post('system-management/category/search', 'CategoryController@search')->name('category.search');
