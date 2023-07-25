<?php

namespace App\Models\Seed;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BahanBakar extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'bahan_bakar_kendaraan';
    protected $fillable = ['nama' => 'string' ];

    public function bahanBakarKendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'kendaraan_id', 'id');
    }
}