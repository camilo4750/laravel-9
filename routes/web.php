<?php

use Illuminate\Support\Facades\Route;

// se puede pasar cualquier tipo de dato php
Route::view('/', 'welcome')->name('welcome');
Route::view('/contact', 'contact')->name('contact');
Route::view('/blog', 'blog')->name('blog');
Route::view('/about', 'about')->name('about');
