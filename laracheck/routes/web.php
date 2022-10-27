<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\HomeSlideController;
use App\Http\Controllers\Home\AboutContoller;

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

Route::get('/', function () {
    return view('frontend.index');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');

    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.profile');

});

//Home Slide Controller Route
Route::controller(HomeSlideController::class)->group(function () {
    Route::get('/home/slide', 'HomeSlide')->name('home.slide');
    Route::post('/upload/slide', 'UploadSlide')->name('upload.slide');
});

//About Page Controller Route
Route::controller(AboutContoller::class)->group(function () {
    Route::get('/about/page', 'AboutPage')->name('about.page');
    Route::post('/upload/about', 'UploadAbout')->name('upload.about');
    Route::get('/about', 'HomeAbout')->name('home.about');

});



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
