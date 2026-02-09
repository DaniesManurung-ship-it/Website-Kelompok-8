<?php

use Illuminate\Support\Facades\Route;

Route::get('home', function () {
    return view('home');
});
     
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('admin/login', function () {
    return view('admin.login');
})->name('admin.login');
