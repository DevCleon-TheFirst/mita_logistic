<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',  [LoginController::class, 'show'])->name( 'login.form');
Route::post('/login',  [LoginController::class, 'login'])->name( 'login.submit');

Route::get('/register',  [RegisterController::class, 'show'])->name( 'register.form');
Route::post('/register',  [RegisterController::class, 'store'])->name( 'register.submit');
