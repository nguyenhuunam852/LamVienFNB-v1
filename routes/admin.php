<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');
});
