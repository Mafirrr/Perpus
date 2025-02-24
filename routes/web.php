<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

// Route::middleware('auth')->group(function () {
//     Route::resource('books', BookController::class);
//     Route::resource('peminjaman', PeminjamanController::class);
//     Route::get('/autocomplete/books', [PeminjamanController::class, 'autocompleteBooks'])->name('autocomplete.books');
//     Route::get('/autocomplete/users', [PeminjamanController::class, 'autocompleteUsers'])->name('autocomplete.users');
//     Route::get('/autocomplete/admins', [PeminjamanController::class, 'autocompleteAdmins'])->name('autocomplete.admins');
//

Route::get('/admin-book',[BookController::class,'index'])->name('book');
