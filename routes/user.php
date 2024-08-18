<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\SettingController;
use App\Http\Controllers\User\UserController;
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

// setting
Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
Route::put('/settings/{user}/password', [SettingController::class, 'updatePassword'])->name('settings.updatePassword');
Route::put('/settings/{user}/profile', [SettingController::class, 'updateProfile'])->name('settings.updateProfile');
