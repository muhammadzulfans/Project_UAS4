<?php 
namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function hitungSAW()
    {
        // Ambil data kriteria dan alternatif
        $kriteria = Kriteria::all();
        $alternatif = Alternatif::all();

        // Inisialisasi array untuk menyimpan nilai normalisasi
        $normalisasi = [];
        $preferensi = [];

        // Normalisasi nilai alternatif berdasarkan kriteria
        foreach ($kriteria as $k) {
            $values = $alternatif->pluck($k->nama_kriteria)->toArray();
            
            if ($k->type == 'benefit') {
                $maxValue = max($values);
                foreach ($alternatif as $alt) {
                    if (!isset($normalisasi[$alt->kode_alternatif])) {
                        $normalisasi[$alt->kode_alternatif] = [];
                    }
                    $normalisasi[$alt->kode_alternatif][$k->kode_kriteria] = $alt[$k->nama_kriteria] / $maxValue;
                }
            } else if ($k->type == 'cost') {
                $minValue = min($values);
                foreach ($alternatif as $alt) {
                    if (!isset($normalisasi[$alt->kode_alternatif])) {
                        $normalisasi[$alt->kode_alternatif] = [];
                    }
                    $normalisasi[$alt->kode_alternatif][$k->kode_kriteria] = $minValue / $alt[$k->nama_kriteria];
                }
            }
        }

        // Hitung nilai preferensi untuk setiap alternatif
        foreach ($alternatif as $alt) {
            $preferensi[$alt->kode_alternatif] = 0;
            foreach ($kriteria as $k) {
                if (isset($normalisasi[$alt->kode_alternatif][$k->kode_kriteria])) {
                    $preferensi[$alt->kode_alternatif] += $normalisasi[$alt->kode_alternatif][$k->kode_kriteria] * $k->bobot_kriteria;
                }
            }
        }

        // Sorting alternatif berdasarkan nilai preferensi
        arsort($preferensi);

        // Return hasil perhitungan
        return view('peringkat.hitung', compact('preferensi', 'alternatif', 'kriteria'));
    }
}
