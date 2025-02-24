<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalian';
    protected $fillable = [
        'kode_buku',
        'kode_anggota',
        'nama_anggota',
        'tanggal_pengembalian_awal',
        'tanggal_pengembalian_akhir',
        'status_pengembalian'
    ];
}
