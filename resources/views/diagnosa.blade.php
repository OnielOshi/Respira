@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1 class="fw-bold text-black">Mulai Perjalanan Menuju Kebahagiaan</h1>
    <h2 class="fw-semibold" style="color: #08254F">Jawab pertanyaan diagnosa dan temukan solusinya</h2>
</div>
<div class="container pb-3 rounded-4 p-3" style="background-color: rgb(218, 218, 218)">
    <div class="container pb-3 rounded-4">

        <form action="" method="POST">
            @csrf
            {{-- Mulai looping --}}
            {{-- @foreach ($gejalas as $item) --}}
                <fieldset class="row mb-1 pt-3 rounded-4" style="background-color: #08254F">
                    <legend class="col-form-label col-sm-10 text-center fs-5 text-white">apakek</legend>
                    <div class="col-sm-2 mb-3 text-white">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gejala1"
                                id="gejala_1" value="iya" checked>
                            <label class="form-check-label" for="gejala_1">Iya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gejala2"
                                id="gejala_2" value="tidak">
                            <label class="form-check-label" for="gejala__2">Tidak</label>
                        </div>
                    </div>
                </fieldset>
            {{-- @endforeach --}}
            <div class="row mb-1 mt-3 px-5">
                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary fs-5">Selesai</button>
                </div>
            </div>
        </form>
    </div>
    
@endsection