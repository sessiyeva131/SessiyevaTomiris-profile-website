<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/Portfolio', 'index')->name('portfolio');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/post/add/{title}/{body}', function(){
    DB::table('post')->insert([
        'title' => '$title',
        'body' => '$body'
    ]);
});

Route::get('/post', function(){
    $mypost = Post::find(1);
    return "<h2>ID: $mypost->id <br>Title: $mypost->title <br>Body: $mypost->body </h2>";
});

Route::get('/blog/index', [BlogController::class, 'index']);

Route::get('/blog/create', function(){
    return view('post.create');
});

Route::post('/blog/create', [BlogController::class, 'store'])->name('add_post');