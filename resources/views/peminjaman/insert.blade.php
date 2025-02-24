@extends('layouts.backend.main')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <main id="main" class="main">
        <div class="pagetitle">
            <h2 class="mb-4">Peminjaman</h2>
        </div>

        <section class="section dashboard">
            <div class="d-flex justify-content-end">
                <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>
            </div>

            <table id="peminjamanTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Peminjam</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Jumlah Pinjam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peminjaman as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->member_name }}</td>
                            <td>{{ $item->book_title }}</td>
                            <td>{{ $item->tanggal_peminjaman }}</td>
                            <td>{{ $item->tanggal_kembali }}</td>
                            <td>{{ $item->jumlah_pinjam }}</td>
                            <td>
                                <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>

    <script>
        $(document).ready(function() {
            $('#peminjamanTable').DataTable();
        });
    </script>
@endsection
