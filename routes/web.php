<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\TingkatstressController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/diagnosa', [App\Http\Controllers\DiagnosaController::class, 'index'])->name('diagnosa');
Route::get('/riwayat', [App\Http\Controllers\RiwayatController::class, 'index'])->name('riwayat');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::put('profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
// Route::put('profile', [ProfileController::class, 'changePassword'])->name('profile.changePassword');
route::get('hasil', [App\Http\Controllers\HasilController::class, 'index'])->name('hasil');

Route::post('diagnosa', [App\Http\Controllers\DiagnosaController::class, 'processDiagnosis'])->name('diagnosa.process');

// ADMIN ROUTE
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('dashboard');

Route::resource('tingkat_stress', TingkatstressController::class);
Route::put('tingkat_stress/{kode_stress}', [TingkatstressController::class, 'edit'])->name('tingkat_stress.edit');

Route::resource('gejala', GejalaController::class);
Route::put('gejala/{kode_gejala}', [GejalaController::class, 'edit'])->name('gejala.edit');

Route::resource('relasi', RelasiController::class);
Route::put('relasi/{id}', [RelasiController::class, 'edit'])->name('relasi.edit');

