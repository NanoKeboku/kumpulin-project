<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    use HasFactory;

    protected $table = 'ruang';

    protected $fillable = [
        'nama_tempat',
        'alamat',
        'kapasitas',
        'no_pengelola',
        'desc',
        'harga',
        'rating',
    ];
}
