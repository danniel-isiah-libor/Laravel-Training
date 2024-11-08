<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/users')->group(function(){
    Route::get('{id?}',function($id=null){
        return "User ID: $id";
    });
});

