@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Riwayat Prediksi Mikroklimat</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
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
                @forelse($riwayatData as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->lokasi }}</td>
                        <td>{{ $data->nama_tanaman }}</td>
                        <td>{{ $data->suhu_udara }}°C</td>
                        <td>{{ $data->kelembapan_udara }}%</td>
                        <td>{{ $data->kelembapan_tanah }}%</td>
                        <td>
                            <span class="badge 
                                {{ $data->status_mikroklimat == 'Kering' ? 'bg-danger' : '' }}
                                {{ $data->status_mikroklimat == 'Optimal' ? 'bg-success' : '' }}
                                {{ $data->status_mikroklimat == 'Terlalu Lembap' ? 'bg-warning text-dark' : '' }}">
                                {{ $data->status_mikroklimat }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">Belum ada data riwayat.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection