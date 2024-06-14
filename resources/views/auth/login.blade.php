@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row">
        <!-- Kolom kiri -->
        <div class="col-md-7 p-5 d-flex justify-content-center align-items-center">
            <div class="p-5 rounded-4">
                <h1 class="display-5 fw-bold text-black">{{ __('Bebaskan Diri dari Stress') }}</h1>
                <h2 class="h3 fw-bold" style="color: #08254F;">{{ __('dan Raih Keberhasilan') }}</h2>
                <p class="lead fw-normal text-black"><p class="lead fw-normal">{{ __('Aplikasi ini membantu deteksi dini stress kerja, memberikan solusi untuk meningkatkan kesejahteraan dan produktivitas Anda.') }}</p></p>
            </div>
        </div>

        <!-- Kolom kanan -->
        <div class="col-md-5 p-3">
            <div class="p-5 rounded-4" style="background-image: url('{{ asset('build/assets/img/login_img.png') }}'); background-size: cover;">
                <div class="card rounded-4">
                    <div class="card-header text-center rounded-5 fw-bold" style="color: #08254F">{{ __('Masuk ke Akun Anda') }}</div>
                    <div class="card-body px-5" style="color: #08254F">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label pt-4">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
