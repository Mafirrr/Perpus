@extends('layouts.backend.main')

@section('content')
    <main id='main' class="main">
        <div class="pagetitle">
            <h2 class="mb-4">Edit Peminjaman</h2>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <select name="member_id" class="form-control" required>
                            @foreach ($members as $member)
                                <option value="{{ $member->id }}"
                                    {{ $peminjaman->member_id == $member->id ? 'selected' : '' }}>{{ $member->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Buku</label>
                        <select name="book_id" class="form-control" required>
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}"
                                    {{ $peminjaman->book_id == $book->id ? 'selected' : '' }}>{{ $book->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Peminjaman</label>
                        <input type="date" name="tanggal_peminjaman" class="form-control"
                            value="{{ $peminjaman->tanggal_peminjaman }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control"
                            value="{{ $peminjaman->tanggal_kembali }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah Pinjam</label>
                        <input type="number" name="jumlah_pinjam" class="form-control"
                            value="{{ $peminjaman->jumlah_pinjam }}" required>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('peminjaman.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </main>
@endsection
