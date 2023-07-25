<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';
    protected $fillable = [
        'pelanggan_id',
        'jenis_service',
        'keluhan',
        'mulai',
        'selesai',
        'status',
        'biaya_service',
        'biaya_suku_cadang',
        'total_biaya',
        'detail',
    ];
}
