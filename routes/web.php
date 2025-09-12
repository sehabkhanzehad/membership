<?php

use App\Enums\Month;
use App\Enums\UserRole;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\PaymentController;
use App\Models\User;
use App\Models\Year;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'sign_in'])->name('login');
Route::post('/sign-in', [AuthController::class, 'authenticate'])->name('user.login');

Route::middleware(['auth'])->group(function () {

    Route::post('/sign-out', [AuthController::class, 'logout'])->name('logout');

    // Dashboard Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/members', [MemberController::class, 'index'])->name('members.index');
    Route::get('/members/{member}', [MemberController::class, 'show'])->name('members.show');

    Route::post('/paymnets', [PaymentController::class, 'store'])->name('payments.store');
    Route::get('/collect', [PaymentController::class, 'collector'])->name('collect');
});
