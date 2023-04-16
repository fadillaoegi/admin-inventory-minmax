<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\supplierController;

Route::get('/', function () {
    return view('main', ["title" => "Main Page"]);
});

Route::get('/admin', [adminController::class, 'index'])->name('admin');
Route::get('/daftarbarang', [barangController::class, 'index'])->name('daftarBarang');
Route::get('/daftarsupplier', [supplierController::class, 'index'])->name('daftarSupplier');
Route::get('/daftarsupplier', [supplierController::class, 'index'])->name('daftarSupplier');


// Route::get('/karyawan', [karyawanController::class, 'index'])->name('karyawan');

