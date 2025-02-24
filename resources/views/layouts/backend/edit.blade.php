

@extends('layouts.backend.main')
@section('content')
  <div class="main" id="main">
    <div class="card shadow-sm mt-4">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Edit Buku</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul_buku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ $buku->judul_buku }}" required>
                </div>
                <div class="mb-3">
                    <label for="jumlah_buku" class="form-label">Jumlah Buku</label>
                    <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" value="{{ $buku->jumlah_buku }}" required>
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $buku->pengarang }}" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $buku->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahunterbit }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
  </div>
@endsection
