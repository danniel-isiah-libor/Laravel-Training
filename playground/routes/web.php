<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

// Route::get('/', function () {
//     // return "Hello World";
//     // return "<script>alert('Hello World')</script>";
// });

// Route::name('users.')->prefix('/users')->group(function(){
//     Route::get('/search', function(){
//         return 'User Search';
//     })->name('search');
//     Route::get('/store', function(){
//         return 'User store';
//     })->name('store');
// });

Route::get('/redirect', function(){
    // return redirect()->route('users.search');
});

// the short cut is Route::redirect(/'from', '/there' route('users.search'))

Route::fallback(function(){
    return "NOT FOUND!";
});


Route::prefix('/users')->group(function(){
    Route::get('/show/{id}', function($id = null){
        return "User ID: $id";
    });

});
