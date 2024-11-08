<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/sample', function () {
//     return "<h1 style='color: blue'>bawitdaba</h1>";
//     // return false;
// });

//using prefix para di na humaba ang URL
Route::prefix('/users')->name('users.')->group( function () {
    Route::get('/doctors', function () {
        return "return doctors";
    })->name('doctors');

    Route::view('/', 'Welcome');

    Route::get('/encoders', function () {
        return "return encoders";
    })->name('encoders');
});

Route::get('/redirect', function () {
    return redirect()->route('users.encoders');
});

Route::redirect('/users', '/ako', 301);

Route::fallback(function(){
    return "<h1>Lakas mo!!</h1>";
});

Route::get('/users/{id}', function ($id) {
    return "User ID: $id";
});

Route::prefix('/users')->name('users.')->group( function () {
    Route::get('{id?}', function ($id) {
        return "User ID: $id";
    });
});