<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// se puede pasar cualquier tipo de dato php
Route::view('/', 'welcome')->name('welcome');
Route::view('/contact', 'contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::view('/about', 'about')->name('about');
