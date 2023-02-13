<?php

use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\ProdukAdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index_home');
Route::get('/about', [HomeController::class, 'about'])->name('about_home');
Route::get('/investor', [HomeController::class, 'investor'])->name('investor_home');
Route::get('/career', [HomeController::class, 'career'])->name('career_home');
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('potofolio_home');
Route::get('/photos', [HomeController::class, 'photos'])->name('photos_home');
Route::get('/video', [HomeController::class, 'video'])->name('video_home');

Route::get('/events', [HomeController::class, 'events'])->name('events_home');
Route::get('/events/{slug}', [HomeController::class, 'events_details'])->name('events_details_home');

Route::get('/software', [HomeController::class, 'software'])->name('software_home');
Route::get('/software/{slug}', [HomeController::class, 'software_details'])->name('software_details_home');

Route::get('/hardware', [HomeController::class, 'hardware'])->name('hardware_home');
Route::get('/hardware/{slug}', [HomeController::class, 'hardware_details'])->name('hardware_details_home');

Route::get('/networking', [HomeController::class, 'networking'])->name('networking_home');
Route::get('/networking/{slug}', [HomeController::class, 'networking_details'])->name('networking_details_home');

Auth::routes();

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard_index');

    // career
    Route::get('/career/index/', [CareerController::class, 'index'])->name('index_career');
    Route::get('/career/create/', [CareerController::class, 'create'])->name('create_career');
    Route::post('career/post/', [CareerController::class, 'store'])->name('store_career');
    Route::get('/career/update/{id}', [CareerController::class, 'edit'])->name('edit_career');
    Route::put('/career/post/{id}', [CareerController::class, 'update'])->name('update_career');
    Route::delete('/career/delete/{id}', [CareerController::class, 'destroy'])->name('delete_career');

    // event
    Route::get('/evets/index/', [EventsController::class, 'index_event'])->name('index_events');
    Route::get('/evets/craete/', [EventsController::class, 'create_event'])->name('index_create');
    Route::post('/events/post/', [EventsController::class, 'store'])->name('store_events');
    Route::get('/events/update/{id}', [EventsController::class, 'edit'])->name('edit_events');
    Route::put('/events/post/{id}', [EventsController::class, 'update'])->name('update_events');
    Route::delete('/events/delete/{id}', [EventsController::class, 'destroy'])->name('delete_events');

    // produk portofolio
    Route::get('/portofolio/index/', [ProdukAdminController::class, 'produk_portofolio_index'])->name('index_portofolio');
    Route::get('/portofolio/craete/', [ProdukAdminController::class, 'produk_portofolio_create'])->name('create_portofolio');
    Route::post('/portofolio/post/', [ProdukAdminController::class, 'produk_portofolio_store'])->name('store_portofolio');
    Route::get('/portofolio/post/{id}', [ProdukAdminController::class, 'produk_portofolio_edit'])->name('update_portofolio');

    // produk software
    Route::get('/software/index/', [ProdukAdminController::class, 'produk_software_index'])->name('index_software');

    //produk hardware
    Route::get('/hardware/index/', [ProdukAdminController::class, 'produk_hardware_index'])->name('index_hardware');

    // produk networking
    Route::get('/networking/index/', [ProdukAdminController::class, 'produk_networking_index'])->name('index_networking');
});
