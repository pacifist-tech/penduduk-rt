<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $fillable = ['nama_lengkap',
    'jenis_kelamin',
    'gelar',
    'nik',
    'alamat_sebelumnya',
    'tempat_lahir',
    'tanggal_lahir',
    'akta_lahir',
    'no_akta_lahir',
    'golongan_darah',
    'agama',
    'status_perkawinan',
    'akta_perkawinan',
    'kelainan_fisik',
    'jenis_kelainan',
    'pendidikan',
    'pekerjaan'];
}
