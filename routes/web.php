<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\UserController; // Make sure to import UserController

// Public route for the home page (can be the welcome page)
Route::get('/', function () {
    return view('welcome');
});

// Routes protected by Jetstream authentication (Sanctum, verified, etc.)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Shows the dashboard with dogs
    Route::get('/dashboard', [DogController::class, 'index'])->name('dashboard'); 
});

// Additional routes protected by 'auth' middleware (for logged-in users)
Route::middleware(['auth'])->group(function () {
    // For liking a dog
    Route::post('/like-dog', [DogController::class, 'like'])->name('like.dog'); 

    // List all users
    Route::get('/users', [UserController::class, 'index'])->name('users'); 
});
