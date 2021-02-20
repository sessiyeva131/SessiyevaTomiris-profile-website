<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/Portfolio', 'index')->name('portfolio');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
