<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index() {
        $books = Book::all(); // Mengambil semua data buku
    return view('layouts.backend.book', compact('books'));
    }

    public function create(){
        return view('layouts.backend.create');

    }

  public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|string|max:255',
            'jumlah_buku' => 'required|integer|min:1',
            'pengarang' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        Book::create([
            'judul_buku' => $request->judul_buku,
            'jumlah_buku' => $request->jumlah_buku,
            'pengarang' => $request->pengarang,
            'deskripsi' => $request->deskripsi,
            'tahunterbit' => $request->tahun_terbit,
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }
    public function edit($id)
{
    $buku = Book::findOrFail($id);
    return view('layouts.backend.edit', compact('buku'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'judul_buku' => 'required|string|max:255',
        'jumlah_buku' => 'required|integer|min:1',
        'pengarang' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
    ]);

    $buku = Book::findOrFail($id);
    $buku->update([
        'judul_buku' => $request->judul_buku,
        'jumlah_buku' => $request->jumlah_buku,
        'pengarang' => $request->pengarang,
        'deskripsi' => $request->deskripsi,
        'tahunterbit' => $request->tahun_terbit,
    ]);

    return redirect()->route('buku.index', $buku->id)->with('success', 'Buku berhasil diperbarui.');
}
public function destroy($id)
{
    $buku = Book::findOrFail($id);
    $buku->delete();

    return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
}


}
