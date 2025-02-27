<?php

use App\Http\Controllers\UserController;
use App\Models\Book;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PeminjamanController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/index', function () {
    return view('index');
})->name('index');
//     $books = DB::table('books')->get();
//     return response()->json($books);
// });

// Route::get('/books', [BookController::class, 'index']);


Route::get('/admin', function () {
    // $books = Book::all();
    // return view('layouts.backend.books',compact("books"));
    return view('admin');
})->name('admin');

//Transaksi Pengembalian
Route::get('/pengembalian', [TransaksiController::class, 'index'])->name('pengembalian.index');
Route::post('/pengembalian/update/{id}', [TransaksiController::class, 'updateStatus'])->name('pengembalian.update');


// Route::middleware('auth')->group(function () {
//     Route::resource('books', BookController::class);
//     Route::resource('peminjaman', PeminjamanController::class);
//     Route::get('/autocomplete/books', [PeminjamanController::class, 'autocompleteBooks'])->name('autocomplete.books');
//     Route::get('/autocomplete/users', [PeminjamanController::class, 'autocompleteUsers'])->name('autocomplete.users');
//     Route::get('/autocomplete/admins', [PeminjamanController::class, 'autocompleteAdmins'])->name('autocomplete.admins');
//

// Route::get('/admin-book',[BookController::class,'index'])->name('buku.index');
// Route::get('/admin-book/create',[BookController::class,'create'])->name('buku.create');
// Route::post('/admin-book',[BookController::class,'store'])->name('buku.store');
Route::get('/buku/create', [BookController::class, 'create'])->name('buku.create');
Route::get('/buku', [BookController::class, 'index'])->name('buku.index');
Route::post('/buku/store', [BookController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [BookController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BookController::class, 'update'])->name('buku.update');
Route::delete('/buku/{id}', [BookController::class, 'destroy'])->name('buku.destroy');


Route::get('/admin-book', [BookController::class, 'index'])->name('book');

Route::resource('member', MemberController::class);

Route::get('/admin-transaksi-pengembalian', [TransaksiController::class, 'pengembalian'])->name('transaksi.pengembalian');

Route::resource('peminjaman', PeminjamanController::class);

Route::resource('users', UserController::class);


