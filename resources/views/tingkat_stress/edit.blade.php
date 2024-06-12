@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h1 class="card-title text-center mb-4">Edit Tingkat Stress</h1>
                <form action="{{ route('tingkat_stress.update', $tingkatStress->kode_stress) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="kode_stress" class="form-label">Kode Tingkat Stress</label>
                        <input type="text" name="kode_stress" id="kode_stress" class="form-control" value="{{ $tingkatStress->kode_stress }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama_tingkat_stress" class="form-label">Tingkat Stress</label>
                        <input type="text" name="nama_tingkat_stress" id="nama_tingkat_stress" class="form-control" value="{{ $tingkatStress->nama_tingkat_stress }}">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ $tingkatStress->keterangan }}">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection