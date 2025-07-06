<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');});
Route::view('/privacy-policy', 'user.privacy-policy');
