<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\FeatureController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [TemplateController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('features', FeatureController::class);
