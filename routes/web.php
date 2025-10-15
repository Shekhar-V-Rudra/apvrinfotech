<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/', HomeController::class);
Route::view('/portfolio', 'frontend.portfolio')->name('portfolio');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::view('/brochure', 'frontend.brochure')->name('brochure');
Route::view('/about', 'frontend.about')->name('about');
 