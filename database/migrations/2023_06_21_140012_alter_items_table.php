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
        Schema::table('penduduks', function (Blueprint $table) {
            //
            $table->tinyInteger('jenis_kelamin')->default(1)->change();
            $table->tinyInteger('gelar')->default(0)->change();
            $table->string('alamat_sebelumnya')->nullable()->change();
            $table->tinyInteger('akta_lahir')->nullable()->change();
            $table->string('no_akta_lahir', 20)->nullable()->change();
            $table->tinyInteger('golongan_darah')->default(1)->change();
            $table->tinyInteger('agama')->default(1)->change();
            $table->tinyInteger('status_perkawinan')->default(1)->change();
            $table->tinyInteger('akta_perkawinan')->default(1)->change();
            $table->tinyInteger('kelainan_fisik')->default(0)->change();
            $table->tinyInteger('jenis_kelainan')->default(0)->change();
            $table->tinyInteger('pendidikan')->default(1)->change();
            $table->tinyInteger('pekerjaan')->default(1)->change();
            $table->string('nik_ibu', 16)->nullable()->change();
            $table->string('nama_lengkap_ibu', 50)->nullable()->change();
            $table->string('nik_ayah', 16)->nullable()->change();
            $table->string('nama_lengkap_ayah', 50)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penduduk', function (Blueprint $table) {
            //
        });
    }
};
