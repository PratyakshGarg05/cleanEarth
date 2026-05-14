<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| CleanEarth — Web Routes
|--------------------------------------------------------------------------
| All routes for the Waste Management Solutions project.
| Each route maps to a method in PageController or ContactController.
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', [PageController::class, 'home'])->name('home');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Solutions Page
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');

// Awareness Page
Route::get('/awareness', [PageController::class, 'awareness'])->name('awareness');

// Contact Page (GET)
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Contact Form Submit (POST)
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
