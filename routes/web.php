<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);
Route::get('product', [ProductController::class, 'index']);
Route::delete('product/delete', [ProductController::class, 'destroy']);
