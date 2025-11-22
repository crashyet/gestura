<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Landing Page
Route::get('/', function () {
    return view('landingpage');
});

// Halaman Auth (Login + Register dalam 1 file)
Route::get('/auth', [AuthController::class, 'showPage'])->name('auth.page');

// Proses Login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Proses Register
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// USER PAGES
Route::get('/profile', function () {
    return view('user.profile');
});
Route::get('/materi', function () {
    return view('user.materi');
});
Route::get('/gesturelab', function () {
    return view('user.gesture-lab-practice');
});
Route::get('/gesture-lab-translate', function () {
    return view('user.gesture-lab-translate');
});
Route::get('/materi-isi', function () {
    return view('user.materi-isi');
});
Route::get('/latihan', function () {
    return view('user.quiz');
});
Route::get('/Challenge', function () {
    return view('user.challenge');
});
Route::get('/Challenge-isi', function () {
    return view('user.challenge-isi');
});
