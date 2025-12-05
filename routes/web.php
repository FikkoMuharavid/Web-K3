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
Route::view('/visi_misi', 'visi_misi');
Route::view('/alur_pelayanan', 'alur_pelayanan');
Route::view('/struktur', 'struktur');
Route::view('/sarana_prasarana', 'sarana_prasarana');
Route::view('/keranjang', 'keranjang');