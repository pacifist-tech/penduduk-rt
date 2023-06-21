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
            $table->tinyInteger('jenis_kelamin')->default(1)->nullable()->change();
            $table->tinyInteger('gelar')->default(0)->nullable()->change();
            $table->tinyInteger('akta_lahir')->nullable()->change();
            $table->tinyInteger('golongan_darah')->default(1)->nullable()->change();
            $table->tinyInteger('agama')->default(1)->nullable()->change();
            $table->tinyInteger('status_perkawinan')->default(1)->nullable()->change();
            $table->tinyInteger('akta_perkawinan')->default(1)->nullable()->change();
            $table->tinyInteger('kelainan_fisik')->default(0)->nullable()->change();
            $table->tinyInteger('jenis_kelainan')->default(0)->nullable()->change();
            $table->tinyInteger('pendidikan')->default(1)->nullable()->change();
            $table->tinyInteger('pekerjaan')->default(1)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penduduks', function (Blueprint $table) {
            //
        });
    }
};
