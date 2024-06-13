@extends('layouts.app')

@section('content')
<div class="container mb-3">
    <h1 class="fw-bold">Mulai Perjalanan Menuju Kebahagiaan</h1>
    <h2 class="fw-semibold">Jawab pertanyaan diagnosa dan temukan solusinya</h2>
</div>
<div class="container pb-3 bg-secondary rounded-4">
    <div class="container pb-3 bg-secondary rounded-4">

    <form action="{{ route('diagnosa.process') }}" method="POST">
    @csrf
    {{-- Mulai looping --}}
    @foreach ($gejalas as $item)
    <fieldset class="row mb-1 pt-3 bg-dark-subtle rounded-4">
        <legend class="col-form-label col-sm-10 text-center fs-5">{{ $item->nama_gejala }}</legend>
        <div class="col-sm-2 mb-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gejala[{{ $item->kode_gejala }}]" id="gejala_{{ $item->kode_gejala }}_1" value="iya" checked>
                <label class="form-check-label" for="{{ $item->kode_gejala }}">Iya</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gejala[{{ $item->kode_gejala }}]" id="gejala_{{ $item->kode_gejala }}_2" value="tidak">
                <label class="form-check-label" for="{{ $item->kode_gejala }}">Tidak</label>
            </div>
        </div>
    </fieldset>
    @endforeach
    <div class="row mb-1 mt-3 px-5">
        <div class="col-sm-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary fs-5">Selesai</button>
        </div>
    </div>
</form>

    </div>
    
@endsection