<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/admin', [adminController::class, 'index'])->name('admin');

