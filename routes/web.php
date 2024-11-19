<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/builds', function () {
    return view('build');
});

Route::get('/builder', function () {
    return view('builder');
});

Route::get('/drops', function () {
    return view('drops');
});
