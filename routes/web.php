<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Admin\CertificateVerificationController;
use App\Http\Controllers\CertificationVerificationController;


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

Route::get('/', [FrontendController::class, 'index'])->name('myhome');
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/coming_soon', [FrontendController::class, 'coming']);
// Services section
Route::get('services/trainings', [FrontendController::class, 'trainings']);
Route::get('services/supply', [FrontendController::class, 'supply']);
Route::get('services/hse/consultancy', [FrontendController::class, 'hse_consultancy']);
Route::get('services/general/contract', [FrontendController::class, 'general_contract']);
Route::get('services/inspection/services', [FrontendController::class, 'inspection_services']);
// Booking
Route::get('booking/inspection', [FrontendController::class, 'booking_inspection']);
Route::get('booking/training', [FrontendController::class, 'training']);
Route::get('contact', [FrontendController::class, 'contact']);
Route::post('booking/store', [BookingController::class, 'store'])->name('book_now');

// Certificate verification
Route::get('/verify', [CertificationVerificationController::class, 'index']);
Route::post('/send-verification', [CertificationVerificationController::class, 'create']);
Route::get('/show_track/{tracking_code}', [CertificationVerificationController::class, 'check'])->name('show_track');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->prefix('user')->namespace('User')->group(function () {
    Route::get('course', [UserDashboardController::class, 'index'])->name('get-course');
    Route::get('dashboard', [UserDashboardController::class, 'home'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.home');
    Route::get('course', [CourseController::class, 'index'])->name('course');
    Route::get('course/create', [CourseController::class, 'create'])->name('create-course');
    Route::post('course/send', [CourseController::class, 'courseStore'])->name('course-send');

    // Certificate upload
    Route::get('/certificates', [CertificateVerificationController::class, 'index'])->name('cert');
    Route::get('/create-certifcate', [CertificateVerificationController::class, 'create'])->name('create-certificate');
    Route::post('/send-certificate', [CertificateVerificationController::class, 'store'])->name('store-certificate');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
