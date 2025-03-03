<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecelakaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'lokasi',
        'tanggal',
        'korban',
        'bukti',
    ];
}
