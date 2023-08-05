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
        Schema::create('kematians', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->nullable();
            $table->string('nama_lengkap', 50);
            $table->tinyInteger('jenis_kelamin')->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            // $table->string('hari_lahir', 10)->nullable();
            $table->string('tanggal_lahir', 8)->nullable();
            $table->tinyInteger('umur');
            $table->tinyInteger('agama')->nullable();
            $table->tinyInteger('pekerjaan')->nullable();
            $table->string('alamat', 100)->nullable();
            $table->tinyInteger('anak_ke')->nullable();
            $table->string('tanggal_kematian', 8)->nullable();
            $table->string('waktu_kematian', 4)->nullable();
            $table->tinyInteger('sebab_kematian')->nullable();
            $table->string('tempat_kematian', 50)->nullable();
            $table->tinyInteger('yang_menerangkan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kematians');
    }
};
