<?php

use App\Http\Controllers\CekDptController;
use App\Http\Controllers\ContactController;
use App\Models\Jadwal;
use App\Models\Kandidat;
use App\Models\Rekapitulasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PandaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\DashboardPemilihController;
use App\Livewire\QuickCountLivewire;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardPemilihController::class, 'welcome'])->name('welcome');
Route::get('/{kandidat}/visimisi', [DashboardPemilihController::class, 'guestVisiMisi'])->name('visimisi');

Route::get('/cek_dpt', [CekDptController::class, 'cekDpt'])
    ->name('cekDpt');
Route::get('/cek_status_dpt', [CekDptController::class, 'cekStatusDpt'])->name('cek_status_dpt');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/masuk', [PandaController::class, 'showLoginForm'])->name('panda.login');
Route::post('/pandalogin', [PandaController::class, 'pandaLogin'])->name('panda.login.post');
Route::get('/logout', [PandaController::class, 'pandaLogout'])->name('panda.logout');


// Route::get('/verifikasi-data', [DashboardPemilihController::class, 'verifikasiData'])->name('mahasiswa.verifikasi');
Route::get('/quick-count', QuickCountLivewire::class)->name('mahasiswa.quick-count');

Route::group(['prefix' => 'mahasiswa', 'middleware' => 'isPandaLogin'], function () {
    Route::get('/dashboard', [DashboardPemilihController::class, 'dashboard'])->name('mahasiswa.dashboard');
    Route::get('/pilih-kandidat', [DashboardPemilihController::class, 'voting'])->name('mahasiswa.voting');
    Route::get('/{kandidat}/pilih', [DashboardPemilihController::class, 'pemilihPost'])->name('mahasiswa.pilih');
    Route::get('/{kandidat}/visi-misi-kandidat', [DashboardPemilihController::class, 'visiMisi'])->name('mahasiswa.visi-misi');
});

Route::controller(KandidatController::class)->middleware(['auth', 'web'])->prefix('/kandidat')->group(function () {
    Route::get('/', 'index')->name('kandidat');
    Route::get('/create', 'create')->name('kandidat.create');
    Route::post('/', 'store')->name('kandidat.store');
    Route::get('/{kandidat}/edit', 'edit')->name('kandidat.edit');
    Route::patch('/{kandidat}/edit', 'update')->name('kandidat.update');
    Route::delete('/{kandidat}/delete', 'destroy')->name('kandidat.destroy');
    Route::get('/{kandidat}/create_misi', 'createMisi')->name('kandidat.createMisi');
    Route::post('/{kandidat}/store_misi', 'storeMisi')->name('kandidat.storeMisi');
});

Route::controller(ContactController::class)->middleware(['auth', 'web'])->prefix('/contact')->group(function () {
    Route::get('/', 'index')->name('contact');
    Route::get('/create', 'create')->name('contact.create');
    Route::post('/', 'store')->name('contact.store');
    Route::get('/{contact}/edit', 'edit')->name('contact.edit');
    Route::patch('/{contact}/edit', 'update')->name('contact.update');
    Route::delete('/{contact}/delete', 'destroy')->name('contact.destroy');
});

Route::controller(UserController::class)->middleware(['auth', 'web'])->prefix('/user')->group(function () {
    Route::get('/', 'index')->name('user');
    Route::get('/create', 'create')->name('user.create');
    Route::post('/', 'store')->name('user.store');
    Route::get('/{user}/edit', 'edit')->name('user.edit');
    Route::patch('/{user}/edit', 'update')->name('user.update');
    Route::delete('/{user}/delete', 'destroy')->name('user.destroy');
    Route::patch('/', 'updatePassword')->name('user.updatePassword');
});

Route::controller(JadwalController::class)->middleware(['auth', 'web'])->prefix('/jadwal')->group(function () {
    Route::get('/', 'index')->name('jadwal');
    Route::patch('/{jadwal}/update', 'update')->name('jadwal.update');
});

Route::controller(RekapitulasiController::class)->middleware(['auth', 'web'])->prefix('/rekapitulasi')->group(function () {
    Route::get('/', 'index')->name('rekapitulasi');
    Route::get('/download-excel', 'downloadExcel')->name('downloadExcel');
});

require __DIR__ . '/auth.php';
