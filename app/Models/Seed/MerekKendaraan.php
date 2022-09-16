<?php

namespace App\Models\Seed;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MerekKendaraan extends Model
{
    use HasFactory;
    protected $table = 'merek_kendaraan';
    protected $fillable = ['nama' => 'string' ];

    public function merekKendaraan() : BelongsTo
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id', 'id');
    }
}
