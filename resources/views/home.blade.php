{{-- @dd($error) --}}
@extends('layouts.app')
@push('third_party_stylesheets')
    <style>
        .input-container {
            position: relative;
        }

        .close-icon,
        .down-icon {
            position: absolute;
            right: 18px;
            top: 44%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #ccc;
            /* Adjust the color as needed */
        }

        .close-icon {
            display: block;
            /* Hide initially */
        }

        .down-icon {
            display: none;
            /* Show initially */
        }

        .input-container input:focus+.close-icon {
            display: block;
            /* Show the close icon when the input is focused */
        }

        .input-container input:focus+.close-icon+.down-icon {
            display: none;
            /* Hide the down icon when the input is focused */
        }

        .close-icon:hover,
        .down-icon:hover {
            color: #000;
            /* Change color on hover */
        }
    </style>

    <style>
        /* Tooltip container */
        .tooltip-container {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        /* Tooltip text */
        .tooltip-text {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            /* Position the tooltip above the icon */
            left: 50%;
            margin-left: -60px;
            /* Center the tooltip */
            opacity: 0;
            transition: opacity 0.3s;
        }

        /* Show the tooltip on hover */
        .tooltip-container:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }

        /* Success message style */
        .tooltip-container.success .tooltip-text {
            background-color: green;
        }
    </style>


    <style>
        .dropdown-item {
            transition: .4s ease-in-out;
        }

        .dropdown-item:hover {
            cursor: pointer !important;
            background-color: aliceblue !important;
            border-radius: 10px !important;
        }
    </style>
@endpush

