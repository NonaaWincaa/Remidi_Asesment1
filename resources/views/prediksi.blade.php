@extends('layouts.main')

@section('content')
<div class="card">
    <h2 class="card-title">
        <i class="fa-solid fa-pen-to-square"></i> Form Input Mikroklimat
    </h2>
    <p style="color: var(--text-muted); margin-bottom: 1.8rem; font-size: 0.92rem;">
        Masukkan data lahan dan suhu untuk mendapatkan rekomendasi sistem secara instan.
    </p>

    <form action="{{ route('prediksi.proses') }}" method="POST">
        @csrf

        <div class="grid-2">
            <div class="form-group">
                <label for="lokasi" class="form-label">Lokasi Lahan</label>
                <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="Contoh: Lahan A - Garut" value="{{ old('lokasi') }}" required>
            </div>

            <div class="form-group">
                <label for="nama_tanaman" class="form-label">Nama Tanaman</label>
                <input type="text" name="nama_tanaman" id="nama_tanaman" class="form-control" placeholder="Contoh: Jagung / Tomat" value="{{ old('nama_tanaman') }}" required>
            </div>
        </div>

        <div class="grid-2">
            <div class="form-group">
                <label for="suhu_udara" class="form-label">Suhu Udara (°C)</label>
                <input type="number" step="0.1" name="suhu_udara" id="suhu_udara" class="form-control" placeholder="28.5" value="{{ old('suhu_udara') }}" required>
            </div>

            <div class="form-group">
                <label for="kelembapan_udara" class="form-label">Kelembapan Udara (%)</label>
                <input type="number" name="kelembapan_udara" id="kelembapan_udara" class="form-control" placeholder="75" value="{{ old('kelembapan_udara') }}" required>
            </div>
        </div>

        <div class="form-group">
            <label for="kelembapan_tanah" class="form-label">Kelembapan Tanah (%)</label>
            <input type="number" name="kelembapan_tanah" id="kelembapan_tanah" class="form-control" placeholder="45" value="{{ old('kelembapan_tanah') }}" required>
            <small style="color: var(--text-muted); font-size: 0.82rem; margin-top: 6px; display: block;">
                Keterangan: &lt; 40% (Kering), 40–70% (Optimal), &gt; 70% (Terlalu Lembap)
            </small>
        </div>

        <div style="margin-top: 2rem; text-align: right;">
            <button type="submit" class="btn">
                <i class="fa-solid fa-wand-magic-sparkles"></i> Analisis & Simpan
            </button>
        </div>
    </form>
</div>
@endsection