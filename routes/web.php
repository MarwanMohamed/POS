<?php

Route::group([
	'prefix' => 'admin',
    // 'middleware' => ['admin']
], function () {

	// Route::get('/', 'DashboardController@index')->name('dashboard');

	Route::resource('category', 'CategoriesController');
	Route::resource('item', 'ItemController');
	Route::resource('customer', 'CustomerController');
	Route::post('customer/store', 'CustomerController@frontStore')->name('customer.frontStore');
	Route::resource('user', 'UserController');
	Route::resource('engineer', 'EngineerController');
	Route::resource('bill', 'BillController');
	Route::resource('expense', 'ExpenseController');


});
	Route::get('/getitems', 'ItemController@getItems')->name('get.items');

Route::get('/', 'DashboardController@index')->name('dashboard');

// Route::get('/', function () {
// 	return redirect()->route('dashboard');
// });

Route::get('/home', function () {
	return redirect()->route('dashboard');
});

Auth::routes();