<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [WebsiteController::class, 'index'])->name('home');

// Course route
Route::get('/courses', [WebsiteController::class, 'courses'])->name('courses');

require __DIR__.'/auth.php'; // Uncomment if you still need auth routes
