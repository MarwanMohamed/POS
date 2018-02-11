<?php

Route::group([
	'prefix' => 'admin',
    'middleware' => ['admin']
], function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');

	Route::resource('category', 'CategoriesController');
	Route::resource('item', 'ItemController');
	Route::resource('customer', 'CustomerController');

});

Route::get('/home', function () {
	return redirect()->route('dashboard');
});

Auth::routes();