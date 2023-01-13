<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('Dashboard');
    Route::get('/auctions' , [App\Http\Controllers\Admin\AuctionController::class, 'index'])->name('Auctions');
    Route::get('/auctions/create', [App\Http\Controllers\Admin\AuctionController::class, 'create'])->name('Auctions.create');
    Route::get('/payments', [App\Http\Controllers\Admin\PaymentController::class, 'index'])->name('Payments');
});

Route:: get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('Login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


