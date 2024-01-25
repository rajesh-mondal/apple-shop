<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Brand List
Route::get( '/BrandList', [BrandController::class, 'BrandList'] );
// Category List
Route::get( '/CategoryList', [CategoryController::class, 'CategoryList'] );
// Product List
Route::get( '/ListProductByCategory/{id}', [ProductController::class, 'ListProductByCategory'] );
Route::get( '/ListProductByBrand/{id}', [ProductController::class, 'ListProductByBrand'] );
Route::get( '/ListProductByRemark/{remark}', [ProductController::class, 'ListProductByRemark'] );
// Slider
Route::get( '/ListProductSlider', [ProductController::class, 'ListProductSlider'] );
// Product Details
Route::get( '/ProductDetailsById/{id}', [ProductController::class, 'ProductDetailsById'] );
Route::get( '/ListReviewByProduct/{product_id}', [ProductController::class, 'ListReviewByProduct'] );
//policy
Route::get( "/PolicyByType/{type}", [PolicyController::class, 'PolicyByType'] );