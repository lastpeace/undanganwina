<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\GiftController;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/guests', [AdminDashboardController::class, 'storeGuest'])->name('admin.guests.store');
});

Route::get('/invitation/{code}', [InvitationController::class, 'index'])->name('invitation.index');
Route::post('/invitation/comment', [InvitationController::class, 'submitComment'])->name('invitation.comment');
Route::get('/gifts', [GiftController::class, 'index'])->name('gifts.index');
Route::post('/gifts', [GiftController::class, 'store'])->name('gifts.store');


require __DIR__ . '/auth.php';
