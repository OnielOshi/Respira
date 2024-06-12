<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/diagnosa', [App\Http\Controllers\DiagnosaController::class, 'index'])->name('diagnosa');
Route::get('/riwayat', [App\Http\Controllers\RiwayatController::class, 'index'])->name('riwayat');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');