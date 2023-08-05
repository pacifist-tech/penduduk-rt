<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;

    protected $fillable = ['nama_lengkap',
    'jenis_kelamin',
    'tempat_lahir',
    'hari_lahir',
    'tanggal_lahir',
    'waktu_lahir',
    'jenis_kelahiran',
    'kelahiran_ke',
    'penolong_kelahiran',
    'berat_bayi',
    'panjang_bayi'];
}
