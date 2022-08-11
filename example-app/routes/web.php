<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\About\AboutController;


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
    return view('welcome');
});


Route::controller(AboutController::class)->group(function(){
    Route::get('/about','about')->name('page.about')->middleware('check.age');
    Route::get('/user','index')->name('page.user');
    Route::get('/contact','iletisim')->name('page.contact');
});
