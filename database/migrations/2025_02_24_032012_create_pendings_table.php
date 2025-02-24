<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendings', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku');
            $table->string('kode_anggota');
            $table->string('nama_anggota');
            $table->date('tanggal_pengembalian_awal');
            $table->date('tanggal_pengembalian_akhir');
            $table->enum('status_pengembalian', ['Dipinjam', 'Kembali', 'Hilang'])->default('Dipinjam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendings');
    }
};
