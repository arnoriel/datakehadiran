<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;;
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
    return view('welcome');
});

Route::get('/jadwal', function () {
    return view('jadwal.index');
});
route::resource('jadwal', JadwalController::class);
Route::get('/search', [JadwalController::class, 'cari'])->name('jadwal.cari');

