<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('pages')->group(function (){
    Route::get('/home', [\App\Http\Controllers\DashboardController::class, 'editHomePage'])->name('dashboard.pages.home');
});
