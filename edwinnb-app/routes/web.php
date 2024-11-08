<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

// Route::get('/', function () {
//     //return "<h1 style='color:blue'>Hello World</h1>";
//     // return "<script> alert('Hello World')</script>";
// });

// Route::prefix('/users')->name('users.')->group(function() {
//     Route::get('/search', function () {
//         return "User Search";
//     })->name('search');

//     Route::get('/store', function () {
//         return "User Store";
//     })->name('store');
// });

Route::get('/redirect', function() {
    return redirect()->route('users.search');
});

Route::redirect('/from','/to');

Route::fallback(function() {
    return "NOT FOUND";
});

Route::prefix('/users')->group(function() {
    Route::get('{id?}', function ($id=null) {
        return "User ID: $id";
    });
});

