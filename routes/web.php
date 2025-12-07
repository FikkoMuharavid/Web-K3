<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Auth
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;


Route::get('/', [HomeController::class, 'index']);


// ---------- PUBLIC ROUTES ----------
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class,'showLoginForm'])->name('login');; 
    Route::post('login', [AuthController::class,'login'])->middleware('throttle:5,1');
    
    Route::get('register', [AuthController::class,'showRegisterForm'])->name('register');;
    Route::post('register', [AuthController::class,'register']);

    Route::get('/forgot-password', [PasswordResetController::class, 'requestForm'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'sendEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [PasswordResetController::class, 'resetForm'])->name('password.reset');
    // Route::post('/reset-password', [PasswordResetController::class, 'updatePassword'])->name('password.update');
    // Route::post('reset-password', [PasswordResetController::class, 'reset'])->name('password.update');
    Route::post('reset-password', [PasswordResetController::class, 'updatePassword'])
    ->name('password.update');

    Route::view('/kontak', 'kontak');
    Route::view('/daftar_pelayanan', 'daftar_pelayanan');
    Route::view('/visi_misi', 'visi_misi');
    Route::view('/alur_pelayanan', 'alur_pelayanan');
    Route::view('/struktur', 'struktur');
    Route::view('/sarana_prasarana', 'sarana_prasarana');
    Route::view('/keranjang', 'keranjang');
    Route::view('/notifikasi', 'notifikasi');
});

// ---------- PROTECTED ROUTES ----------
Route::middleware('auth')->group(function () {
    // Route::get('home', [HomeController::class,'index']); 

    // Logout
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});



// Route::middleware('auth')->group(function () {
//     Route::get('/home', [HomeController::class, 'index']);
//     Route::get('/profile', [ProfileController::class, 'index']);
//     // route lain yang hanya untuk user login
// });



