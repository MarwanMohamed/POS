<?php

Route::group([
    'middleware' => ['admin']
], function () {

	Route::get('/', 'DashboardController@index')->name('dashboard');

	Route::resource('category', 'CategoriesController');

});



Route::get('/home', function () {
	return redirect()->route('dashboard');
});

Auth::routes();