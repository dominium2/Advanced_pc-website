<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

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

/*--------------------------contact logic---------------------------------------*/

Route::get('/contact', function () {
    return view('help');
})->name('contact.page');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

/*--------------------------faq logic---------------------------------------*/
use App\Http\Controllers\FaqController;

Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');

/*--------------------------admin logic---------------------------------------*/

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::post('/admin/users', [AdminController::class, 'createUser'])->name('admin.createUser');
    Route::put('/admin/users/{user}', [AdminController::class, 'updateUser'])->name('admin.updateUser');
    Route::delete('/admin/users/{user}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::get('/admin/faq', [FaqController::class, 'adminIndex'])->name('faq.admin');
    Route::post('/admin/faq/category', [FaqController::class, 'storeCategory'])->name('faq.storeCategory');
    Route::post('/admin/faq/question', [FaqController::class, 'storeQuestion'])->name('faq.storeQuestion');
    Route::put('/admin/faq/category/{category}', [FaqController::class, 'updateCategory'])->name('faq.updateCategory');
    Route::put('/admin/faq/question/{question}', [FaqController::class, 'updateQuestion'])->name('faq.updateQuestion');
    Route::delete('/admin/faq/category/{category}', [FaqController::class, 'destroyCategory'])->name('faq.destroyCategory');
    Route::delete('/admin/faq/question/{question}', [FaqController::class, 'destroyQuestion'])->name('faq.destroyQuestion');
    Route::get('/admin/messages', [AdminController::class, 'viewMessages'])->name('admin.messages');
    Route::delete('/admin/messages/{message}', [AdminController::class, 'deleteMessage'])->name('admin.deleteMessage');
    Route::get('/admin/news/create', [AdminController::class, 'createNews'])->name('admin.news.create');
    Route::post('/admin/news', [AdminController::class, 'storeNews'])->name('admin.news.store');
});
