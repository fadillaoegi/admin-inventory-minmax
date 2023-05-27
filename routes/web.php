<?php


use Illuminate\Routing\Controller;
// use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inputController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\ratarataController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\penjualanController;

// Route Master
Route::get('/', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/daftarbarang', [barangController::class, 'index'])->name('daftarBarang');
Route::get('/daftarsupplier', [supplierController::class, 'index'])->name('daftarSupplier');
Route::get('/daftarpenjualan', [penjualanController::class, 'index'])->name('daftarPenjualan');
Route::get('/daftarratarata', [ratarataController::class, 'index'])->name('daftarRatarata');

// Route Input
Route::get('/inputbarang', [inputController::class, 'indexBarang'])->name('inputBarang');
Route::get('/inputsupplier', [inputController::class, 'indexSupplier'])->name('inputSupplier');

// Route Kasir
Route::get('/kasir', [inputController::class, 'indexKasir'])->name('kasir');

// Route Laporan
Route::get('/laporanbarangmasuk', [laporanController::class, 'indexMasuk'])->name('laporanBarangMasuk');
Route::get('/laporanbarangkeluar', [laporanController::class, 'indexKeluar'])->name('laporanBarangKeluar');
Route::get('/laporanrestok', [laporanController::class, 'indexStok'])->name('laporanBarangStok');


// Route Karyawan
Route::get('/karyawan', [karyawanController::class, 'index'])->name('karyawan');