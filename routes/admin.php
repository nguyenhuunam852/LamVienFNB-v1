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

            Route::get('products/new', [ProductController::class, 'create'])->name('admin.product.create');

            Route::post('products/upload', [ProductController::class, 'upload'])->name('admin.product.upload');


            Route::get('categories', [CategoryController::class, 'index'])->name('admin.category');

            Route::get('categories/new', [CategoryController::class, 'create'])->name('admin.category.create');

            Route::post('categories/new', [CategoryController::class, 'store'])->name('admin.category.store');

            Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');

            Route::put('categories/{category}', [CategoryController::class, 'update'])->name('admin.category.update');

            Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
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
