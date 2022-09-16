<?php

namespace App\Models;

use App\Models\Seed\BahanBakar;
use App\Models\Seed\JenisKendaraan;
use App\Models\Seed\MerekKendaraan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $fillable = [
        'merek' => 'required',
        'model' => 'required',
        'nama' => 'required',
        'bahan_bakar' => 'required',
    ];
    public function kendaraan()
    {
        return $this->hasMany(MerekKendaraan::class, 'merek_id', 'id');
        return $this->hasMany(JenisKendaraan::class, 'model_id', 'id');
        return $this->hasMany(BahanBakar::class, 'bahan_bakar_id', 'id');
    }
}