@section('content')
    <!-- START ADS -->
    <br>
    <section class="ADS px-4 px-xl-0 pt-5 mt-5 container-fluid row justify-content-center" style="width: 98%;margin: 0 auto;">

        <div class="col-lg-12 col-xl-11 col-xxl-9 py-5 bgLight rounded row px-3 text-center">


            <p class="LightGrayColor font35 fontw900 m-0 pt-5">LautoPrix</p>
            <p class="LightGrayColor font20 fontw900 m-0  pb-5">publicité</p>


        </div>
    </section>

    <!-- END ADS -->
    <!-- START AverageSearch And Average Result -->





    <section id="PrixMoyen" class="AverageSearch px-4 px-xl-0 py-5 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 bgLight rounded  p-4">

            <div class="TheHeading text-center py-4">

                <h1 class="darkcolor fontwbold font30">Obtenir le prix moyen actuel pour vendre ou acheter votre voiture</h1>
                {{-- <p class="darkcolor font18 fontw600 m-0">Une analyse des Moyennes de </p>
                <p class="primarycolor font30 fontw900 m-0">842 985</p>
                <p class="darkcolor font18 fontw600 m-0">prix d'annonces à travers la France.</p> --}}
            </div>



            <div class="bgwhite my-5 py-5 rounded">
                <div id="validationAlert"
                    class="text-center alert alert-danger container col-sm-9 col-md-6 d-none text-center" role="alert">
                    @if (session('error'))
                        {{ session('error') }}
                    @endif
                </div>

                <form id="filterForm" action="{{ route('home') }}" method="GET" onsubmit="buildQueryString(event)">
                    <div class="container">
                        <div class="d-flex justify-content-center row d-grid gap-3">
                            <div class="autocompleteInput input-container col-sm position-relative">
                                <input type="text" data-array="location" name="location"
                                    class="form-control @error('location') is-invalid @enderror" placeholder="localisation"
                                    readonly value="{{ request()->input('location') }}">
                                <iconify-icon icon="material-symbols:close" width="24" height="24"
                                    class="close-icon position-absolute"></iconify-icon>
                                <iconify-icon icon="mingcute:down-fill" width="24" height="24"
                                    class="down-icon position-absolute"></iconify-icon>
                                <ul class="dropdown-menu w-100 " style="padding: 0;">
                                    <div class="sticky-container">
                                        <div class="search-container">
                                            <input id="searchCities" type="text" class="form-control search-input"
                                                placeholder="Rechercher un lieu">
                                        </div>
                                    </div>

                                    <div id="searchResults" class="model-list" style="padding: 10px;">
                                        <!-- Location items will be dynamically inserted here -->
                                    </div>
                                </ul>
                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Marque --}}
                            <div class="SearchandCheck  input-container col-sm position-relative">
                                <input type="text" data-array="marque" name="marque"
                                    class="form-control @error('marque') is-invalid @enderror" placeholder="Marque" readonly
                                    value="{{ request()->input('marque') }}">
                                <iconify-icon icon="material-symbols:close" width="24" height="24"
                                    class="close-icon position-absolute"></iconify-icon>
                                <iconify-icon icon="mingcute:down-fill" width="24" height="24"
                                    class="down-icon position-absolute"></iconify-icon>
                                <ul class="dropdown-menu w-100 " style="padding: 0;">
                                    <div class="sticky-container">
                                        <div class="search-container">
                                            <input type="text" class="form-control search-input"
                                                placeholder="Rechercher un modèle">
                                        </div>
                                        <div class="badge-container">
                                            <!-- Selected models will appear here as badges -->
                                        </div>
                                    </div>
                                    <div id="marques" class="model-list" style="padding: 10px;">
                                        <!-- Model items will be dynamically inserted here -->
                                    </div>
                                </ul>
                                @error('marque')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Modele --}}
                            <div class="SearchandCheck SearchandCheck-models col-sm input-container position-relative">
                                <input type="text" data-array="modele" name="modele"
                                    class="form-control @error('modele') is-invalid @enderror" placeholder="Modèle" readonly
                                    value="{{ request()->input('modele') }}">
                                <iconify-icon icon="material-symbols:close" width="24" height="24"
                                    class="close-icon position-absolute"></iconify-icon>
                                <iconify-icon icon="mingcute:down-fill" width="24" height="24"
                                    class="down-icon position-absolute"></iconify-icon>
                                <ul class="dropdown-menu w-100 " style="padding: 0;">
                                    <div class="sticky-container">
                                        <div class="search-container">
                                            <input type="text" class="form-control search-input"
                                                placeholder="Rechercher un modèle">
                                        </div>
                                        <div class="badge-container">
                                            <!-- Selected models will appear here as badges -->
                                        </div>
                                    </div>
                                    <div id="models" class="model-list" style="padding: 10px;">
                                        <!-- Model items will be dynamically inserted here -->
                                    </div>
                                </ul>
                                @error('modele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-center my-2 row d-grid gap-3">
                            {{-- annee modele --}}
                            <div class="MaxMin input-container col-sm position-relative">
                                <input type="text" name="annee_modele"
                                    class="form-control @error('annee_modele') is-invalid @enderror"
                                    placeholder="année modèle" readonly value="{{ request()->input('annee_modele') }}">
                                <iconify-icon icon="material-symbols:close" width="24" height="24"
                                    class="close-icon position-absolute"></iconify-icon>
                                <iconify-icon icon="mingcute:down-fill" width="24" height="24"
                                    class="down-icon position-absolute"></iconify-icon>
                                <ul class="dropdown-menu w-100 p-2">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">Min</span>
                                        <input type="number" class="form-control min-input" id="annee_modele"
                                            placeholder="Min" min="1900">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">Max</span>
                                        <input type="number" class="form-control max-input" placeholder="Max">
                                    </div>
                                    <button type="button" class="btn btn-primary mt-2 apply-btn">Appliquer</button>
                                </ul>
                                @error('modele')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- carburant --}}
                            <div class="SearchandCheck input-container col-sm position-relative">
                                <input type="text" data-array="carburant" name="carburant"
                                    class="form-control @error('carburant') is-invalid @enderror" placeholder="Carburant"
                                    readonly value="{{ request()->input('carburant') }}">
                                <iconify-icon icon="material-symbols:close" width="24" height="24"
                                    class="close-icon position-absolute"></iconify-icon>
                                <iconify-icon icon="mingcute:down-fill" width="24" height="24"
                                    class="down-icon position-absolute"></iconify-icon>
                                <ul class="dropdown-menu w-100" style="padding: 0;">
                                    <div class="sticky-container">
                                        <div class="search-container">
                                            <input type="text" class="form-control search-input"
                                                placeholder="Rechercher un modèle">
                                        </div>
                                        <div class="badge-container">
                                            <!-- Selected carburant will appear here as badges -->
                                        </div>
                                    </div>
                                    <div class="model-list" style="padding: 10px;">
                                        <!-- carburant items will be dynamically inserted here -->
                                    </div>
                                </ul>
                                @error('carburant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Boite de vitesse --}}
                            <div class="SearchandCheck input-container col-sm position-relative">
                                <input type="text" data-array="boiteVitesse" name="boite_vitesse"
                                    class="form-control @error('boite_vitesse') is-invalid @enderror"
                                    placeholder="Boite de vitesse" readonly
                                    value="{{ request()->input('boite_vitesse') }}">
                                <iconify-icon icon="material-symbols:close" width="24" height="24"
                                    class="close-icon position-absolute"></iconify-icon>
                                <iconify-icon icon="mingcute:down-fill" width="24" height="24"
                                    class="down-icon position-absolute"></iconify-icon>
                                <ul class="dropdown-menu w-100" style="padding: 0;">
                                    <div class="sticky-container">
                                        <div class="search-container">
                                            <input type="text" class="form-control search-input"
                                                placeholder="Rechercher un modèle">
                                        </div>
                                        <div class="badge-container">
                                            <!-- Selected boite-vitesse will appear here as badges -->
                                        </div>
                                    </div>
                                    <div class="model-list" style="padding: 10px;">
                                        <!-- boite-vitesse items will be dynamically inserted here -->
                                    </div>
                                </ul>
                                @error('boite_vitesse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Kilométrage --}}
                            <div class="MaxMin input-container col-sm position-relative">
                                <input type="text" name="kilometrage"
                                    class="form-control @error('kilometrage') is-invalid @enderror"
                                    placeholder="Kilométrage" readonly value="{{ request()->input('kilometrage') }}">
                                <iconify-icon icon="material-symbols:close" width="24" height="24"
                                    class="close-icon position-absolute"></iconify-icon>
                                <iconify-icon icon="mingcute:down-fill" width="24" height="24"
                                    class="down-icon position-absolute"></iconify-icon>
                                <ul class="dropdown-menu w-100 p-2">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">Min</span>
                                        <input type="number" class="form-control min-input" placeholder="Min"
                                            min="1000" max="1000000">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">Max</span>
                                        <input type="number" class="form-control max-input" placeholder="Max">
                                    </div>
                                    <button type="button" class="btn btn-primary mt-2 apply-btn">Appliquer</button>
                                </ul>
                                @error('kilometrage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <button type="submit" class="primarybtn d-block mx-auto">Obtenir le prix moyen</button>
                </form>
            </div>
            @if (isset($priceStatistics))
                <div class="bgwhite my-5 py-5 rounded" id="averageStatistics">
                    @if ($priceStatistics->count <= 0)
                        <p class="text-center font18 darkcolor"> Nous n'avons actuellement pas cette configuration dans
                            notre base de données </p>
                    @else
                        <p class="text-center font18 darkcolor"> Ce prix moyen a été extrait de
                            <span>{{ $priceStatistics->count }}</span>
                        </p>

                        {{-- result without min --}}
                        <div class="row ThePriceResults text-center mb-4 col-md-9  mx-auto">
                            <div class="pt-2 pb-2">
                                <p class="m-0  darkcolor fontwbold font26">Prix</p>
                                <p class="m-0 primarycolor fontwbold font26">Moyen</p>
                                <p class="m-0 darkcolor fontwbold font30">
                                    {{ number_format($priceStatistics->avg_price, 2, ',', ' ') }} €</p>
                            </div>
                            <hr class="LineHR">
                            <div class="pt-2 pb-2">
                                <p class="m-0 darkcolor fontwbold font22">Prix</p>
                                <p class="m-0 orangecolor fontwbold font24">Maximum</p>
                                <p class="m-0 darkcolor fontwbold font24">
                                    {{ number_format($priceStatistics->max_price, 2, ',', ' ') }} €</p>
                            </div>
                        </div>
                        <h4 class="darkcolor font18 fontw600 text-center">Partagez les résultats avec vos clients ou amis
                            <br>
                            et
                            révélez à 100% le prix moyen réel de n'importe quelle voiture.
                        </h4>

                        <div class="d-flex gap-3 justify-content-center mt-4">
                            {{-- <a href="" id="shareable-link-button">
                            <iconify-icon icon="solar:copy-linear" class="darkcolor HoverColorToPrimary" height="30px"
                                style="width: 30px;height: 30px;">
                            </iconify-icon>
                        </a> --}}
                            <a href="" id="shareable-link-button" class="tooltip-container">
                                <iconify-icon icon="solar:copy-linear" class="darkcolor HoverColorToPrimary"
                                    height="30px" style="width: 30px;height: 30px;"></iconify-icon>
                                <span class="tooltip-text" id="tooltip-text">Copy</span>
                            </a>

                            <a href="">
                                <iconify-icon icon="mdi-light:email" class="darkcolor HoverColorToPrimary" height="30px"
                                    style="width: 30px;height: 30px;"></iconify-icon>
                            </a>
                            <a href="">
                                <iconify-icon icon="pajamas:twitter" class="darkcolor HoverColorToPrimary" height="30px"
                                    style="width: 30px;height: 30px;"></iconify-icon>
                            </a>
                            <a href="">
                                <iconify-icon icon="mdi:instagram" class="darkcolor HoverColorToPrimary" height="30px"
                                    style="width: 30px;height: 30px;"></iconify-icon>
                            </a>

                            <a href="">
                                <iconify-icon icon="mdi:linkedin" class="darkcolor HoverColorToPrimary" height="30px"
                                    style="width: 30px;height: 30px;"></iconify-icon>
                            </a>
                            <a href="">
                                <iconify-icon icon="jam:facebook-circle" class="darkcolor HoverColorToPrimary"
                                    height="30px" style="width: 30px;height: 30px;"></iconify-icon>
                            </a>

                            <a href="">
                                <iconify-icon icon="ri:whatsapp-line" class="darkcolor HoverColorToPrimary"
                                    height="30px" style="width: 30px;height: 30px;"></iconify-icon>
                            </a>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>

    <!-- END AverageSearch And Average Result -->


    <!-- START Lesmodeleslesplusdemandes -->
    <section class="Lesmodeleslesplusdemandes d-none py-5 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">

            <div class="d-block d-lg-flex justify-content-between align-items-end text-center text-lg-left mb-5 pb-4">
                <h2 class="darkcolor fontwbold font30 mb-0 CustomleftBorder">Les modèles les plus demandés</h2>
                <a href="" class="SeeMorelink mt-2 mt-lg-0">Voir tout</a>
            </div>


            <div class="d-flex gap-4 justify-content-around flex-wrap flex-lg-nowrap">

                <a
                    class="theSliderdivParent position-relative text-center  d-flex flex-column align-items-center mt-3 pt-3 mt-lg-0 pt-lg-0">
                    <img class="position-absolute"
                        src="https://lacentrale.fr/static/fragment-lc-mozart-commons/statics//models/auto/peugeot-308.png"
                        alt="">


                    <div class="theSliderdiv">
                        <p class="font18 fontwbold m-0" style="padding-top: 11px;padding-bottom: 11px;">Mercedes Classe A
                        </p>
                    </div>
                </a>

                <a
                    class="theSliderdivParent position-relative text-center  d-flex flex-column align-items-center mt-3 pt-3 mt-lg-0 pt-lg-0">
                    <img class="position-absolute"
                        src="https://lacentrale.fr/static/fragment-lc-mozart-commons/statics//models/auto/peugeot-308.png"
                        alt="">


                    <div class="theSliderdiv">
                        <p class="font18 fontwbold m-0" style="padding-top: 11px;padding-bottom: 11px;">Mercedes Classe A
                        </p>
                    </div>
                </a>

                <a
                    class="theSliderdivParent position-relative text-center  d-flex flex-column align-items-center mt-3 pt-3 mt-lg-0 pt-lg-0">
                    <img class="position-absolute"
                        src="https://lacentrale.fr/static/fragment-lc-mozart-commons/statics//models/auto/peugeot-308.png"
                        alt="">


                    <div class="theSliderdiv">
                        <p class="font18 fontwbold m-0" style="padding-top: 11px;padding-bottom: 11px;">Mercedes Classe A
                        </p>
                    </div>
                </a>

                <a
                    class="theSliderdivParent position-relative text-center  d-flex flex-column align-items-center mt-3 pt-3 mt-lg-0 pt-lg-0">
                    <img class="position-absolute"
                        src="https://lacentrale.fr/static/fragment-lc-mozart-commons/statics//models/auto/peugeot-308.png"
                        alt="">


                    <div class="theSliderdiv">
                        <p class="font18 fontwbold m-0" style="padding-top: 11px;padding-bottom: 11px;">Mercedes Classe A
                        </p>
                    </div>
                </a>

                <a
                    class="theSliderdivParent position-relative text-center  d-flex flex-column align-items-center mt-3 pt-3 mt-lg-0 pt-lg-0">
                    <img class="position-absolute"
                        src="https://lacentrale.fr/static/fragment-lc-mozart-commons/statics//models/auto/peugeot-308.png"
                        alt="">

                    <div class="theSliderdiv">
                        <p class="font18 fontwbold m-0" style="padding-top: 11px;padding-bottom: 11px;">Mercedes Classe A
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- END Lesmodeleslesplusdemandes -->



    <!-- START MostPopularCars -->
    <section class="MostPopularCars d-none py-5 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">

            <div class="d-block d-lg-flex justify-content-between align-items-end text-center text-lg-left mb-5 pb-4">
                <h2 class="darkcolor fontwbold font30 mb-0 CustomleftBorder">Les marques les plus populaires</h2>
                <a href="" class="SeeMorelink mt-2 mt-lg-0">Voir tout</a>
            </div>


            <div class="d-flex gap-4 justify-content-around flex-wrap flex-lg-nowrap">

                <a class="theSliderdivParent text-center mt-2 pt-2 mt-lg-0 pt-lg-0">


                    <div class="theSliderdiv d-flex align-items-center px-3"
                        style="padding-top: 14px;padding-bottom: 14px;">
                        <img class="mx-2" width="40"
                            src="https://www.lacentrale.fr/static/fragment-lc-mozart-commons//statics/makes/auto/bmw.svg"
                            alt="">
                        <p class="font18 fontwbold m-0">BMW</p>
                    </div>
                </a>


                <a class="theSliderdivParent text-center mt-2 pt-2 mt-lg-0 pt-lg-0">


                    <div class="theSliderdiv d-flex align-items-center px-3"
                        style="padding-top: 14px;padding-bottom: 14px;">
                        <img class="mx-2" width="40"
                            src="https://www.lacentrale.fr/static/fragment-lc-mozart-commons//statics/makes/auto/bmw.svg"
                            alt="">
                        <p class="font18 fontwbold m-0">BMW</p>
                    </div>
                </a>

                <a class="theSliderdivParent text-center mt-2 pt-2 mt-lg-0 pt-lg-0">
                    <div class="theSliderdiv d-flex align-items-center px-3"
                        style="padding-top: 14px;padding-bottom: 14px;">
                        <img class="mx-2" width="40"
                            src="https://www.lacentrale.fr/static/fragment-lc-mozart-commons//statics/makes/auto/bmw.svg"
                            alt="">
                        <p class="font18 fontwbold m-0">BMW</p>
                    </div>
                </a>

                <a class="theSliderdivParent text-center mt-2 pt-2 mt-lg-0 pt-lg-0">
                    <div class="theSliderdiv d-flex align-items-center px-3"
                        style="padding-top: 14px;padding-bottom: 14px;">
                        <img class="mx-2" width="40"
                            src="https://www.lacentrale.fr/static/fragment-lc-mozart-commons//statics/makes/auto/bmw.svg"
                            alt="">
                        <p class="font18 fontwbold m-0">BMW</p>
                    </div>
                </a>

                <a class="theSliderdivParent text-center mt-2 pt-2 mt-lg-0 pt-lg-0">
                    <div class="theSliderdiv d-flex align-items-center px-3"
                        style="padding-top: 14px;padding-bottom: 14px;">
                        <img class="mx-2" width="40"
                            src="https://www.lacentrale.fr/static/fragment-lc-mozart-commons//statics/makes/auto/bmw.svg"
                            alt="">
                        <p class="font18 fontwbold m-0">BMW</p>
                    </div>
                </a>

            </div>

        </div>
    </section>
    <!-- END MostPopularCars -->



    <!-- START OUR SERVICES -->
    <section class="OurServices px-4 px-xl-0 py-5 container-fluid row justify-content-center">

        <div class="col-lg-12 col-xl-11 col-xxl-9 bgLight rounded row pt-3 px-3">


            <div class="col-lg-5 pe-3">
                <img class="img-fluid rounded position-relative"
                    src="https://images.unsplash.com/photo-1535762900610-81f13b658b73?q=80&w=2667&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="">

            </div>

            <div class="col-lg-7 pt-2">

                <h2 style="font-size: 1.4rem !important;" class="darkcolor fontwbold">
                    Estimation Précise pour Optimiser Votre Achat ou Vente de Voiture
                </h2>
                <div class="row mt-4">


                    <div class="col-md-10 bgwhite rounded d-flex px-3 py-2 mb-2 gap-2">


                        <iconify-icon icon="lets-icons:search-alt" width="30" style="width: 30px;height:30px"
                            class="primarycolor"></iconify-icon>

                        <div class="">

                            <h4 class="darkcolor font18 fontw600">Optimisez Votre Achat ou Vente de Voiture</h4>
                            <p class="mb-0">
                                Notre outil vous aide à trouver le prix idéal en vous fournissant une estimation précise
                                basée sur une vaste base de données de plus d'un million d'annonces.
                            </p>
                        </div>

                    </div>





                    <div class="col-md-10 bgwhite rounded d-flex px-3 py-2  mb-2 gap-2">
                        <iconify-icon icon="mingcute:time-line" width="30" style="width: 30px;height:30px"
                            class="primarycolor"></iconify-icon>

                        <div class="">

                            <h4 class="darkcolor font18 fontw600">
                                Pourquoi Choisir LautoPrix ?
                            </h4>
                            <ul class="darkcolor list-unstyled">
                                <li> <b class="primarycolor fontw900">Données Fiables et Complètes</b> : Notre analyse
                                    s’appuie sur plus d'un million d'annonces pour vous offrir une vue d'ensemble complète
                                    du marché de l'occasion en France.</li>
                                <li> <b class="primarycolor fontw900">Facilité d'Utilisation</b> : Entrez simplement les
                                    détails de votre véhicule et obtenez une estimation instantanée et précise.</li>
                                <li> <b class="primarycolor fontw900">Décisions Éclairées</b> : Utilisez nos données pour
                                    faire des choix informés, que vous achetiez ou vendiez.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-10 bgwhite rounded text-center mx-auto px-3 py-4 my-4 mb-4">




                <h4 class="darkcolor font18 fontw600 mb-4 mt-2">Profitez de notre expertise pour acheter ou vendre en toute
                    confiance !</h4>

                <div>
                    <a type="button" href="/#PrixMoyen" class="primarybtn my-4 mx-auto">Essayez Maintenant</a>
                </div>


            </div>


        </div>
    </section>

    <!-- END OUR SERVICES -->

    <!-- ################  START WatchOurVideo ################ -->

    <section class="WatchOurVideo d-none  container-fluid row justify-content-center">
        <div class="WatchOurVideoLayer w100 py-5  text-center">

            <br>
            <h2 class="text-center font30 whitecolor my-4">
                AUTOPRIX <br>
                CHOISISSEZ VOTRE VÉHICULE ET VOTRE BUDGET !<br>
                UNE MAGNIFIQUE HYUNDAI I10 LIVRÉE ET VENDUE !
            </h2>

            <p class="font18 whitecolor fontwbold">
                Pourquoi pas vous ? <br>
                Choisissez votre véhicule et votre budget !
            </p>


            <!-- START watch video button with model onlick -->
            <div class="video-popup my-5" data-bs-toggle="modal" data-bs-target="#videoModal">
                <div class="btn-inner">
                    <a onclick="event.preventDefault();" class="btn-play d-flex justify-content-center" href="">
                        <!-- <i class="flaticon-play"></i> -->
                        <iconify-icon icon="raphael:arrowright" class="ms-1 align-self-center" height="40"
                            style="width: 40px;height:40px"></iconify-icon>
                        <span class="circle-1"></span>
                        <span class="circle-2"></span>
                    </a>
                </div>
            </div>

            <!-- END watch video button with model onlick -->

            <!-- START Video Modal -->
            <div class="modal fade videoModal" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="ratio ratio-16x9">
                                <!-- <iframe src="https://www.youtube.com/watch?v=dGh513eoCIM&pp=ygUIYXV0b3ByaXg%3D" title="YouTube video" allowfullscreen></iframe> -->
                                <iframe src="https://www.youtube.com/embed/dGh513eoCIM"
                                    title="AUTOPRIX : CHOISISSEZ VOTRE VÉHICULE ET VOTRE BUDGET ! UNE MAGNIFIQUE HYUNDAI I10 LIVRÉE ET VENDUE !"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- START Video Modal -->

            <br>
        </div>
    </section>

    <!-- ################  END WatchOurVideo ################ -->


    <!-- ################  START BLOGS ################ -->

    <section class="SectionsBlog d-none py-5 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">
            <div class="d-block d-lg-flex justify-content-between align-items-end text-center text-lg-left mb-4 pb-1">
                <h2 class="darkcolor fontwbold font30 mb-0">Plongez au cœur de l'actualité des véhicules d'occasion</h2>
                <a href="" class="SeeMorelink mt-2 mt-lg-0">Voir tous les articles</a>
            </div>

            <div class="blogCards">
                <div class="row">
                    <div class="col-lg-6 pe-4 mb-lg-2 mb-4">
                        <a href="">
                            <img class="img-fluid rounded"
                                src="https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="">
                            <h4 class="darkcolor font18 fomtw600  mt-3">Fabriquer des voitures électriques chinoises en
                                Europe :
                                opportunité ou bombe à retardement ? </h4>
                            <p class="">
                                Faut-il se réjouir ou, au contraire, s’inquiéter de l’implantation progressive d’usines
                                chinoises de
                                fabrication de voitures électriques en Europe ? S’agit-il réellement d’une aubaine ...
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-6 row">


                        <div class="col-md-6 pe-4 mb-lg-2 mb-4">
                            <a href="">
                                <img class="img-fluid rounded"
                                    src="https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <h4 class="darkcolor font18 fontw600 mt-3">Fabriquer des voitures électriques chinoises en
                                    Europe :
                                    opportunité ou bombe à retardement ? </h4>
                            </a>
                        </div>
                        <div class="col-md-6 pe-4 mb-lg-2 mb-4">
                            <a href="">
                                <img class="img-fluid rounded"
                                    src="https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <h4 class="darkcolor font18 fontw600 mt-3">Fabriquer des voitures électriques chinoises en
                                    Europe :
                                    opportunité ou bombe à retardement ? </h4>
                            </a>
                        </div>

                        <div class="col-md-6 pe-4 mb-lg-2 mb-4">
                            <a href="">
                                <img class="img-fluid rounded"
                                    src="https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <h4 class="darkcolor font18 fontw600 mt-3">Fabriquer des voitures électriques chinoises en
                                    Europe :
                                    opportunité ou bombe à retardement ? </h4>
                            </a>
                        </div>
                        <div class="col-md-6 pe-4 mb-lg-2 mb-4">
                            <a href="">
                                <img class="img-fluid rounded"
                                    src="https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <h4 class="darkcolor font18 fontw600 mt-3">Fabriquer des voitures électriques chinoises en
                                    Europe :
                                    opportunité ou bombe à retardement ? </h4>
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- ################  END BLOGS ################ -->


    <div class="modal fade" id="infoUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="userInfoForm" action="{{ route('saveUserInfo') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Obtenez votre estimation de prix moyen</h5>
                    </div>
                    <div class="modal-body">
                        <p style="font-size: .8rem;text-align: center;">Veuillez fournir vos coordonnées pour recevoir le
                            prix moyen en fonction de vos filtres sélectionnés.</p>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Votre nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse e-mail <span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Votre Adresse e-mail" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Téléphone <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                placeholder="Votre Téléphone" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="submitUserInfo()">Soumettre</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('third_party_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.close-icon').forEach(icon => {
                icon.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    if (input) {
                        input.value = ''; // Clear the input value
                    }
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const tooltipText = document.getElementById('tooltip-text');
            const button = document.getElementById('shareable-link-button');

            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Prepare filter data
                const filters = {
                    location: document.querySelector('input[name="location"]').value,
                    marque: document.querySelector('input[name="marque"]').value,
                    modele: document.querySelector('input[name="modele"]').value,
                    annee_modele: document.querySelector('input[name="annee_modele"]').value,
                    carburant: document.querySelector('input[name="carburant"]').value,
                    boite_vitesse: document.querySelector('input[name="boite_vitesse"]').value,
                    kilometrage: document.querySelector('input[name="kilometrage"]').value,
                    // Add other filters as needed
                };

                axios.post('/api/generate-shareable-link', filters, {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        }
                    })
                    .then(response => {
                        const url = response.data.url;
                        navigator.clipboard.writeText(url)
                            .then(() => {
                                // Change tooltip text and color
                                tooltipText.textContent = 'Copied!';
                                button.classList.add('success');
                                setTimeout(() => {
                                    tooltipText.textContent = 'Copy to Clipboard';
                                    button.classList.remove('success');
                                }, 2000);
                            })
                            .catch(err => {
                                console.error('Failed to copy: ', err);
                            });
                    })
                    .catch(error => {
                        console.error('Error generating link: ', error);
                    });
            });
        });
    </script>

    <script>
        // let autocompleteData = {
        //     location: [],
        //     marque: [],
        //     modele: [],
        //     carburant: [],
        //     boiteVitesse: [],
        // };

        // document.addEventListener("DOMContentLoaded", () => {
        //     // Function to store data in local storage
        //     function storeAutocompleteData(data) {
        //         localStorage.setItem('autocompleteData', JSON.stringify(data));
        //     }

        //     // Function to retrieve data from local storage
        //     function getAutocompleteData() {
        //         const storedData = localStorage.getItem('autocompleteData');
        //         return storedData ? JSON.parse(storedData) : null;
        //     }

        //     // Function to compare two objects
        //     function isDataDifferent(data1, data2) {
        //         return JSON.stringify(data1) !== JSON.stringify(data2);
        //     }

        //     axios.get('/api/regions')
        //         .then(response => {
        //             autocompleteData.location = response.data;
        //             console.log(response); // Check the loaded data
        //             // Here you can also initialize your autocomplete component with the data
        //         })
        //         .catch(error => {
        //             console.error('Error fetching regions:', error);
        //         });

        //     // Check if data is already in local storage
        //     const storedData = getAutocompleteData();
        //     if (storedData) {
        //         autocompleteData = storedData;
        //         initializeComponents();

        //         // Fetch new data from the API to check for updates
        //         axios.get('/api/leboncoin-data')
        //             .then((responseMarque) => {
        //                 const data = responseMarque.data.LeboncoindData;

        //                 const newAutocompleteData = {
        //                     location: [...new Set(data.map((item) => item.city))],
        //                     marque: [...new Set(data.map((item) => item.u_car_brand))],
        //                     modele: [...new Set(data.map((item) => item.u_car_model))],
        //                     carburant: [...new Set(data.map((item) => item.fuel))],
        //                     boiteVitesse: [...new Set(data.map((item) => item.gearbox))],
        //                 };

        //                 // Check if the new data is different from the stored data
        //                 if (isDataDifferent(autocompleteData, newAutocompleteData)) {
        //                     // Store the new data in local storage if it's different
        //                     storeAutocompleteData(newAutocompleteData);
        //                     autocompleteData = newAutocompleteData;
        //                     initializeComponents(); // Reinitialize components with new data
        //                     console.log("autocompleteData has been updated in localStorage.");
        //                 } else {
        //                     console.log("No changes detected in autocompleteData.");
        //                 }
        //             })
        //             .catch((error) => {
        //                 console.error(error);
        //             });
        //     } else {
        //         axios.get('/api/leboncoin-data')
        //             .then((responseMarque) => {
        //                 const data = responseMarque.data.LeboncoindData;

        //                 autocompleteData = {
        //                     location: [...new Set(data.map((item) => item.city))],
        //                     marque: [...new Set(data.map((item) => item.u_car_brand))],
        //                     modele: [...new Set(data.map((item) => item.u_car_model))],
        //                     carburant: [...new Set(data.map((item) => item.fuel))],
        //                     boiteVitesse: [...new Set(data.map((item) => item.gearbox))],
        //                 };

        //                 // Store the data in local storage if not empty
        //                 storeAutocompleteData(autocompleteData);

        //                 initializeComponents();
        //             })
        //             .catch((error) => {
        //                 console.error(error);
        //             });
        //     }


        //     function initializeComponents() {

        //         document.querySelectorAll(".SearchandCheck").forEach((container) => {
        //             CreateSearchandCheck(container);
        //         });

        //         document.querySelectorAll(".autocompleteInput").forEach((container) => {
        //             CreateAutocompleteInput(container);
        //         });

        //         var getModelsRoute = "{{ route('getLeboncoinModeles', ':marque') }}";
        //         var marquesDiv = document.querySelector('#marques');
        //         var checkboxes = marquesDiv.querySelectorAll('.form-check-input');
        //         var modelListDiv = document.querySelector('#models');

        //         checkboxes.forEach(function(checkbox) {
        //             checkbox.addEventListener('change', function() {
        //                 checkboxes.forEach(function(cb) {
        //                     if (cb.checked) {
        //                         var url = getModelsRoute.replace(':marque',
        //                             encodeURIComponent(cb.value));

        //                         modelListDiv.innerHTML = `
    //                                     <div class="spinner-border text-primary" role="status">
    //                                     <span class="sr-only"></span>
    //                                     </div>`;

        //                         axios.get(url)
        //                             .then((responseModeles) => {
        //                                 autocompleteData.modele = [
        //                                     ...new Set(responseModeles.data.modeles
        //                                         .map((item) => item.u_car_model))
        //                                 ];

        //                                 // Update the stored data in local storage
        //                                 storeAutocompleteData(autocompleteData);

        //                                 // Clear the loader
        //                                 modelListDiv.innerHTML = '';

        //                                 document.querySelectorAll(
        //                                     ".SearchandCheck-models").forEach((
        //                                     container) => {
        //                                     CreateSearchandCheck(container);
        //                                 });
        //                             })
        //                             .catch((error) => {
        //                                 console.error(error);
        //                                 modelListDiv.innerHTML =
        //                                     '<p>Failed to load models.</p>';
        //                             });
        //                     }
        //                 });
        //             });
        //         });
        //     }
        // });




        // Data structure to hold autocomplete data
        let autocompleteData = {
            location: [],
            marque: [],
            modele: [],
            carburant: [],
            boiteVitesse: [],
        };
        document.addEventListener("DOMContentLoaded", () => {
            // Function to store data in local storage
            function storeAutocompleteData(data) {
                localStorage.setItem('autocompleteData', JSON.stringify(data));
            }

            // Function to retrieve data from local storage
            function getAutocompleteData() {
                const storedData = localStorage.getItem('autocompleteData');
                return storedData ? JSON.parse(storedData) : null;
            }

            // Function to compare two objects
            function isDataDifferent(data1, data2) {
                return JSON.stringify(data1) !== JSON.stringify(data2);
            }

            // Function to initialize components with autocomplete data
            function initializeComponents() {
                document.querySelectorAll(".SearchandCheck").forEach((container) => {
                    CreateSearchandCheck(container);
                });

                document.querySelectorAll(".autocompleteInput").forEach((container) => {
                    CreateAutocompleteInput(container);
                });

                setupMarqueCheckboxListeners();
            }

            // Function to setup event listeners for marque checkboxes
            // function setupMarqueCheckboxListeners() {
            //     const getModelsRoute = "{{ route('getLeboncoinModeles', ':marque') }}";
            //     const marquesDiv = document.querySelector('#marques');
            //     const checkboxes = marquesDiv.querySelectorAll('.form-check-input');
            //     const modelListDiv = document.querySelector('#models');
            //     const modeleInput = document.querySelector('[name=modele]');

            //     if (modeleInput.value.trim() !== '') {
            //         modeleInput.disabled = false;
            //     } else {
            //         modeleInput.disabled = true;
            //     }
            //     checkboxes.forEach((checkbox) => {
            //         checkbox.addEventListener('change', () => {
            //             checkboxes.forEach((cb) => {
            //                 if (cb.checked) {
            //                     const url = getModelsRoute.replace(':marque',
            //                         encodeURIComponent(cb.value));
            //                     modelListDiv.innerHTML = `
        //                 <div class="spinner-border text-primary" role="status">
        //                     <span class="sr-only"></span>
        //                 </div>`;



            //                     axios.get(url)
            //                         .then((responseModeles) => {
            //                             autocompleteData.modele = [...new Set(
            //                                 responseModeles.data.modeles.map((
            //                                     item) => item.u_car_model)
            //                             )];

            //                             modeleInput.value = ''
            //                             modeleInput.disabled = false;

            //                             // Update the stored data in local storage
            //                             storeAutocompleteData(autocompleteData);

            //                             // Clear the loader
            //                             modelListDiv.innerHTML = '';

            //                             document.querySelectorAll(
            //                                 ".SearchandCheck-models").forEach((
            //                                 container) => {
            //                                 CreateSearchandCheck(container);
            //                             });
            //                         })
            //                         .catch((error) => {
            //                             console.error('Error fetching models:', error);
            //                             modelListDiv.innerHTML =
            //                                 '<p>Failed to load models.</p>';
            //                         });
            //                 } else {
            //                     // init input model
            //                     modeleInput.value = ''
            //                     modeleInput.disabled = true;
            //                 }
            //             });
            //         });
            //     });
            // }


            function setupMarqueCheckboxListeners() {
                const getModelsRoute = "{{ route('getLeboncoinModeles', ':marque') }}";
                const marquesDiv = document.querySelector('#marques');
                const checkboxes = marquesDiv.querySelectorAll('.form-check-input');
                const modelListDiv = document.querySelector('#models');
                const modeleInput = document.querySelector('[name=modele]');

                function updateModeleInputState() {
                    const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
                    modeleInput.disabled = !anyChecked;
                }

                checkboxes.forEach((checkbox) => {
                    checkbox.addEventListener('change', () => {
                        updateModeleInputState
                            (); // Update the state of modeleInput based on checked checkboxes

                        if (checkbox.checked) {
                            const url = getModelsRoute.replace(':marque', encodeURIComponent(
                                checkbox.value));
                            modelListDiv.innerHTML = `
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only"></span>
                    </div>`;

                            axios.get(url)
                                .then((responseModeles) => {
                                    autocompleteData.modele = [...new Set(
                                        responseModeles.data.modeles.map(item => item
                                            .u_car_model)
                                    )];

                                    modeleInput.value = ''; // Clear input value
                                    // Update the stored data in local storage
                                    storeAutocompleteData(autocompleteData);

                                    // Clear the loader
                                    modelListDiv.innerHTML = '';

                                    document.querySelectorAll(".SearchandCheck-models").forEach(
                                        (container) => {
                                            CreateSearchandCheck(container);
                                        });
                                })
                                .catch((error) => {
                                    console.error('Error fetching models:', error);
                                    modelListDiv.innerHTML = '<p>Failed to load models.</p>';
                                });
                        } else {
                            // Check if there are any other checkboxes still checked
                            updateModeleInputState();
                        }
                    });
                });

                // Initial state of modeleInput
                updateModeleInputState();
            }


            // Function to fetch and update autocomplete data
            // function fetchAndUpdateAutocompleteData() {
            //     axios.get('/api/leboncoin-data')
            //         .then((response) => {
            //             const data = response.data.LeboncoindData;

            //             // Fetch regions first
            //             regions().then((regionsData) => {
            //                 const newAutocompleteData = {
            //                     // location: [...new Set(regionsData.concat(data.map((item) => item
            //                     //     .city)))],
            //                     marque: [...new Set(data.map((item) => item.u_car_brand))],
            //                     modele: [...new Set(data.map((item) => item.u_car_model))],
            //                     carburant: [...new Set(data.map((item) => item.fuel))],
            //                     boiteVitesse: [...new Set(data.map((item) => item.gearbox))],
            //                 };

            //                 // Check if the new data is different from the stored data
            //                 if (isDataDifferent(autocompleteData, newAutocompleteData)) {
            //                     // Store the new data in local storage if it's different
            //                     storeAutocompleteData(newAutocompleteData);
            //                     autocompleteData = newAutocompleteData;
            //                     initializeComponents(); // Reinitialize components with new data
            //                     console.log("autocompleteData has been updated in localStorage.");
            //                 } else {
            //                     console.log("No changes detected in autocompleteData.");
            //                 }
            //             });
            //         })
            //         .catch((error) => {
            //             console.error('Error fetching leboncoin data:', error);
            //         });
            // }

            // Fetch leboncoin data and update other fields
            function fetchAndUpdateAutocompleteData() {
                axios.get('/api/leboncoin-data')
                    .then((response) => {
                        const data = response.data.LeboncoindData;

                        const newAutocompleteData = {
                            ...autocompleteData,
                            marque: [...new Set(data.map((item) => item.u_car_brand))],
                            modele: [],
                            carburant: [...new Set(data.map((item) => item.fuel))],
                            boiteVitesse: [...new Set(data.map((item) => item.gearbox))],
                        };


                        // Check if the new data is different from the stored data
                        if (isDataDifferent(autocompleteData, newAutocompleteData)) {
                            // Store the new data in local storage if it's different
                            storeAutocompleteData(newAutocompleteData);
                            autocompleteData = newAutocompleteData;
                            initializeComponents(); // Reinitialize components with new data
                            console.log("autocompleteData has been updated in localStorage.");
                        } else {
                            console.log("No changes detected in autocompleteData.");
                        }
                    })
                    .catch((error) => {
                        console.error('Error fetching leboncoin data:', error);
                    });
            }

            // Fetch regions and update the location field
            function fetchRegions() {
                return axios.get('/api/regions')
                    .then(response => {
                        autocompleteData.location = response.data;
                        storeAutocompleteData(autocompleteData); // Update local storage
                        initializeComponents();
                        console.log('Regions loaded:', response.data); // Check the loaded data
                        return response.data;
                    })
                    .catch(error => {
                        console.error('Error fetching regions:', error);
                        return [];
                    });
            }


            function displayResults(data) {
                let {
                    cities,
                    zipcodes
                } = data;

                console.log("cities (before conversion): ", cities);
                console.log("zipcodes (before conversion): ", zipcodes);

                // Convert objects to arrays
                cities = Object.values(cities);
                zipcodes = Object.values(zipcodes);

                console.log("cities (after conversion): ", cities);
                console.log("zipcodes (after conversion): ", zipcodes);

                // Clear previous results
                const resultsContainer = document.getElementById('searchResults');
                resultsContainer.innerHTML = '';

                // Display cities
                if (cities.length > 0) {
                    console.log("Displaying cities: ", cities);
                    cities.forEach((city) => {
                        const listItem = document.createElement("div");
                        listItem.classList.add("dropdown-item");
                        listItem.textContent = city;
                        listItem.addEventListener("click", () => {
                            document.querySelector('[name=location]').value =
                                city; // Assuming 'searchCities' is the input element's id
                            resultsContainer.classList.remove("show");
                        });
                        resultsContainer.appendChild(listItem);
                    });
                }

                // Display zipcodes
                if (zipcodes.length > 0) {
                    console.log("Displaying zipcodes: ", zipcodes);
                    zipcodes.forEach((zipcode) => {
                        const listItem = document.createElement("div");
                        listItem.classList.add("dropdown-item");
                        listItem.textContent = zipcode;
                        listItem.addEventListener("click", () => {
                            document.querySelector('[name=location]').value =
                                zipcode; // Assuming 'searchCities' is the input element's id
                            resultsContainer.classList.remove("show");
                        });
                        resultsContainer.appendChild(listItem);
                    });
                }
            }

            // Check if data is already in local storage
            // const storedData = getAutocompleteData();
            // if (storedData) {
            //     autocompleteData = storedData;
            //     initializeComponents();

            //     // Fetch new data from the API to check for updates
            //     fetchAndUpdateAutocompleteData();
            // } else {
            //     // Fetch initial data from the API
            //     fetchAndUpdateAutocompleteData();
            // }

            // Check if data is already in local storage
            const storedData = getAutocompleteData();
            if (storedData) {
                autocompleteData = storedData;

                // Fetch new data from the API to check for updates
                fetchRegions().then(() => fetchAndUpdateAutocompleteData());
                initializeComponents();

            } else {
                // Fetch initial data from the API
                fetchRegions().then(() => fetchAndUpdateAutocompleteData());
            }


            // Usage example
            const searchCities = document.getElementById('searchCities');
            searchCities.addEventListener('keyup',
                function() {
                    const query = this.value;

                    if (query === '') {
                        initializeComponents();
                    } else {

                        searchLeboncoinCities(query)
                            .then(data => {
                                console.log(data); // Process the data (cities and zipcodes)
                                // You can update the UI with the data here
                                displayResults(data);
                            });
                    }

                });



        });




        /**
         * Performs a search based on the given query and returns the data.
         * @param {string} query - The search query.
         * @returns {Promise<Object>} - A promise that resolves to the search results.
         * THIS IS FUNCTION IS NOT USED YET
         */
        function searchLeboncoinCities(query) {
            // Check if query length is at least 2 characters
            if (query.length < 2) {
                return Promise.resolve({
                    cities: [],
                    zipcodes: []
                });
            }

            // Perform the search using Axios
            return axios.get('/api/search-leboncoin-cities', {
                    params: {
                        query
                    }
                })
                .then(response => {
                    // Return the data from the response
                    return response.data;
                })
                .catch(error => {
                    console.error('Error fetching search results:', error);
                    // Return empty arrays on error
                    return {
                        cities: [],
                        zipcodes: []
                    };
                });
        }








        // function CreateSearchandCheck(container) {
        //     const dataArrayName = container.querySelector("input").getAttribute("data-array");
        //     const models = autocompleteData[dataArrayName];
        //     const modelList = container.querySelector(".model-list");
        //     const searchInput = container.querySelector(".search-input");
        //     const selectedModelsContainer = container.querySelector(".badge-container");
        //     const selectedModelsInput = container.querySelector("input");
        //     const selectedModelNames = new Set();

        //     function renderModelList(filter = "") {
        //         modelList.innerHTML = "";
        //         models
        //             .filter((model) => model.toLowerCase().includes(filter.toLowerCase()))
        //             .forEach((model) => {
        //                 const listItem = document.createElement("div");
        //                 listItem.classList.add("form-check");
        //                 listItem.innerHTML = `
    //         <input class="form-check-input" type="checkbox" value="${model}" id="check-${dataArrayName}-${model}">
    //         <label class="form-check-label" for="check-${dataArrayName}-${model}">
    //             ${model}
    //         </label>
    //     `;
        //                 modelList.appendChild(listItem);

        //                 listItem.querySelector("input").addEventListener("change", (e) => {
        //                     if (e.target.checked) {
        //                         // Uncheck all other checkboxes
        //                         modelList.querySelectorAll(".form-check-input").forEach((checkbox) => {
        //                             if (checkbox !== e.target) {
        //                                 checkbox.checked = false;
        //                             }
        //                         });

        //                         // Clear the set and add the current model
        //                         selectedModelNames.clear();
        //                         selectedModelNames.add(model);
        //                     } else {
        //                         selectedModelNames.delete(model);
        //                     }
        //                     renderSelectedModels();
        //                 });
        //             });
        //     }

        //     function renderSelectedModels() {
        //         selectedModelsContainer.innerHTML = "";
        //         const selectedNamesArray = Array.from(selectedModelNames);
        //         selectedModelsInput.value = selectedNamesArray.join(", ");
        //         selectedNamesArray.forEach((name) => {
        //             const badge = document.createElement("span");
        //             badge.classList.add("badge", "bg-secondary");
        //             badge.textContent = name;
        //             const closeBtn = document.createElement("button");
        //             closeBtn.classList.add("btn-close", "btn-close-white", "ms-2");
        //             closeBtn.setAttribute("aria-label", "Close");
        //             closeBtn.addEventListener("click", () => {
        //                 selectedModelNames.delete(name);
        //                 renderSelectedModels();
        //                 document.getElementById(`check-${dataArrayName}-${name}`).checked = false;
        //             });
        //             badge.appendChild(closeBtn);
        //             selectedModelsContainer.appendChild(badge);
        //         });
        //     }

        //     searchInput.addEventListener("input", () => {
        //         renderModelList(searchInput.value);
        //     });

        //     selectedModelsInput.addEventListener("focus", () => {
        //         container.querySelector(".dropdown-menu").classList.add("show");
        //     });

        //     document.addEventListener("click", (event) => {
        //         if (!container.contains(event.target)) {
        //             container.querySelector(".dropdown-menu").classList.remove("show");

        //         }
        //     });

        //     renderModelList();
        // }


        function CreateSearchandCheck(container) {
            const dataArrayName = container.querySelector("input").getAttribute("data-array");
            const models = autocompleteData[dataArrayName];
            const modelList = container.querySelector(".model-list");
            const searchInput = container.querySelector(".search-input");
            const selectedModelsContainer = container.querySelector(".badge-container");
            const selectedModelsInput = container.querySelector("input");
            const selectedModelNames = new Set();

            function getSelectedModelNames() {
                // Get the value from the input and split it into an array
                const values = selectedModelsInput.value.split(", ").filter(Boolean);
                return new Set(values);
            }

            function renderModelList(filter = "") {
                modelList.innerHTML = "";
                const selectedNames = getSelectedModelNames();

                models
                    .filter((model) => model.toLowerCase().includes(filter.toLowerCase()))
                    .forEach((model) => {
                        const listItem = document.createElement("div");
                        listItem.classList.add("form-check");
                        listItem.innerHTML = `
                    <input class="form-check-input" type="checkbox" value="${model}" id="check-${dataArrayName}-${model}">
                    <label class="form-check-label" for="check-${dataArrayName}-${model}">
                        ${model}
                    </label>
                `;
                        modelList.appendChild(listItem);

                        // Check if the model should be pre-checked
                        if (selectedNames.has(model)) {
                            listItem.querySelector("input").checked = true;
                            selectedModelNames.add(model);
                        }

                        listItem.querySelector("input").addEventListener("change", (e) => {
                            if (e.target.checked) {
                                // Uncheck all other checkboxes
                                modelList.querySelectorAll(".form-check-input").forEach((checkbox) => {
                                    if (checkbox !== e.target) {
                                        checkbox.checked = false;
                                    }
                                });

                                // Clear the set and add the current model
                                selectedModelNames.clear();
                                selectedModelNames.add(model);
                            } else {
                                selectedModelNames.delete(model);
                            }
                            renderSelectedModels();
                        });
                    });
            }

            function renderSelectedModels() {
                selectedModelsContainer.innerHTML = "";
                const selectedNamesArray = Array.from(selectedModelNames);
                selectedModelsInput.value = selectedNamesArray.join(", ");
                selectedNamesArray.forEach((name) => {
                    const badge = document.createElement("span");
                    badge.classList.add("badge", "bg-secondary");
                    badge.textContent = name;
                    const closeBtn = document.createElement("button");
                    closeBtn.classList.add("btn-close", "btn-close-white", "ms-2");
                    closeBtn.setAttribute("aria-label", "Close");
                    closeBtn.addEventListener("click", () => {
                        selectedModelNames.delete(name);
                        renderSelectedModels();
                        document.getElementById(`check-${dataArrayName}-${name}`).checked = false;
                    });
                    badge.appendChild(closeBtn);
                    selectedModelsContainer.appendChild(badge);
                });
            }

            searchInput.addEventListener("input", () => {
                renderModelList(searchInput.value);
            });

            selectedModelsInput.addEventListener("focus", () => {
                container.querySelector(".dropdown-menu").classList.add("show");
            });

            document.addEventListener("click", (event) => {
                if (!container.contains(event.target)) {
                    container.querySelector(".dropdown-menu").classList.remove("show");
                }
            });

            // Initial render with the pre-checked values
            renderModelList();
        }



        function CreateAutocompleteInput(container) {
            const dataArrayName = container.querySelector("input").getAttribute("data-array");
            const locations = autocompleteData[dataArrayName];
            const modelList = container.querySelector(".model-list");
            const searchInput = container.querySelector(".search-input");
            const selectedInput = container.querySelector("input");

            function renderLocationList(filter = "") {
                modelList.innerHTML = "";
                // Add default item
                const defaultItem = document.createElement("div");
                defaultItem.classList.add("dropdown-item");
                defaultItem.textContent = "Toute-la-France";
                defaultItem.addEventListener("click", () => {
                    selectedInput.value = "Toute-la-France";
                    container.querySelector(".dropdown-menu").classList.remove("show");
                });
                modelList.appendChild(defaultItem);

                // Add "All Regions" header
                const allRegionsHeader = document.createElement("div");
                allRegionsHeader.style.fontSize = "1rem";
                allRegionsHeader.style.fontWeight = "bolder";
                allRegionsHeader.classList.add("m-2");
                allRegionsHeader.textContent = "Régions";
                modelList.appendChild(allRegionsHeader);

                locations
                    .filter((location) => location.toLowerCase().includes(filter.toLowerCase()))
                    .forEach((location) => {
                        const listItem = document.createElement("div");
                        listItem.classList.add("dropdown-item");
                        listItem.textContent = location;
                        listItem.addEventListener("click", () => {
                            selectedInput.value = location;
                            container.querySelector(".dropdown-menu").classList.remove("show");
                        });
                        modelList.appendChild(listItem);
                    });
            }

            // searchInput.addEventListener("input", () => {
            //     renderLocationList(searchInput.value);
            // });

            selectedInput.addEventListener("focus", () => {
                container.querySelector(".dropdown-menu").classList.add("show");
            });

            document.addEventListener("click", (event) => {
                if (!container.contains(event.target)) {
                    container.querySelector(".dropdown-menu").classList.remove("show");
                }
            });

            renderLocationList();
        }


        function checkAndDeleteAutocompleteData() {
            // Check if autocompleteData exists in localStorage
            const autocompleteData = localStorage.getItem("autocompleteData");
            if (autocompleteData) {
                const parsedData = JSON.parse(autocompleteData);
                // Check if all properties are empty arrays
                const isEmpty = Object.values(parsedData).every(
                    array => Array.isArray(array) && array.length === 0
                );
                if (isEmpty) {
                    // Delete autocompleteData from localStorage
                    localStorage.removeItem("autocompleteData");
                    console.log("autocompleteData is empty and has been deleted from localStorage.");
                } else {
                    console.log("autocompleteData is not empty.");
                }
            } else {
                console.log("autocompleteData not found in localStorage.");
            }
        }


        // MIN & MAX

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".MaxMin").forEach((container) => {
                const rangeInput = container.querySelector("input");
                const minInput = container.querySelector(".min-input");
                const maxInput = container.querySelector(".max-input");
                const applyButton = container.querySelector(".apply-btn");

                function updateRangeInput() {
                    const min = minInput.value;
                    const max = maxInput.value;
                    if (min && max) {
                        rangeInput.value = `${min}-${max}`;
                    } else if (min) {
                        rangeInput.value = `${min}-max`;
                    } else if (max) {
                        rangeInput.value = `min-${max}`;
                    } else {
                        rangeInput.value = "";
                    }
                }

                applyButton.addEventListener("click", () => {
                    updateRangeInput();
                    container.querySelector(".dropdown-menu").classList.remove("show");
                });

                rangeInput.addEventListener("focus", () => {
                    container.querySelector(".dropdown-menu").classList.add("show");
                });

                document.addEventListener("click", (event) => {
                    if (!container.contains(event.target)) {
                        container
                            .querySelector(".dropdown-menu")
                            .classList.remove("show");
                    }
                });
            });
        });
    </script>

    {{-- <script>
        // Get the current year and the next year
        const currentYear = new Date().getFullYear();
        const nextYear = currentYear + 1;

        // Set the max attribute to the next year
        document.getElementById('annee_modele').setAttribute('max', nextYear);
    </script> --}}
@endpush
