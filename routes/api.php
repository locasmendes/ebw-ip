<?php

use App\Http\Controllers\ImagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('images')->group(function () {
    Route::post('/upload', [ImagesController::class, 'upload'])->name('images.upload');
    Route::post('/delete', [ImagesController::class, 'delete'])->name('images.delete');
});
