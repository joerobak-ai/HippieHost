<?php

use App\Http\Controllers\LeadInquiryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::post('/consultation', [LeadInquiryController::class, 'store'])->name('consultation.store');

Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');