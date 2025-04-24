<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\UploadController;
use App\Models\Category;
use App\Http\Controllers\GrapesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

Route::group([
    'prefix' => 'admin'
], function () {

    Route::group(
        [
            'prefix' => '',
            'middleware' => ['auth', 'verified']
        ],
        function () {
            Route::get('dashboard', function () {
                return Inertia::render('Dashboard');
            })->name('dashboard');

            Route::post('/save-html-to-public', [GrapesController::class, 'saveHtmlToPublic']);
            Route::post('/grapes-preview', [GrapesController::class, 'grapesPreview']);

            Route::get('products', [ProductController::class, 'index'])->name('admin.product');
            Route::get('products/new', [ProductController::class, 'create'])->name('admin.product.create');
            Route::post('products/new', [ProductController::class, 'store'])->name('admin.product.store');
            Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('admin.product.edit');
            Route::put('products/{product}', [ProductController::class, 'update'])->name('admin.product.update');
            Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('admin.product.delete');

            Route::get('products/page/{product}/edit', [GrapesController::class, 'grapesTemplate'])->name('page.edit');

            Route::get('categories', [CategoryController::class, 'index'])->name('admin.category');
            Route::get('categories/new', [CategoryController::class, 'create'])->name('admin.category.create');
            Route::post('categories/new', [CategoryController::class, 'store'])->name('admin.category.store');
            Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
            Route::put('categories/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
            Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('admin.category.delete');

            Route::post('upload', [UploadController::class, 'upload'])->name('file.upload');
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
