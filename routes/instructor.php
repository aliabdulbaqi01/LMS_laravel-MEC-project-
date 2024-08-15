<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| instructor  Routes
|--------------------------------------------------------------------------
|
| important => authentication routes related to the admin exist in **auth file**
|
*/

Route::get('/', function () {
    return view('welcome');
});


