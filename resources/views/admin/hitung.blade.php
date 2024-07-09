@extends('layouts.app')

@section('title')

@section('contents')
    <div class="hero"
        style="background-image: url('https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revisi-2020/karimunimage2.jpg'); background-size: cover; background-position: center;">
        <div class="hero-content text-center text-white py-5">
            <h1 class="display-4" style="color: black; font-weight: bold;">Perhitungan SPK Metode SAW Perusahaan Tour & Travel
            </h1>
            <p class="lead" style="color: black; font-weight: bold;">Temukan paket wisata
                eksklusif dan layanan terbaik
                di perusahaan kami.</p>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-6">
            <!-- Tabel Utama -->
            <div class="bg-white mb-6 shadow-md overflow-hidden sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead class="bg-gray-50 border-b-2 border-gray-200">
                            <tr>
                                <th class="p-4 text-sm font-semibold tracking-wide text-center">No</th>
                                <th class="p-4 text-sm font-semibold tracking-wide text-center">Nama Supplier</th>
                                @foreach ($kriterias as $kriteria)
                                    <th class="p-4 text-sm font-semibold tracking-wide text-center">
                                        {{ $kriteria->nama_kriteria }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($alternatifs as $key => $item)
                                <tr x-data="{ showModal: false }">
                                    <td class="border text-center px-4 py-2">{{ $no++ }}</td>
                                    <td class="border text-center px-4 py-2">{{ $item->nama_supplier }}</td>
                                    <td class="border text-center px-4 py-2">{{ $item->C1 }}</td>
                                    <td class="border text-center px-4 py-2">{{ $item->C2 }}</td>
                                    <td class="border text-center px-4 py-2">{{ $item->C3 }}</td>
                                    <td class="border text-center px-4 py-2">{{ $item->C4 }}</td>
                                    <td class="border text-center px-4 py-2">{{ $item->C5 }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Bobot -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200 overflow-y-auto">
                        <h3 class="text-xl font-semibold text-gray-900 leading-tight mt-5">Bobot</h3>
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    @foreach ($kriterias as $kriteria)
                                        <th class="p-4 text-sm font-semibold tracking-wide text-center">
                                            {{ $kriteria->nama_kriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($kriterias as $kriteria)
                                        <td class="border text-center px-5 py-2">{{ $kriteria->bobot_kriteria }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Normalisasi -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200 overflow-y-auto">
                        <h3 class="text-xl font-semibold text-gray-900 leading-tight mt-5">Normalisasi</h3>
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="p-4">Nama Alternatif</th>
                                    @foreach ($kriterias as $kriteria)
                                        <th class="py-2 px-5">{{ $kriteria->nama_kriteria }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatifs as $alternatif)
                                    <tr>
                                        <td class="py-2 text-center">{{ $alternatif->nama_supplier }}</td>
                                        @foreach ($kriterias as $kriteria)
                                            <td class="py-2 text-center">
                                                {{ $alternatifValues[$alternatif->id][$kriteria->kode_kriteria] }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Hasil Perhitungan SAW -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200 overflow-y-auto">
                        <h3 class="text-xl font-semibold text-gray-900 leading-tight mt-5">Hasil Perhitungan SAW</h3>
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr>
                                    <th class="p-4">Nama Alternatif</th>
                                    <th class="p-4">Nilai SAW</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sawValues as $id => $nilaiSAW)
                                    <tr>
                                        <td class="py-2 text-center">{{ $alternatifs->find($id)->nama_supplier }}</td>
                                        <td class="py-2 text-center">{{ $nilaiSAW }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
