<?php

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

// Route::name('users.')->prefix('/users')->group(function () {
//     Route::get('/search', function () {
//         return 'User Search';
//     })->name('search');

//     Route::get('/store', function () {
//         return 'User Store';
//     })->name('store');
// });

Route::get('/redirect', function () {
    return redirect()->route('users.search');
});

Route::redirect('/from', '/to');

Route::fallback(function () {
    return "NOT FOUND";
});

Route::prefix('/users')->group(function () {
    Route::get('{id?}', function ($id = null) {
        return "User ID: $id";
    });
});
