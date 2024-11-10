<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\authenticateMiddleware;
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

    Route::post('/store', [UserController::class, 'store'], 'store')->name('store');

    Route::post('/authlogin', [UserController::class, 'authlogin'], 'authlogin')->name('authlogin');

    Route::get('/history', [UserController::class, 'history'], 'history')->name('history');
});



Route::prefix('/users')->group(function() {
    Route::get('{id?}', [UserController::class, 'show'], 'show')->name('show');
});

Route::get('/register', [UserController::class, 'register'], 'register')->name('register');

Route::get('/login', [UserController::class, 'login'], 'login')->name('login');

Route::get('/logout', [UserController::class, 'logout'], 'logout')->name('logout');

Route::get('/workhistory', [UserController::class, 'workhistory'], 'workhistory');

Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware(authenticateMiddleware::class);

Route::prefix('/table')->group(function() {
    Route::get('{num?}', [UserController::class, 'test'], 'test');
});


Route::get('/redirect', [UserController::class, 'redirect'], 'redirect');

Route::redirect('/from','/to');

Route::fallback(function() {
    return "NOT FOUND";
});


