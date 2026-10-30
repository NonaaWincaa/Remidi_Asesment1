@extends('layouts.main')

@section('content')
<div class="card">
    <h2 class="card-title">
        <i class="fa-solid fa-square-check"></i> Hasil Analisis Mikroklimat
    </h2>
    <p style="color: var(--text-muted); margin-bottom: 1.8rem; font-size: 0.92rem;">
        Rincian analisis mikroklimat lahan kamu telah disimpan ke database.
    </p>

    <div style="background-color: var(--baby-blue-light); border-radius: 16px; padding: 1.8rem; margin-bottom: 1.8rem; border: 1px solid var(--border-soft);">
        <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; margin-bottom: 1rem;">
            <div>
                <h3 style="font-size: 1.15rem; color: var(--baby-blue); font-weight: 700;">{{ $prediksi->lokasi }}</h3>
                <p style="color: var(--text-muted); font-size: 0.88rem; margin-top: 2px;">Tanaman: <strong style="color: var(--text-dark);">{{ $prediksi->nama_tanaman }}</strong></p>
            </div>
            <div>
                <span class="badge {{ $badgeClass }}">
                    {{ $prediksi->status_mikroklimat }}
                </span>
            </div>
        </div>

        <hr style="border: none; border-top: 1px solid var(--border-soft); margin: 1.2rem 0;">

        <div class="grid-2">
            <div>
                <span style="color: var(--text-muted); font-size: 0.82rem; display: block; margin-bottom: 2px;">Suhu Udara</span>
                <strong style="font-size: 1.05rem; color: var(--text-dark);">{{ $prediksi->suhu_udara }} °C</strong>
            </div>
            <div>
                <span style="color: var(--text-muted); font-size: 0.82rem; display: block; margin-bottom: 2px;">Kelembapan Udara</span>
                <strong style="font-size: 1.05rem; color: var(--text-dark);">{{ $prediksi->kelembapan_udara }} %</strong>
            </div>
            <div>
                <span style="color: var(--text-muted); font-size: 0.82rem; display: block; margin-bottom: 2px;">Kelembapan Tanah</span>
                <strong style="font-size: 1.05rem; color: var(--text-dark);">{{ $prediksi->kelembapan_tanah }} %</strong>
            </div>
            <div>
                <span style="color: var(--text-muted); font-size: 0.82rem; display: block; margin-bottom: 2px;">Waktu Analisis</span>
                <strong style="font-size: 0.9rem; color: var(--text-dark);">{{ $prediksi->created_at->format('d M Y, H:i') }} WIB</strong>
            </div>
        </div>
    </div>

    <div style="background-color: var(--soft-brown-light); border-left: 4px solid var(--soft-brown); padding: 1.2rem; border-radius: 12px; margin-bottom: 2rem; border: 1px solid var(--border-soft); border-left-width: 4px;">
        <h4 style="font-size: 0.95rem; color: var(--soft-brown); margin-bottom: 6px; font-weight: 700;">
            <i class="fa-solid fa-lightbulb"></i> Rekomendasi Tindakan:
        </h4>
        <p style="color: var(--text-dark); font-size: 0.92rem; line-height: 1.5;">{{ $rekomendasi }}</p>
    </div>

    <div style="display: flex; gap: 12px; justify-content: flex-end; flex-wrap: wrap;">
        <a href="{{ route('prediksi.form') }}" class="btn btn-light-brown">
            <i class="fa-solid fa-plus"></i> Input Lagi
        </a>
        <a href="{{ route('home') }}" class="btn">
            <i class="fa-solid fa-table-list"></i> Lihat Beranda
        </a>
    </div>
</div>
@endsection