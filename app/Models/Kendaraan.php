<?php

namespace App\Models;

use App\Models\Seed\BahanBakar;
use App\Models\Seed\JenisKendaraan;
use App\Models\Seed\MerekKendaraan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function merekKendaraan()
    {
        return $this->belongsTo(MerekKendaraan::class, 'merek');
    }
    public function jenisKendaraan()
    {
        return $this->belongsTo(JenisKendaraan::class, 'model');
    }
    public function bahanBakarKendaraan()
    {
        return $this->belongsTo(BahanBakar::class,'bahan_bakar');
    }
}