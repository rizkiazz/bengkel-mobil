<?php

namespace App\Models\Seed;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JenisKendaraan extends Model
{
    use HasFactory;
    protected $table = 'jenis_kendaraan';
    protected $fillable = ['nama' => 'string' ];

    public function jenisKendaraan() : BelongsTo
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id', 'id');
    }
}
