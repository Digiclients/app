@extends('layouts.master')

@push('third_party_stylesheets')
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/styles.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
@endpush

@section('_content')
    <div class="sb-nav-fixed">
        @include('layouts.admin.nav')
        <div id="layoutSidenav">
            @include('layouts.admin.sidebar')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('layouts.admin.footer')
            </div>
        </div>
    </div>
@endsection


@push('third_party_scripts')
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/admin/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/admin/js/datatables-simple-demo.js') }}"></script>
@endpush
