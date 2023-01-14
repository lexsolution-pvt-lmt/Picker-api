<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EmailVerificationController;
use App\Http\Controllers\Api\NewPasswordController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WishlistController;

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

Route::middleware('auth:sanctum','verified')->get('/user', function (Request $request) {
    return $request->user();
});



// Auth Routes
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// View Profile
Route::get('profile', [UserController::class, 'getProfile']);


// Update Profile
Route::put('profile', [UserController::class, 'updateProfile']);
//Route::delete('profile/delete', [UserController::class, 'destroy']);

// Email Verification Routes
Route::post('email/verification-notification', [EmailVerificationController::class, 'sendVerificationEmail'])->middleware('auth:sanctum');
Route::get('verify-email/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify')->middleware('auth:sanctum');

// Forgot Password Route & Password Reset Route
Route::post('forgot-password', [NewPasswordController::class, 'forgotPassword']);
Route::post('reset-password', [NewPasswordController::class, 'reset']);

//Auction Routes
Route::apiResource('/auctions', AuctionController::class);
Route::get('/auctions/category/{category_name}', [AuctionController::class, 'getByCategory']);

//Bid Routes
Route::apiResource('/bids', BidController::class);

//Feedback Routes
Route::apiResource('/feedback', FeedbackController::class);

//Categories
Route::apiResource('/categories', CategoriesController::class);

//Add Payment
Route::apiResource('/payments', PaymentController::class);

//View Notifications
Route::apiResource('/notifications', NotificationController::class);

//Wishlist
Route::apiResource('/wishlist', WishlistController::class);