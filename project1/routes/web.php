<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TableController;


Route::get('/', function () {
    return view('welcome');
});


Route::name('users.')->prefix('/users')->group(function (){
    Route::get('/search',[UserController::class,'search'])->name('search');
    Route::post('/login',[UserController::class,'login'])->name('login');
    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::post('/store',[UserController::class,'store'])->name('store');
    Route::post('/work',[UserController::class,'work'])->name('SaveWork');
    Route::get('/show/{id?}',[UserController::class,'show'])->name('show');
    Route::get('/register',[UserController::class,'register'])->name('register');
});

Route::get('/login', function(){
    return view('login');
})->name('formLogin');

Route::get('/work', function(){
    return view('work');
})->name('formWork');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::name('table.')->prefix('/table')->group(function (){
    Route::get('/show/{num?}',[TableController::class,'show'])->name('show');
});

// Route::get('/register',function(Request $request){
//     dd($request);
// });
