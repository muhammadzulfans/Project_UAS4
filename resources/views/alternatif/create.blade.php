@extends('layouts.app')
  
@section('title', 'Create Alternatif')
  
@section('contents')
    <h1 class="mb-0">Add Alternatif</h1>
    <hr />
    <form action="{{ route('alternatif.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_alternatif" class="form-control" placeholder="Kode Alternatif">
            </div>
            <div class="col">
                <input type="text" name="ketersediaan_fasilitas" class="form-control" placeholder="Ketersediaan Fasilitas">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kebutuhan_pelanggan" class="form-control" placeholder="Kebutuhan Pelanggan">
            </div>
            <div class="col-6">
                <input type="text" name="kualitas_pelayanan" class="form-control" placeholder="Kualitas Pelayanan">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <input type="text" name="jarak_waktu" class="form-control" placeholder="jarak Waktu">
            </div>
            <div class="col-6">
                <input type="text" name="biaya" class="form-control" placeholder="Biaya">
            </div>
        </div>


        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection 






