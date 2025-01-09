<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\RegisterController;

// Authentication routes
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'AuthLogin'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('forgot_password', [AuthController::class, 'forgotpassword'])->name('forgot_password');
Route::post('forgot_password', [AuthController::class, 'postforgotpassword'])->name('forgot_password.post');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');

// Admin routes with admin middleware
Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::prefix('admin/admin')->group(function () {
        Route::get('/list', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
        Route::get('/edit/{admin}', [AdminController::class, 'edit'])->name('admin.edit');
        Route::put('/update/{admin}', [AdminController::class, 'update'])->name('admin.update');
        Route::delete('/destroy/{admin}', [AdminController::class, 'destroy'])->name('admin.destroy');
    });
});

// Teacher routes with teacher middleware
Route::group(['middleware' => 'teacher'], function () {
    Route::get('teacher/dashboard', [DashboardController::class, 'dashboard'])->name('teacher.dashboard');
    Route::prefix('teacher/teacher')->group(function () {
        Route::get('/list', [TeacherController::class, 'index'])->name('teacher.index');
        Route::get('/create', [TeacherController::class, 'create'])->name('teacher.create');
        Route::post('/store', [TeacherController::class, 'store'])->name('teacher.store');
        Route::get('/edit/{teacher}', [TeacherController::class, 'edit'])->name('teacher.edit');
        Route::put('/update/{teacher}', [TeacherController::class, 'update'])->name('teacher.update');
        Route::delete('/destroy/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
    });
});

// Student routes with student middleware
Route::group(['middleware' => 'student'], function () {
    Route::get('student/dashboard', [DashboardController::class, 'dashboard'])->name('student.dashboard');
    Route::prefix('student/student')->group(function () {
        Route::get('/list', [StudentController::class, 'index'])->name('student.index');
        Route::get('/create', [StudentController::class, 'create'])->name('student.create');
        Route::post('/store', [StudentController::class, 'store'])->name('student.store');
        Route::get('/edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
        Route::put('/update/{student}', [StudentController::class, 'update'])->name('student.update');
        Route::delete('/destroy/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
    });
});
