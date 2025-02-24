<?php

namespace App\Http\Controllers;

use App\Models\Pending;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function pengembalian(){
        return view('layouts.backend.pengembalian');
    }

    public function index()
    {
        $pendings = Pending::where('status_pengembalian', 'Dipinjam')->get();
        $pengembalians = Pengembalian::all();
        return view('layouts.backend.pengembalian', compact('pendings', 'pengembalians'));
    }

    public function updateStatus(Request $request, $id)
    {
        $pending = Pending::findOrFail($id);
        
        if ($request->status_pengembalian == 'Kembali' || $request->status_pengembalian == 'Hilang') {
            // Pindahkan ke tabel pengembalian
            Pengembalian::create([
                'kode_buku' => $pending->kode_buku,
                'kode_anggota' => $pending->kode_anggota,
                'nama_anggota' => $pending->nama_anggota,
                'tanggal_pengembalian_awal' => $pending->tanggal_pengembalian_awal,
                'tanggal_pengembalian_akhir' => $pending->tanggal_pengembalian_akhir,
                'status_pengembalian' => $request->status_pengembalian
            ]);

            // Hapus dari tabel pending
            $pending->delete();
        }

        return redirect()->route('pengembalian.index')->with('success', 'Status berhasil diperbarui.');
    }
}
