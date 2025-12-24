<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('admin.dashboard');
});

Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login', [AuthController::class, 'authenticate'])->name('authenticate');
    });
    Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});

Route::middleware(['auth', 'can:admin-role'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', function () {
        return to_route('admin.users.index');
    })->name('dashboard');

    Route::resource('users', UserController::class);
});
