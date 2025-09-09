<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\MemberController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'auth.sign-in')->name('user.signIn');

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/members', [MemberController::class, 'index'])->name('members.index');
