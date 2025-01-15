<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function(){
    Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi.tampil');
    Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');
    Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
    Route::post('/login/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
});

Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function (){
    Route::get('/barang', [BarangController::class, 'tampil'])->name('barang.tampil');
    Route::get('/barang/tambah', [BarangController::class, 'tambah'])->name('barang.tambah');
    Route::post('barang/submit', [BarangController::class, 'submit'])->name('barang.submit');
    Route::get('barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::post('barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
    Route::post('barang/delete/{id}', [BarangController::class, 'delete'])->name('barang.delete');
});


