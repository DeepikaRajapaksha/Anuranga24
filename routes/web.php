<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');});

// Home page routes
Route::view('/privacy-policy', 'user.privacy-policy');
Route::view('/about', 'user.about');
Route::view('/projects', 'user.projects');
Route::view('/booking', 'user.booking');
Route::view('/contact', 'user.contact');

