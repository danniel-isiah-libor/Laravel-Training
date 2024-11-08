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
    Route::get('/store',[UserController::class,'store'])->name('store');
    Route::get('/show/{id?}',[UserController::class,'show'])->name('show');
    Route::get('/register',[UserController::class,'register'])->name('register');
});
Route::name('table.')->prefix('/table')->group(function (){
    Route::get('/show/{num?}',[TableController::class,'show'])->name('show');
    
});

// Route::get('/register',function(Request $request){
//     dd($request);
// });
