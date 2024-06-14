<div class="container-fluid fixed-top">
    <nav class="navbar navbar-expand-lg rounded-5 mt-3 p-3" style="background-color: #08254F">
        <div class="container-fluid d-flex justify-content-between align-items-center">

            <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}" style="color: white">Respira</a>

            <!-- Toggle button untuk menu responsif -->
            <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span style="color: white;">{{ __('Menu') }}</span>
            </button>


            <!-- Menu navigasi -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto fw-bold">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{ route('dashboard') }}" style="color: white">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{ route('tingkat_stress.index') }}" style="color: white">{{ __('Tingkat Stress') }}</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{ route('gejala.index') }}" style="color: white">{{ __('Gejala') }}</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="{{ route('relasi.index') }}" style="color: white">{{ __('Relasi') }}</a>
                    </li>

                </ul>

                <ul class="navbar-nav fw-bold">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item mx-2">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item mx-2">
                                <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown mx-2 fw-bold">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Profile') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
