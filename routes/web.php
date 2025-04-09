<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('product', ProductController::class)->name('product');
Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/admin.php';
