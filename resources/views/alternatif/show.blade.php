@extends('layouts.app')

@section('title', 'Show Alternatif')

@section('contents')
    <h1 class="mb-0">Detail Alternatif</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode ALternatif</label>
            <input type="text" name="kode_alternatif" class="form-control" placeholder="Kode Alternatif" value="{{ $alternatif->kode_alternatif }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Ketersedian Fasilitas</label>
            <input type="text" name="ketersediaan_fasilitas" class="form-control" placeholder="Ketersedian Fasilitas" value="{{ $alternatif->ketersediaan_fasilitas }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kebutuhan Pelanggan</label>
            <input type="text" name="kebutuhan_pelanggan" class="form-control" placeholder="Kebutuhan Pelanggan" value="{{ $alternatif->kebutuhan_pelanggan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Kualitas Pelayanan</label>
            <input type="text" name="kualitas_pelayanan" class="form-control" placeholder="Kualitas Pelayanan" value="{{ $alternatif->kualitas_pelayanan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jarak Waktu</label>
            <input type="text" name="jarak_waktu" class="form-control" placeholder="Jarak Waktu" value="{{ $alternatif->jarak_waktu }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Biaya</label>
            <input type="text" name="biaya" class="form-control" placeholder="Biaya" value="{{ $alternatif->biaya }}" readonly>
        </div>
    </div>


    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $alternatif->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $alternatif->updated_at }}" readonly>
        </div>
    </div>
@endsection





