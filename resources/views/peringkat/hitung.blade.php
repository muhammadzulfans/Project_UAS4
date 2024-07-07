@extends('layouts.app')
  
@section('title', 'Home Kriteria')
  
@section('contents')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-6">
            <!-- Tabel Normalisasi Nilai -->
            <div class="bg-white mb-6 shadow-md overflow-hidden sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 overflow-x-auto">
                    <h3 class="text-xl font-semibold text-gray-800 leading-tight mb-4">Normalisasi Nilai</h3>
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-4 text-sm font-semibold tracking-wide text-center">Kode Alternatif</th>
                                @foreach($kriteria as $k)
                                    <th class="p-4 text-sm font-semibold tracking-wide text-center">{{ $k->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alternatif as $alt)
                                <tr x-data="{ showModal: false }">
                                    <td class="border text-center px-4 py-2">{{ $alt->kode_alternatif }}</td>
                                    <td class="border text-center px-4 py-2">{{ $alt->ketersediaan_fasilitas }}</td>
                                    <td class="border text-center px-4 py-2">{{ $alt->kebutuhan_pelanggan }}</td>
                                    <td class="border text-center px-4 py-2">{{ $alt->kualitas_pelayanan }}</td>
                                    <td class="border text-center px-4 py-2">{{ $alt->jarak_waktu }}</td>
                                    <td class="border text-center px-4 py-2">{{ $alt->biaya }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tabel Nilai Preferensi -->
            <div class="bg-white mb-6 shadow-md overflow-hidden sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 overflow-x-auto">
                    <h3 class="text-xl font-semibold text-gray-800 leading-tight mb-4">Nilai Preferensi</h3>
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-4 text-sm font-semibold tracking-wide text-center">Kode Alternatif</th>
                                <th class="p-4 text-sm font-semibold tracking-wide text-center">Nilai Preferensi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($preferensi as $kode => $nilai)
                                <tr x-data="{ showModal: false }">
                                    <td class="border text-center px-4 py-2">{{ $kode }}</td>
                                    <td class="border text-center px-4 py-2">{{ number_format($nilai, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection





{{-- <!DOCTYPE html>
<html>
<head>
    <title>Hasil SAW</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Hasil Metode SAW</h1>

    <h2>Normalisasi Nilai</h2>
    <table>
        <thead>
            <tr>
                <th>Kode Alternatif</th>
                @foreach($kriteria as $k)
                    <th>{{ $k->nama_kriteria }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($alternatif as $alt)
                <tr>
                    <td>{{ $alt->kode_alternatif }}</td>
                    <td>{{ $alt->ketersediaan_fasilitas }}</td>
                    <td>{{ $alt->kebutuhan_pelanggan }}</td>
                    <td>{{ $alt->kualitas_pelayanan }}</td>
                    <td>{{ $alt->jarak_waktu }}</td>
                    <td>{{ $alt->biaya }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Nilai Preferensi</h2>
    <table>
        <thead>
            <tr>
                <th>Kode Alternatif</th>
                <th>Nilai Preferensi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($preferensi as $kode => $nilai)
                <tr>
                    <td>{{ $kode }}</td>
                    <td>{{ number_format($nilai, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> --}}
