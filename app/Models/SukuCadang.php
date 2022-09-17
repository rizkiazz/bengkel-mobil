<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SukuCadang extends Model
{
    use HasFactory;

    protected $table = 'suku_cadang';
    protected $fillable = [
        'nama',
        'jenis_suku_cadang',
        'merek',
        'satuan',
        'stock',
        'deskripsi,
        harga'
    ];
}
