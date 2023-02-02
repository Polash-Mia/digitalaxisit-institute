<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/course', [HomeController::class,'course'])->name('course');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/student', [HomeController::class,'student'])->name('student');
Route::post('/student-form', [HomeController::class,'create'])->name('student.create');
Route::get('/confirm', [HomeController::class,'confirm'])->name('confirm');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/graphic-design',[DashboardController::class,'graphic'])->name('graphic.design');
    Route::get('/web-design',[DashboardController::class,'webdesign'])->name('web.design');
    Route::get('/web-development',[DashboardController::class,'webdevelopment'])->name('web.development');
});
