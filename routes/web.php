<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

Route::get('/', function () {
    return view('home');
})->name('home');



Route::middleware('guest')->group(function () {
    //% Auth
    Route::get('/register', [RegisterUserController::class, 'create'])->name('auth.register');
    Route::post('/register', [RegisterUserController::class, 'store']);

    //% Log In
    Route::get('/login', [SessionController::class, 'create'])->name('auth.login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    //% Log Out
    Route::post('/logout', [SessionController::class, 'destroy'])->name('auth.logout');
});

