<?php

use App\Http\Controllers\SearchTreatmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\SearchNoteController;
use App\Http\Controllers\AttachmentsController;
use App\Http\Controllers\SearchEventController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\SearchDiseaseController;
use App\Http\Controllers\Auth\RegisterUserController;

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

//% Dashboard
Route::get('/dashboard', DashboardController::class)->middleware('auth')->name('dashboard');

//% Events
Route::middleware('auth')->name('events.')->group(function () {
    Route::get('/events', [EventController::class, 'index'])->name('index');
    Route::get('/events/create', [EventController::class, 'create'])->name('create');
    Route::post('/events', [EventController::class, 'store'])->name('store');
    Route::get('/events/{event}', [EventController::class, 'show'])->can('edit', 'event')->name('show');
    Route::get('/events/{event}/edit', [EventController::class, 'edit'])->can('edit', 'event')->name('edit');
    Route::patch('/events/{event}', [EventController::class, 'update'])->can('edit', 'event')->name('update');
    Route::get('/events/download-attachment/{event}/{media}', [EventController::class, 'downloadAttachment'])
        ->can('edit', 'event')->name('downloadAttachment');
    Route::post('/events/{event}/email', [EventController::class, 'email'])->can('edit', 'event')->name('email');
    Route::delete('/events/{event}', [EventController::class, 'destroy'])->can('edit', 'event')->name('destroy');
});

//% Search events
Route::get('/search', SearchEventController::class)->middleware('auth')->name('search');

//% Attachments
Route::middleware('auth')->name('attachments.')->group(function () {
    Route::get('/user/attachments', [AttachmentsController::class, 'index'])->name('index');
    Route::delete('/user/attachments/{event}/{media}', [AttachmentsController::class, 'destroy'])->name('destroy');
});


//% Notes
Route::middleware('auth')->name('notes.')->group(function () {
    Route::get('/notes', [NoteController::class, 'index'])->name('index');
    Route::get('/notes/create', [NoteController::class, 'create'])->name('create');
    Route::post('/notes', [NoteController::class, 'store'])->name('store');
    Route::get('/notes/{note:slug}', [NoteController::class, 'show'])->can('editNote', 'note')->name('show');
    Route::get('/notes/{note:slug}/edit', [NoteController::class, 'edit'])->can('editNote', 'note')->name('edit');
    Route::patch('/notes/{note}', [NoteController::class, 'update'])->can('editNote', 'note')->name('update');
    Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->can('editNote', 'note')->name('destroy');
});


//% Diseases
Route::middleware('auth')->name('diseases.')->group(function () {
    Route::get('/diseases', [DiseaseController::class, 'index'])->name('index');
    Route::get('/diseases/create', [DiseaseController::class, 'create'])->name('create');
    Route::post('/diseases', [DiseaseController::class, 'store'])->name('store');
    Route::get('/diseases/{disease}', [DiseaseController::class, 'show'])->can('editDisease', 'disease')->name('show');
    Route::get('/diseases/{disease}/edit', [DiseaseController::class, 'edit'])->can('editDisease', 'disease')->name('edit');
    Route::patch('/diseases/{disease}', [DiseaseController::class, 'update'])->can('editDisease', 'disease')->name('update');
    Route::delete('/diseases/{disease}', [DiseaseController::class, 'destroy'])->can('editDisease', 'disease')->name('destroy');
});


//% Treatments
Route::middleware('auth')->name('treatments.')->group(function () {
    Route::get('/treatments', [TreatmentController::class, 'index'])->name('index');
    Route::get('/treatments/create', [TreatmentController::class, 'create'])->name('create');
    Route::post('/treatments', [TreatmentController::class, 'store'])->name('store');
    Route::get('/treatments/{treatment}', [TreatmentController::class, 'show'])->can('editTreatment', 'treatment')->name('show');
    Route::get('/treatments/{treatment}/edit', [TreatmentController::class, 'edit'])->can('editTreatment', 'treatment')->name('edit');
    Route::patch('/treatments/{treatment}', [TreatmentController::class, 'update'])->can('editTreatment', 'treatment')->name('update');
    Route::delete('/treatments/{treatment}', [TreatmentController::class, 'destroy'])->can('editTreatment', 'treatment')->name('destroy');
});

//% Search diseases
Route::get('/search-disease', SearchDiseaseController::class)->middleware('auth')->name('search.disease');

//% Search treatments
Route::get('/search-treatment', SearchTreatmentController::class)->middleware('auth')->name('search.treatment');

//% Search notes
Route::get('/search-note', SearchNoteController::class)->middleware('auth')->name('search.note');

//% Localization
Route::get('locale/{lang}', [LocaleController::class, 'setLocale'])->name('setLocale');

//% Log Out
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('logout');
