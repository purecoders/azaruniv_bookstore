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


Route::get('/admin-books', 'AdminController@books')->name('admin-books');
Route::post('/admin-book-insert', 'AdminController@bookInsert')->name('admin-book-insert');
Route::get('/admin-book/{id}', 'AdminController@book')->name('admin-book');
Route::post('/admin-book-edit', 'AdminController@bookEdit')->name('admin-book-edit');

Route::get('/admin-change-password-page', 'AdminController@changePasswordPage')->name('admin-change-password-page');
Route::post('/admin-change-password', 'AdminController@changePassword')->name('admin-change-password');






//user routes
Route::get('/user-cart', 'UserController@cart')->name('user-cart');
Route::get('/user-cart-add/{book_id}', 'UserController@cartAdd')->name('user-cart-add');
Route::post('/user-cart-remove', 'UserController@cartRemove')->name('user-cart-remove');
Route::get('/user-cart-minus/{content_id}', 'UserController@cartMinus')->name('user-cart-minus');
Route::get('/user-cart-plus/{content_id}', 'UserController@cartPlus')->name('user-cart-plus');
Route::get('/user-orders', 'UserController@orders')->name('user-orders');

Route::post('/user-cart-pay', 'UserController@cartPay')->name('user-cart-pay');
Route::post('/user-cart-pay-verify', 'UserController@cartPayVerify')->name('user-cart-pay-verify');



//Route::get('/user-dashboard', function () {
//  return view('user.dashboard');
//})->name('user-dashboard');


//Route::get('/user-profile', function () {
//  return view('user.profile');
//})->name('user-profile');















