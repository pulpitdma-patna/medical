<?php

use App\Http\Controllers\Backend\DashboardController;

// All route names are prefixed with 'admin.'.
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('h_menu', [DashboardController::class, 'h_menu'])->name('h_menu');
Route::get('iot', [DashboardController::class, 'iot'])->name('iot');
Route::get('demographic', [DashboardController::class, 'demographic'])->name('demographic');
Route::get('project_board', [DashboardController::class, 'project_Board'])->name('project_board');
Route::get('crypto_dashboard', [DashboardController::class, 'crypto_Dashboard'])->name('crypto_dashboard');
Route::get('eCommerce', [DashboardController::class, 'eCommerce'])->name('eCommerce');