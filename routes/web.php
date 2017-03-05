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

Route::get('home', 'Home\IndexController@index');
Route::get('home/faqs', 'Home\IndexController@faqs');
Route::get('home/contact', 'Home\IndexController@contact');
Route::any('home/checkout', 'Home\IndexController@checkout');
Route::get('home/about', 'Home\IndexController@about');
Route::get('home/products', 'Home\IndexController@products');
Route::get('home/productdetail', 'Home\IndexController@productdetail');
Route::get('home/shoppingcart', 'Home\ShopController@shoppingcart');






Route::get('admin/index', 'Admin\IndexController@index');



