<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

//Route::get('/', function () {
//    return view('welcome');
//});

// Route::get('/', function () {
//     //return "<h1 style='color:blue'>Hello World</h1>";
//     // return "<script> alert('Hello World')</script>";
// });

Route::prefix('/users')->name('users.')->group(function() {
    Route::get('/search', [UserController::class, 'search'], 'search')->name('search');

    Route::get('/store', [UserController::class, 'store'], 'store')->name('store');
});

Route::get('/redirect', [UserController::class, 'redirect'], 'redirect');

Route::redirect('/from','/to');

Route::fallback(function() {
    return "NOT FOUND";
});

Route::prefix('/users')->group(function() {
    Route::get('{id?}', [UserController::class, 'show'], 'show')->name('show');
});

Route::get('/register', [UserController::class, 'register'], 'register');

Route::prefix('/table')->group(function() {
    Route::get('{num?}', [UserController::class, 'test'], 'test');
});
