<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/help', function () {
    return view('help');
})->name('help');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register',function () {
    return view('register');
})->name('register');
