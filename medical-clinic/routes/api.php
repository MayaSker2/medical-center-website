<?php

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    AuthController,
    FavouriteController,
    HelpController,
    PaymentController,
    PrivacyController,
    SearchController,
    SettingController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  //  return $request->user();
//});
Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:api')->group(function () {
        Route::get('profile', [AuthController::class, 'profile']);
        Route::post('logout', [AuthController::class, 'logout']);
    });
});

Route::middleware('auth:api')->group(function () {

    // Favourites Routes
    Route::prefix('favourites')->group(function () {
        Route::get('/', [FavouriteController::class, 'index'])->name('favourites.index');
        Route::post('/', [FavouriteController::class, 'store'])->name('favourites.store');
        Route::delete('{id}', [FavouriteController::class, 'destroy'])->name('favourites.destroy');
    });

    // Settings Routes
    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingController::class, 'show'])->name('settings.show');
        Route::put('/', [SettingController::class, 'update'])->name('settings.update');
    });

    // Payments Routes
    Route::prefix('payments')->group(function () {
        Route::get('/', [PaymentController::class, 'index'])->name('payments.index');
        Route::post('/', [PaymentController::class, 'store'])->name('payments.store');
        Route::delete('{id}', [PaymentController::class, 'destroy'])->name('payments.destroy');
    });
});


Route::prefix('faqs')->group(function () {
    Route::get('types', [HelpController::class, 'Faq'])->name('faqs.types');
    Route::get('type/{type}', [HelpController::class, 'show'])->name('faqs.show');
});

Route::get('contact', [HelpController::class, 'contact'])->name('contact');
Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('privacy', [PrivacyController::class, 'show'])->name('privacy.show');
