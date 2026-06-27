<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/products', 'post')->name('products');
Route::view('/products/details', 'single-post')->name('single-post');
Route::view('/clients', 'elements')->name('clients');
Route::view('/contact', 'contact')->name('contact');
Route::view('/login', 'cms-login')->name('login');
