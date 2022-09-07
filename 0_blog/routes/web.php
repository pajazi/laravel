<?php

use Illuminate\Support\Facades\Route;

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
    return view('posts');
    // return ['foo' => 'bar']; // JSON
});


Route::get('posts/{post}', function ($slug) {
    if (!file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
        //dump die - dd
        //dump die debug - ddd
        // ddd('file does not exist');


        // abort(404);


        return redirect('/');
    }

    //Cache
    $post = cache()->remember("posts.{$slug}", now()->addHour(), fn() => file_get_contents($path));

    return view('post', ['post' => $post]);
})->where('post', '[A-z\-_]+'); //FOR $slug validation -> whereAlpha(), whereNumber()
