<?php

use Illuminate\Support\Facades\Route;



Route::namespace('App\Http\Controllers')->group(function($route){

    Route::get('/', 'DashboardController@index');


});

