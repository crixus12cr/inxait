<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdministracionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AdministracionController::class, 'index'])->name('home');
Route::post('/registro', [RegistroController::class, 'store'])->name('registro.store');
Route::get('/ciudades/{province_id}', [AdministracionController::class, 'getCiudadesPorDepartamento'])->name('ciudades.por_provincia');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/export', [DashboardController::class, 'export'])->name('dashboard.export');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
