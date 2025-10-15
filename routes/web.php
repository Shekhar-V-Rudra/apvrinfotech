<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/', HomeController::class);
Route::view('/portfolio', 'frontend.portfolio')->name('portfolio');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/brochure', 'frontend.brochure')->name('brochure');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/appointment', 'frontend.appointment')->name('appointment');
Route::view('/ui', 'frontend.ui')->name('ui');
Route::view('/graphics', 'frontend.graphics')->name('graphics');
Route::view('/web', 'frontend.web')->name('web');
Route::view('/app', 'frontend.app')->name('app');
Route::view('/digital', 'frontend.digital')->name('digital');
 