<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('theme.index');  
// });
// Route for Home Page
Route::get('/', function () {
    return view('theme.index');  // Points to resources/views/theme/index.blade.php
})->name('home');

// Route for Services Page
Route::get('/services', function () {
    return view('theme.services');  // Points to resources/views/theme/services.blade.php
})->name('services');

// Route for About Page
Route::get('/about', function () {
    return view('theme.about');  // Points to resources/views/theme/about.blade.php
})->name('about');

// Route for Pricing Page
Route::get('/pricing', function () {
    return view('theme.pricing');  // Points to resources/views/theme/pricing.blade.php
})->name('pricing');

// Route for Newsletter Page
Route::get('/newsletter', function () {
    return view('theme.newsletter');  // Points to resources/views/theme/newsletter.blade.php
})->name('newsletter');

// Route for Login Page



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
