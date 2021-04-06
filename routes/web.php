<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Users;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/Portfolio', 'index')->name('portfolio');
Route::get('/profile/{lang}', function($lang){
    App::setlocale($lang);
    return view('index');
})->name('profile');

Route::get('/profile', function(){
    return view('index');
})->name('portfolio');

Route::get('/about/{lang}', function($lang){
    App::setlocale($lang);
    return view('about');
})->name('aboutt');

Route::get('/contactt/{lang}', function($lang){
    App::setlocale($lang);
    return view('contact');
})->name('contactt');
// Route::get('locale/{locale}', 'LangController@change')->name('locale');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/post/add', function(){
    DB::table('post')->insert([
        'title' => 'myPost',
        'body' => 'new post created'
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
Route::get('/post/{id}', [BlogController::class, 'get_info']);
