<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthenticateMiddleware;
use Faker\Guesser\Name;
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
    Route::post('/store', [UserController::class, 'store'])->name('store');
});

Route::prefix('/users')->group(function () {
    Route::get('{id?}', [UserController::class, 'show'])->name('users.show');
});

Route::get('/register', [UserController::class, 'register'])->name('users.register');

// start
Route::get('/login', [UserController::class, 'redirectLogin'])->name('users.redirect-login');

Route::post('/login', [UserController::class, 'login'])->name('users.login');
// end


//start
Route::get('/workExperience', [UserController::class, 'redirectWorkExperience'])
->middleware(AuthenticateMiddleware::class)
->name('users.redirect-redirectWorkExperience');

Route::post('/workExperience', [UserController::class, 'workExperience'])
->name('users.workExp');
//end


//start
Route::get('/information', [UserController::class, 'redirectInformation'])
->name('users.redirect-information');

Route::post('/information', [UserController::class, 'information'])
->name('users.info');
//end

//start
Route::view('/dashboard', 'dashboard')
->name('dashboard')
->middleware(AuthenticateMiddleware::class);
Route::get('/logout', [UserController::class, 'logout'])
->name('logout');

//end










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

 

 