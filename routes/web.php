<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

// Auth Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/check-email', [AuthController::class, 'checkEmail'])->name('checkEmail');

// Public Pages
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/service-details', [PageController::class,'serviceDetails'])->name('service-details');


Route::post('/switch-language', [LanguageController::class, 'switchLanguage'])->name('switch.language');
// Admin Routes with Prefix
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'adminDashboard'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Admin specific routes for contact, about, services, etc.
    Route::resource('/contact', ContactController::class);
    Route::resource('/slider', SliderController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/portfolios', PortfolioController::class);
    Route::resource('/teams', TeamController::class);
    Route::resource('/licences', TeamController::class);
});
