<?php

use App\Http\Controllers\Admin\BlogAdminController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\ProdukAdminController;
use App\Http\Controllers\Admin\GalleryAdminController;
use App\Http\Controllers\Admin\TestimoniController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index_home');
Route::get('/about', [HomeController::class, 'about'])->name('about_home');
Route::get('/investor', [HomeController::class, 'investor'])->name('investor_home');

Route::get('/career', [HomeController::class, 'career'])->name('career_home');
Route::get('/career/isi-form', [HomeController::class, 'form'])->name('form_home');
Route::post('/career/isi-form', [HomeController::class, 'store_form'])->name('store_form_home');

Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('potofolio_home');
Route::get('/photos', [HomeController::class, 'photos'])->name('photos_home');
Route::get('/video', [HomeController::class, 'video'])->name('video_home');
Route::get('/testimoni', [HomeController::class, 'testimoni'])->name('testimoni_home');

Route::get('/events', [HomeController::class, 'events'])->name('events_home');
Route::get('/events/{slug}', [HomeController::class, 'events_details'])->name('events_details_home');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog_home');
Route::get('/blog/{slug}', [HomeController::class, 'detail_blog'])->name('blog_details_home');

Route::get('/software', [HomeController::class, 'software'])->name('software_home');
Route::get('/software/{slug}', [HomeController::class, 'software_details'])->name('software_details_home');

Route::get('/hardware', [HomeController::class, 'hardware'])->name('hardware_home');
Route::get('/hardware/{slug}', [HomeController::class, 'hardware_details'])->name('hardware_details_home');

Route::get('/networking', [HomeController::class, 'networking'])->name('networking_home');
Route::get('/networking/{slug}', [HomeController::class, 'networking_details'])->name('networking_details_home');

Auth::routes();

Route::prefix('dashboard')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard_index');

    // testi
    Route::get('/testimoni', [TestimoniController::class, 'index'])->name('index_testimoni');
    Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('create_testimoni');
    Route::post('/testimobi/post/', [TestimoniController::class, 'store'])->name('store_testimoni');

    // blog
    Route::get('/blog/index/', [BlogAdminController::class, 'index'])->name('index_blog');
    Route::get('/blog/create/', [BlogAdminController::class, 'create'])->name('create_blog');
    Route::post('blog/post/', [BlogAdminController::class, 'store'])->name('store_blog');
    Route::get('/blog/update/{id}', [BlogAdminController::class, 'edit'])->name('edit_blog');
    Route::put('/blog/post/{id}', [BlogAdminController::class, 'update'])->name('update_blog');
    Route::delete('/blog/delete/{id}', [BlogAdminController::class, 'destroy'])->name('delete_blog');


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
    Route::get('/portofolio/post/{id}', [ProdukAdminController::class, 'produk_portofolio_edit'])->name('edit_portofolio');
    Route::put('/portofolio/post/{id}', [ProdukAdminController::class, 'produk_portofolio_update'])->name('update_portofolio');
    Route::delete('/portofolio/delete/{id}', [ProdukAdminController::class, 'produk_portofolio_destroy'])->name('delete_portofolio');

    // produk software
    Route::get('/software/index/', [ProdukAdminController::class, 'produk_software_index'])->name('index_software');
    Route::get('/software/craete/', [ProdukAdminController::class, 'produk_software_create'])->name('create_software');
    Route::post('/software/post/', [ProdukAdminController::class, 'produk_software_store'])->name('store_software');
    Route::get('/software/post/{id}', [ProdukAdminController::class, 'produk_software_edit'])->name('edit_software');
    Route::put('/software/post/{id}', [ProdukAdminController::class, 'produk_software_update'])->name('update_software');
    Route::delete('/software/delete/{id}', [ProdukAdminController::class, 'produk_software_destroy'])->name('delete_software');

    //produk hardware
    Route::get('/hardware/index/', [ProdukAdminController::class, 'produk_hardware_index'])->name('index_hardware');
    Route::get('/hardware/craete/', [ProdukAdminController::class, 'produk_hardware_create'])->name('create_hardware');
    Route::post('/hardware/post/', [ProdukAdminController::class, 'produk_hardware_store'])->name('store_hardware');
    Route::get('/hardware/post/{id}', [ProdukAdminController::class, 'produk_hardware_edit'])->name('edit_hardware');
    Route::put('/hardware/post/{id}', [ProdukAdminController::class, 'produk_hardware_update'])->name('update_hardware');
    Route::delete('/hardware/delete/{id}', [ProdukAdminController::class, 'produk_hardware_destroy'])->name('delete_hardware');

    // produk networking
    Route::get('/networking/index/', [ProdukAdminController::class, 'produk_networking_index'])->name('index_networking');
    Route::get('/networking/craete/', [ProdukAdminController::class, 'produk_networking_create'])->name('create_networking');
    Route::post('/networking/post/', [ProdukAdminController::class, 'produk_networking_store'])->name('store_networking');
    Route::get('/networking/post/{id}', [ProdukAdminController::class, 'produk_networking_edit'])->name('edit_networking');
    Route::put('/networking/post/{id}', [ProdukAdminController::class, 'produk_networking_update'])->name('update_networking');
    Route::delete('/networking/delete/{id}', [ProdukAdminController::class, 'produk_networking_destroy'])->name('delete_networking');

    // gallery photo
    Route::get('/photos/index/', [GalleryAdminController::class, 'gallery_photos_index'])->name('index_photos');
    Route::get('/photos/craete/', [GalleryAdminController::class, 'gallery_photos_create'])->name('create_photos');
    Route::post('/photos/post/', [GalleryAdminController::class, 'gallery_photos_store'])->name('store_photos');
    Route::get('/photos/post/{id}', [GalleryAdminController::class, 'gallery_photos_edit'])->name('edit_photos');
    Route::put('/photos/post/{id}', [GalleryAdminController::class, 'gallery_photos_update'])->name('update_photos');
    Route::delete('/photos/delete/{id}', [GalleryAdminController::class, 'gallery_photos_destroy'])->name('delete_photos');

    // gallery video
    Route::get('/video/index/', [GalleryAdminController::class, 'gallery_video_index'])->name('index_video');
    Route::get('/video/craete/', [GalleryAdminController::class, 'gallery_video_create'])->name('create_video');
    Route::post('/video/post/', [GalleryAdminController::class, 'gallery_video_store'])->name('store_video');
    Route::get('/video/post/{id}', [GalleryAdminController::class, 'gallery_video_edit'])->name('edit_video');
    Route::put('/video/post/{id}', [GalleryAdminController::class, 'gallery_video_update'])->name('update_video');
    Route::delete('/video/delete/{id}', [GalleryAdminController::class, 'gallery_video_destroy'])->name('delete_video');
});
