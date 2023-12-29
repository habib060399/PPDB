<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Berkas;

class BerkasDaftarUlang extends Model
{
    use HasFactory;

    protected $table = 'berkas_daftar_ulang';
    protected $primaryKey = 'id_berkas_daftar_ulang';
    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_berkas',
        'nama_lengkap',
        'nisn',
        'ttl',
        'alamat',
        'status'        
    ];

    public function berkas(): BelongsTo
    {
        return $this->belongsTo(Berkas::class, 'id_berkas', 'id');
    }
}
