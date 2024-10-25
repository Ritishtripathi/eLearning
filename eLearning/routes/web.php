<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', [WebsiteController::class, 'index'])->name('home');

// Course routes
Route::get('/courses', [WebsiteController::class, 'courses'])->name('courses');
Route::get('/course_details', [WebsiteController::class, 'course_details'])->name('course_details');

// Admin dashboard route
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');

// Login route
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

