<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
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
    Route::get('/project', [ProjectController::class, 'tampil'])->name('project.tampil');
    Route::get('/project/tambah', [ProjectController::class, 'tambah'])->name('project.tambah');
    Route::post('/project/submit', [ProjectController::class, 'submit'])->name('project.submit');
    Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::post('/project/delete/{id}', [ProjectController::class, 'delete'])->name('project.delete');
});


