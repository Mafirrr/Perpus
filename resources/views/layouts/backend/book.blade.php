@extends('layouts.backend.main')
<style>
    body{}
</style>
@section('content')
<body>
    <div class="container mt-4">
        <h2 class="mb-4">📚 Daftar Buku</h2>

        <!-- Notifikasi -->
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Tombol Tambah Buku (Modal) -->
        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#addBookModal">
            ➕ Tambah Buku
        </button>

        <!-- Tabel Buku -->
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>
                        <!-- Tombol Hapus -->
                        <form action="/books/{{ $book->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">🗑 Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal Tambah Buku -->
    <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBookModalLabel">Tambah Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/books" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Penulis</label>
                            <input type="text" name="author" id="author" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label">Tahun</label>
                            <input type="number" name="year" id="year" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">💾 Simpan Buku</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
