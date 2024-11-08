<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');


// Route::get('/', function () {
// //  return "<script>alert('hello')</script>";
// //  return "<h1 style='color:red'>Hello World</h1>";
//     return (object) [1, 2, 3];
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

// Route::get('/users/{id}', function ($id) {
//     return "User ID: $id";
// });

Route::prefix('/users')->group(function () {
    Route::get('{id?}', function ($id = null) {
        return "User ID: $id";
    });
});

// Route::get('/register', function (Request $request) {
//     dd($request->query('name', 'James'));
// });

Route::get('/register', function (Request $request) {
    $parameters = $request->boolean('is_active', false);

    $request->merge(['user_id' => 1]);

    dd($request->all());
});