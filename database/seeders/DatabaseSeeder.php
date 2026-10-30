<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PrediksiMikroklimat;

class PrediksiMikroklimatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PrediksiMikroklimat::truncate();

        
        $data = [
            [
                'lokasi' => 'Lahan A - Bandung',
                'nama_tanaman' => 'Padi',
                'suhu_udara' => 28.5,
                'kelembapan_udara' => 75,
                'kelembapan_tanah' => 35,
                'status_mikroklimat' => 'Kering',
            ],
            [
                'lokasi' => 'Lahan B - Lembang',
                'nama_tanaman' => 'Tomat',
                'suhu_udara' => 24.0,
                'kelembapan_udara' => 80,
                'kelembapan_tanah' => 60,
                'status_mikroklimat' => 'Optimal',
            ],
            [
                'lokasi' => 'Lahan C - Ciwidey',
                'nama_tanaman' => 'Stroberi',
                'suhu_udara' => 20.0,
                'kelembapan_udara' => 88,
                'kelembapan_tanah' => 82,
                'status_mikroklimat' => 'Terlalu Lembap',
            ],
            [
                'lokasi' => 'Lahan D - Garut',
                'nama_tanaman' => 'Jagung',
                'suhu_udara' => 30.0,
                'kelembapan_udara' => 65,
                'kelembapan_tanah' => 55,
                'status_mikroklimat' => 'Optimal',
            ],
            [
                'lokasi' => 'Lahan E - Majalengka',
                'nama_tanaman' => 'Bawang Merah',
                'suhu_udara' => 32.0,
                'kelembapan_udara' => 60,
                'kelembapan_tanah' => 30,
                'status_mikroklimat' => 'Kering',
            ],
        ];

        foreach ($data as $item) {
            PrediksiMikroklimat::create($item);
        }
    }
}