<?php

use App\Http\Controllers\PulauIndonesiaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PulauIndonesiaController::class, 'index']);
Route::get('/tambah', [PulauIndonesiaController::class, 'tambah']);
Route::post('/tambah', [PulauIndonesiaController::class, 'store']);
Route::get('/hapus/{id}', [PulauIndonesiaController::class, 'hapus']);
Route::get('/edit/{id}', [PulauIndonesiaController::class, 'edit']);
Route::post('/edit/{id}', [PulauIndonesiaController::class, 'update']);
Route::get('/lihat/{id}', [PulauIndonesiaController::class, 'lihat']);