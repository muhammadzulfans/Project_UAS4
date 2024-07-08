@extends('layouts.app')

@section('title', 'Show Kriteria')

@section('contents')
    <h1 class="mb-0">Detail Kriteria</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode Kriteria</label>
            <input type="text" name="kode_kriteria" class="form-control" placeholder="Kode kriteria" value="{{ $kriteria->kode_kriteria }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Kriteria</label>
            <input type="text" name="nama_kriteria" class="form-control" placeholder="Nama Kriteria" value="{{ $kriteria->nama_kriteria }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Bobot Kriteria</label>
            <input type="text" name="bobot_kriteria" class="form-control" placeholder="Bobot Kriteria" value="{{ $kriteria->bobot_kriteria }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Type</label>
            <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $kriteria->type }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $kriteria->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $kriteria->updated_at }}" readonly>
        </div>
    </div>
@endsection