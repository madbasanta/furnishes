<?php

Route::get('products', 'ProductShowController@productsContainer');

Route::get('products/add', 'ProductShowController@showAddForm');

Route::get('products/getAllProducts', 'ProductShowController@getAllProducts');

Route::post('products/store', 'ProductStoreController@storeProduct');

Route::get('products/edit/{product}/getEditModal', 'ProductShowController@getEditModal');

Route::post('products/{product}/update', 'ProductStoreController@updateProduct');

Route::get('products/{product}/deleteAlert', 'ProductShowController@deleteAlert');

Route::post('products/{product}/delete', 'ProductStoreController@deleteProduct');


/*----------------------
*	product categories
----------------------*/
Route::get('products/getCategories', 'ProductShowController@getCategories');