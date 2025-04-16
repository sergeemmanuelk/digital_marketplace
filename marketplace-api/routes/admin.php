<?php

use App\Http\Controllers\Api\Admin\Auth\AuthController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin/auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:admin')->group(function () {
        Route::post('profile', [AuthController::class, 'profile']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('logout', [AuthController::class, 'logout']);
    });
});

