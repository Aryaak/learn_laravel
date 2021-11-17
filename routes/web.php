<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::get('category', [CategoryController::class, 'index']);
Route::delete('category/delete', [CategoryController::class, 'destroy']);

Route::get('product', [ProductController::class, 'index']);
Route::delete('product/delete', [ProductController::class, 'destroy']);

Route::get('customer', [CustomerController::class, 'index']);
Route::delete('customer/delete', [CustomerController::class, 'destroy']);
