@extends('layouts.main')

@section('content')
<div class="card">
    <h2 class="card-title">
        <i class="fa-solid fa-circle-info"></i> Tentang AgroClima
    </h2>
    <p style="color: var(--text-dark); line-height: 1.6; margin-bottom: 1.5rem; font-size: 0.95rem;">
        <strong>AgroClima Kabupaten Garut</strong> adalah sistem informasi prediksi dan monitoring mikroklimat tanaman pertanian berbasis web. Aplikasi ini dirancang untuk membantu petani dan praktisi pertanian dalam memantau kondisi tanah serta suhu lingkungan guna mendukung efisiensi penyiraman, pemupukan, dan perawatan tanaman.
    </p>

    <h3 style="font-size: 1.1rem; color: var(--baby-blue); margin-bottom: 1rem; font-weight: 700;">
        <i class="fa-solid fa-list-check"></i> Kriteria Status Mikroklimat
    </h3>
    <p style="color: var(--text-muted); font-size: 0.88rem; margin-bottom: 1rem;">
        Berikut adalah acuan rentang kelembapan tanah, lencana status, serta tindakan rekomendasi perawatan tanaman:
    </p>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Rentang Kelembapan Tanah</th>
                    <th>Status Mikroklimat</th>
                    <th>Lencana Warna</th>
                    <th>Rekomendasi Tindakan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="font-weight: 600;">&lt; 40%</td>
                    <td>Kering</td>
                    <td>
                        <span class="badge badge-kering">Kering</span>
                    </td>
                    <td>Segera lakukan penyiraman atau atur sistem irigasi lahan.</td>
                </tr>
                <tr>
                    <td style="font-weight: 600;">40% – 70%</td>
                    <td>Optimal</td>
                    <td>
                        <span class="badge badge-optimal">Optimal</span>
                    </td>
                    <td>Kondisi ideal, pertahankan pola penyiraman dan perawatan saat ini.</td>
                </tr>
                <tr>
                    <td style="font-weight: 600;">&gt; 70%</td>
                    <td>Terlalu Lembap</td>
                    <td>
                        <span class="badge badge-lembap">Terlalu Lembap</span>
                    </td>
                    <td>Kurangi/hentikan penyiraman serta periksa saluran drainase lahan.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection