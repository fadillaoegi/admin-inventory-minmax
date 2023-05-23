<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\ratarataController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\penjualanController;

// Route::get('/', function () {
//     return view('main', ["title" => "Main Page"]);
// });

// Route Master
Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/daftarbarang', [barangController::class, 'index'])->name('daftarBarang');
Route::get('/daftarsupplier', [supplierController::class, 'index'])->name('daftarSupplier');
Route::get('/daftarpenjualan', [penjualanController::class, 'index'])->name('daftarPenjualan');
Route::get('/daftarratarata', [ratarataController::class, 'index'])->name('daftarRatarata');


Route::get('/inputbarang', [inputController::class, 'index'])->name('inputBarang');

Route::get('/kasir', [inputController::class, 'index'])->name('kasir');

Route::get('/karyawan', [karyawanController::class, 'index'])->name('karyawan');

