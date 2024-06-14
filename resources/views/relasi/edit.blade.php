@extends('layouts.adm')

@section('admcontent')
<div class="container mt-1">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">{{ __('Edit Relasi') }}</h3>
            <form action="{{ route('relasi.update', $relasi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="kode_stress" class="form-label">{{ __('Kode Tingkat Stress') }}</label>
                    <select name="kode_stress" id="kode_stress" class="form-control">
                        @foreach($stress as $item)
                            <option value="{{ $item->kode_stress }}" {{ $item->kode_stress == $relasi->kode_stress ? 'selected' : '' }}>{{ $item->kode_stress }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kode_gejala" class="form-label">{{ __('Kode Gejala') }}</label>
                    <select name="kode_gejala" id="kode_gejala" class="form-control">
                        @foreach($gejalas as $item)
                            <option value="{{ $item->kode_gejala }}" {{ $item->kode_gejala == $relasi->kode_gejala ? 'selected' : '' }}>{{ $item->kode_gejala }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mb" class="form-label">{{ __('MB') }}</label>
                    <input type="text" name="mb" id="mb" class="form-control" value="{{ $relasi->mb }}">
                </div>
                <div class="mb-3">
                    <label for="md" class="form-label">{{ __('MD') }}</label>
                    <input type="text" name="md" id="md" class="form-control" value="{{ $relasi->md }}">
                </div>
                <button type="submit" class="btn btn-primary w-100">{{ __('Simpan') }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
