@extends('layouts.app')
@push('third_party_stylesheets')
<link rel="stylesheet" href="{{ asset('assets/styles/anounce.css') }}">

@endpush

{{-- @dd($annonceListings) --}}
@section('content')
    <!-- START ADS -->
    <br>
    <section class="ADS px-4 px-xl-0 pt-5 mt-5 container-fluid row justify-content-center" style="width: 98%;margin: 0 auto;">

        <div class="col-lg-12 col-xl-11 col-xxl-9 py-5 bgLight rounded row px-3 text-center">


            <p class="LightGrayColor font35 fontw900 m-0 pt-5">AutoPrix</p>
            <p class="LightGrayColor font20 fontw900 m-0  pb-5">publicité</p>


        </div>
    </section>

    <!-- END ADS -->


    <!-- FILTERS -->

    <div class="container row my-4 mx-auto  col-lg-12 col-xl-11 col-xxl-9">

        {{-- // START ******** location input ********* --}}
        <div class="col-md-4 px-2 my-2">
            <div class="autocompleteInput input-container col-sm position-relative">
                <input type="text" data-array="location" name="location"
                    class="form-control py-2 @error('location') is-invalid @enderror" placeholder="localisation" readonly
                    value="">
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
                {{-- @error('location')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>
        </div>
        {{-- // END ******** location input ********* --}}

        {{-- // START ******** TITLE input ********* --}}
        <div class="col-md-4 px-2 my-2">
            <div class="autocompleteSearch input-container">
                <input type="text" data-array="title" name="title" class="form-control py-2" placeholder="Recherche"
                    value="">
            </div>
        </div>
        {{-- // END ******** TITLE input ********* --}}


        {{-- // START ******** Filter Button ********* --}}
        <div class="col-md-4 px-2 my-2">
            <button
                class="py-2 filterButton d-flex align-items-center gap-3 h-100 w-100 px-3 text-start rounded border border-secondary fw-bold"
                title="Afficher tous les filtres" data-bs-toggle="offcanvas" data-bs-target="#canvasRightFilter"
                aria-controls="canvasRightFilter">
                <iconify-icon icon="rivet-icons:filter" width="16" height="16"></iconify-icon>

                <span class="">Filtres</span>

            </button>
        </div>
        {{-- // END ******** TITLE Button ********* --}}


    </div>

    <!-- END :  FILTERS -->


    <!-- START FORM CANVAS -->

    <style>
        #filterSearchForm .form-label {
            color: var(--darkcolor);
            font-weight: 600;
            margin-bottom: 4px;
            font-family: var(--primaryfont), sans-serif;
        }


        #filterSearchForm .info-title {
            color: var(--darkcolor);
            font-weight: 600;
            margin-bottom: 0px;
            font-family: var(--primaryfont), sans-serif;
        }

        #offcanvasRight .form-label {
            color: var(--darkcolor);
            font-weight: 600;
            margin-bottom: 10px;
            font-family: var(--primaryfont), sans-serif;
        }


        #filterSearchForm .info-values {
            color: var(--SGrayColor);
            font-size: 12px;
        }

        #filterSearchForm .info-selected {
            font-size: 14px;
        }

        #filterSearchForm .infos:hover {
            cursor: pointer;
        }

        #filterSearchForm .hr {
            margin: 0;
        }

        #filterSearchForm>div {
            padding: 2px 0px;
        }

        #filterSearchForm .form-check,
        #offcanvasRight .form-check {
            display: flex;
            flex-direction: row-reverse;
            gap: 2px;
            justify-content: space-between;
            padding-left: 0px;

        }


        .FormFooter {
            position: fixed;
            bottom: 0px;
            background-color: var(--white);
            width: 100%;
        }


        #offcanvasRight .offcanvas-footer {

            background-color: var(--white);
            width: 100%;
            padding: 16px 14px;
        }

        #offcanvasRight .offcanvas-footer {

            background-color: var(--white);
            width: 100%;
            padding: 16px 14px;
            font-family: var(--primaryfont), sans-serif;
            color: var(--darkcolor);
        }

        #offcanvasRight label {
            width: 80%;
        }

        #canvasRightFilter label {
            width: 80%;
        }
    </style>
    <!-- Off-canvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="canvasRightFilter" aria-labelledby="canvasRightFilterLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="canvasRightFilterLabel">Tous les filtres</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form id="filterSearchForm" method="GET" action="#">
                <hr class="LineHR mt-0 mb-3">

                <!-- Prix -->
                <div class="mb-1">
                    <label for="prixMin" class="form-label">Prix</label>
                    <div class="d-flex gap-2">
                        <input type="number" name="prixMin" id="prixMin" class="form-control" placeholder="Minimum">
                        <input type="number" name="prixMax" id="prixMax" class="form-control" placeholder="Maximum">
                    </div>
                </div>

                <hr class="LineHR">

                <!-- Marque (Radio buttons with canvased class) -->
                <div class="mb-1 canvased">
                    <div class="RealInputs">
                        <label class="form-label canvasedMainLabel">Marque</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque1" value="Marque1">
                            <label class="form-check-label" for="marque1">Marque1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque2" value="Marque2">
                            <label class="form-check-label" for="marque2">Marque2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque3"
                                value="Marque3">
                            <label class="form-check-label" for="marque3">Marque3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque4"
                                value="Marque4">
                            <label class="form-check-label" for="marque4">Marque4</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque5"
                                value="Marque5">
                            <label class="form-check-label" for="marque5">Marque5</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque6"
                                value="Marque6">
                            <label class="form-check-label" for="marque6">Marque6</label>
                        </div>
                        <!-- Add more radio buttons here -->
                    </div>
                </div>


                <hr class="LineHR">


                <!-- Modèle (Checkboxes with canvased class) -->
                <div class="mb-1 canvased">
                    <div class="RealInputs">
                        <label class="form-label canvasedMainLabel">Modèle</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele1"
                                value="Modèle1">
                            <label class="form-check-label" for="modele1">Modèle1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele2"
                                value="Modèle2">
                            <label class="form-check-label" for="modele2">Modèle2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele3"
                                value="Modèle3">
                            <label class="form-check-label" for="modele3">Modèle3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele4"
                                value="Modèle4">
                            <label class="form-check-label" for="modele4">Modèle4</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele5"
                                value="Modèle5">
                            <label class="form-check-label" for="modele5">Modèle5</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele6"
                                value="Modèle6">
                            <label class="form-check-label" for="modele6">Modèle6</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele7"
                                value="Modèle7">
                            <label class="form-check-label" for="modele7">Modèle7</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele8"
                                value="Modèle8">
                            <label class="form-check-label" for="modele8">Modèle8</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele9"
                                value="Modèle9">
                            <label class="form-check-label" for="modele9">Modèle9</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele10"
                                value="Modèle10">
                            <label class="form-check-label" for="modele10">Modèle10</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele11"
                                value="Modèle11">
                            <label class="form-check-label" for="modele11">Modèle11</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele12"
                                value="Modèle12">
                            <label class="form-check-label" for="modele12">Modèle12</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele13"
                                value="Modèle13">
                            <label class="form-check-label" for="modele13">Modèle13</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele14"
                                value="Modèle14">
                            <label class="form-check-label" for="modele14">Modèle14</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele15"
                                value="Modèle15">
                            <label class="form-check-label" for="modele15">Modèle15</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele16"
                                value="Modèle16">
                            <label class="form-check-label" for="modele16">Modèle16</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele17"
                                value="Modèle17">
                            <label class="form-check-label" for="modele17">Modèle17</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele18"
                                value="Modèle18">
                            <label class="form-check-label" for="modele18">Modèle18</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele19"
                                value="Modèle19">
                            <label class="form-check-label" for="modele19">Modèle19</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele20"
                                value="Modèle20">
                            <label class="form-check-label" for="modele20">Modèle20</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele21"
                                value="Modèle21">
                            <label class="form-check-label" for="modele21">Modèle21</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="modele[]" id="modele22"
                                value="Modèle22">
                            <label class="form-check-label" for="modele22">Modèle22</label>
                        </div>

                        <!-- Add more checkboxes here -->
                    </div>
                </div>


                <hr class="LineHR">

                <!-- Année-Modèle -->
                <div class="mb-1">
                    <label for="anneeModeleMin" class="form-label">Année-Modèle</label>
                    <div class="d-flex gap-2">
                        <input type="number" name="anneeModeleMin" id="anneeModeleMin" class="form-control"
                            placeholder="Minimum">
                        <input type="number" name="anneeModeleMax" id="anneeModeleMax" class="form-control"
                            placeholder="Maximum">
                    </div>
                </div>

                <hr class="LineHR">

                <!-- Type de véhicule -->
                <div class="mb-1 canvased">
                    <div class="RealInputs">
                        <label class="form-label canvasedMainLabel">Type de véhicule</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="typeVehicule[]" id="typeVehicule1"
                                value="Type 1">
                            <label class="form-check-label" for="typeVehicule1">Type 1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="typeVehicule[]" id="typeVehicule2"
                                value="Type 2">
                            <label class="form-check-label" for="typeVehicule2">Type 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="typeVehicule[]" id="typeVehicule3"
                                value="Type 3">
                            <label class="form-check-label" for="typeVehicule3">Type 3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="typeVehicule[]" id="typeVehicule4"
                                value="Type 4">
                            <label class="form-check-label" for="typeVehicule4">Type 4</label>
                        </div>
                    </div>
                </div>


                <hr class="LineHR">


                <!-- Carburant -->
                <div class="mb-1 canvased">
                    <div class="RealInputs">
                        <label class="form-label canvasedMainLabel">Carburant</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="carburant[]" id="carburant1"
                                value="Essence">
                            <label class="form-check-label" for="carburant1">Essence</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="carburant[]" id="carburant2"
                                value="Diesel">
                            <label class="form-check-label" for="carburant2">Diesel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="carburant[]" id="carburant3"
                                value="Hybride">
                            <label class="form-check-label" for="carburant3">Hybride</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="carburant[]" id="carburant4"
                                value="Électrique">
                            <label class="form-check-label" for="carburant4">Électrique</label>
                        </div>
                    </div>
                </div>


                <hr class="LineHR">



                <!-- Boîte de vitesse -->
                <div class="mb-1">
                    <label class="form-label">Boîte de vitesse</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="boiteDeVitesse[]" id="boiteManuelle"
                            value="Manuelle">
                        <label class="form-check-label" for="boiteManuelle">Manuelle</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="boiteDeVitesse[]" id="boiteAutomatique"
                            value="Automatique">
                        <label class="form-check-label" for="boiteAutomatique">Automatique</label>
                    </div>
                </div>


                <hr class="LineHR">



                <!-- Kilométrage -->
                <div class="mb-1">
                    <label for="kilometrageMin" class="form-label">Kilométrage</label>
                    <div class="d-flex gap-2">
                        <input type="number" name="kilometrageMin" id="kilometrageMin" class="form-control"
                            placeholder="Minimum">
                        <input type="number" name="kilometrageMax" id="kilometrageMax" class="form-control"
                            placeholder="Maximum">
                    </div>
                </div>

                <hr class="LineHR">


                <!-- Crit'air -->
                <div class="mb-1 canvased">
                    <div class="RealInputs">
                        <label class="form-label canvasedMainLabel">Crit'air</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="critair[]" id="critair0"
                                value="0">
                            <label class="form-check-label" for="critair0">0</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="critair[]" id="critair1"
                                value="1">
                            <label class="form-check-label" for="critair1">1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="critair[]" id="critair2"
                                value="2">
                            <label class="form-check-label" for="critair2">2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="critair[]" id="critair3"
                                value="3">
                            <label class="form-check-label" for="critair3">3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="critair[]" id="critair4"
                                value="4">
                            <label class="form-check-label" for="critair4">4</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="critair[]" id="critair5"
                                value="5">
                            <label class="form-check-label" for="critair5">5</label>
                        </div>
                    </div>
                </div>


                <hr class="LineHR">



                <!-- Puissance DIN -->
                <div class="mb-1">
                    <label for="puissanceDinMin" class="form-label">Puissance DIN</label>
                    <div class="d-flex gap-2">
                        <input type="number" name="puissanceDinMin" id="puissanceDinMin" class="form-control"
                            placeholder="Minimum">
                        <input type="number" name="puissanceDinMax" id="puissanceDinMax" class="form-control"
                            placeholder="Maximum">
                    </div>
                </div>


                <hr class="LineHR">



                <!-- État du véhicule -->
                <div class="mb-1">
                    <label class="form-label">État du véhicule</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="etatVehicule" id="etatNonEndommage"
                            value="Non endommagé">
                        <label class="form-check-label" for="etatNonEndommage">Non endommagé</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="etatVehicule" id="etatEndommage"
                            value="Endommagé">
                        <label class="form-check-label" for="etatEndommage">Endommagé</label>
                    </div>
                </div>

                <hr class="LineHR">



                <!-- Première main -->
                <div class="mb-1">
                    <label class="form-label">Première main</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="premiereMain" id="premiereMainOui"
                            value="Oui">
                        <label class="form-check-label" for="premiereMainOui">Oui</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="premiereMain" id="premiereMainNon"
                            value="Non">
                        <label class="form-check-label" for="premiereMainNon">Non</label>
                    </div>
                </div>

                <hr class="LineHR">


                <!-- Puissance fiscale -->
                <div class="mb-1">
                    <label for="puissanceFiscaleMin" class="form-label">Puissance fiscale</label>
                    <div class="d-flex gap-2">
                        <input type="number" name="puissanceFiscaleMin" id="puissanceFiscaleMin" class="form-control"
                            placeholder="Minimum">
                        <input type="number" name="puissanceFiscaleMax" id="puissanceFiscaleMax" class="form-control"
                            placeholder="Maximum">
                    </div>
                </div>

                <hr class="LineHR">


                <!-- Nombre de portes -->
                <div class="mb-1 canvased">
                    <div class="RealInputs">

                        <label class="form-label canvasedMainLabel">Nombre de portes</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePortes[]" id="portes2"
                                value="2">
                            <label class="form-check-label" for="portes2">2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePortes[]" id="portes3"
                                value="3">
                            <label class="form-check-label" for="portes3">3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePortes[]" id="portes4"
                                value="4">
                            <label class="form-check-label" for="portes4">4</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePortes[]" id="portes5"
                                value="5">
                            <label class="form-check-label" for="portes5">5</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePortes[]" id="portes6Plus"
                                value="6 ou plus">
                            <label class="form-check-label" for="portes6Plus">6 ou plus</label>
                        </div>
                    </div>
                </div>

                <hr class="LineHR">

                <!-- Nombre de place(s) -->
                <div class="mb-1 canvased">
                    <div class="RealInputs">

                        <label class="form-label canvasedMainLabel">Nombre de place</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePlaces[]" id="places1"
                                value="1">
                            <label class="form-check-label" for="places1">1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePlaces[]" id="places2"
                                value="2">
                            <label class="form-check-label" for="places2">2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePlaces[]" id="places3"
                                value="3">
                            <label class="form-check-label" for="places3">3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePlaces[]" id="places4"
                                value="4">
                            <label class="form-check-label" for="places4">4</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePlaces[]" id="places5"
                                value="5">
                            <label class="form-check-label" for="places5">5</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePlaces[]" id="places6"
                                value="6">
                            <label class="form-check-label" for="places6">6</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="nombrePlaces[]" id="places7Plus"
                                value="7 ou plus">
                            <label class="form-check-label" for="places7Plus">7 ou plus</label>
                        </div>
                    </div>
                </div>


                <hr class="LineHR">


                <!-- Couleur -->
                <div class="mb-1 canvased">
                    <div class="RealInputs">
                        <label class="form-label canvasedMainLabel">Couleur</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="couleur[]" id="couleurNoir"
                                value="Noir">
                            <label class="form-check-label" for="couleurNoir">Noir</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="couleur[]" id="couleurBlanc"
                                value="Blanc">
                            <label class="form-check-label" for="couleurBlanc">Blanc</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="couleur[]" id="couleurGris"
                                value="Gris">
                            <label class="form-check-label" for="couleurGris">Gris</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="couleur[]" id="couleurRouge"
                                value="Rouge">
                            <label class="form-check-label" for="couleurRouge">Rouge</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="couleur[]" id="couleurBleu"
                                value="Bleu">
                            <label class="form-check-label" for="couleurBleu">Bleu</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="couleur[]" id="couleurVert"
                                value="Vert">
                            <label class="form-check-label" for="couleurVert">Vert</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="couleur[]" id="couleurJaune"
                                value="Jaune">
                            <label class="form-check-label" for="couleurJaune">Jaune</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="couleur[]" id="couleurMarron"
                                value="Marron">
                            <label class="form-check-label" for="couleurMarron">Marron</label>
                        </div>
                    </div>
                </div>

                <hr class="LineHR">


                <!-- Permis -->
                <div class="mb-1">
                    <label class="form-label">Permis</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permis[]" id="permisAvec"
                            value="Avec permis">
                        <label class="form-check-label" for="permisAvec">Avec permis</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permis[]" id="permisSans"
                            value="Sans permis">
                        <label class="form-check-label" for="permisSans">Sans permis</label>
                    </div>
                </div>


                <hr class="LineHR">


                <!-- Tri -->
                <div class="mb-1">
                    <label class="form-label">Tri</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tri" id="triPertinence"
                            value="Pertinence">
                        <label class="form-check-label" for="triPertinence">Pertinence</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tri" id="triPlusRecents"
                            value="Plus récentes">
                        <label class="form-check-label" for="triPlusRecents">Plus récentes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tri" id="triPlusAnciennes"
                            value="Plus anciennes">
                        <label class="form-check-label" for="triPlusAnciennes">Plus anciennes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tri" id="triPrixCroissants"
                            value="Prix croissants">
                        <label class="form-check-label" for="triPrixCroissants">Prix croissants</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tri" id="triPrixDecroissants"
                            value="Prix décroissants">
                        <label class="form-check-label" for="triPrixDecroissants">Prix décroissants</label>
                    </div>
                </div>

                <hr class="LineHR">



                <!-- Type de vendeurs -->
                <div class="mb-1">
                    <label class="form-label">Type de vendeurs</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="typeVendeurs[]" id="vendeursParticuliers"
                            value="Particuliers">
                        <label class="form-check-label" for="vendeursParticuliers">Particuliers</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="typeVendeurs[]"
                            id="vendeursProfessionnels" value="Professionnels">
                        <label class="form-check-label" for="vendeursProfessionnels">Professionnels</label>
                    </div>
                </div>

                <br><br><br>

                <div class="FormFooter pb-3">
                    <hr class="LineHR mb-3">
                    <button type="reset" class="darkbtn minibtn" id="resetButton">Tout Effacer</button>
                    <button type="submit" class="primarybtn minibtn">Rechercher</button>
                </div>

            </form>


        </div>
    </div>
    </div>




    <!-- END FORM CANVAS -->


    <!-- Template for .infos -->
    <template id="infos-template">
        <div class="infos">
            <p class="info-title"></p>
            <p class="info-values mb-1">...</p>
            <div class="d-flex justify-content-between">
                <p class="info-selected my-0">Tout</p>
                <div class="info-arrow"><iconify-icon icon="icon-park-outline:right" class="TheFavIcon" height="24"
                        style="width: 24px;height: 24px;"></iconify-icon> </div>
            </div>
        </div>
    </template>

    <!-- Bootstrap 5 Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr class="LineHR my-0">
        <div class="offcanvas-body">
            <!-- Dynamic content will be added here -->
        </div>
        <div class="offcanvas-footer">
            <hr class="LineHR mb-3">

            <button id="validateSelection" class="minibtn primarybtn">Valider</button>
        </div>
    </div>



    <!-- START THE LISTING HERE -->




    <!-- ################  START Listing ################ -->

    <section class="SectionsListing pt-3 pb-4 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">

            <div class="container mb-4">

                <div class="d-inline-block w-100 p-0 align-top sm-w-55">
                    <h1 class="mb-1 display-1 text-dark md-mb-4"
                        style="font-size: 1.5rem;line-height: 2.8rem;font-weight: 700;">
                        Annonces Voitures d’occasion :
                        Toute la France</h1>
                </div>
                <div class="d-flex align-items-center mt-0 mb-1">
                    <h2 class="h5 LightGrayColor">{{$annoncesCount}} annonces</h2>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-8">




                    <!-- ################  START list ad-card ################ -->

                    @forelse ($annonceListings as $listing)
                        <a href="{{ route('annonce.show', $listing->annonce_id) }}" class="ad-card my-2">
                            <div class="image-container">
                                <img src="{{ asset('storage/' . $listing->feature_img_path) }}"
                                    alt="{{ $listing->feature_img_alt }}" style="">
                                <button class="favorite-button d-flex align-items-center"
                                    aria-label="Ajouter l’annonce aux favoris" title="Ajouter l’annonce aux favoris">
                                    <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                                        style="width: 18px;height: 18px;"></iconify-icon>
                                </button>
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between mt-3 mt-md-0">
                                    <h5 class="mb-0">{{ $listing->annonce_title }}</h5>
                                    <div style="width: fit-content;">
                                        <span
                                            class="badge proBadge m-0 rounded-pill bgBadgeGrayColor darkcolor d-block">{{$listing->seller_type}}</span>
                                    </div>
                                </div>
                                <div class="details d-flex" style="gap: 5px 33px;">
                                    @foreach ($listing->attributes as $attribute)
                                        <div class="">
                                            <p class="m-0 listAttributesColor">{{ $attribute->attribute_name }} : <span
                                                    class="m-0 dark color">{{ $attribute->attribute_value }}</span> </p>

                                        </div>
                                    @endforeach
                                </div>
                                <h6 class="pt-3">{{ number_format($listing->annonce_price, 2, ',', ' ') }} €</h6>
                                {{-- <div style="width: 55px;">
                                    <span class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor d-block">Pro</span>
                                </div> --}}
                                <p class="location listAttributesColor my-0">{{ $listing->localization }}</p>
                                <div class="d-flex gap-2 justify-content-between align-items-center">
                                    <p class="location listAttributesColor my-0">{{ \Carbon\Carbon::parse($listing->annonce_publication_date)->diffForHumans() }}</p>
                                    <button type="button" href="" class="primarybtn  minibtn"
                                        style="padding: 8px 12px !important;font-size: 14px;">Voir l'annonce</button>
                                </div>
                            </div>
                        </a>
                        <hr class="ListingLineHR">
                    @empty
                    @endforelse


                    <!-- ################  END list ################ -->



                </div>



                <!-- START Listing Pagination -->
                <div class="CustomPagination mt-3 justify-content-center justify-content-lg-start">
                    {{ $annonceListings->links() }}
                </div>
            </div>

            <!-- END Listing Pagination -->


    </section>

    <!-- ################  END Listing ################ -->




    <!-- END THE LISTING HERE -->





@endsection


@push('third_party_scripts')
    <script src="{{ asset('assets/scripts/ListingFilter.js') }}"></script>
@endpush
