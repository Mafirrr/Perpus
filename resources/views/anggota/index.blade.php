@extends('layouts.backend.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h2 class="mb-4">Daftar Anggota</h2>
        </div>
        <section class="section dashboard">
            <!-- Tombol Tambah -->
            <a href="{{ route('member.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>

            <table id="userTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($member as $users => $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->jurusan }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->tanggal_lahir }}</td>
                            <td>
                                <!-- Tombol Edit -->
                                <a href="{{ route('member.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Tombol Delete dengan Form -->
                                <form action="{{ route('member.destroy', $user->id) }}" method="POST" class="d-inline">
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
            $('#userTable').DataTable(); // Menginisialisasi DataTable tanpa AJAX
        });
    </script>
@endsection
