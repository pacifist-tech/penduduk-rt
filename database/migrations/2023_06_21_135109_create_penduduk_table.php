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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 50);
            $table->tinyInteger('jenis_kelamin');
            $table->tinyInteger('gelar');
            $table->string('nik', 16);
            $table->string('alamat_sebelumnya');
            $table->string('tempat_lahir', 25);
            $table->string('tanggal_lahir', 8);
            $table->tinyInteger('akta_lahir');
            $table->string('no_akta_lahir', 20);
            $table->tinyInteger('golongan_darah');
            $table->tinyInteger('agama');
            $table->tinyInteger('status_perkawinan');
            $table->tinyInteger('akta_perkawinan');
            $table->tinyInteger('kelainan_fisik');
            $table->tinyInteger('jenis_kelainan');
            $table->tinyInteger('pendidikan');
            $table->tinyInteger('pekerjaan');
            $table->string('nik_ibu', 16);
            $table->string('nama_lengkap_ibu', 50);
            $table->string('nik_ayah', 16);
            $table->string('nama_lengkap_ayah', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
