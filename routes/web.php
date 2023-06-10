<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminTamuController;
use App\Http\Controllers\UserTamuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScanController;
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

Route::get('/', function () {
    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('admin/tamu', [AdminTamuController::class, 'index'])->name('admin/tamu');
    Route::get('admin/tambah-tamu', [AdminTamuController::class, 'create'])->name('admin-tambah-tamu');
    Route::post('admin/tambah', [AdminTamuController::class, 'store'])->name('admin-simpan-tamu');
    Route::get('admin/form-edit/{id}',[AdminTamuController::class, 'formEdit'])->name('admin-form-edit');
    Route::post('admin/update-data', [UserTamuController::class, 'updateTamu'])->name('admin-update-data');
    Route::post('admin/hapus-data', [UserTamuController::class, 'hapusTamu'])->name('admin-hapus-data');
    Route::get('admin/absen-tamu', [ScanController::class, 'index'])->name('admin-absen-tamu');
    Route::post('admin/absen-tamu', [ScanController::class, 'store'])->name('admin-cek-tamu');
    Route::get('admin/cetak-pdf', [UserTamuController::class, 'PDF'])->name('admin-cetak-pdf');
});

require __DIR__.'/auth.php';

//bagian user

Route::post('simpan-bukutamu',[UserTamuController::class, 'simpanTamu'])->name('simpan-bukutamu');

//Route::get('register', [UserController::class, 'register'])->name('register');

//Route::post('register', [UserController::class, 'register_action'])->name('register.action');