<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/sobre', function () {
    return view('sobre.index');
})->name('sobre');

Route::get('/para-voce', function () {
    return view('foryou.index');
})->name('para-voce');

Route::get('/ajuda', function () {
    return view('ajuda.index');
})->name('ajuda');

Route::get('/cadastro', function () {
    return view('cadastro.index');
})->name('cadastro');

Route::get('/debug', function () {
    return view('debug');
})->name('debug');

//include dashboard.php routes as a group with prefix /dashboard with auth middleware
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    require __DIR__.'/dashboard.php';
});


require __DIR__.'/auth.php';
