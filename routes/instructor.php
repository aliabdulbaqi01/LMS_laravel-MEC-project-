<?php

use App\Http\Controllers\Auth\AuthenticateInstructorController;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Controllers\Instructor\InstructorController;
use App\Http\Controllers\Instructor\LectureController;
use App\Http\Controllers\instructor\ProfileController;
use App\Http\Controllers\Instructor\SectionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| instructor  Routes
|--------------------------------------------------------------------------
|
| important => authentication routes related to the admin exist in **auth file**
|
*/

Route::get('/dashboard',[InstructorController::class,'index'])->name('instructor.dashboard');
Route::get('/logout',[AuthenticateInstructorController::class,'destroy'])->name('instructor.logout');

/*
 * profile and change password
 */
Route::get('/profile',[ProfileController::class,'edit'])->name('instructor.profile');


// courses
Route::resource('courses', CourseController::class);
Route::get('/subcategory/ajax/{category_id}', [CourseController::class, 'getSubCategory']);


// lectures and sections
Route::resource('lectures', LectureController::class);
Route::post('/lec/store', [LectureController::class, 'store']);


// course sections
Route::get('/sections/{course}', [SectionController::class, 'index'])->name('sections.index');
Route::resource('sections', SectionController::class)->only('store');
