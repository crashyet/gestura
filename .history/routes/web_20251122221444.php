<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('landingpage');
});

Route::get('/auth', function () {
    return view('auth.auth');
});
Route::post('/register', [AuthController::class, 'register'])->name('register.post');



Route::get('/auth', [AuthController::class, 'showPage'])->name('auth.page');

Route::post('/register', [AuthController::class, 'register'])->name('auth.register');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');


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


