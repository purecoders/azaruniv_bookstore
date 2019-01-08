<?php


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//site routes
Route::get('/', 'SiteController@index')->name('site-home');
Route::get('/detail/{id}', 'SiteController@bookDetail')->name('detail');




//admin routes
Route::get('/admin-orders','AdminController@orders')->name('admin-orders');
Route::post('/admin-send-order', 'AdminController@sendOrder')->name('admin-send-order');
Route::get('/admin-site', 'AdminController@site')->name('admin-site');
Route::post('/admin-slider-remove', 'AdminController@sliderRemove')->name('admin-slider-remove');
Route::post('/admin-slider-insert', 'AdminController@insertSlider')->name('admin-slider-insert');


Route::get('/admin-books', function () {
  return view('admin.books');
})->name('admin-books');

Route::get('/admin-book', function () {
  return view('admin.book');
})->name('admin-book');






//user routes



//Route::get('/user-dashboard', function () {
//  return view('user.dashboard');
//})->name('user-dashboard');


Route::get('/user-profile', function () {
  return view('user.profile');
})->name('user-profile');


Route::get('/user-orders', function () {
  return view('user.orders');
})->name('user-orders');


Route::get('/user-cart', function () {
  return view('user.cart');
})->name('user-cart');












