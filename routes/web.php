<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PortfolioController as FrontendPortfolioController;
use App\Http\Controllers\Frontend\CareerController as FrontendCareerController;
use App\Http\Controllers\Backend\ContactController as BackendContactController;
use App\Http\Controllers\Backend\PortfolioController as BackendPortfolioController;
use App\Http\Controllers\Backend\CareerController as BackendCareerController;
use App\Http\Controllers\Backend\AuthController;

Route::get('/', HomeController::class)->name('home');
Route::get('/portfolio', FrontendPortfolioController::class)->name('portfolio');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');
Route::get('/brochure', function () {
    return redirect(asset('apvr/assets/doc/Apvr-Infotech-Brochure.pdf'));
})->name('brochure');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/appointment', 'frontend.appointment')->name('appointment');
Route::view('/ui', 'frontend.ui')->name('ui');
Route::view('/graphics', 'frontend.graphics')->name('graphics');
Route::view('/web', 'frontend.web')->name('web');
Route::view('/app', 'frontend.app')->name('app');
Route::view('/digital', 'frontend.digital')->name('digital');
Route::view('/ecommerce', 'frontend.ecom')->name('ecommerce');
Route::view('/ai-ml', 'frontend.ai-ml')->name('ai-ml');
Route::view('/devops', 'frontend.devops')->name('devops');
Route::view('/cloud', 'frontend.cloud')->name('cloud');
Route::view('/qa-testing', 'frontend.qa-testing')->name('qa-testing');
Route::view('/support', 'frontend.support')->name('support');
Route::view('/staff-augmentation', 'frontend.staff-augmentation')->name('staff-augmentation');
Route::get('/career', [FrontendCareerController::class, 'index'])->name('career');

// Route alias for login (redirects to admin login)
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

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
        Route::get('contacts/{contact}/file/view', [BackendContactController::class, 'viewFile'])->name('contacts.file.view');
        Route::get('contacts/{contact}/file/download', [BackendContactController::class, 'downloadFile'])->name('contacts.file.download');
        Route::resource('portfolios', BackendPortfolioController::class);
        Route::resource('careers', BackendCareerController::class);
    });
});
 