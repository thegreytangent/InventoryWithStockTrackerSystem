<?php

use Illuminate\Support\Facades\Route;



Route::namespace('App\Http\Controllers')->group(function($route){

    Route::get('/', 'DashboardController@index');

    Route::get('/logout','AuthController@logout');

    Route::get('/login','LoginController@index');

    Route::post('/login','AuthController@login');

});

