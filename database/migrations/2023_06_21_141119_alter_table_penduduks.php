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
            $table->string('nik', 16)->nullable()->change();
            $table->tinyInteger('jenis_kelamin')->nullable()->change();
            $table->tinyInteger('gelar')->nullable()->change();
            $table->tinyInteger('akta_lahir')->nullable()->change();
            $table->tinyInteger('golongan_darah')->nullable()->change();
            $table->tinyInteger('agama')->nullable()->change();
            $table->tinyInteger('status_perkawinan')->nullable()->change();
            $table->tinyInteger('akta_perkawinan')->nullable()->change();
            $table->tinyInteger('kelainan_fisik')->nullable()->change();
            $table->tinyInteger('jenis_kelainan')->nullable()->change();
            $table->tinyInteger('pendidikan')->nullable()->change();
            $table->tinyInteger('pekerjaan')->nullable()->change();

            

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
