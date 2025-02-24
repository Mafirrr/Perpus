<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::resource('member', MemberController::class);
