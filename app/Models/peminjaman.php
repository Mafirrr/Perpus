<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'member_id',
        'book_id',
        'tanggal_peminjaman',
        'tanggal_kembali',
        'jumlah_pinjam'
    ];

    public function Member()
    {
        return $this->belongsTo(Member::class);
    }

    public function Book()
    {
        return $this->belongsTo(Book::class);
    }
}
