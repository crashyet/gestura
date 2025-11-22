<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingpage');
});

Route::get('/login', function () {
    return view('');
});

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


