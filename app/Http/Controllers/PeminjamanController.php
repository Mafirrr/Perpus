<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Member;
use App\Models\Book;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::join('members', 'peminjaman.member_id', '=', 'members.id')
            ->join('books', 'peminjaman.book_id', '=', 'books.id')
            ->select('peminjaman.*', 'members.nama as member_name', 'books.title as book_title')
            ->get();

        return view('peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        $members = Member::all();
        $books = Book::all();
        return view('peminjaman.insert', compact('members', 'books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            'tanggal_peminjaman' => 'required|date',
            'tanggal_kembali' => 'required|date',
            'jumlah_pinjam' => 'required|integer'
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan!');
    }


    public function show($id)
    {
        $peminjaman = Peminjaman::join('members', 'peminjaman.member_id', '=', 'members.id')
            ->join('books', 'peminjaman.book_id', '=', 'books.id')
            ->select('peminjaman.*', 'members.nama as member_name', 'books.title as book_title')
            ->where('peminjaman.id', $id)
            ->firstOrFail();

        return view('peminjaman.show', compact('peminjaman'));
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $members = Member::all();
        $books = Book::all();
        return view('peminjaman.update', compact('peminjaman', 'members', 'books'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'member_id' => 'sometimes|exists:members,id',
            'book_id' => 'sometimes|exists:books,id',
            'tanggal_peminjaman' => 'sometimes|date',
            'tanggal_kembali' => 'sometimes|date',
            'jumlah_pinjam' => 'sometimes|integer'
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());

        return redirect()->route('peminjaman.index');
    }

    public function destroy($id)
    {
        Peminjaman::findOrFail($id)->delete();

        return redirect()->route('peminjaman.index');
    }
}
