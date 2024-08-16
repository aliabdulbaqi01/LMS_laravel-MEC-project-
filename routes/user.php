<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserDashboard\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
|
| important => authentication routes related to the admin exist in **auth file**
*/

Route::get('/', [UserController::class, 'index'])->name('dashboard');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
