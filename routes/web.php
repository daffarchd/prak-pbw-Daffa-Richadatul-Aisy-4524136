<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Import Controller
use App\Http\Controllers\PageController;
use App\Http\Controllers\PesanTamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. RUTE PUBLIK (Diberi nama rute agar bisa dipanggil via route() di navigation)
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/bukutamu', [PesanTamuController::class, 'index'])->name('bukutamu.index');
Route::post('/bukutamu', [PesanTamuController::class, 'store'])->name('bukutamu.store');

// 2. RUTE TERPROTEKSI (DASHBOARD & AUTH)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profil Breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD Kegiatan
    Route::resource('kegiatan', KegiatanController::class);

    // Kelola Buku Tamu (Admin)
    Route::get('/admin/bukutamu', [PesanTamuController::class, 'adminIndex'])->name('bukutamu.admin.index');
    Route::delete('/admin/bukutamu/{pesanTamu}', [PesanTamuController::class, 'destroy'])->name('bukutamu.admin.destroy');

    // Pengaturan Website
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
});

require __DIR__ . '/auth.php';
