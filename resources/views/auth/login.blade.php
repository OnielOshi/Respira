@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row">
        <!-- Kolom kiri -->
        <div class="col-md-7 p-5 d-flex justify-content-center align-items-center">
            <div class="p-5 rounded-4">
                <h1 class="display-5 fw-bold">{{ __('Bebaskan Diri dari Stress') }}</h1>
                <h2 class="h3 fw-bold">{{ __('dan Raih Keberhasilan') }}</h2>
                <p class="lead fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor justo a dolor ornare, eget maximus turpis tincidunt.</p>
            </div>
        </div>

        <!-- Kolom kanan -->
        <div class="col-md-5 p-3">
            <div class="p-5 rounded-4" style="background-image: url('{{ asset('build/assets/img/login_img.png') }}'); background-size: cover;">
                <div class="card rounded-4">
                    <div class="card-header text-center rounded-5 fw-bold">{{ __('Masuk ke Akun Anda') }}</div>
                    <div class="card-body px-5">
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

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="text-center">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
