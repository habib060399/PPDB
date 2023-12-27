<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerkasDaftarUlang extends Model
{
    use HasFactory;

    protected $table = 'berkas_daftar_ulang';

    protected $fillable = [
        'id_user',
        'id_berkas',
        'nama_lengkap',
        'nisn',
        'ttl',
        'alamat',
        'status'        
    ];

    public $timestamps = false;
}
