<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;

Route::group([
    'prefix' => 'admin'
], function () {

    Route::group(
        ['prefix' => '',
        'middleware' => ['auth', 'verified']],
        function () {
            Route::get('dashboard', function () {
                return Inertia::render('Dashboard');
            })->name('dashboard');

            Route::get('products', [ProductController::class, 'index'])->name('admin.product');

            Route::get('categories', [CategoryController::class, 'index'])->name('admin.category');
        }
    );

    Route::group(
        ['prefix' => 'auth'],
        function () {
            Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

            Route::post('login', [AuthenticatedSessionController::class, 'store']);

            Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
        }
    );
});
