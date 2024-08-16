<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
|
| important => authentication routes related to the admin exist in **auth file**
*/

Route::get('/', function () {
    return view('user.index');
})->name('dashboard');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
