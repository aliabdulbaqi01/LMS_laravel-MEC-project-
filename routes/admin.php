<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
|
| important => routes/auth.php file has the authentication routes related to the admin (login, register,... etc)
*/

Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

//category
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
