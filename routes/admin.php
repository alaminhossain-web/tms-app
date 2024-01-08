<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\CourseModule\CourseCategoryController;



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::prefix('admin')->group(function(){
        Route::resource('course-categories',CourseCategoryController::class);
    });
    
});
