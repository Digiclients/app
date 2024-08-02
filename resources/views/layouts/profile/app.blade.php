@extends('layouts.master')

@push('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/styles/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/inputs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/profileStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/anounce.css') }}">
@endpush

@section('_content')
    @include('layouts.nav')

    @include('layouts.profile.sidbar') <!-- Pass the $active variable here -->

    @include('layouts.footer')
@endsection


@push('third_party_scripts')
    <script src="{{ asset('assets/scripts/iconify-icon.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/inputs.js') }}"></script>
    <script src="{{ asset('assets/scripts/scripts.js') }}"></script>
@endpush
