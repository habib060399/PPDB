<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'form_siswa';

    protected $fillable = [
        'id_user',
        'nama_lengkap',
        'nisn',
        'ttl',
        'alamat',
        'jenkel',
        'anakke',
        'agama',
        'asal_sekolah',
        'negara',
        'no_reg',
        'nama_ortu',
        'no_kk',
        'no_hp_ortu',
        'alamat_ortu',
        'status'
    ];

    public $timestamps = false;

}
