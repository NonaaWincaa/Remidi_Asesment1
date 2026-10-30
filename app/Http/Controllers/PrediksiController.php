<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrediksiMikroklimat;

class PrediksiController extends Controller
{
    /**
     * Menampilkan halaman utama dengan daftar prediksi mikroklimat.
     */
    public function index()
    {
        $prediksi = PrediksiMikroklimat::orderBy('created_at', 'desc')->get();

        return view('home', compact('prediksi'));
    }

    /**
     * Menampilkan form input data mikroklimat.
     */
    public function formPrediksi()
    {
        return view('prediksi');
    }

    /**
     * Memproses input data mikroklimat dan memberikan rekomendasi.
     */
    public function prosesData(Request $request)
    {
        $validated = $request->validate([
            'lokasi' => 'required|string',
            'nama_tanaman' => 'required|string',
            'suhu_udara' => 'required|numeric',
            'kelembapan_udara' => 'required|integer',
            'kelembapan_tanah' => 'required|integer',
        ]);

        $kelembapanTanah = $validated['kelembapan_tanah'];

        if ($kelembapanTanah < 40) {
            $status = 'Kering';
            $rekomendasi = 'Segera lakukan penyiraman atau irigasi.';
            $badgeClass = 'badge-kering';
        } elseif ($kelembapanTanah <= 70) {
            $status = 'Optimal';
            $rekomendasi = 'Pertahankan pola perawatan saat ini.';
            $badgeClass = 'badge-optimal';
        } else {
            $status = 'Terlalu Lembap';
            $rekomendasi = 'Kurangi penyiraman dan periksa drainase.';
            $badgeClass = 'badge-lembap';
        }

        $prediksi = PrediksiMikroklimat::create([
            'lokasi' => $validated['lokasi'],
            'nama_tanaman' => $validated['nama_tanaman'],
            'suhu_udara' => $validated['suhu_udara'],
            'kelembapan_udara' => $validated['kelembapan_udara'],
            'kelembapan_tanah' => $validated['kelembapan_tanah'],
            'status_mikroklimat' => $status,
        ]);

        return view('hasil', compact('prediksi', 'rekomendasi', 'badgeClass'));
    }

    /**
     * Menampilkan riwayat prediksi mikroklimat.
     */
    public function riwayat()
    {
        $riwayatData = PrediksiMikroklimat::orderBy('created_at', 'desc')->get();

        return view('riwayat', compact('riwayatData'));
    }

    /**
     * Menampilkan halaman Tentang (About)
     */
    public function tentang()
    {
        return view('tentang');
    }
}