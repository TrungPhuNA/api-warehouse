<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Admin\App\Http\Controllers\Api\ApiAdminWalletController;
use Modules\Admin\App\Http\Controllers\Api\ApiAdminAuthController;
use Modules\Admin\App\Http\Controllers\Api\ApiAdminProfileController;
use Modules\Admin\App\Http\Controllers\Api\ApiAdminCategoryController;
use Modules\Admin\App\Http\Controllers\Api\ApiAdminProductController;
use Modules\Admin\App\Http\Controllers\Api\ApiAdminStockInController;
use Modules\Admin\App\Http\Controllers\Api\ApiAdminStockOutController;
use Modules\Admin\App\Http\Controllers\Api\ApiAdminUserController;
/*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
*/

//Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
//    Route::get('admin', fn (Request $request) => $request->user())->name('admin');
//});

Route::prefix('v1/admin')->name('api.')->group(function () {
    Route::post('auth/register',[ApiAdminAuthController::class,'register']);
    Route::post('auth/login',[ApiAdminAuthController::class,'login']);
});

Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
    Route::prefix('admin')->group(function (){
        Route::get('me',[ApiAdminProfileController::class,'getProfile']);
        Route::put('me',[ApiAdminProfileController::class,'updateProfile']);

        Route::resource('wallet',ApiAdminWalletController::class)->except(["update","edit","delete","create","destroy","show"]);
        Route::post('wallet/withdraw-money',[ApiAdminWalletController::class,'withdrawMoney']);
        Route::get('wallet/history',[ApiAdminWalletController::class,'history']);

        Route::resource('categories',ApiAdminCategoryController::class);
        Route::resource('products',ApiAdminProductController::class);
        Route::resource('stock-in',ApiAdminStockInController::class);
        Route::resource('stock-out',ApiAdminStockOutController::class);
        Route::resource('account',ApiAdminUserController::class);
    });
});
