<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
Route::get('san-pham', ProductController::class)->name('product');

Route::get('chi-tiet-san-pham/{product}', ProductDetailController::class)->name('product.detail');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/admin.php';
