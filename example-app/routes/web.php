<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','welcome');

 
// Route::get('/', function () {
//     // return "<h1 style='color:red'>SAMPLE</h1>";
//     // return "<script>alert('hello')</script>";
//     // return false;
//     return (object)[1,2,3,];
// });


Route::name('users.')->prefix('users')->group(function(){

    Route::get('/search', function () {
         return 'User Search long method';
    })->name('search');

    Route::get('/store', function () {
        return 'User store mo';
   })->name('store');

   Route::get('/guest', function () {
    return 'guest form ';
})->name('guest');
   
});

//redirection
// Route::get('/redirect' , function (){
//     return redirect()->route('users.search');
// }); 

// // Route::redirect('/from', '/to');

Route::fallback(function(){
    return 'NOT FOUND';
});
// // Route::redirect('/from', route('users.search'));


// //Dynamic route
// Route::get('/users/{id}', function($id){
//     return "User ID is : $id";
// });

Route::prefix('/users')->group(function() {

    Route::get('{id?}', function($id = null) {
        return "User ID is : $id";
    }); 
});


