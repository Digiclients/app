{{-- @dd($error) --}}
@extends('layouts.app')
@push('third_party_stylesheets')
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

                <h1 class="darkcolor fontwbold font30">Entrez les détails de votre véhicule et découvrez instantanément sa
                    valeur réelle sur le marché de l'occasion</h1>
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
                        <div style="margin: 0 auto;" class="row col-sm-12 col-md-4 d-flex justify-content-center">
                            <div class="autocompleteSearch input-container pb-2">
                                <input type="text" data-array="title" name="title"
                                    class="form-control @error('title') is-invalid @enderror" placeholder="Recherche"
                                    value="{{ request()->input('title') }}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div style="margin: 0 auto;"
                            class="autocompleteSearch input-container col-sm w-50 position-relative pb-2">
                            <input type="text" data-array="title" name="title"
                                class="form-control @error('title') is-invalid @enderror" placeholder="Recherche"
                                value="{{ request()->input('title') }}">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
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
                                            placeholder="min 1850">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">Max</span>
                                        <input type="number" class="form-control max-input" placeholder="max 2025">
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
                                        <input type="number" class="form-control min-input" placeholder="min 0">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">Max</span>
                                        <input type="number" class="form-control max-input" placeholder="max 1 000 000">
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
                        <div class="d-flex justify-content-center my-2 row d-grid gap-3 d-none">
                            <div class="col-sm">
                                <select class="form-select" aria-label="Default select example" name="private">
                                    <option value="">Select Particulier pourcentage</option>
                                    <option value="0" {{ request()->input('private') == '0' ? 'selected' : '' }}>0%
                                    </option>
                                    <option value="10" {{ request()->input('private') == '10' ? 'selected' : '' }}>10%
                                    </option>
                                    <option value="25" {{ request()->input('private') == '25' ? 'selected' : '' }}>25%
                                    </option>
                                    <option value="50" {{ request()->input('private') == '50' ? 'selected' : '' }}>50%
                                    </option>
                                    <option value="75" {{ request()->input('private') == '75' ? 'selected' : '' }}>75%
                                    </option>
                                    <option value="100" {{ request()->input('private') == '100' ? 'selected' : '' }}>
                                        100%</option>
                                </select>
                            </div>
                            <div class="col-sm">
                                <select class="form-select" aria-label="Default select example" name="pro">
                                    <option value="">Select Professionnel pourcentage</option>
                                    <option value="0" {{ request()->input('pro') == '0' ? 'selected' : '' }}>0%
                                    </option>
                                    <option value="10" {{ request()->input('pro') == '10' ? 'selected' : '' }}>10%
                                    </option>
                                    <option value="25" {{ request()->input('pro') == '25' ? 'selected' : '' }}>25%
                                    </option>
                                    <option value="50" {{ request()->input('pro') == '50' ? 'selected' : '' }}>50%
                                    </option>
                                    <option value="75" {{ request()->input('pro') == '75' ? 'selected' : '' }}>75%
                                    </option>
                                    <option value="100" {{ request()->input('pro') == '100' ? 'selected' : '' }}>100%
                                    </option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <br>

                    <button type="submit" class="primarybtn d-block mx-auto">Obtenir le prix moyen</button>
                </form>
            </div>
            @if (isset($priceStatistics))
                <div class="bgwhite my-5 py-5 rounded" id="averageStatistics">
                    @if ($priceStatistics->count <= 2)
                        <p class="text-center font18 darkcolor"> Nous n'avons actuellement pas cette configuration dans
                            notre base de données </p>
                    @else
                        {{-- <p class="text-center font18 darkcolor"> Ce prix moyen a été extrait de
                            <span>{{ $priceStatistics->count }}</span>
                        </p> --}}

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

                            {{-- <a href="">
                                <iconify-icon icon="mdi:linkedin" class="darkcolor HoverColorToPrimary" height="30px"
                                    style="width: 30px;height: 30px;"></iconify-icon>
                            </a> --}}
                            <a href="">
                                <iconify-icon icon="jam:facebook-circle" class="darkcolor HoverColorToPrimary"
                                    height="30px" style="width: 30px;height: 30px;"></iconify-icon>
                            </a>

                            <a href="">
                                <iconify-icon icon="ri:whatsapp-line" class="darkcolor HoverColorToPrimary"
                                    height="30px" style="width: 30px;height: 30px;"></iconify-icon>
                            </a>
                        </div>

                        {{-- <a href="{{ route('generatePDF', array_merge(request()->only(['location', 'marque', 'modele', 'annee_modele', 'carburant', 'boite_vitesse', 'kilometrage']), $priceStatistics->toArray())) }}" class="primarybtn d-block mx-auto mt-2 w-25">Download PDF</a> --}}
                        <form action="{{ route('generatePDF') }}" method="POST">
                            @csrf
                            <!-- Include all the necessary request parameters as hidden fields -->
                            <input type="hidden" name="location" value="{{ request('location') }}">
                            <input type="hidden" name="marque" value="{{ request('marque') }}">
                            <input type="hidden" name="modele" value="{{ request('modele') }}">
                            <input type="hidden" name="title" value="{{ request('title') }}">
                            <input type="hidden" name="annee_modele" value="{{ request('annee_modele') }}">
                            <input type="hidden" name="carburant" value="{{ request('carburant') }}">
                            <input type="hidden" name="boite_vitesse" value="{{ request('boite_vitesse') }}">
                            <input type="hidden" name="kilometrage" value="{{ request('kilometrage') }}">

                            <!-- Include $priceStatistics data as hidden fields -->
                            <input type="hidden" name="minPrice" value="{{ $priceStatistics->min_price }}">
                            <input type="hidden" name="avgPrice" value="{{ $priceStatistics->avg_price }}">
                            <input type="hidden" name="maxPrice" value="{{ $priceStatistics->max_price }}">

                            <button type="submit" class="primarybtn d-block mx-auto mt-2">Download PDF</button>
                        </form>
                    @endif
                </div>
            @endif
        </div>
    </section>


    <section class="why-lautoprix">
        <div class="head">
            <h3>Pouquoi Lautoprix ?</h3>
            <p>Estimation Rapide et Fiable pour Vos Transactions de Véhicules</p>
        </div>
        <div class="feauters row col-sm-12 ">
            <div class="feauter col-md-3 col-sm-10">
                <svg width="117" height="79" viewBox="0 0 117 79" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_602)">
                        <path
                            d="M45.8471 68.8207C44.6291 68.8207 43.4384 68.4537 42.4256 67.7663C41.4128 67.0788 40.6234 66.1017 40.1573 64.9585C39.6911 63.8153 39.5692 62.5573 39.8068 61.3437C40.0444 60.1301 40.631 59.0153 41.4923 58.1403C42.3536 57.2653 43.451 56.6695 44.6456 56.4281C45.8403 56.1867 47.0786 56.3106 48.204 56.7841C49.3293 57.2576 50.2911 58.0595 50.9679 59.0884C51.6446 60.1172 52.0058 61.3269 52.0058 62.5643C52.0058 64.2236 51.3569 65.8149 50.202 66.9882C49.047 68.1615 47.4805 68.8207 45.8471 68.8207ZM45.8471 58.8104C45.1163 58.8104 44.4019 59.0306 43.7942 59.443C43.1865 59.8555 42.7129 60.4418 42.4332 61.1277C42.1535 61.8136 42.0804 62.5684 42.223 63.2966C42.3655 64.0248 42.7175 64.6936 43.2342 65.2186C43.751 65.7436 44.4095 66.1011 45.1262 66.246C45.843 66.3908 46.586 66.3165 47.2612 66.0324C47.9364 65.7482 48.5136 65.2671 48.9196 64.6498C49.3256 64.0325 49.5423 63.3067 49.5423 62.5643C49.5423 61.5687 49.153 60.6139 48.46 59.9099C47.7671 59.2059 46.8272 58.8104 45.8471 58.8104Z"
                            fill="#00ADEE" />
                        <path
                            d="M70.4819 68.8207C69.2638 68.8207 68.0731 68.4537 67.0603 67.7663C66.0475 67.0788 65.2582 66.1017 64.792 64.9585C64.3259 63.8153 64.2039 62.5573 64.4416 61.3437C64.6792 60.1301 65.2658 59.0153 66.1271 58.1403C66.9884 57.2653 68.0857 56.6695 69.2804 56.4281C70.4751 56.1867 71.7134 56.3106 72.8387 56.7841C73.9641 57.2576 74.9259 58.0595 75.6026 59.0884C76.2794 60.1172 76.6406 61.3269 76.6406 62.5643C76.6406 64.2236 75.9917 65.8149 74.8367 66.9882C73.6817 68.1615 72.1153 68.8207 70.4819 68.8207ZM70.4819 58.8104C69.7511 58.8104 69.0366 59.0306 68.429 59.443C67.8213 59.8555 67.3477 60.4418 67.068 61.1277C66.7883 61.8136 66.7151 62.5684 66.8577 63.2966C67.0003 64.0248 67.3522 64.6936 67.869 65.2186C68.3858 65.7436 69.0442 66.1011 69.761 66.246C70.4778 66.3908 71.2208 66.3165 71.896 66.0324C72.5712 65.7482 73.1483 65.2671 73.5543 64.6498C73.9604 64.0325 74.1771 63.3067 74.1771 62.5643C74.1771 61.5687 73.7878 60.6139 73.0948 59.9099C72.4018 59.2059 71.4619 58.8104 70.4819 58.8104Z"
                            fill="#00ADEE" />
                        <path d="M90.1895 66.3147H87.7261V68.8173H90.1895V66.3147Z" fill="#00ADEE" />
                        <path d="M85.2623 66.3147H82.7988V68.8173H85.2623V66.3147Z" fill="#00ADEE" />
                        <path d="M80.3357 66.3147H34.7617V68.8173H80.3357V66.3147Z" fill="#00ADEE" />
                        <path d="M32.2979 66.3147H29.8345V68.8173H32.2979V66.3147Z" fill="#00ADEE" />
                        <path
                            d="M70.4815 58.8106H43.3835C42.2656 58.81 41.1811 58.4233 40.3081 57.7138C39.4352 57.0044 38.8257 56.0145 38.5797 54.9066L31.0662 20.9969C31.0036 20.7146 30.8467 20.4631 30.6221 20.2851C30.3975 20.1072 30.1192 20.0138 29.8344 20.0209H23.6758V17.5183H29.8344C30.6739 17.5173 31.4887 17.8067 32.1447 18.3389C32.8007 18.8711 33.2587 19.6144 33.4434 20.4463L40.9816 54.356C41.1046 54.91 41.4093 55.4049 41.8458 55.7597C42.2823 56.1144 42.8245 56.3078 43.3835 56.308H70.4815V58.8106Z"
                            fill="#00ADEE" />
                        <path
                            d="M71.7139 52.5519H44.6158V50.0493H71.7139C72.2319 50.0498 72.7368 49.8844 73.1569 49.5767C73.5771 49.2689 73.891 48.8345 74.0542 48.3351L80.336 29.1654C80.3547 29.0368 80.3547 28.9061 80.336 28.7775C80.336 28.4457 80.2062 28.1274 79.9752 27.8927C79.7442 27.6581 79.431 27.5262 79.1043 27.5262H33.5303V25.0237H79.1043C79.689 25.0235 80.2653 25.1642 80.786 25.4343C81.3068 25.7044 81.7569 26.0962 82.0996 26.5774C82.4423 27.0587 82.6677 27.6157 82.7572 28.2026C82.8467 28.7895 82.7979 29.3897 82.6147 29.9537L76.3945 49.1109C76.0703 50.112 75.4433 50.9836 74.6028 51.6015C73.7624 52.2194 72.7514 52.552 71.7139 52.5519Z"
                            fill="#00ADEE" />
                        <path d="M80.4834 31.2839H60.6279V33.7865H80.4834V31.2839Z" fill="#00ADEE" />
                        <path d="M58.1646 31.2839H55.7012V33.7865H58.1646V31.2839Z" fill="#00ADEE" />
                        <path d="M53.2251 31.2839H50.7739V33.7865H53.2251V31.2839Z" fill="#00ADEE" />
                        <path d="M64.4491 16.0776L50.1099 25.2331L51.4208 27.3519L65.76 18.1964L64.4491 16.0776Z"
                            fill="#00ADEE" />
                        <path d="M55.8232 18.5771L53.7739 19.966L55.8179 23.0782L57.8671 21.6893L55.8232 18.5771Z"
                            fill="#00ADEE" />
                        <path
                            d="M43.3834 26.2782H40.9199V23.7756C40.9238 22.8769 41.1395 21.9923 41.5487 21.1955C41.958 20.3988 42.5491 19.7132 43.2725 19.1959L56.9324 9.56106C57.7289 9.03838 58.657 8.76032 59.6053 8.76024C60.0206 8.7661 60.434 8.82068 60.837 8.9229C62.8817 9.42341 68.018 11.0626 68.6462 11.2628C70.4691 10.1116 71.7994 9.23573 73.3267 8.2347L74.5585 7.39634C75.6148 6.67199 76.8562 6.27627 78.1305 6.25767C78.9787 6.22805 79.8222 6.39941 80.5939 6.75819C82.9827 8.10647 85.0778 9.93256 86.7526 12.1262C87.3464 12.9033 87.6712 13.8577 87.6764 14.8415C87.6123 16.0655 87.1083 17.2231 86.2599 18.0948C84.9543 19.3461 82.5647 21.4733 80.8649 22.9873L79.2637 21.0979C80.9758 19.5963 83.2791 17.5567 84.5355 16.3055C84.9146 15.9071 85.1529 15.3922 85.2129 14.8415C85.2142 14.4234 85.0752 14.0174 84.8188 13.6903C83.3908 11.7892 81.6025 10.198 79.5593 9.01049C78.9626 8.79623 78.3244 8.72874 77.697 8.81357C77.0697 8.8984 76.4711 9.13313 75.9503 9.49849L74.7186 10.3243C73.142 11.3629 71.7748 12.2638 69.8779 13.4651C69.3199 13.7718 68.6669 13.848 68.0549 13.6778C67.9564 13.6778 62.3643 11.8634 60.3197 11.3629C60.095 11.2995 59.8631 11.2659 59.6299 11.2628C59.1654 11.2654 58.7101 11.3951 58.312 11.6382L44.6151 21.2731C44.2361 21.5677 43.9283 21.9462 43.7148 22.3799C43.5014 22.8135 43.3881 23.2908 43.3834 23.7756V26.2782Z"
                            fill="#00ADEE" />
                        <path
                            d="M77.8732 17.5186C77.5113 17.5192 77.1537 17.4388 76.8259 17.2831C76.498 17.1274 76.208 16.9002 75.9763 16.6177L74.8555 15.3664L76.6415 13.6772L77.8732 14.9285C79.4252 13.6772 83.1943 9.92334 83.2313 9.92334L84.9433 11.7252C84.7709 11.8879 80.8663 15.6792 79.3144 16.9555C78.9159 17.3126 78.4045 17.5124 77.8732 17.5186Z"
                            fill="#00ADEE" />
                        <path
                            d="M81.9616 27.8155L79.9169 26.4141C80.1318 26.0892 80.2687 25.7178 80.3166 25.3295C80.3645 24.9411 80.3221 24.5468 80.1927 24.1782C80.0634 23.8095 79.8508 23.4769 79.572 23.2068C79.2931 22.9368 78.9558 22.737 78.5872 22.6234C78.2185 22.5098 77.8288 22.4857 77.4493 22.5528C77.0698 22.62 76.7111 22.7767 76.402 23.0103C76.0929 23.2438 75.842 23.5478 75.6695 23.8977C75.497 24.2476 75.4077 24.6338 75.4088 25.0251C75.4105 25.3111 75.4605 25.5947 75.5566 25.8635L73.2286 26.6894C73.0421 26.1549 72.9463 25.5922 72.9453 25.0251C72.9453 23.6977 73.4644 22.4246 74.3884 21.486C75.3123 20.5473 76.5655 20.02 77.8722 20.02C79.1789 20.02 80.4321 20.5473 81.3561 21.486C82.2801 22.4246 82.7992 23.6977 82.7992 25.0251C82.8042 26.0199 82.5122 26.9929 81.9616 27.8155Z"
                            fill="#00ADEE" />
                        <path d="M29.835 0H27.3716V5.00513H29.835V0Z" fill="#00ADEE" />
                        <path d="M29.835 10.0068H27.3716V15.012H29.835V10.0068Z" fill="#00ADEE" />
                        <path d="M35.9938 6.25439H31.0669V8.75696H35.9938V6.25439Z" fill="#00ADEE" />
                        <path d="M26.1393 6.25439H21.2124V8.75696H26.1393V6.25439Z" fill="#00ADEE" />
                        <path d="M88.9571 46.3005H86.4937V51.3057H88.9571V46.3005Z" fill="#00ADEE" />
                        <path d="M88.9581 56.3076H86.4946V61.3128H88.9581V56.3076Z" fill="#00ADEE" />
                        <path d="M95.1164 52.5552H90.1895V55.0577H95.1164V52.5552Z" fill="#00ADEE" />
                        <path d="M85.2629 52.5552H80.3359V55.0577H85.2629V52.5552Z" fill="#00ADEE" />
                        <path opacity="0.15"
                            d="M58.5655 78.9999C90.577 78.9999 116.527 74.771 116.527 69.5543C116.527 64.3376 90.577 60.1086 58.5655 60.1086C26.554 60.1086 0.603577 64.3376 0.603577 69.5543C0.603577 74.771 26.554 78.9999 58.5655 78.9999Z"
                            fill="#00ADEE" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1_602">
                            <rect width="117" height="79" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <p>Lorem Ipsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            </div>
            <div class="feauter col-md-3 col-sm-10">
                <svg width="119" height="79" viewBox="0 0 119 79" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1_628)">
                        <path
                            d="M39.372 69.4561C37.516 69.4561 35.7016 68.897 34.1584 67.8495C32.6152 66.802 31.4124 65.3131 30.7021 63.5712C29.9919 61.8292 29.806 59.9124 30.1681 58.0632C30.5302 56.214 31.424 54.5153 32.7364 53.1821C34.0488 51.8488 35.7209 50.9409 37.5412 50.5731C39.3616 50.2052 41.2484 50.394 42.9631 51.1156C44.6778 51.8371 46.1435 53.059 47.1746 54.6267C48.2058 56.1944 48.7561 58.0375 48.7561 59.923C48.7561 62.4513 47.7674 64.8761 46.0076 66.6639C44.2477 68.4518 41.8608 69.4561 39.372 69.4561ZM39.372 53.1136C38.0462 53.1136 36.7503 53.513 35.648 54.2612C34.5457 55.0095 33.6866 56.0729 33.1793 57.3172C32.6719 58.5614 32.5392 59.9306 32.7978 61.2514C33.0564 62.5723 33.6948 63.7857 34.6323 64.738C35.5697 65.6903 36.764 66.3388 38.0643 66.6015C39.3645 66.8643 40.7123 66.7294 41.9371 66.214C43.1619 65.6987 44.2088 64.8259 44.9453 63.7061C45.6818 62.5863 46.0749 61.2698 46.0749 59.923C46.0749 58.1171 45.3687 56.3851 44.1117 55.1081C42.8546 53.8311 41.1497 53.1136 39.372 53.1136Z"
                            fill="#FF6400" />
                        <path
                            d="M79.5897 69.4561C77.7337 69.4561 75.9194 68.897 74.3762 67.8495C72.833 66.802 71.6301 65.3131 70.9199 63.5712C70.2096 61.8292 70.0238 59.9124 70.3859 58.0632C70.748 56.214 71.6417 54.5153 72.9541 53.1821C74.2665 51.8488 75.9386 50.9409 77.7589 50.5731C79.5793 50.2052 81.4661 50.394 83.1809 51.1156C84.8956 51.8371 86.3612 53.059 87.3924 54.6267C88.4235 56.1944 88.9739 58.0375 88.9739 59.923C88.9739 62.4513 87.9852 64.8761 86.2253 66.6639C84.4655 68.4518 82.0785 69.4561 79.5897 69.4561ZM79.5897 53.1136C78.264 53.1136 76.9681 53.513 75.8658 54.2612C74.7635 55.0095 73.9043 56.0729 73.397 57.3172C72.8897 58.5614 72.7569 59.9306 73.0155 61.2514C73.2742 62.5723 73.9126 63.7857 74.85 64.738C75.7874 65.6903 76.9818 66.3388 78.282 66.6015C79.5823 66.8643 80.93 66.7294 82.1548 66.214C83.3796 65.6987 84.4265 64.8259 85.163 63.7061C85.8996 62.5863 86.2927 61.2698 86.2927 59.923C86.2927 58.1171 85.5865 56.3851 84.3294 55.1081C83.0724 53.8311 81.3675 53.1136 79.5897 53.1136Z"
                            fill="#FF6400" />
                        <path d="M40.7124 58.5642H38.0312V61.288H40.7124V58.5642Z" fill="#FF6400" />
                        <path d="M80.9307 58.5642H78.2495V61.288H80.9307V58.5642Z" fill="#FF6400" />
                        <path
                            d="M92.996 62.647H87.5264V59.9233H92.996C93.5365 59.9735 94.0813 59.9024 94.5917 59.7148C95.1021 59.5272 95.5657 59.2279 95.9495 58.838C96.3333 58.4481 96.628 57.9772 96.8126 57.4587C96.9972 56.9402 97.0673 56.3868 97.0178 55.8377C97.0178 49.1917 92.6877 36.7714 82.2713 36.7714H74.9248L65.8087 25.1955C65.3067 24.5585 64.6702 24.0442 63.9463 23.6906C63.2223 23.337 62.4294 23.1532 61.6261 23.1527H39.5465C38.8025 23.1529 38.0667 23.3105 37.3858 23.6153C36.705 23.9201 36.094 24.3655 35.5918 24.9231C32.0144 28.7842 28.8092 32.9843 26.0199 37.466C25.1227 38.9823 24.6585 40.7223 24.6793 42.4913V55.8377C24.6793 56.9212 25.103 57.9604 25.8573 58.7266C26.6115 59.4928 27.6345 59.9233 28.7011 59.9233H31.4895V62.647H28.6475C26.8698 62.647 25.1648 61.9296 23.9078 60.6526C22.6507 59.3756 21.9445 57.6436 21.9445 55.8377V42.4913C21.9321 40.2105 22.5549 37.9727 23.7409 36.036C26.6183 31.4031 29.9269 27.0615 33.6211 23.071C34.3789 22.243 35.2956 21.5814 36.3147 21.127C37.3337 20.6726 38.4336 20.4351 39.5465 20.429H61.6261C62.831 20.4297 64.0204 20.7055 65.1064 21.2358C66.1923 21.7662 67.1471 22.5377 67.9001 23.4932L76.2118 34.0477H82.2713C93.6395 34.0477 99.699 46.6995 99.699 55.8377C99.7517 56.7459 99.6144 57.6551 99.2962 58.5055C98.978 59.3559 98.486 60.1282 97.8527 60.7715C97.2195 61.4148 96.4593 61.9145 95.6221 62.2378C94.785 62.5611 93.89 62.7005 92.996 62.647Z"
                            fill="#FF6400" />
                        <path d="M71.6537 59.9221H63.5029V62.6458H71.6537V59.9221Z" fill="#FF6400" />
                        <path d="M52.7777 59.9221H47.3081V62.6458H52.7777V59.9221Z" fill="#FF6400" />
                        <path d="M59.4809 66.7317H24.6255V69.4555H59.4809V66.7317Z" fill="#FF6400" />
                        <path d="M94.3366 66.7317H66.1841V69.4555H94.3366V66.7317Z" fill="#FF6400" />
                        <path
                            d="M62.163 64.011H54.1194C53.746 64.0172 53.3755 63.944 53.0315 63.7963C52.6875 63.6486 52.3777 63.4294 52.1219 63.153C51.8778 62.8939 51.6906 62.5851 51.5727 62.247C51.4549 61.909 51.409 61.5493 51.4382 61.1919L52.2158 50.4603L54.897 50.6646L54.1328 61.3826L62.1764 61.2872L59.5891 21.8882L62.2703 21.7112L64.8576 61.2055C64.8868 61.5629 64.8409 61.9226 64.7231 62.2606C64.6052 62.5987 64.418 62.9075 64.1739 63.1666C63.9154 63.4423 63.6029 63.6599 63.2566 63.8053C62.9102 63.9508 62.5376 64.0208 62.163 64.011Z"
                            fill="#FF6400" />
                        <path d="M52.5575 44.9607L52.4009 47.4616L55.0767 47.6345L55.2333 45.1337L52.5575 44.9607Z"
                            fill="#FF6400" />
                        <path d="M53.9802 21.6775L52.6973 41.8866L55.3729 42.0619L56.6559 21.8528L53.9802 21.6775Z"
                            fill="#FF6400" />
                        <path
                            d="M54.4136 38.133H37.4953C36.5697 38.1294 35.6832 37.7534 35.0299 37.0872C34.3766 36.421 34.0098 35.5189 34.0098 34.5786C34.0076 34.0039 34.1458 33.4377 34.412 32.9307L37.3881 27.1836L39.761 28.4501L36.7848 34.2108C36.7212 34.3224 36.6887 34.4496 36.691 34.5786C36.6892 34.687 36.7087 34.7947 36.7483 34.8954C36.7879 34.9962 36.8469 35.0878 36.9218 35.1652C36.9966 35.2425 37.0859 35.3039 37.1844 35.3458C37.2828 35.3877 37.3886 35.4093 37.4953 35.4093H54.4136V38.133Z"
                            fill="#FF6400" />
                        <path d="M68.8641 35.4128H61.8662V38.1366H68.8641V35.4128Z" fill="#FF6400" />
                        <path d="M28.647 51.7546H23.2847V54.4784H28.647V51.7546Z" fill="#FF6400" />
                        <path d="M97.9559 50.3899H90.3145V53.1136H97.9559V50.3899Z" fill="#FF6400" />
                        <path
                            d="M96.3209 47.6644H84.1751C83.8213 47.6647 83.471 47.5938 83.1443 47.4559C82.8176 47.318 82.5209 47.1158 82.2715 46.8609L80.3679 44.9407C79.8867 44.413 79.6103 43.7258 79.5903 43.0068C79.5939 42.076 79.9594 41.1844 80.6072 40.5262C81.2551 39.8681 82.1329 39.4968 83.0491 39.4932H93.1035V42.2169H83.0491C82.947 42.2169 82.8458 42.2373 82.7515 42.277C82.6572 42.3167 82.5714 42.3749 82.4992 42.4483C82.427 42.5216 82.3698 42.6087 82.3307 42.7045C82.2916 42.8004 82.2715 42.9031 82.2715 43.0068L84.1751 44.9407H96.3209V47.6644Z"
                            fill="#FF6400" />
                        <path
                            d="M63.1943 22.2519L60.674 21.3394C60.7706 21.0452 60.8204 20.7372 60.8214 20.427C60.8214 19.7046 60.5389 19.0118 60.0361 18.501C59.5332 17.9902 58.8513 17.7032 58.1402 17.7032C57.4291 17.7032 56.7472 17.9902 56.2444 18.501C55.7415 19.0118 55.459 19.7046 55.459 20.427C55.4601 20.7327 55.5099 21.0363 55.6065 21.3258L53.0861 22.2383C52.8249 21.49 52.7279 20.6927 52.8019 19.9023C52.8758 19.1119 53.119 18.3475 53.5142 17.6626C53.9095 16.9777 54.4474 16.3888 55.0902 15.9372C55.733 15.4856 56.4651 15.1823 57.2355 15.0483C58.0058 14.9144 58.7956 14.9531 59.5497 15.1618C60.3038 15.3705 61.0038 15.7441 61.6008 16.2564C62.1979 16.7688 62.6774 17.4076 63.0059 18.128C63.3344 18.8484 63.5039 19.633 63.5026 20.427C63.5015 21.0486 63.3973 21.6655 63.1943 22.2519Z"
                            fill="#FF6400" />
                        <path
                            d="M42.5763 22.8826C41.2249 21.8529 40.2268 20.417 39.7238 18.7787C39.2207 17.1404 39.2382 15.3828 39.7738 13.7551C40.3093 12.1275 41.3358 10.7125 42.7075 9.71074C44.0792 8.70902 45.7265 8.17146 47.4159 8.17433C51.3438 8.17433 55.4594 10.7755 59.1997 15.5012L57.0816 17.1899C53.9848 13.186 50.459 10.8981 47.4159 10.8981C46.2904 10.8981 45.1935 11.2578 44.2804 11.9263C43.3674 12.5949 42.6846 13.5383 42.3287 14.6229C41.9728 15.7076 41.9618 16.8785 42.2974 17.9698C42.633 19.0612 43.2981 20.0176 44.1984 20.7036L42.5763 22.8826Z"
                            fill="#FF6400" />
                        <path
                            d="M68.8663 24.5168H65.6489V21.7931H68.8663C70.2885 21.7931 71.6524 21.2191 72.6581 20.1975C73.6637 19.1759 74.2287 17.7903 74.2287 16.3456C74.2287 14.9008 73.6637 13.5152 72.6581 12.4936C71.6524 11.472 70.2885 10.8981 68.8663 10.8981C65.8232 10.8981 62.2974 13.186 59.2006 17.1899L57.0825 15.5012C60.8228 10.7755 64.9384 8.17432 68.8663 8.17432C70.9996 8.17432 73.0455 9.03521 74.5539 10.5676C76.0624 12.1 76.9099 14.1784 76.9099 16.3456C76.9099 18.5127 76.0624 20.5911 74.5539 22.1235C73.0455 23.6559 70.9996 24.5168 68.8663 24.5168Z"
                            fill="#FF6400" />
                        <path d="M90.3145 0H87.6333V5.44749H90.3145V0Z" fill="#FF6400" />
                        <path d="M90.3145 10.8899H87.6333V16.3374H90.3145V10.8899Z" fill="#FF6400" />
                        <path d="M97.0177 6.80957H91.6553V9.53332H97.0177V6.80957Z" fill="#FF6400" />
                        <path d="M86.293 6.80957H80.9307V9.53332H86.293V6.80957Z" fill="#FF6400" />
                        <path opacity="0.15"
                            d="M59.25 78.9998C91.9729 78.9998 118.5 74.6769 118.5 69.3443C118.5 64.0117 91.9729 59.6887 59.25 59.6887C26.5271 59.6887 0 64.0117 0 69.3443C0 74.6769 26.5271 78.9998 59.25 78.9998Z"
                            fill="#FF6400" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1_628">
                            <rect width="119" height="79" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <p>Lorem Ipsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            </div>
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
                <img class="img-fluid rounded position-relative" src="{{ asset('assets/images/picture1.jpg') }}"
                    alt="">

            </div>

            <div class="col-lg-7 pt-2">

                <h2 style="font-size: 1.4rem !important;" class="darkcolor fontwbold">
                    Estimation Rapide et Fiable pour Vos Transactions de Véhicules
                </h2>
                <div class="row mt-4">


                    <div class="col-md-10 bgwhite rounded d-flex px-3 py-2 mb-2 gap-2">


                        <iconify-icon icon="lets-icons:search-alt" width="30" style="width: 30px;height:30px"
                            class="primarycolor"></iconify-icon>

                        <div class="">

                            <h4 class="darkcolor font18 fontw600">Optimisez Vos Transactions de Voitures</h4>
                            <p class="mb-0">
                                Notre outil analyse plus d'un million d'annonces pour vous offrir une estimation précise et
                                actualisée du prix de votre véhicule, que vous souhaitiez acheter ou vendre.
                            </p>
                        </div>

                    </div>





                    <div class="col-md-10 bgwhite rounded d-flex px-3 py-2  mb-2 gap-2">
                        <iconify-icon icon="mingcute:time-line" width="30" style="width: 30px;height:30px"
                            class="primarycolor"></iconify-icon>

                        <div class="">

                            <h4 class="darkcolor font18 fontw600">
                                Pourquoi LautoPrix est Votre Meilleur Choix ?
                            </h4>
                            <ul class="darkcolor list-unstyled">
                                <li> <b class="primarycolor fontw900">Données Fiables</b> : Nous exploitons une large base
                                    de données pour vous garantir une vision complète du marché de l'occasion en France.
                                </li>
                                <li> <b class="primarycolor fontw900">Facilité d'Utilisation</b> : Saisissez simplement
                                    quelques détails sur votre véhicule et recevez instantanément une estimation de sa
                                    valeur.
                                </li>
                                <li> <b class="primarycolor fontw900">Décisions Informées</b> : Nos estimations vous
                                    permettent de prendre des décisions sûres et informées, en toute confiance.
                                </li>
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

    {{-- FAQ --}}
    <section class="SectionsTeam pb-3 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">


            <div class="p-5">
                <h2 class="darkcolor text-center fontwbold font30">FAQ</h2>



            </div>


            <div class="row">



                <div class="col-md-12 px-2">

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA1" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA1">
                                    Pour les Acheteurs :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA1" class="accordion-collapse collapse" style="">
                                <div class="accordion-body">
                                    Vous cherchez une voiture d'occasion et vous voulez connaître le prix moyen sans passer
                                    des heures à parcourir toutes les annonces Leboncoin ? Entrez simplement les détails de
                                    la voiture que vous recherchez et obtenez une estimation fiable et rapide du prix du
                                    marché actuel. Achetez en toute confiance grâce à LautoPrix.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA2" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA2">
                                    Pour les Vendeurs :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA2" class="accordion-collapse collapse" style="">
                                <div class="accordion-body">
                                    Vous voulez vendre votre voiture rapidement et au meilleur prix ? Notre outil vous aide
                                    à obtenir une estimation précise de la valeur de votre véhicule en fonction des prix
                                    réels du marché, contrairement à l'argus qui peut ne pas refléter la réalité. Entrez les
                                    informations de votre voiture et vendez-la au juste prix.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA3" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA3">
                                    Pour les Passionnés d'Automobile :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Vous aimez rester informé des tendances du marché automobile et des prix des véhicules ?
                                    Notre site vous fournit des données actualisées et pertinentes pour suivre les
                                    évolutions du marché. Ne manquez jamais une tendance avec LautoPrix.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA4" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA4">
                                    Pour les Concessionnaires :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Évaluez rapidement et précisément la valeur des véhicules que vous achetez ou vendez.
                                    Obtenez des estimations précises pour fixer des prix compétitifs, optimisez votre stock
                                    et offrez à vos clients une transparence totale sur les prix.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA5" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA5">
                                    Pour les Assurances :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA5" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Évaluez la valeur des véhicules de vos clients de manière rapide et précise. Utilisez
                                    notre outil pour calculer les primes d'assurance, estimer les indemnisations en cas de
                                    sinistre et améliorer la satisfaction client avec des informations transparentes et
                                    justes.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA6" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA6">
                                    Pour les Comptables et Experts-comptables :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA6" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    LautoPrix fournit des estimations précises de la valeur des véhicules, ce qui est
                                    crucial pour l'évaluation des actifs et la comptabilité. Facilitez vos processus de
                                    bilan et d’audit avec des données actuelles et fiables sur le marché des véhicules
                                    d'occasion.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA7" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA7">
                                    Pour les Loueurs de Voitures :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA7" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Obtenez des informations précises sur la dépréciation et la valeur marchande de votre
                                    flotte de véhicules. Cela vous permet de fixer des prix de location compétitifs et de
                                    maximiser la rentabilité tout en offrant des tarifs justes à vos clients.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA8" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA8">
                                    Pour les Sites de Petites Annonces :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA8" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Intégrez les données de LautoPrix pour fournir des évaluations de prix précises à vos
                                    utilisateurs, améliorant ainsi leur expérience et augmentant leur confiance dans les
                                    transactions réalisées via votre plateforme.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA9" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA9">
                                    Pour les Sociétés de Crédit et de Leasing :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA9" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Utilisez les estimations précises de LautoPrix pour évaluer la valeur des véhicules en
                                    leasing et déterminer les conditions de crédit. Cela permet de proposer des offres plus
                                    justes et d'améliorer la satisfaction client.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA10" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA10">
                                    Pour les Flottes d'Entreprises :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA10" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les gestionnaires de flotte peuvent utiliser LautoPrix pour évaluer la valeur de leurs
                                    véhicules et planifier les rotations de flotte, maximisant ainsi la valeur de revente et
                                    minimisant les coûts d'exploitation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA11" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA11">
                                    Pour les Organismes de Formation en Automobile :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA11" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les écoles de commerce automobile et les centres de formation peuvent utiliser LautoPrix
                                    comme outil pédagogique pour enseigner les réalités du marché des véhicules d'occasion
                                    et la dynamique des prix.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>







            </div>
        </div>

    </section>
    {{-- END FAQ --}}

    <!-- ################  START BLOGS ################ -->

    <section class="SectionsBlog  py-5 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">
            <div class="d-block d-lg-flex justify-content-between align-items-end text-center text-lg-left mb-4 pb-1">
                <h2 class="darkcolor fontwbold font30 mb-0">Plongez au cœur de l'actualité des véhicules d'occasion</h2>
                <a href="https://blog.lautoprix.fr/" class="SeeMorelink mt-2 mt-lg-0">Voir tous les articles</a>
            </div>

            <div class="blogCards">
                <div class="row">
                    <div class="col-lg-6 pe-4 mb-lg-2 mb-4">
                        <a href="https://blog.lautoprix.fr/2023/04/04/a-new-resource-to-hook-you-up/">
                            <img class="img-fluid rounded"
                                src="https://blog.lautoprix.fr/wp-content/uploads/2023/04/ev-1-1250x715.jpg"
                                alt="">
                            <h4 class="darkcolor font18 fomtw600  mt-3">Fabriquer des voitures électriques chinoises en
                                Europe :
                                opportunité ou bombe à retardement ? </h4>
                            <p class="">Lorsque vous achetez ou vendez une voiture d’occasion, une évaluation précise
                                est essentielle pour garantir que vous obtenez un prix juste...
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-6 row">
                        <div class="col-md-6 pe-4 mb-lg-2 mb-4">
                            <a href="https://blog.lautoprix.fr/2023/04/03/new-skills-and-a-snazzy-new-trip/">
                                <img class="img-fluid rounded"
                                    src="https://blog.lautoprix.fr/wp-content/uploads/2023/04/ppo-750x575.jpg"
                                    alt="">
                                <h4 class="darkcolor font18 fontw600 mt-3">L’Impact des Nouvelles Technologies sur l’Avenir
                                    de l’Automobile</h4>
                            </a>
                        </div>
                        <div class="col-md-6 pe-4 mb-lg-2 mb-4">
                            <a href="https://blog.lautoprix.fr/2023/03/02/how-to-create-dope-content/">
                                <img class="img-fluid rounded"
                                    src="https://blog.lautoprix.fr/wp-content/uploads/2023/03/poo-1-750x575.webp"
                                    alt="">
                                <h4 class="darkcolor font18 fontw600 mt-3">Top 5 Astuces pour Négocier le Prix d’une
                                    Voiture d’Occasion</h4>
                            </a>
                        </div>

                        <div class="col-md-6 pe-4 mb-lg-2 mb-4">
                            <a href="https://blog.lautoprix.fr/2023/03/02/tell-the-world-how-its-great/">
                                <img class="img-fluid rounded"
                                    src="https://blog.lautoprix.fr/wp-content/uploads/2023/03/saso-1250x715.jpg"
                                    alt="">
                                <h4 class="darkcolor font18 fontw600 mt-3">Que faire avant de mettre votre voiture en
                                    Vente?</h4>
                            </a>
                        </div>
                        {{-- <div class="col-md-6 pe-4 mb-lg-2 mb-4">
                            <a href="">
                                <img class="img-fluid rounded"
                                    src="https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="">
                                <h4 class="darkcolor font18 fontw600 mt-3">Fabriquer des voitures électriques chinoises en
                                    Europe :
                                    opportunité ou bombe à retardement ? </h4>
                            </a>
                        </div> --}}
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
                    // Find the closest input container
                    const container = this.closest('.input-container');

                    if (container) {
                        // Clear the input value
                        const input = container.querySelector('input');
                        if (input) {
                            input.value = '';
                        }

                        // Uncheck all checkboxes within the related model-list
                        const modelList = container.querySelector('.model-list');
                        if (modelList) {
                            const checkboxes = modelList.querySelectorAll('.form-check-input');
                            checkboxes.forEach(checkbox => {
                                checkbox.checked = false;
                            });
                        }

                        // Clear the badge container if it exists
                        const badgeContainer = container.querySelector('.badge-container');
                        if (badgeContainer) {
                            badgeContainer.innerHTML = '';
                        }
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

            function setupMarqueCheckboxListeners() {
                const getModelsRoute = "{{ route('getLeboncoinModeles', ':marque') }}";
                const marquesDiv = document.querySelector('#marques');
                const modelListDiv = document.querySelector('#models');
                const modeleInput = document.querySelector('[name=modele]');

                function updateModeleInputState() {
                    const anyChecked = Array.from(marquesDiv.querySelectorAll('.form-check-input')).some(cb => cb
                        .checked);
                    modeleInput.disabled = !anyChecked;
                }

                function handleCheckboxChange(event) {
                    const checkbox = event.target;

                    console.log('Checkbox changed:', checkbox.value, 'Checked:', checkbox.checked);

                    updateModeleInputState(); // Update the state of modeleInput based on checked checkboxes

                    if (checkbox.checked) {
                        console.log(checkbox.checked);
                        document.querySelector('form').querySelector('[name=modele]').value = ''
                        const url = getModelsRoute.replace(':marque', encodeURIComponent(checkbox.value));
                        modelListDiv.innerHTML = `
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only"></span>
                </div>`;

                        axios.get(url)
                            .then((responseModeles) => {
                                autocompleteData.modele = [...new Set(
                                    responseModeles.data.modeles.map(item => item.u_car_model)
                                )];

                                modeleInput.value = ''; // Clear input value
                                // Update the stored data in local storage
                                storeAutocompleteData(autocompleteData);

                                // Clear the loader
                                modelListDiv.innerHTML = '';

                                document.querySelectorAll(".SearchandCheck-models").forEach((container) => {
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
                }

                // Event delegation for dynamically added checkboxes
                marquesDiv.addEventListener('change', (event) => {
                    if (event.target.classList.contains('form-check-input')) {
                        handleCheckboxChange(event);
                    }
                });

                // Initial state of modeleInput
                updateModeleInputState();
            }

            // Fetch leboncoin data and update other fields
            function fetchAndUpdateAutocompleteData() {
                axios.get('/api/leboncoin-data')
                    .then((response) => {
                        const data = response.data.LeboncoindData;

                        const newAutocompleteData = {
                            ...autocompleteData,
                            marque: [...new Set(data.map((item) => item.u_car_brand))],
                            // modele: [],
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
            const storedData = getAutocompleteData();
            if (storedData) {
                autocompleteData = storedData;

                // Fetch new data from the API to check for updates
                fetchRegions().then(() => fetchAndUpdateAutocompleteData());
                setupMarqueCheckboxListeners();
                initializeComponents();

            } else {
                // Fetch initial data from the API
                setupMarqueCheckboxListeners();
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
                                // Uncheck all other checkboxes and clear the set
                                modelList.querySelectorAll(".form-check-input").forEach((checkbox) => {
                                    checkbox.checked = false;
                                });

                                // Clear the set and add the current model
                                selectedModelNames.clear();
                                selectedModelNames.add(model);

                                // Recheck the current checkbox
                                e.target.checked = true;
                            } else {
                                selectedModelNames.delete(model);
                            }
                            renderSelectedModels();
                        });



                        // listItem.querySelector("input").addEventListener("change", (e) => {
                        //     if (e.target.checked) {
                        //         // Uncheck all other checkboxes
                        //         modelList.querySelectorAll(".form-check-input").forEach((checkbox) => {
                        //             if (checkbox !== e.target) {
                        //                 checkbox.checked = false;
                        //             }
                        //         });
                        //         // // Clear the set and add the current model
                        //         selectedModelNames.clear();
                        //         // Uncheck all other checkboxes
                        //         // document.querySelector('#marques').querySelectorAll(".form-check-input")
                        //         //     .forEach((checkbox) => {
                        //         //         if (checkbox !== e.target) {
                        //         //             checkbox.checked = false;
                        //         //         }
                        //         //     });
                        //         // Clear the set and add the current model only if the input's ID includes "check-marque"
                        //         // if (e.target.id.includes("check-marque")) {
                        //         //     selectedModelNames.clear();
                        //         // }

                        //         selectedModelNames.add(model);
                        //     } else {
                        //         selectedModelNames.delete(model);
                        //     }
                        //     renderSelectedModels();
                        // });
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


    {{-- <script>

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".autocompleteSearch").forEach((container) => {
                CreateAutocompleteSearch(container);
            });
        });

        function CreateAutocompleteSearch(container) {
            const modelList = container.querySelector(".model-list");
            const searchInput = container.querySelector(".search-input");
            const selectedInput = container.querySelector("input");

            async function fetchSearchResults(query) {
                try {
                    const response = await axios.get(`/api/search-leboncoin-titles`, {
                        params: {
                            query: query
                        }
                    });
                    return response.data;
                } catch (error) {
                    console.error('Error fetching search results:', error);
                    return [];
                }
            }

            async function renderLocationList(filter = "") {
                modelList.innerHTML = `
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only"></span>
            </div>
        `; // Show loader

                const autocompletes = await fetchSearchResults(filter);

                modelList.innerHTML = ""; // Clear the loader and previous results

                autocompletes.forEach((autocomplete) => {
                    const listItem = document.createElement("div");
                    listItem.classList.add("dropdown-item");
                    listItem.textContent = autocomplete;
                    listItem.addEventListener("click", () => {
                        selectedInput.value = autocomplete;
                        container.querySelector(".dropdown-menu").classList.remove("show");
                    });
                    modelList.appendChild(listItem);
                });
            }

            searchInput.addEventListener("keyup", () => {
                const query = searchInput.value;
                if (query.length > 2) { // Trigger search only if more than 2 characters are typed
                    renderLocationList(query);
                } else {
                    modelList.innerHTML = ""; // Clear results if query length is <= 2
                }
            });

            selectedInput.addEventListener("focus", () => {
                container.querySelector(".dropdown-menu").classList.add("show");
            });

            document.addEventListener("click", (event) => {
                if (!container.contains(event.target)) {
                    container.querySelector(".dropdown-menu").classList.remove("show");
                }
            });
        }
    </script> --}}
@endpush
