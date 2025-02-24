<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $fillable = ['id', 'nama', 'jurusan', 'email', 'tanggal_lahir'];
}
