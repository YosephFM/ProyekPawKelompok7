<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Dashboard', [DashboardController::class, 'index'])->name('dashboard');