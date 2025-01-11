<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/builds', function () {
    return view('build');
})->name('build');

Route::get('/builder', function () {
    return view('builder');
})->name('builder');

Route::get('/drops', function () {
    return view('drops');
})->name('drops');

Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');
