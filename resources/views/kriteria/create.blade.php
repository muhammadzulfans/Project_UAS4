@extends('layouts.app')
  
@section('title', 'Create Kriteria')
  
@section('contents')
    <h1 class="mb-0">Add Kriteria</h1>
    <hr />
    <form action="{{ route('kriteria.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_kriteria" class="form-control" placeholder="Kode kriteria">
            </div>
            <div class="col">
                <input type="text" name="nama_kriteria" class="form-control" placeholder="Nama Kriteria">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <input type="text" name="bobot_kriteria" class="form-control" placeholder="Bobot Kriteria">
            </div>
            <div class="col">
                <input type="text" name="type" class="form-control" placeholder="Type">
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection 
