<?php

use App\Enums\Month;
use App\Enums\UserRole;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\PaymentController;
use App\Models\User;
use App\Models\Year;
use Illuminate\Support\Facades\Route;


Route::view('/', 'auth.sign-in')->name('user.signIn');

// Dashboard Routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/members/{member}', [MemberController::class, 'show'])->name('members.show');


Route::post('/paymnets', [PaymentController::class, 'store'])->name('payments.store');

Route::get('/collect', function () {
    return view('dashboard.collect', [
        "members" => User::whereRole(UserRole::Member)->get(),
        "years" => Year::all(),
        "months" => Month::values(),
    ]);
})->name('collect');
