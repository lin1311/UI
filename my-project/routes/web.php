<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;

Route::view('/', 'welcome')->name('welcome');
Auth::routes();

Route::middleware('auth')->get('/profile', ProfileController::class)->name('profile');
