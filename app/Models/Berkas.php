<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\BerkasDaftarUlang;

class Berkas extends Model
{
    use HasFactory;

    protected $table = 'berkas';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = false;
    public $incrementing = false;

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


    public function berkasDaftarUlang(): BelongsToMany
    {
        return $this->belongsToMany(BerkasDaftarUlang::class, 'id_berkas', 'id');
    }
}
