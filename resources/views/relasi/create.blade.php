@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h1 class="card-title text-center mb-4">Tambah Data Relasi</h1>
            <form action="{{ route('relasi.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="kode_stress" class="form-label">Kode Tingkat Stress</label>
                    <select name="kode_stress" id="kode_stress" class="form-control">
                    <option value="">Pilih Kode</option>
                        @foreach($stress as $item)
                            <option value="{{ $item->kode_stress }}">{{ $item->kode_stress }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kode_gejala" class="form-label">Kode Gejala</label>
                    <select name="kode_gejala" id="kode_gejala" class="form-control">
                    <option value="">Pilih Kode</option>
                        @foreach($gejalas as $item)
                            <option value="{{ $item->kode_gejala }}">{{ $item->kode_gejala }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="mb" class="form-label">MB</label>
                    <input type="text" name="mb" id="mb" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="md" class="form-label">MD</label>
                    <input type="text" name="md" id="md" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection