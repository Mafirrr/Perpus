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
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pending Pengembalian</h5>
                            <div class="col-lg-12">


                                <!-- Table with hoverable rows -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kode Buku</th>
                                            <th scope="col">Kode Anggota</th>
                                            <th scope="col">Nama Anggota</th>
                                            <th scope="col">Tanggal Pengembalian Awal</th>
                                            <th scope="col">Tanggal Pengembalian Akhir</th>
                                            <th scope="col">Status Pengembalian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>BU01</td>
                                            <td>AA01</td>
                                            <td>Ryomen Sukuna</td>
                                            <td>20-02-2025</td>
                                            <td>20-02-2025</td>
                                            <td class="col-sm-2">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected="">Ubah Status</option>
                                                    <option value="1">Dipinjam</option>
                                                    <option value="2">Kembali</option>
                                                    <option value="3">Hilang</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with hoverable rows -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pengembalian</h5>
                            <div class="col-lg-12">


                                <!-- Table with hoverable rows -->
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kode Buku</th>
                                            <th scope="col">Kode Anggota</th>
                                            <th scope="col">Nama Anggota</th>
                                            <th scope="col">Tanggal Pengembalian Awal</th>
                                            <th scope="col">Tanggal Pengembalian Akhir</th>
                                            <th scope="col">Status Pengembalian</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>BU01</td>
                                            <td>AA01</td>
                                            <td>Ryomen Sukuna</td>
                                            <td>20-02-2025</td>
                                            <td>20-02-2025</td>
                                            <td class="text-center">
                                                <span class="badge bg-success text-white">Kembali</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with hoverable rows -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection