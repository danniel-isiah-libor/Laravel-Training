<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::name('users.')->prefix('/users')->group(function () {
    Route::get('/search', [UserController::class, 'search'])->name('search');
    Route::get('/store', [UserController::class, 'store'])->name('store');
});

Route::prefix('/users')->group(function () {
    Route::get('/show/{id?}', [UserController::class, 'show'])->name('show');
});

Route::get('/register', [UserController::class, 'register'])->name('users.register');