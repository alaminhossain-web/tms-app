<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\EduhubController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[EduhubController::class,'home'])->name('home');
Route::get('/category',[EduhubController::class,'category'])->name('category-products');
Route::get('/details',[EduhubController::class,'details'])->name('course-details');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
});
