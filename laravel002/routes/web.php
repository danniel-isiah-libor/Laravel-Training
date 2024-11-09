<?php

use App\Http\Controllers\MultiplyController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome');

// Route::get('/', function () {
//     // return "<script> alert('hello world'); </script>";
//     // return "<h1 style='color: red'>Hello World</h1>";
//     return (object)[1, 2, 3];
// });

Route::get('/redirect', function () {
    return redirect()->route('users.search');
});

Route::redirect('/from', '/to');

Route::fallback(function () {
    return "NOT FOUND";
});

Route::name('users.')->prefix('/users')->group(function () {
    Route::get('/search', [UserController::class, 'search'])->name('search');

    Route::post('/store', [UserController::class, 'store'])->name('store');
});

Route::prefix('/users')->group(function () {
    Route::get('/show/{id?}', [UserController::class, 'show'])->name('users.show');
});

Route::get('/register', [UserController::class, 'register'])->name('users.register');
Route::get('/login', [UserController::class, 'loginRedirect'])->name('users.login-redirect');
Route::post('/login', [UserController::class, 'login'])->name('users.login');

Route::get('/employment', [UserController::class, 'employmentRedirect'])->name('employment');
Route::post('/employment', [UserController::class, 'employment'])->name('employment.redirect');

Route::get('/table/{number}', [MultiplyController::class, 'index'])->name('multiplication.table');