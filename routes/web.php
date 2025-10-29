<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\ContactController as BackendContactController;
use App\Http\Controllers\Backend\AuthController;

Route::get('/', HomeController::class);
Route::view('/portfolio', 'frontend.portfolio')->name('portfolio');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');
Route::view('/brochure', 'frontend.brochure')->name('brochure');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/appointment', 'frontend.appointment')->name('appointment');
Route::view('/ui', 'frontend.ui')->name('ui');
Route::view('/graphics', 'frontend.graphics')->name('graphics');
Route::view('/web', 'frontend.web')->name('web');
Route::view('/app', 'frontend.app')->name('app');
Route::view('/digital', 'frontend.digital')->name('digital');

// Admin Routes - Authentication
Route::prefix('admin')->name('admin.')->group(function () {
    // Public routes (login)
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    
    // Protected routes (require authentication)
    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            return redirect()->route('admin.contacts.index');
        })->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::resource('contacts', BackendContactController::class)->except(['create', 'edit', 'update']);
    });
});
 