@extends('layouts.adm')

@section('admcontent')
<div class="container mt-1">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">{{ __('Tambah Data Relasi') }}</h3>
            @if ($errors->any() || session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('relasi.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_stress" class="form-label">{{ __('Kode Tingkat Stress') }}</label>
                    <select name="kode_stress" id="kode_stress" class="form-control">
                        <option value="">{{ __('Pilih Kode') }}</option>
                        @foreach($stress as $item)
                            <option value="{{ $item->kode_stress }}" {{ old('kode_stress') == $item->kode_stress ? 'selected' : '' }}>{{ $item->kode_stress }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kode_gejala" class="form-label">{{ __('Kode Gejala') }}</label>
                    <select name="kode_gejala" id="kode_gejala" class="form-control">
                        <option value="">{{ __('Pilih Kode') }}</option>
                        @foreach($gejalas as $item)
                            <option value="{{ $item->kode_gejala }}" {{ old('kode_gejala') == $item->kode_gejala ? 'selected' : '' }}>{{ $item->kode_gejala }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mb" class="form-label">{{ __('MB') }}</label>
                    <input type="text" name="mb" id="mb" class="form-control" value="{{ old('mb') }}" required>
                </div>
                <div class="mb-3">
                    <label for="md" class="form-label">{{ __('MD') }}</label>
                    <input type="text" name="md" id="md" class="form-control" value="{{ old('md') }}" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">{{ __('Simpan') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection