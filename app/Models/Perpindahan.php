<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpindahan extends Model
{
    use HasFactory;

    protected $fillable = ['no_kk', 'nik', 'nama_lengkap', 'jenis_permohonan', 'klasifikasi_perpindahan', 'alamat_asal', 'alamat_tujuan', 'alasan_pindah', 'jenis_pindah', 'anggota_keluarga_tidak_pindah', 'anggota_keluarga_yang_pindah', 'nama_sponsor', 'tipe_sponsor', 'alamat_sponsor', 'no_kitas', 'tanggal_kitas', 'nama_penanggung_jawab', 'rencana_tanggal_pindah'];
}
