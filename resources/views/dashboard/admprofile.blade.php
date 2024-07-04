@extends('layouts.adm')

@section('admcontent')
    <div class="container">
        <div class="pagetitle">
            <h1>Profile</h1>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-lg-4">

                    <div class="card rounded-4">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="build/assets/img/{{ $user->foto }}" alt="Profile" class="rounded-circle mb-4">
                            <h2 class="mb-4">{{ $user->name }}</h2>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">

                    <div class="card rounded-4">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">{{ __('Overview') }}</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">{{ __('Edit
                                        Profile')}}</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">{{ __('Change Password') }}</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title">{{ __('Profile Details') }}</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">{{ __('Full Name') }}</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">{{ __('Phone') }}</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->notelp }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">{{ __('Email') }}</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form action="{{ route('profile.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">{{ __('Profile
                                                Image')}}</label>
                                            <div class="col-md-8 col-lg-9">
                                                @if ($user->foto)
                                                    <img src="{{ asset('build/assets/img/' . $user->foto) }}" alt="Profile Image"
                                                        width="100">
                                                @else
                                                    <img src="build/assets/img/profile-img.jpg" alt="Profile Image">
                                                @endif
                                                <div class="pt-2">
                                                    <input type="file" name="foto" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-lg-3 col-form-label">{{ __('Full
                                                Name')}}</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="name"
                                                    value="{{ $user->name }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">{{ __('Phone') }}</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="notelp" type="text" class="form-control" id="notelp"
                                                    value="{{ $user->notelp }}" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">{{ __('Email') }}</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email"
                                                    value="{{ $user->email }}" required>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-settings">

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form method="POST" action="{{ route('profile.changePassword') }}">
                                        @csrf
                                        @method('PUT')
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="newpassword" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="newpassword" type="password" class="form-control mb-3 @error('newpassword') is-invalid @enderror" name="newpassword" required autocomplete="new-password">
                
                                                @error('newpassword')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="newpassword_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="newpassword_confirmation" type="password" class="form-control mb-3" name="newpassword_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Change Password') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
@endsection
