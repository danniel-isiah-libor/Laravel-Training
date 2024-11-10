<?php

use App\Http\Controllers\MultiplyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;
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
    Route::get('{id?}', [UserController::class, 'show'])->name('users.show');
});

Route::get('/register', [UserController::class, 'register'])
    ->name('users.register');

Route::get('/login', [UserController::class, 'redirectLogin'])
    ->name('users.redirect-login');

Route::post('/login', [UserController::class, 'login'])
    ->name('users.login');

Route::get('/table/{number}', [MultiplyController::class, 'index'])->name('multiplication.table');

Route::prefix('/work-experiences')->name('work-experiences.')->group(function () {
    Route::get('/create', [WorkExperienceController::class, 'create'])
        ->name('create');

    Route::post('/store', [WorkExperienceController::class, 'store'])
        ->name('store');
});

Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::get('/logout', [UserController::class, 'logout'])
    ->name('logout');
