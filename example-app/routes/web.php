<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Route;

 
Route::view('/', 'welcome');
 
Route::get('/redirect', function () {
    return redirect()->route('users.search');
});

Route::redirect('/from', '/to');

Route::fallback(function () {
    return "NOT FOUND";
});

Route::name('users.')->prefix('/users')->group(function () {
    Route::get('/search', [UserController::class, 'search'])->name('search');

    Route::get('/store', [UserController::class, 'store'])->name('store');
});

Route::prefix('/users')->group(function () {
    Route::get('{id?}', [UserController::class, 'show'])->name('users.show');
});

Route::get('/register', [UserController::class, 'register'])->name('users.register');


// Route::get('/user/{id}', function (string $id) {
//     return 'User '.$id;
//    });
   


















// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/','welcome');

 
// Route::get('/', function () {
//     // return "<h1 style='color:red'>SAMPLE</h1>";
//     // return "<script>alert('hello')</script>";
//     // return false;
//     return (object)[1,2,3,];
// });


// Route::name('users.')->prefix('users')->group(function(){

//     Route::get('/search', [UserController::class, 'search'])->name('search'); 
//     Route::get('/store', [UserController::class, 'store'])->name('store');
//     Route::get('/guest', [UserController::class, 'guest'])->name('guest');
//     Route::get('/register', [UserController::class, 'register'])->name('register');
   
// });

 

//redirection
// Route::get('/redirect' , function (){
//     return redirect()->route('users.search');
// }); 

// // Route::redirect('/from', '/to');

// Route::fallback(function(){
//     return 'NOT FOUND';
// });
// // Route::redirect('/from', route('users.search'));


// //Dynamic route
// Route::get('/users/{id}', function($id){
//     return "User ID is : $id";
// });

// Route::prefix('/users')->group(function() {

//     Route::get('{id?}', function($id = null) {
//         return "User ID is : $id";
//     }); 
// });

 

 