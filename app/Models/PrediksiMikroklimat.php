<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrediksiMikroklimat extends Model
{
    use HasFactory;

    // Nama tabel di database MySQL
    protected $table = 'prediksi_mikroklimat';

    // Kolom-kolom yang diizinkan untuk diisi secara massal (Mass Assignment)
    protected $fillable = [
        'lokasi',
        'nama_tanaman',
        'suhu_udara',
        'kelembapan_udara',
        'kelembapan_tanah',
        'status_mikroklimat',
    ];
}