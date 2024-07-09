@extends('layouts.app')

@section('title', 'Dashboard - Laravel Admin Panel With Login and Registration')

@section('contents')
    <div class="container py-5">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Alternatif') }}
        </h2>
        <hr />

        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session('success') }}
            </div>
        @endif

        <form action="{{ route('alternative.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <div class="col">
                    <label for="nama_supplier" class="form-label">Nama Alternatif</label>
                    <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" required />
                </div>
            </div>

            @foreach ($kriteria as $k)
                <div class="row mb-3">
                    <div class="col">
                        <label for="{{ 'C' . $loop->index + 1 }}" class="form-label">{{ 'C' . $loop->index + 1 . '-' . $k->nama_kriteria }}</label>
                        <input type="text" name="{{ 'C' . $loop->index + 1 }}" id="{{ 'C' . $loop->index + 1 }}" class="form-control" required />
                    </div>
                </div>
            @endforeach

            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Tambah Alternatif</button>
                </div>
            </div>
        </form>
    </div>
@endsection
