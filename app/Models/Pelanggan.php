<?php

namespace App\Models;

use App\Models\Seed\JenisKendaraan;
use App\Models\Seed\MerekKendaraan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $fillable = [
        'nama',
        'tipe',
        'jenis_mobil',
        'merek',
        'no_polisi',
        'alamat',
        'handphone',
        'status',
    ];
    public function kendaraan()
    {
        return $this->hasMany(MerekKendaraan::class, 'merek_kendaraan', 'id');
    }
}