<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\authenticateMiddleware;
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


    Route::post('/store', [UserController::class, 'store'])->name('store');
    // Route::get('/store', function () {
    //     return 'User Store';
    // })->name('store');


    Route::post('/login', [UserController::class, 'redirectlogin'])->name('redirectlogin');

    Route::post('/authlogin', [UserController::class, 'authlogin'])->name('authlogin');

    Route::get('/work', [UserController::class, 'work'])->name('work');

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

Route::get('/login', [UserController::class, 'login'], 'login')->name('login');
// Route::get('/register', function (Request $request) {
//     $parameters = $request->all();
//     dd($parameters);
// });

Route::get('/workhistory', [UserController::class, 'workhistory'], 'workhistory');

Route::prefix('/table')->group(function () {
    Route::get('{num}', [UserController::class, 'test'], 'test');
});

// Route::view('/dashboard', 'dashboard')->name('dashboard');

Route::get('/logout', [UserController::class, 'logout'], 'logout')->name('logout');

Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware(authenticateMiddleware::class);

Route::get('/profile', [UserController::class, 'profile'])
    ->name('profile');
    
Route::post('/profile', [UserController::class, 'update'])
    ->name('profile.update');
