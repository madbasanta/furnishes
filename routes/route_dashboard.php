<?php

Route::group(['middleware' => ['auth', 'admin']], function(){

	Route::get('/dashboard', 'DashboardController@loadDashboard');

	Route::get('dash', 'DashboardController@dashboard');

	Route::get('products', 'ProductShowController@productsContainer');

});