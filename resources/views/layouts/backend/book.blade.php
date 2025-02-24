@extends('layouts.backend.main')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Daftar Buku</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Katalog</li>
                    <li class="breadcrumb-item active">Buku</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">📚 Data Buku</h5>

                            <!-- Tombol Tambah Buku -->
                            <a href="{{route('buku.create')}}"  class="btn btn-success mb-3" >
                                ➕ Tambah Buku
                            </a>

                            <!-- Table Buku -->
                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">judul Buku</th>
                                        <th scope="col">Jumlah Buku</th>
                                        <th scope="col">Pengarang</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Tahun terbit</th>
                                        <th scope="col">aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($books as $book)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $book->judul_buku}}</td>
                                        <td>{{ $book->jumlah_buku }}</td>
                                        <td>{{ $book->pengarang }}</td>
                                        <td>{{ $book->deskripsi }}</td>
                                        <td>{{ $book->tahunterbit}}</td>

                                        <td class="col-sm-3">
                                            <a href="{{route('buku.edit',$book->id)}}" class="btn btn-warning">Edit</a>
                                            <!-- Tombol Hapus -->
                                            <form action="{{ route('buku.destroy', $book->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus buku ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                   <!-- Tombol Hapus -->

                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table Buku -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Modal Tambah Buku -->
    <div class="modal fade" id="addBookModal" tabindex="-1" aria-labelledby="addBookModalLabel" aria-hidden="true">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="{{route('buku.create')}}" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
