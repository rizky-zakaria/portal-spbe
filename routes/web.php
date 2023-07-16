<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'index']);
Route::get('regulasi-spbe', [LandingController::class, 'regulasiSpbe']);
Route::get('materi-spbe', [LandingController::class, 'materiSpbe']);
Route::get('tentang-spbe', [LandingController::class, 'tentangSpbe']);
Route::get('faq', [LandingController::class, 'faq']);
Route::get('diskusi', [LandingController::class, 'diskusi']);
Route::get('dokumen-spbe', [LandingController::class, 'dokumenSpbe']);
Route::get('laporan-evaluasi-spbe', [LandingController::class, 'laporanEvaluasiSpbe']);
Route::get('capaian-kematangan-spbe', [LandingController::class, 'capaianKematanganSpbe']);
Route::get('probis-spbe', [LandingController::class, 'probisSpbe']);
Route::get('sop-spbe', [LandingController::class, 'sopSpbe']);
Route::get('artikel', [LandingController::class, 'artikel']);
Route::post('cari', [LandingController::class, 'cari']);
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('kategori', KategoriController::class);
    Route::resource('konten', KontenController::class);
});
