<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\AdminNavigationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;

// Route::get('/', function () {
//     return view('welcome');
// });

// general routes
Route::get('/', [NavigationController::class, 'index'])->name('home');

Route::get('/about', [NavigationController::class, 'about'])->name('about');

Route::get('/apply', [NavigationController::class, 'apply'])->name('apply');
Route::post('/apply', [NavigationController::class, 'applyPost']);

Route::get('/blog', [NavigationController::class, 'blog'])->name('blog');
Route::get('/blog-view/{id}', [NavigationController::class, 'blogView'])->name('blogView');

Route::get('/gallery', [NavigationController::class, 'gallery'])->name('gallery');
Route::get('/gallery-view/{id}', [NavigationController::class, 'galleryView'])->name('galleryView');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost']);
Route::post('/create-user', [AuthController::class, 'createUser'])->name('createUser');

Route::post('/mailing-list', [NavigationController::class, 'mailingPost'])->name('mailing');

Route::middleware(['auth'])->group(function() {

    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Admin Routes
    Route::get('/admin/applications', [ApplicationsController::class, 'index'])->name('adminApplications');
    Route::get('/admin/applications-view/{id}', [ApplicationsController::class, 'applicationView'])->name('adminApplicationView');
    Route::post('/admin/applications-options/{id}', [ApplicationsController::class, 'applicationOptions'])->name('adminApplicationOptions');
    
    Route::get('/admin/mailing-list', [MailingController::class, 'mailingList'])->name('mailingList');
    
    Route::get('/admin/blog', [BlogController::class, 'blog'])->name('admblog');
    Route::post('/admin/blog', [BlogController::class, 'blogPost']);
    Route::get('/admin/blog-all', [BlogController::class, 'blogAll'])->name('admblogAll');
    Route::get('/admin/blog-edit/{id}', [BlogController::class, 'blogEdit'])->name('admblogEdit');
    Route::post('/admin/blog-edit/{id}', [BlogController::class, 'blogEditPost']);
    Route::post('/admin/blog-delete/{id}', [BlogController::class, 'blogDeletePost'])->name('admBlogDelete');
    
    Route::get('/admin/gallery', [GalleryController::class, 'gallery'])->name('admGallery');
    Route::post('/admin/gallery', [GalleryController::class, 'galleryPost']);
    Route::get('/admin/gallery-all', [GalleryController::class, 'galleryAll'])->name('admGalleryAll');
    Route::get('/admin/gallery-edit/{id}', [GalleryController::class, 'galleryEdit'])->name('admBlogEdit');
    Route::post('/admin/gallery-edit/{id}', [GalleryController::class, 'galleryEditPost']);
    Route::post('/admin/gallery-delete/{id}', [GalleryController::class, 'galleryDelete'])->name('admGalleryDelete');
    Route::post('/admin/gallery-asset-delete/{id}', [GalleryController::class, 'galleryAssetDelete'])->name('admGalleryAssetDelete');
});