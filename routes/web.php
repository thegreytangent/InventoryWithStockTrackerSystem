<?php

use Illuminate\Support\Facades\Route;



Route::namespace('App\Http\Controllers')->group(function($route){

    Route::get('/', 'DashboardController@index');

    Route::get('/dashboard', 'DashboardController@index');

    Route::resource('/category', 'CategoryController');

    Route::resource('/item', 'ItemController');

    Route::resource('/inventory', 'InventoryController');

    Route::get('/logout','AuthController@logout');

    Route::get('/login','LoginController@index');

    Route::post('/login','AuthController@login');

    Route::get('/incoming','IncomingController@index');

    Route::delete('/incoming/{id}','IncomingController@destroy');

    Route::get('/outgoing','OutgoingController@index');

    Route::resource('/users','UserController');
//    Route::get('/users','UserController@index');

});

