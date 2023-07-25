<?php

namespace App\Models\Seed;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKendaraan extends Model
{
    use HasFactory;
    protected $table = 'jenis_kendaraan';
    protected $fillable = ['nama' => 'string' ];

    public function jenisKendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'kendaraan_id', 'id');
    }
}