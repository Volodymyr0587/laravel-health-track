<?php

use App\Http\Controllers\AttachmentsController;
use App\Http\Controllers\SearchEventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('guest')->group(function () {
    //% Auth
    Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'store']);

    //% Log In
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

//% Events
Route::middleware('auth')->name('events.')->group(function () {
    Route::get('/events', [EventController::class, 'index'])->name('index');
    Route::get('/events/create', [EventController::class, 'create'])->name('create');
    Route::post('/events', [EventController::class, 'store'])->name('store');
    Route::get('/events/{event}', [EventController::class, 'show'])->name('show');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->can('edit', 'event')->name('edit');
    Route::patch('/events/{event}', [EventController::class, 'update'])->can('edit', 'event')->name('update');
    Route::get('/events/download-attachment/{event}/{media}', [EventController::class, 'downloadAttachment'])
        ->can('edit', 'event')->name('downloadAttachment');
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->can('edit', 'event')->name('destroy');
});

//% Search events
Route::get('/search', SearchEventController::class)->middleware('auth')->name('search');

//% Attachments
Route::middleware('auth')->name('attachments.')->group(function () {
    Route::get('/user/attachments', [AttachmentsController::class, 'index'])->name('index');
    Route::delete('/user/attachments/{event}/{media}', [AttachmentsController::class, 'destroy'])->name('destroy');
});

//% Log Out
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');
