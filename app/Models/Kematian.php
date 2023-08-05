<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;

    protected $fillable = ['nik',
    'nama_lengkap',
    'jenis_kelamin',
    'tempat_lahir',
    'tanggal_lahir',
    'umur',
    'agama',
    'pekerjaan',
    'alamat',
    'anak_ke',
    'tanggal_kematian',
    'waktu_kematian',
    'sebab_kematian',
    'tempat_kematian',
    'yang_menerangkan'];
}

