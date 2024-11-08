<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PyramidController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// require __DIR__ . 'route name.php';
Route::view('/', 'welcome');

// Route::get('/', function () {
//     // return "Hello World";
//     // return "<script>alert('Hello World')</script>";
// });

Route::name('users.')->prefix('/users')->group(function(){
    Route::get('/search', [UserController::class, 'search'])->name('search');
    Route::get('/store', [UserController::class, 'store'])->name('store');
    Route::get('/show/{id?}', [UserController::class, 'show'])->name('show');
    Route::get('register', [UserController::class, 'register'])->name('register');
});

Route::get('/table/{number}', [UserController::class, 'showNum'])->name('number');
Route::get('/redirect', function(){
    // return redirect()->route('users.search');
});

// the short cut is Route::redirect(/'from', '/there' route('users.search'))

Route::fallback(function(){
    return "NOT FOUND!";
});


// Route::prefix('/users')->group(function(){
//     Route::get('/show/{id}', function($id = null){
//        
//     });

// });

// Route::get('register', function(Request $request){
//     // $name = $request->query();

//     // $parameters = $request->age;
//     $parameters = $request->integer('age');

//     dd($parameters);
// });



