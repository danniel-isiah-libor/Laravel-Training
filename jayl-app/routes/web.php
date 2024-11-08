<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;


//Route::get('/', function () {
//   return view('welcome');
//});

//Route::get('/',function(){
//  return [1,2,3];
//});

Route::prefix('/users')->name('users.')->group(function () {
    Route::get('/search', [UserController::class, 'search'])->name('search');


    Route::get('/store', [UserController::class, 'store'])->name('store');
    // Route::get('/store', function () {
    //     return 'User Store';
    // })->name('store');

    Route::get('{id}', [UserController::class, 'show'])->name('users.show');
    // Route::get('{id}', function ($id = null) {
    //     return "user ID: $id";
    // });

  
    // Route::get('/', function () {
    //     return 'index user';
    // });
});

Route::get('/redirect', function () {
    return redirect()->route('users.search');
});

Route::redirect('/from', ('/to'));

// Route::fallback(function () {
//     return 'NOT FOUND';
// });

Route::get('/register', [UserController::class, 'register'], 'register');
// Route::get('/register', function (Request $request) {
//     $parameters = $request->all();
//     dd($parameters);
// });

Route::prefix('/table')->group(function () {
    Route::get('{num}', [UserController::class, 'test'], 'test' );
});