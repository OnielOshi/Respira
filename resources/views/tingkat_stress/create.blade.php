@extends('layouts.adm')

@section('admcontent')
<div class="container mt-1">
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Tambah Data Tingkat Stress</h3>
                <form action="{{ route('tingkat_stress.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="kode_stress" class="form-label">Kode Tingkat Stress</label>
                        <input type="text" name="kode_stress" id="kode_stress" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nama_tingkat_stress" class="form-label">Tingkat Stress</label>
                        <input type="text" name="nama_tingkat_stress" id="nama_tingkat_stress" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection