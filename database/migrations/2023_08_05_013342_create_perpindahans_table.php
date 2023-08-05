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
        Schema::create('perpindahans', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk', 16)->nullable();
            $table->string('nik', 16)->nullable();
            $table->string('nama_lengkap', 50);
            $table->tinyInteger('jenis_permohonan')->default(1)->nullable();
            $table->tinyInteger('klasifikasi_perpindahan')->default(1)->nullable();
            $table->string('alamat_asal', 100);
            $table->string('alamat_tujuan', 100);
            $table->tinyInteger('alasan_pindah')->default(1)->nullable();
            $table->tinyInteger('jenis_pindah')->default(1)->nullable();
            $table->tinyInteger('anggota_keluarga_tidak_pindah')->nullable();
            $table->tinyInteger('anggota_keluarga_yang_pindah')->nullable();
            $table->string('nama_sponsor', 100)->nullable();
            $table->tinyInteger('tipe_sponsor')->nullable();
            $table->string('alamat_sponsor', 100)->nullable();
            $table->string('no_kitas', 20)->nullable();
            $table->string('tanggal_kitas', 8)->nullable();
            $table->string('nama_penanggung_jawab', 50)->nullable();
            $table->string('rencana_tanggal_pindah', 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpindahans');
    }
};
