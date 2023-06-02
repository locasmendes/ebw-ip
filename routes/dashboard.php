<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('pages')->group(function (){
    Route::get('/home', [\App\Http\Controllers\DashboardController::class, 'editHomePage'])->name('dashboard.pages.home');
    Route::post('save/home', [\App\Http\Controllers\DashboardController::class, 'saveHomePage'])->name('dashboard.pages.home.save');

    Route::get('/seo', [\App\Http\Controllers\DashboardController::class, 'editSeoPage'])->name('dashboard.pages.seo');
    Route::post('save/seo', [\App\Http\Controllers\DashboardController::class, 'saveSeoPage'])->name('dashboard.pages.seo.save');

    Route::get('/faq', [\App\Http\Controllers\DashboardController::class, 'editFaqPage'])->name('dashboard.pages.faq');
    Route::post('save/faq', [\App\Http\Controllers\DashboardController::class, 'saveFaqPage'])->name('dashboard.pages.faq.save');
});
