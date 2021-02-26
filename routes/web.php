<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/Portfolio', 'index')->name('portfolio');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/post/create', function(){
    DB::table('post')->insert([
        'title' => 'myDb',
        'body' => 'Successfully connected!'
    ]);
});

Route::get('/post', function(){
    $mypost = Post::find(1);
    return "<h2>ID: $mypost->id <br>Title: $mypost->title <br>Body: $mypost->body </h2>";
});
