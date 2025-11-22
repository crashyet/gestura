<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('landingpage');
});

// Halaman login + register
Route::get('/auth', [AuthController::class, 'showAuthPage'])->name('auth.page');

// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Proses register
Route::post('/register', [AuthController::class, 'register'])->name('register.post');


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


