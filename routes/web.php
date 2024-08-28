<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-in', [LoginController::class, 'showSignInForm'])->name('sign-in');

Route::get('/products', [ProductController::class, 'index'])->name('indexproduk');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
