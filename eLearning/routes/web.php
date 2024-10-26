<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [WebsiteController::class, 'index'])->name('home');

// Course routes
Route::get('/courses', [WebsiteController::class, 'courses'])->name('courses');
Route::get('/course_details', [WebsiteController::class, 'course_details'])->name('course_details');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');


// User and Admin Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [WebsiteController::class, 'userDashboard'])->name('user.dashboard');
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware('checkAdmin')->name('admin.dashboard');
});
