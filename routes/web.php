<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SimplifyController;
use App\Http\Livewire\Input;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/input', Input::class)->name('input');
Route::get('/simplify', SimplifyController::class)->name('simplify');
