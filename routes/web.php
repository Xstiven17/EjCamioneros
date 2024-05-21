<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CamioneroController;

Route::get('/', function () {
    return  view('welcome');
});

Route::prefix('camiones')->group(function () {
    Route::get('/', [CamionController::class, 'index'])->name('camiones.index');
    Route::get('/create', [CamionController::class, 'create'])->name('camiones.create');
    Route::post('/', [CamionController::class, 'store'])->name('camiones.store');
    Route::get('/{camion}', [CamionController::class, 'show'])->name('camiones.show');
    Route::get('/{camion}/edit', [CamionController::class, 'edit'])->name('camiones.edit');
    Route::put('/{camion}', [CamionController::class, 'update'])->name('camiones.update');
    Route::delete('/{camion}', [CamionController::class, 'destroy'])->name('camiones.destroy');
});

Route::resource('camioneros', CamioneroController::class)->except([
    'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
]);

