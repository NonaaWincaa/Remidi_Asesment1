@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="text-center mb-4">
        <h1 class="fw-bold text-success"><i class="fas fa-seedling me-2"></i>AgroClima App</h1>
        <p class="text-muted">Prediksi Mikroklimat & Rekomendasi Pertanian</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-success text-white py-3">
            <h5 class="card-title mb-0"><i class="fas fa-cloud-sun-rain me-2"></i>Data Prediksi Mikroklimat</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Lokasi</th>
                            <th>Nama Tanaman</th>
                            <th>Suhu Udara (°C)</th>
                            <th>Kelembapan Udara (%)</th>
                            <th>Kelembapan Tanah (%)</th>
                            <th>Status Mikroklimat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($prediksi as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->nama_tanaman }}</td>
                            <td>{{ $item->suhu_udara }}°C</td>
                            <td>{{ $item->kelembapan_udara }}%</td>
                            <td>{{ $item->kelembapan_tanah }}%</td>
                            <td>
                                <span class="badge 
                                    {{ $item->status_mikroklimat == 'Kering' ? 'bg-danger' : '' }}
                                    {{ $item->status_mikroklimat == 'Optimal' ? 'bg-success' : '' }}
                                    {{ $item->status_mikroklimat == 'Terlalu Lembap' ? 'bg-warning text-dark' : '' }}">
                                    {{ $item->status_mikroklimat }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-muted">Belum ada data prediksi mikroklimat.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection