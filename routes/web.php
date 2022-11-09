<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
]);

Route::get('/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard',
    'widdleware' => 'auth'
]);

/* 
Route::post('/sign_in',function() {

    return view('sign_in');
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
*/