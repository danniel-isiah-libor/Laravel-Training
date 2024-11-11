<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/posts', PostController::class)->except(['index']);
    Route::resource('/comments', CommentController::class)->except(['create']);
    Route::get('/posts/{post_id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
    
    Route::get('/posts/your-posts', [PostController::class, 'yourPosts'])->name('posts.index');
    Route::get('/posts/all-posts', [PostController::class, 'displayAllPosts'])->name('posts.display');

});

require __DIR__.'/auth.php';
