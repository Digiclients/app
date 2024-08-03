@extends('layouts.app')
@push('third_party_stylesheets')

@endpush

@section('content')
   
<br><br><br>

<section class="ADS px-4 m-5 px-xl-0 pt-5 mt-5 container-fluid row justify-content-center" style="width: 98%;margin: 0 auto;">

        <div class="col-lg-12 col-xl-11 col-xxl-9 py-5 bgLight rounded row px-3 text-center">


        <img class="mx-auto d-block img-fluid w-25" src="{{ asset('assets/images/maintenance.svg') }}" alt="maintenance">

        <h1 class="darkcolor font35 fontw900 m-0 pt-5">En Maintenance ! 🚧</h1>
        <p class="darkcolor font18 fontw600 m-0">Désolé pour le désagrément, mais nous effectuons actuellement des travaux de maintenance.</p>
        <div>
            <button type="submit" class="primarybtn  my-3 minibtn mx-auto">Retour à l'accueil</button>

        </div>


        </div>
    </section>

<br><br>


@endsection



@push('third_party_scripts')

@endpush
