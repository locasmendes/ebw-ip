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

Route::get('/', [\App\Http\Controllers\PageController::class, 'home'])->name('home');

Route::get('/sobre', [\App\Http\Controllers\PageController::class, 'about'])->name('sobre');

Route::get('/para-voce', function () {
    return view('foryou.index');
})->name('para-voce');

Route::get('/ajuda', function () {
    return view('ajuda.index');
})->name('ajuda');

Route::get('/cadastro', function () {
    return view('cadastro.index');
})->name('cadastro');

Route::post('/cadastro', [\App\Http\Controllers\PageController::class, 'cadastrar'])->name('cadastro.save');

Route::get('trabalhe-conosco', function () {
    return view('talents.index');
})->name('trabalhe-conosco');

Route::post('trabalhe-conosco', [\App\Http\Controllers\PageController::class, 'registerResume'])->name('trabalhe-conosco.save');

Route::get('/debug', function () {
    return view('debug');
})->name('debug');

Route::get('/politica-de-privacidade', function (){
   return view('policy.privacy');
})->name('politica-de-privacidade');

Route::get('/termos-de-uso', function (){
    return view('policy.terms');
})->name('termos-de-uso');

//include dashboard.php routes as a group with prefix /dashboard with auth middleware
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    require __DIR__.'/dashboard.php';
});


require __DIR__.'/auth.php';
