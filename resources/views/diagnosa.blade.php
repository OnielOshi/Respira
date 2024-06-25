@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1 class="fw-bold text-black">{{ __('Mulai Perjalanan Menuju Kebahagiaan') }}</h1>
        <h2 class="fw-semibold" style="color: #08254F">{{ __('Jawab pertanyaan diagnosa dan temukan solusinya') }}</h2>
    </div>
    <div class="container pb-3 rounded-4 p-3" style="background-color: #08254F">
        <div class="container pb-3 rounded-4">

            <form action="{{ route('diagnosa.process') }}" method="POST">
                @csrf
                {{-- Mulai looping --}}
                @foreach ($gejalas as $item)
                    <fieldset class="row mb-4 pt-3 rounded-4 text-white" style="background-color: #476986">
                        <legend class="col-form-label col-sm-10 text-center fs-5 mt-2">{{ $item->nama_gejala }}</legend>
                        <div class="col-sm-2 mb-3">
                            <div class="form-check">
                                <input class="form-check-input custom-checkbox-ya" type="radio" name="gejala[{{ $item->kode_gejala }}]"
                                    id="gejala_{{ $item->kode_gejala }}_1" value="iya"
                                    style="width: 1.5rem; height: 1.5rem; ">
                                <label class="form-check-label" for="{{ $item->kode_gejala }}"
                                    style="font-size: 1em; margin-left: 0.5em; margin-top: 0.1em;">{{ __('Ya') }}</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input custom-checkbox-no" type="radio" name="gejala[{{ $item->kode_gejala }}]"
                                    id="gejala_{{ $item->kode_gejala }}_2" value="tidak" checked
                                    style="width: 1.5rem; height: 1.5rem; margin-top:0.5em">
                                <label class="form-check-label" for="{{ $item->kode_gejala }}"
                                    style="font-size: 1em; margin-left: 0.5em; margin-top: 0.4em;">{{ __('Tidak') }}</label>
                            </div>
                        </div>
                    </fieldset>
                @endforeach
                <div class="row mb-4 mt-3 px-5">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary fs-5">{{ __('Selesai') }}</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
<style>
    .custom-checkbox-ya:checked {
        background-color: #08254F !important;
        border-color:  #08254F !important;
        box-shadow: none !important;
    }

    .custom-checkbox-no:checked {
        background-color: rgb(160, 0, 0) !important;
        border-color:  rgb(160, 0, 0) !important;
        box-shadow: none !important;
    }
</style>