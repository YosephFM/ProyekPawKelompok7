<?php

use App\Http\Controllers\About_usController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembayaranController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/Dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('order', OrderController::class)->middleware('auth');
Route::resource('jadwal', JadwalController::class)->middleware('auth');
Route::resource('About_us',About_usController::class)->middleware('auth');
Route::resource('barang', BarangController::class)->middleware('auth');
Route::get('/pembayaran/{order}', [PembayaranController::class, 'show'])->name('pembayaran.show');
Route::post('/pembayaran/{order}/bayar', [PembayaranController::class, 'bayar'])->name('pembayaran.bayar');

require __DIR__.'/auth.php';
