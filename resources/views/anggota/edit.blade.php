@extends('layouts.backend.main')

@section('content')
    <main id='main' class="main">
        <div class="pagetitle">
            <h2 class="mb-4">Edit Anggota</h2>
        </div>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('member.update', $member->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ $member->nama }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" value="{{ $member->jurusan }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $member->email }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $member->tanggal_lahir }}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('member.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </main>
@endsection
