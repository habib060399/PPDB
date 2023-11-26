<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerkasUlang extends Model
{
    use HasFactory;

    protected $table = 'form_berkas_ulang';

    protected $fillable = [
        'id_user',
        'nama_lengkap',
        'nisn',
        'ttl',
        'alamat',
        'status'        
    ];

    public $timestamps = false;
}
