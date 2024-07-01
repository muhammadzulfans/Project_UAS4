@extends('layouts.app')
  
@section('title', 'Edit Kriteria')
  
@section('contents')
    <h1 class="mb-0">Edit Kriteria</h1>
    <hr />
    <form action="{{ route('kriteria.update', $kriteria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kode Alternatif</label>
                <input type="text" name="kode_alternatif" class="form-control" placeholder="Kode Alternatif" value="{{ $kriteria->kode_alternatif }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Ketersediaan Fasilitas</label>
                <input type="text" name="ketersediaan_fasilitas" class="form-control" placeholder="Ketersediaan Fasilitas" value="{{ $kriteria->ketersediaan_fasilitas }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kebutuhan Pelanggan</label>
                <input type="text" name="kebutuhan_pelanggan" class="form-control" placeholder="Kebutuhan Pelanggan" value="{{ $kriteria->kebutuhan_pelanggan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Kualitas Pelayanan</label>
                <input type="text" name="kualitas_pelayanan" class="form-control" placeholder="Kualitas Pelayanan" value="{{ $kriteria->kualitas_pelayanan }}" >
            </div>
        </div>
        <div class="row mb-3">
            <div class="col mb-3">
                <label class="form-label">Jarak Waktu</label>
                <input type="text" name="jarak_waktu" class="form-control" placeholder="Jarak Waktu" value="{{ $kriteria->jarak_waktu }}" >
            </div>
            <div class="col-6">
                <label class="form-label">Biaya</label>
                <input type="text" name="biaya" class="form-control" placeholder="Biaya" value="{{ $kriteria->biaya }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection

