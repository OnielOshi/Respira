@extends('layouts.adm')

@section('admcontent')
<div class="container mt-1">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Edit Gejala</h3>
            <form action="{{ route('gejala.update', $gejala->kode_gejala) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="kode_gejala" class="form-label">Kode Gejala</label>
                    <input type="text" name="kode_gejala" id="kode_gejala" class="form-control" value="{{ $gejala->kode_gejala }}">
                </div>
                <div class="mb-3">
                    <label for="nama_gejala" class="form-label">Gejala</label>
                    <input type="text" name="nama_gejala" id="nama_gejala" class="form-control" value="{{ $gejala->nama_gejala }}">
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection