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
    return view('site.welcome');
})->name('site-home');

Route::get('/detail', function () {
    return view('site.detail');
})->name('detail');

Route::get('/cart', function () {
  return view('site.cart');
})->name('cart');

Route::get('/user-dashboard', function () {
  return view('user.dashboard');
})->name('user-dashboard');


Route::get('/user-profile', function () {
  return view('user.profile');
})->name('user-profile');


Route::get('/user-orders', function () {
  return view('user.orders');
})->name('user-orders');


Route::get('/user-cart', function () {
  return view('user.cart');
})->name('user-cart');

Route::get('/admin-orders', function () {
  return view('admin.orders');
})->name('admin-orders');

Route::get('/admin-books', function () {
  return view('admin.books');
})->name('admin-books');

Route::get('/admin-book', function () {
  return view('admin.book');
})->name('admin-book');

Route::get('/admin-site', function () {
  return view('admin.site');
})->name('admin-site');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
