<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;

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

Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/edukasi', [EdukasiController::class, 'index'])->name('edukasi');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// Additional routes for specific functionalities
Route::prefix('edukasi')->name('edukasi.')->group(function () {
    Route::get('/budidaya', [EdukasiController::class, 'budidaya'])->name('budidaya');
    Route::get('/pengolahan', [EdukasiController::class, 'pengolahan'])->name('pengolahan');
    Route::get('/pemasaran', [EdukasiController::class, 'pemasaran'])->name('pemasaran');
});

Route::prefix('resep')->name('resep.')->group(function () {
    Route::get('/kategori/{kategori}', [ResepController::class, 'kategori'])->name('kategori');
    Route::get('/detail/{id}', [ResepController::class, 'detail'])->name('detail');
});

Route::prefix('galeri')->name('galeri.')->group(function () {
    Route::get('/foto', [GaleriController::class, 'foto'])->name('foto');
    Route::get('/video', [GaleriController::class, 'video'])->name('video');
});
