<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Products
Route::apiResource('/products', 'ProductController');

//Resources
Route::group(['prefix' => 'products'], function() {
	Route::apiResource('/{product}/reviews', 'ReviewController');
});