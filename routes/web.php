<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
Route::view('/login', 'login');

Route::view('/', 'home');
Route::view('/kontak', 'kontak');
Route::view('/daftar_pelayanan', 'daftar_pelayanan');
Route::view('/register', 'register');
Route::view('/forget', 'forget');
