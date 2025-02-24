<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

//Transaksi Pengembalian
Route::get('/pengembalian', [TransaksiController::class, 'index'])->name('pengembalian.index');
Route::post('/pengembalian/update/{id}', [TransaksiController::class, 'updateStatus'])->name('pengembalian.update');
