<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CamioneroController;
use App\Http\Controllers\CamionController;
use App\Http\Controllers\PaqueteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return  view('welcome');
});


Route::resource('camioneros', CamioneroController::class);
Route::resource('camiones', CamionController::class);
Route::resource('paquetes', PaqueteController::class);
