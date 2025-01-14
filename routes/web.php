<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

/*--------------------------static page logic---------------------------------------*/

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/builds', function () {
    return view('build');
})->name('build');

Route::get('/builder', function () {
    return view('builder');
})->name('builder');

Route::get('/drops', function () {
    return view('drops');
})->name('drops');

Route::get('/help', function () {
    return view('help');
})->name('help');

/*--------------------------user account logic---------------------------------------*/

Route::get('/profile', [ProfileController::class, 'show'])->name('profile'); // Use controller method to show profile

Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
