<?php

Route::group([
	'prefix' => 'admin',
    // 'middleware' => ['admin']
], function () {

	// Route::get('/', 'DashboardController@index')->name('dashboard');

	Route::resource('category', 'CategoriesController');
	Route::resource('item', 'ItemController');
	Route::resource('customer', 'CustomerController');
	Route::resource('seller', 'SellerController');
	Route::post('customer/store', 'CustomerController@frontStore')->name('customer.frontStore');
	Route::resource('user', 'UserController');
	Route::resource('engineer', 'EngineerController');
	Route::resource('bill', 'BillController');
	Route::resource('expense', 'ExpenseController');
	
	Route::get('/order/days/{day}', 'OrderController@showDay')->name('day.show');
	Route::get('/order/endDay', 'OrderController@endDay')->name('endDay');
	Route::get('/order/days', 'OrderController@days')->name('days');
	Route::post('order/store', 'OrderController@frontStoreOrder')->name('saveOrder.front');
	Route::delete('order/{order}/{id}', 'OrderController@deleteItem')->name('order.deleteItem');
	Route::post('/order/{order}', 'OrderController@EditPaid')->name('order.editPaid');
	Route::resource('order', 'OrderController');
	Route::resource('report', 'ReportController');


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