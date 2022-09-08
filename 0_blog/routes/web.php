<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Every route that we use in the application
// Giving the name of the view

Route::get('/', function () {
    // \Illuminate\Support\Facades\DB::listen(function ($query) {
    //     logger($query->sql);
    // });

    return view('posts', ['posts' => Post::with('category', 'user')->get()]); // N+1 problem solved!! 
});


Route::get('posts/{post}', function (Post $post) { // Post::where('slug', $post)->firstOrFail();
    return view('post', ['post' => $post]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});
