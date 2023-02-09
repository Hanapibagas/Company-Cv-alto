<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index_home');
Route::get('/about', [HomeController::class, 'about'])->name('about_home');
Route::get('/investor', [HomeController::class, 'investor'])->name('investor_home');
Route::get('/career', [HomeController::class, 'career'])->name('career_home');
Route::get('/events', [HomeController::class, 'events'])->name('events_home');
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('potofolio_home');
Route::get('/software', [HomeController::class, 'software'])->name('software_home');
Route::get('/hardware', [HomeController::class, 'hardware'])->name('hardware_home');
Route::get('/networking', [HomeController::class, 'networking'])->name('networking_home');
Route::get('/photos', [HomeController::class, 'photos'])->name('photos_home');
Route::get('/video', [HomeController::class, 'video'])->name('video_home');

Auth::routes();

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
