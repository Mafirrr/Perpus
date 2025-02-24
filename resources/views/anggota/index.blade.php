@extends('layouts.backend.main')

@section('content')
    <div class="container">
        <h2 class="mb-4">Daftar Anggota</h2>

        <!-- Tombol Tambah -->
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>

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
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->jurusan }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->tanggal_lahir }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Delete dengan Form -->
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
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
    </div>

    <script>
        $(document).ready(function() {
            $('#userTable').DataTable(); // Menginisialisasi DataTable tanpa AJAX
        });
    </script>
@endsection
