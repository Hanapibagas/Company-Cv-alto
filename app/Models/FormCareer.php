<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormCareer extends Model
{
    use HasFactory;
    protected $fillable = [
        'posisi',
        'nama_lengkap',
        'alamat',
        'alamat_ktp',
        'pendidikan',
        'facebook',
        'instagram',
        'whatsapp',
        'pas_foto',
        'ijaza',
        'ktp',
        'cv'
    ];
}
