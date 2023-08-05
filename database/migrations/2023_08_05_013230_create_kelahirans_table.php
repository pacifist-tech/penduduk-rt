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
        Schema::create('kelahirans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 50);
            $table->tinyInteger('jenis_kelamin')->default(1)->nullable();
            $table->string('tempat_lahir', 50)->nullable();
            $table->string('hari_lahir', 10)->nullable();
            $table->string('tanggal_lahir', 8)->nullable();
            $table->string('waktu_lahir', 4)->nullable();
            $table->tinyInteger('jenis_kelahiran')->default(1)->nullable();
            $table->tinyInteger('kelahiran_ke')->default(1)->nullable();
            $table->tinyInteger('penolong_kelahiran')->default(1)->nullable();
            $table->float('berat_bayi')->nullable();
            $table->float('panjang_bayi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelahirans');
    }
};
