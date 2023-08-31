<?php

use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\ImageController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\UserProfileController;
use App\Http\Controllers\Dashboard\TagController;
use App\Http\Controllers\Dashboard\UnitController;
use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Unit\utd\BloodStockController;
use App\Http\Controllers\Unit\utd\Confirmation\PdfController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::name('utd.')->prefix('utd')->group(function () {
    Route::get('/', [LandingController::class, 'indexutd'])->name('index');
    Route::get('/bloodstock', [BloodStockController::class, 'bloodStockPage'])->name('stocks');
    Route::get('/confirmation/pdf/{mail_url}', [PdfController::class, 'getPdf'])->name('.pdf');
});

Route::get('login', function () {
    return redirect()->route('dashboard.signin');
})->name('login');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::name('dashboard')->prefix('dashboard')->group(function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::group(['middleware' => ['role:dev']], function () {
            Route::get('/category', [CategoryController::class, 'index'])->name('.category');
            Route::get('/user', [UserController::class, 'index'])->name('.user');
            Route::get('/unit', [UnitController::class, 'index'])->name('.unit');
        });
        Route::get('/', [HomeController::class, 'index']);
        Route::get('/post', [PostController::class, 'index'])->name('.post');
        Route::get('/tag', [TagController::class, 'index'])->name('.tag');
        Route::get('/image', [ImageController::class, 'index'])->name('.image');
        Route::get('/profile', [UserProfileController::class, 'index'])->name('.profile');
    });
    //UnAuth Route
    Route::get('/login', [AuthController::class, 'signIn'])->name('.signin');
});
