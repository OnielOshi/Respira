@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center mt-4">
                <h1 class="display-4 font-weight-bold" style="color: #090909;">{{ __('Bebaskan Diri dari Stress') }}</h1>
                <h2 class="display-4 font-weight-bold" style="color: #08254F;">{{ __('dan Raih Keberhasilan') }}</h2>
            </div>
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col-md-3">
                    <img src="{{ asset('build/assets/img/banner-4.png') }}"
                        class="img-fluid rounded" alt="Image 1" style="object-fit: cover;" >
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('build/assets/img/banner-2.png') }}"
                        class="img-fluid rounded" alt="Image 2" style="object-fit: cover;">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('build/assets/img/banner-1.png') }}"
                        class="img-fluid rounded" alt="Image 3">
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('diagnosa') }}" class="btn btn-primary custom-btn" style="color: #ffffff;">
                    {{ __('Periksa Sekarang') }}
                </a>
            </div>
            <div class="row mt-5 align-items-center custom-bg"
                style="background-color: #f0f0f0; padding: 20px; border-radius: 10px;">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('build/assets/img/mental.png') }}"
                        class="img-fluid rounded mb-3" alt="Mental Health Image 1">
                </div>
                <div class="col-md-8">
                    <h2 class="font-weight-bold" style="color: #08254F">{{ __('Mengapa kesehatan mental itu penting?') }}</h2>
                    <p style="color: #333;">
                        {{ __('Jangan biarkan stres mengendalikan hidup Anda. Lakukan diagnosa dan komunikasikan.
                        Kami siap membantu Anda mengatasi stres dan mencapai kehidupan yang lebih bahagia dan lebih
                        sehat.')}}
                    </p>
                </div>
            </div>
            <div class="text-center mt-5">
                <h2 class="font-weight-bold" style="color: #08254F;">{{ __('Respira') }}</h2>
                <h3 class="font-weight-bold" style="color: #08254F;">{{ __('hadir untuk membantu') }}</h3>
                <p style="color: #000;">{{ __('kami memberikan dukungan untuk berbagai tantangan yang dihadapi') }}</p>
            </div>
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('build/assets/img/diagnosa.png') }}"
                            class="card-img-top rounded-top" alt="Diagnosa Image">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold" style="color: #08254F;">{{ __('Diagnosa') }}</h5>
                            <p class="card-text">{{ __('Layanan ini dapat membantu Anda dalam mendeteksi dini Stress.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset('build/assets/img/riwayat.png') }}"
                            class="card-img-top rounded-top" alt="Riwayat Image">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold" style="color: #08254F;">{{ __('Riwayat') }}</h5>
                            <p class="card-text">{{ __('Layanan ini dapat membantu Anda untuk melihat riwayat diagnosa.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="container" style="background-color: #f0f0f0;">
                    <div class="text-center " style="background-color: #f0f0f0; padding: 20px; border-radius: 10px;">
                        <h2 class="font-weight-bold" style="color: #08254F;">{{ __('Kenali Tingkatan Stress Anda') }}</h2>
                        <p style="color: #08254F;">{{ __('Pahami level stress Anda dan temukan cara mengatasinya.') }}</p>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-3 mb-3">
                            <div class="card text-center shadow-sm pt-3">
                                <div class="card-body">
                                    <img src="{{ asset('build/assets/img/stress-2.png') }}"
                                        class="img-fluid mb-3" alt="Stress Rendah">
                                    <h5 class="card-title font-weight-bold"
                                        style="color: #ffffff; background-color: #08254F; padding: 10px; border-radius: 10px;">
                                        {{ __('Stress Rendah') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card text-center shadow-sm pt-3">
                                <div class="card-body">
                                    <img src="{{ asset('build/assets/img/stress-1.png') }}" class="img-fluid mb-3" alt="Stress Menengah">
                                    <h5 class="card-title font-weight-bold"
                                        style="color: #ffffff; background-color: #08254F; padding: 10px; border-radius: 10px;">
                                        {{ __('Stress Menengah') }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card text-center shadow-sm pt-3">
                                <div class="card-body">
                                    <img src="{{ asset('build/assets/img/stress-3.png') }}" class="img-fluid mb-3" alt="Stress Tinggi">
                                    <h5 class="card-title font-weight-bold"
                                        style="color: #ffffff; background-color: #08254F; padding: 10px; border-radius: 10px;">
                                        {{ __('Stress Tinggi') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .custom-btn {
        background-color: #08254f;
        color: white;
        font-family: "Poppins", sans-serif;
        font-weight: bold;
        font-size: 1.5rem;
        padding: 0.5rem 1.5rem;
        border-radius: 50px;
        border: none;
        position: relative;
        display: inline-flex;
        align-items: center;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }

    .custom-btn:hover {
        background-color: #08254f;
    }

    .custom-btn .btn-icon {
        background-color: #e0e0e0;
        color: #08254f;
        border-radius: 50%;
        padding: 0.5rem;
        margin-left: 0.5rem;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }

    .custom-bg {
        background-size: cover;
        background-position: center;
        padding: 20px;
        border-radius: 10px;
    }

    .text-justify {
        text-align: justify;
    }

    .card {
        border-radius: 10px;
    }

    .card-img-top {
        border-radius: 10px 10px 0 0;
    }

    @media (max-width: 768px) {
        .custom-btn {
            font-size: 1.2rem;
            /* Smaller font size on smaller screens */
            padding: 0.5rem 1rem;
            /* Adjusted padding for smaller screens */
        }

        .custom-btn .btn-icon {
            padding: 0.4rem;
        }
    }
</style>
