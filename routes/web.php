<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/pakaian', [App\Http\Controllers\PakaianController::class, 'index'])->name('pakaian')->middleware('auth');
Route::get('/pakaian/create', [App\Http\Controllers\PakaianController::class, 'create'])->name('pakaian')->middleware('auth');
Route::post('/pakaian/store', [App\Http\Controllers\PakaianController::class, 'store'])->name('pakaian')->middleware('auth');
Route::get('/pakaian/edit/{id}', [App\Http\Controllers\PakaianController::class, 'edit'])->name('pakaian')->middleware('auth');
Route::post('/pakaian/update/{id}', [App\Http\Controllers\PakaianController::class, 'update'])->name('pakaian')->middleware('auth');
Route::get('/pakaian/destroy/{id}', [App\Http\Controllers\PakaianController::class, 'destroy'])->name('pakaian')->middleware('auth');

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan')->middleware('auth');
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create'])->name('pelanggan')->middleware('auth');
Route::post('/pelanggan/store', [App\Http\Controllers\PelangganController::class, 'store'])->name('pelanggan')->middleware('auth');
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelangganController::class, 'edit'])->name('pelanggan')->middleware('auth');
Route::post('/pelanggan/update/{id}', [App\Http\Controllers\PelangganController::class, 'update'])->name('pelanggan')->middleware('auth');
Route::get('/pelanggan/destroy/{id}', [App\Http\Controllers\PelangganController::class, 'destroy'])->name('pelanggan')->middleware('auth');

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksi')->middleware('auth');
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create'])->name('transaksi')->middleware('auth');
Route::post('/transaksi/store', [App\Http\Controllers\TransaksiController::class, 'store'])->name('transaksi')->middleware('auth');
Route::get('/transaksi/edit/{id}', [App\Http\Controllers\TransaksiController::class, 'edit'])->name('transaksi')->middleware('auth');
Route::post('/transaksi/update/{id}', [App\Http\Controllers\TransaksiController::class, 'update'])->name('transaksi')->middleware('auth');
Route::get('/transaksi/destroy/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy'])->name('transaksi')->middleware('auth');
