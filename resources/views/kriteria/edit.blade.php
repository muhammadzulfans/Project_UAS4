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
                <label class="form-label">Kode Kriteria</label>
                <input type="text" name="kode_kriteria" class="form-control" placeholder="kriteria" value="{{ $kriteria->kode_kriteria }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Kriteria</label>
                <input type="text" name="nama_kriteria" class="form-control" placeholder="Nama" value="{{ $kriteria->nama_kriteria }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Bobot Kriteria</label>
                <input type="text" name="bobot_kriteria" class="form-control" placeholder="Bobot Kriteria" value="{{ $kriteria->bobot_kriteria }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Type</label>
                <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $kriteria->type }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection