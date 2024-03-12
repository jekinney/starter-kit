<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Account\AccountController;

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

Route::get('/', HomeController::class)->name('home');

Route::middleware('guest')->group( function() {
    Route::get('/auth/register', RegisterController::class)->name('auth.register');
    Route::get('/auth/login', LoginController::class)->name('auth.login');
});

Route::middleware('auth')->group( function() {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/account', [AccountController::class, 'show'])->name('account.show');
    Route::get('/account/password', [AccountController::class, 'password'])->name('account.password');
    Route::get('/account/security', [AccountController::class, 'security'])->name('account.security');
});
