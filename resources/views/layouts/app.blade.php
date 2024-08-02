@extends('layouts.master')

@push('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/styles/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/inputs.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        /* Add some CSS to style the loader */
        #loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
    </style>
@endpush

@section('_content')
    <div id="loader">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div id="content" style="display:none;">
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')
    </div>
@endsection


@push('third_party_scripts')
    <script>
        // Use JavaScript to hide the loader once the page is fully loaded
        window.addEventListener('load', function() {
            document.getElementById('loader').style.display = 'none';
            document.getElementById('content').style.display = 'block';
        });
    </script>
    <script src="{{ asset('assets/scripts/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/inputs.js') }}"></script>
    <script src="{{ asset('assets/scripts/navbar.js') }}"></script>
    <script src="{{ asset('assets/scripts/scripts.js') }}"></script>
@endpush
