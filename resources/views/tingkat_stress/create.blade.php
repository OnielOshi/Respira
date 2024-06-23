@extends('layouts.adm')

@section('admcontent')
<div class="container mt-1">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">{{ __('Tambah Data Tingkat Stress') }}</h3>
            @if ($errors->any() || session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('tingkat_stress.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_stress" class="form-label">{{ __('Kode Tingkat Stress') }}</label>
                    <input type="text" name="kode_stress" id="kode_stress" class="form-control" value="{{ old('kode_stress') }}">
                </div>
                <div class="mb-3">
                    <label for="nama_tingkat_stress" class="form-label">{{ __('Tingkat Stress') }}</label>
                    <input type="text" name="nama_tingkat_stress" id="nama_tingkat_stress" class="form-control" value="{{ old('nama_tingkat_stress') }}">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">{{ __('Keterangan') }}</label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ old('keterangan') }}">
                </div>
                <button type="submit" class="btn btn-primary w-100">{{ __('Simpan') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
