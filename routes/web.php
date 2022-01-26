<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SimplifyController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/simplify', SimplifyController::class)->name('simplify');
