@extends('layouts.app')

@section('title', 'Dashboard - Laravel Admin Panel With Login and Registration')

@section('contents')
    <div class="container py-5">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kriteria') }}
        </h2>
        <hr />

        <form action="{{ route('kriteria.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="kode_kriteria" class="form-label">Kode Kriteria</label>
                <input type="text" name="kode_kriteria" id="kode_kriteria" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="nama_kriteria" class="form-label">Nama Kriteria</label>
                <input type="text" name="nama_kriteria" id="nama_kriteria" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="bobot_kriteria" class="form-label">Bobot Kriteria</label>
                <input type="number" step="any" name="bobot_kriteria" id="bobot_kriteria" class="form-control" required />
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select name="type" id="type" class="form-select" required>
                    <option value="" disabled selected>Select Type</option>
                    <option value="Benefit">Benefit</option>
                    <option value="Cost">Cost</option>
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Tambah Kriteria</button>
            </div>
        </form>
    </div>
@endsection
