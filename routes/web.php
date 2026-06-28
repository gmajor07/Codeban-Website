<?php

use App\Http\Controllers\CmsAuthController;
use App\Http\Controllers\CmsAboutSectionController;
use App\Http\Controllers\CmsCategoryController;
use App\Http\Controllers\CmsClientController;
use App\Http\Controllers\CmsContactMessageController;
use App\Http\Controllers\CmsDashboardController;
use App\Http\Controllers\CmsFaqController;
use App\Http\Controllers\CmsGalleryController;
use App\Http\Controllers\CmsPageImageController;
use App\Http\Controllers\CmsProductController;
use App\Http\Controllers\CmsServiceController;
use App\Http\Controllers\CmsSiteSettingsController;
use App\Http\Controllers\CmsTestimonialController;
use App\Http\Controllers\CmsUserController;
use App\Http\Controllers\PublicHomeController;
use App\Http\Controllers\PublicAboutController;
use App\Http\Controllers\PublicClientsController;
use App\Http\Controllers\PublicContactController;
use App\Http\Controllers\PublicGalleryController;
use App\Http\Controllers\PublicProductsController;
use App\Http\Controllers\PublicServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicHomeController::class, 'index'])->name('home');
Route::get('/about', [PublicAboutController::class, 'index'])->name('about');
Route::get('/services', [PublicServicesController::class, 'index'])->name('services');
Route::get('/products', [PublicProductsController::class, 'index'])->name('products');
Route::get('/products/{product:slug}', [PublicProductsController::class, 'show'])->name('single-post');
Route::get('/clients', [PublicClientsController::class, 'index'])->name('clients');
Route::get('/gallery', [PublicGalleryController::class, 'index'])->name('gallery');
Route::get('/contact', [PublicContactController::class, 'index'])->name('contact');
Route::post('/contact', [PublicContactController::class, 'store'])->name('contact.submit');

Route::get('/login', [CmsAuthController::class, 'showLogin'])->name('login');
Route::post('/login', [CmsAuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [CmsAuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('cms')->name('cms.')->group(function () {
    Route::get('/', [CmsDashboardController::class, 'index'])->name('dashboard');
    Route::get('/settings', [CmsSiteSettingsController::class, 'edit'])->name('settings.edit');
    Route::put('/settings', [CmsSiteSettingsController::class, 'update'])->name('settings.update');
    Route::get('/page-images', [CmsPageImageController::class, 'index'])->name('page-images.index');
    Route::get('/page-images/{section}/edit', [CmsPageImageController::class, 'edit'])->name('page-images.edit');
    Route::put('/page-images/{section}', [CmsPageImageController::class, 'update'])->name('page-images.update');
    Route::get('/about-sections', [CmsAboutSectionController::class, 'index'])->name('about-sections.index');
    Route::get('/about-sections/create', [CmsAboutSectionController::class, 'create'])->name('about-sections.create');
    Route::post('/about-sections', [CmsAboutSectionController::class, 'store'])->name('about-sections.store');
    Route::get('/about-sections/{section}/edit', [CmsAboutSectionController::class, 'edit'])->name('about-sections.edit');
    Route::put('/about-sections/{section}', [CmsAboutSectionController::class, 'update'])->name('about-sections.update');
    Route::delete('/about-sections/{section}', [CmsAboutSectionController::class, 'destroy'])->name('about-sections.destroy');
    Route::resource('services', CmsServiceController::class)->except(['show']);
    Route::resource('categories', CmsCategoryController::class)->except(['show']);
    Route::resource('products', CmsProductController::class)->except(['show']);
    Route::resource('clients', CmsClientController::class)->except(['show']);
    Route::resource('faqs', CmsFaqController::class)->except(['show']);
    Route::resource('testimonials', CmsTestimonialController::class)->except(['show']);
    Route::resource('gallery', CmsGalleryController::class)->except(['show']);
    Route::resource('users', CmsUserController::class)->except(['show']);
    Route::get('/messages', [CmsContactMessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}', [CmsContactMessageController::class, 'show'])->name('messages.show');
    Route::patch('/messages/{message}/replied', [CmsContactMessageController::class, 'markReplied'])->name('messages.replied');
    Route::delete('/messages/{message}', [CmsContactMessageController::class, 'destroy'])->name('messages.destroy');
});
