<?php

use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;
use Illuminate\Support\Facades\Route;

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
// customer routes
Route::get('/', [HomeController::class, 'home_page'])->name('home_page');
Route::get('/pro-worker', [HomeController::class, 'pro_worker'])->name('pro_worker');
Route::get('/house-keeping', [HomeController::class, 'house_keeping'])->name('house_keeping');
Route::get('/water-wash', [HomeController::class, 'water_wash'])->name('water_wash');
Route::get('/construction-work', [HomeController::class, 'construction_work'])->name('construction_work');
Route::get('/other-services', [HomeController::class, 'other_services'])->name('other_services');
Route::get('/my-bookings', [HomeController::class, 'my_bookings'])->name('my_bookings');
// footer
Route::get('/about-us', [FooterController::class, 'about_us'])->name('aboutUs');
Route::get('/career', [FooterController::class, 'career'])->name('career');

// Admin login
Route::get('/admin', [SuperAdminController::class, 'admin_login'])->name('adminLogin')->middleware('guest');
// Admin routes
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    // dashboard
    Route::get('/dashboard', [SuperAdminController::class, 'super_admin'])->name('dashboard');
    // bookings
    Route::get('/booking-services', [SuperAdminController::class, 'booking_services'])->name('bookings');
    // masters
    Route::get('/service-categories', [SuperAdminController::class, 'service_category'])->name('serviceCategory');
    Route::get('/pro-worker', [SuperAdminController::class, 'pro_worker'])->name('proWorker');
    Route::get('/house-keeping', [SuperAdminController::class, 'house_keeping'])->name('houseKeeping');
    Route::get('/water-wash', [SuperAdminController::class, 'water_wash'])->name('waterWash');
    Route::get('/construction-work', [SuperAdminController::class, 'construction_work'])->name('constructionWork');
    Route::get('/other-services', [SuperAdminController::class, 'other_services'])->name('otherServices');
});
/* Route::get('/', function () {
    return view('welcome');
}); */
