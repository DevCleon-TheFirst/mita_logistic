<?php

use App\Http\Controllers\BuildController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TrackingController;
use Illuminate\Support\Facades\Route;







Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/login',  [LoginController::class, 'show'])->name( 'login.form');
Route::post('/login',  [LoginController::class, 'login'])->name( 'login.submit');

Route::get('/register',  [RegisterController::class, 'show'])->name( 'register.form');
Route::post('/register',  [RegisterController::class, 'store'])->name( 'register.submit');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');

Route::get('/quote', [QuoteController::class, 'show'])->name('quote');


Route::get('/track', [TrackingController::class, 'showForm'])->name('tracking.form');
Route::post('/track', [TrackingController::class, 'track'])->name('tracking.search');



Route::get('/build',[BuildController::class, 'eat']);






















