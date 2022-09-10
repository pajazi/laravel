<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::post('newsletter', NewsletterController::class);

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Migrate to admin controller
Route::get('admin/posts/create', [PostController::class, 'create'])->middleware('can:admin'); //exact same this as admin middleware!
Route::post('admin/posts', [PostController::class, 'store'])->middleware('can:admin'); //exact same this as admin middleware!

Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('can:admin'); //exact same this as admin middleware!

// Example of middleware grouping
Route::middleware('can:admin')->group(function () {
    Route::get('admin/posts/{post:id}/edit', [AdminPostController::class, 'edit'])->middleware('can:admin'); //exact same this as admin middleware!
    Route::patch('admin/posts/{post}', [AdminPostController:: class, 'update'])->middleware('can:admin'); //exact same this as admin middleware!
});

//Example of a route resource:
//Route::resource('admin/posts', AdminPostController::class)->except('show');
