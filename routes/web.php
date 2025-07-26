<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

// Jobs
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');

    Route::get('/jobs/create', 'create')->middleware('auth');

    Route::get('/jobs/{job}', 'show');
    
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/jobs/{job}/edit', 'edit')->middleware(['auth', 'can:edit-job,job']);
    Route::patch('/jobs/{job}', 'update')->middleware(['auth', 'can:edit-job,job']);
    Route::delete('/jobs/{job}', 'delete')->middleware(['auth', 'can:edit-job,job']);
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
