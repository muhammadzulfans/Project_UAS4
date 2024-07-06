<!DOCTYPE html>
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
</html>
