<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('admin-dashboard', [DashboardController::class, 'showDashboard'])->name('adminDashboard');
Route::get('students', [StudentController::class, 'index'])->name('studentIndex');
Route::get('student-create', [StudentController::class, 'create'])->name('studentCreate');
Route::get('student-edit/{id}', [StudentController::class, 'edit'])->name('studentEdit');
Route::get('student-show/{id}', [StudentController::class, 'show'])->name('studentShow');

Route::post('student-store', [StudentController::class, 'store'])->name('studentStore');
Route::get('student-delete/{id}', [StudentController::class, 'destroy'])->name('studentDelete');
Route::post('student-update/{id}', [StudentController::class, 'update'])->name('studentUpdate');


// Teachers Resource Route (All routes altogether)
Route::resource('teachers', TeacherController::class);
