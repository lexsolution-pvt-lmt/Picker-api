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
    return view('auth.login');
});


Route:: get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('Login');
Auth::routes();

//Route:: get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('Login');
//Route:: get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('Register');


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('Dashboard');
    Route::get('/auctions' , [App\Http\Controllers\Admin\AuctionController::class, 'index'])->name('Auctions');
    Route::get('/auctions/create', [App\Http\Controllers\Admin\AuctionController::class, 'create'])->name('Auctions.create');
    Route::get('/payments', [App\Http\Controllers\Admin\PaymentController::class, 'index'])->name('Payments');
    Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('Users');
    Route::get('/users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('Add User');
    Route::get('/users/profile', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('User Profile');
    Route::get('/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('Categories');
});




