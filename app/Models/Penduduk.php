<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $fillable = ['nik', 'tempat_lahir', 'alamat_sebelumnya'];

}
