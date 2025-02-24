@extends('layouts.backend.main')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Pengembalian Buku</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item">Transaksi</li>
                    <li class="breadcrumb-item active">Pengembalian</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <!-- Tabel Pending -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pending Pengembalian</h5>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Buku</th>
                                        <th>Kode Anggota</th>
                                        <th>Nama Anggota</th>
                                        <th>Tanggal Pengembalian Awal</th>
                                        <th>Tanggal Pengembalian Akhir</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pendings as $pending)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pending->kode_buku }}</td>
                                            <td>{{ $pending->kode_anggota }}</td>
                                            <td>{{ $pending->nama_anggota }}</td>
                                            <td>{{ $pending->tanggal_pengembalian_awal }}</td>
                                            <td>{{ $pending->tanggal_pengembalian_akhir }}</td>
                                            <td>
                                                <form action="{{ route('pengembalian.update', $pending->id) }}" method="POST">
                                                    @csrf
                                                    <select class="form-select" name="status_pengembalian"
                                                        onchange="this.form.submit()">
                                                        <option selected>Dipinjam</option>
                                                        <option value="Kembali">Kembali</option>
                                                        <option value="Hilang">Hilang</option>
                                                    </select>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Tabel Pengembalian -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pengembalian</h5>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Buku</th>
                                        <th>Kode Anggota</th>
                                        <th>Nama Anggota</th>
                                        <th>Tanggal Pengembalian Awal</th>
                                        <th>Tanggal Pengembalian Akhir</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengembalians as $pengembalian)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $pengembalian->kode_buku }}</td>
                                                                    <td>{{ $pengembalian->kode_anggota }}</td>
                                                                    <td>{{ $pengembalian->nama_anggota }}</td>
                                                                    <td>{{ $pengembalian->tanggal_pengembalian_awal }}</td>
                                                                    <td>{{ $pengembalian->tanggal_pengembalian_akhir }}</td>
                                                                    <td><span class="badge 
                                                                    @if($pengembalian->status_pengembalian == 'Kembali') bg-success 
                                                                    @elseif($pengembalian->status_pengembalian == 'Hilang') bg-danger 
                                                                    @endif">
                                                                            {{ $pengembalian->status_pengembalian }}
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
