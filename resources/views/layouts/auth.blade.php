@extends('layouts.master')

@push('third_party_stylesheets')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/styles/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/home.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/styles/test.css') }}"> --}}
@endpush
@section('_content')
    {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
    </nav> --}}

    @include('layouts.nav')
    {{-- <nav class="navbar FrontNavbar navbar-expand-lg fixed-top navbar-light bg-light ">
        <div class="container-fluid  col-lg-12 col-xl-11 col-xxl-9">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mx-auto  NavBarLogo" href="{{ url('/') }}">AutoPrix</a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav ms-auto" id="offcanvasNavbarContent">
                        <!-- Navbar content will be copied here by JavaScript -->
                    </ul>
                </div>
            </div>
        </div>
    </nav> --}}
    @yield('content')
@endsection



@push('third_party_scripts')
    <script src="{{ asset('assets/scripts/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/scripts.js') }}"></script>

    <!-- START USE THIS FILE ONLY IN LOGIN AND REGISTER PAGES -->
    <script src="{{ asset('assets/scripts/loginANDregister.js') }}"></script>
    <!-- END USE THIS FILE ONLY IN LOGIN AND REGISTER PAGES -->
@endpush
