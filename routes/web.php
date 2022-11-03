<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get("/",function() {
    return view('home');
});

Route::get("/contact",function() {
    return view('contact');
});

Route::get('/about',function() {
    return view('about');
});

Route::get('/blog',function() {
    return view('blog');
});

Route::get('/services',function() {
    return view('services');
});

Route::get('/login',function() {
    return view('login');
});