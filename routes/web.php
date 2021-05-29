<?php

use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',  [JadwalController::class, 'index']);
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::get('/jadwal/cari',[JadwalController::class, 'search']);