<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth:sanctum'], function(){

    
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
