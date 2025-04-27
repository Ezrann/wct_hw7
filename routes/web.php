<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [TemplateController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
