<?php

use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['Welcome' => 'Why are you here Curious cat?']);
});

Route::apiSingleton('user', UserController::class)->only(['show', 'update'])->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::post('login', [AuthController::class, 'authenticate']);
        Route::post('register', [AuthController::class, 'store']);
    });
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});
