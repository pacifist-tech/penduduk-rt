<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $fillable = ['nama_lengkap', 'nik', 'alamat_sebelumnya'];

}
