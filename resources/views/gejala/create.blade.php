@extends('layouts.adm')

@section('admcontent')
<div class="container mt-1">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">{{ __('Tambah Data Gejala') }}</h3>
            @if ($errors->any() || session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('gejala.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_gejala" class="form-label">{{ __('Kode Gejala') }}</label>
                    <input type="text" name="kode_gejala" id="kode_gejala" class="form-control" value="{{ old('kode_gejala') }}" required>
                </div>
                <div class="mb-3">
                    <label for="nama_gejala" class="form-label">{{ __('Gejala') }}</label>
                    <input type="text" name="nama_gejala" id="nama_gejala" class="form-control" value="{{ old('nama_gejala') }}" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">{{ __('Simpan') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection