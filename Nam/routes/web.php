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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductController');
Auth::routes();

Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/cart/add/{id}', 'CartController@add')->name('cart.item.add');
Route::get('/cart/remove/{id}', 'CartController@remove')->name('cart.item.remove');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/users', 'AdminController@users')->name('admin.users');
Route::get('/admin/users/remove/{id}', 'AdminController@remove_user')->name('admin.users.remove');