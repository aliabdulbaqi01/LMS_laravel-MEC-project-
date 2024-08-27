<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\AuthenticateAdminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
|
| important => routes/auth.php file has the authentication routes related to the admin (login, register,... etc)
*/

Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/logout', [AuthenticateAdminController::class, 'destroy'])
    ->name('admin.logout');
//category
Route::resource('categories', CategoryController::class)->only('index', 'create', 'edit', 'destroy', 'show');

