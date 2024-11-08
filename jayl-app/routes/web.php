<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//   return view('welcome');
//});

//Route::get('/',function(){
//  return [1,2,3];
//});

Route::prefix('/users')->name('users.')->group(function () {
    Route::get('/search', function () {
        // Matches The "/admin/users" URL
        return 'user search';
    })->name('search');

    Route::get('/store', function () {
        return 'User Store';
    })->name('store');

    Route::get('{id}', function ($id = null) {
        return "user ID: $id";
    });

    Route::get('/',function(){
        return 'index user';
    });
});

Route::get('/redirect', function () {
    return redirect()->route('users.search');
});

Route::redirect('/from', ('/to'));

// Route::fallback(function () {
//     return 'NOT FOUND';
// });

Route::get('/register', function(Request $request){
    dd($request);
});