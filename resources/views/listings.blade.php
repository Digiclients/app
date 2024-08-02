@extends('layouts.app')

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

    <div class="container d-flex justify-content-center my-4">
        <div class="me-3" style="width: 25rem;">
            <div class="autocompleteInput input-container">
                <input type="text" data-array="location" name="location" class="form-control" placeholder="Location"
                    readonly value="paris 75003">
                <ul class="dropdown-menu w-100 p-2">
                    <div class="search-container">
                        <input type="text" class="form-control search-input" placeholder="Rechercher un lieu">
                    </div>
                    <div class="model-list">
                        <!-- Location items will be dynamically inserted here -->
                    </div>
                </ul>
            </div>
        </div>

        <div class="d-flex">
            <div class="me-3" style="width: 12rem;">
                <button
                    class="btn d-flex align-items-center gap-3 h-100 w-100 px-3 text-start rounded border border-secondary"
                    title="Prix" data-bs-toggle="offcanvas" data-bs-target="#canvasRightFilter"
                    aria-controls="canvasRightFilter">
                    <span class="text-truncate">Prix</span>
                    <span class="ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6.646 1.646a.5.5 0 0 1 .708 0l4.5 4.5a.5.5 0 0 1 0 .708l-4.5 4.5a.5.5 0 0 1-.708-.708L10.793 6 6.646 1.854a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </span>
                </button>
            </div>
            <div class="me-3" style="width: 12rem;">
                <button
                    class="btn d-flex align-items-center gap-3 h-100 w-100 px-3 text-start rounded border border-secondary fw-bold"
                    title="AUDI" data-bs-toggle="offcanvas" data-bs-target="#canvasRightFilter"
                    aria-controls="canvasRightFilter">
                    <span class="text-truncate">AUDI</span>
                    <span class="ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6.646 1.646a.5.5 0 0 1 .708 0l4.5 4.5a.5.5 0 0 1 0 .708l-4.5 4.5a.5.5 0 0 1-.708-.708L10.793 6 6.646 1.854a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </span>
                </button>
            </div>
            <div class="me-3" style="width: 12rem;">
                <button
                    class="btn d-flex align-items-center gap-3 h-100 w-100 px-3 text-start rounded border border-secondary"
                    title="Modèle" data-bs-toggle="offcanvas" data-bs-target="#canvasRightFilter"
                    aria-controls="canvasRightFilter">
                    <span class="text-truncate">Modèle</span>
                    <span class="ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6.646 1.646a.5.5 0 0 1 .708 0l4.5 4.5a.5.5 0 0 1 0 .708l-4.5 4.5a.5.5 0 0 1-.708-.708L10.793 6 6.646 1.854a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </span>
                </button>
            </div>
            <div>
                <button
                    class="btn d-flex align-items-center gap-3 h-100 w-100 px-3 text-start rounded border border-secondary fw-bold"
                    title="Afficher tous les filtres" data-bs-toggle="offcanvas" data-bs-target="#canvasRightFilter"
                    aria-controls="canvasRightFilter">
                    <iconify-icon icon="rivet-icons:filter" width="16" height="16"></iconify-icon>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                                                            class="bi bi-filter" viewBox="0 0 16 16">
                                                                                            <path fill-rule="evenodd"
                                                                                                d="M6 10.5a.5.5 0 0 1 .5.5v2.751l.396.794A.5.5 0 0 1 6 15.5a.5.5 0 0 1-.396-.206L5.25 14.751V12.5a.5.5 0 0 1 .5-.5zm4 1a.5.5 0 0 1 .5.5v2.751l.396.794A.5.5 0 0 1 10 15.5a.5.5 0 0 1-.396-.206L9.25 14.751V12.5a.5.5 0 0 1 .5-.5zm-8-2.5a.5.5 0 0 1 .5.5v2.751l.396.794A.5.5 0 0 1 2 13.5a.5.5 0 0 1-.396-.206L1.25 12.751V10.5a.5.5 0 0 1 .5-.5zm12-2.5a.5.5 0 0 1 .5.5v2.751l.396.794A.5.5 0 0 1 14 11.5a.5.5 0 0 1-.396-.206L13.25 10.751V8.5a.5.5 0 0 1 .5-.5zM8 1a.5.5 0 0 1 .5.5v2.751l.396.794A.5.5 0 0 1 8 5.5a.5.5 0 0 1-.396-.206L7.25 4.251V1.5A.5.5 0 0 1 8 1zM2 6.5a.5.5 0 0 1 .5.5v2.751l.396.794A.5.5 0 0 1 2 10.5a.5.5 0 0 1-.396-.206L1.25 9.251V7a.5.5 0 0 1 .5-.5zm12-2.5a.5.5 0 0 1 .5.5v2.751l.396.794A.5.5 0 0 1 14 8.5a.5.5 0 0 1-.396-.206L13.25 7.251V5a.5.5 0 0 1 .5-.5zm-6-4a.5.5 0 0 1 .5.5v2.751l.396.794A.5.5 0 0 1 8 3.5a.5.5 0 0 1-.396-.206L7.25 2.251V.5A.5.5 0 0 1 8 0z" />
                                                                                        </svg> -->
                    <span class="d-none d-sm-block">Filtres</span>
                    <span class="badge bg-primary ms-1">1</span>
                </button>
            </div>
        </div>
    </div>

    <!-- END :  FILTERS -->


    <!-- START FORM CANVAS -->


    <!-- Off-canvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="canvasRightFilter" aria-labelledby="canvasRightFilterLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="canvasRightFilterLabel">Tous les filtres</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form id="filterForm" method="GET" action="/path-to-submit-form">
                <!-- Prix -->
                <div class="mb-3">
                    <label for="prixMin" class="form-label">Prix</label>
                    <div class="d-flex gap-2">
                        <input type="number" name="prixMin" id="prixMin" class="form-control" placeholder="Minimum">
                        <input type="number" name="prixMax" id="prixMax" class="form-control" placeholder="Maximum">
                    </div>
                </div>

                <hr class="LineHR">

                <!-- Marque (Radio buttons with canvased class) -->
                <div class="mb-3 canvased">
                    <div class="RealInputs">
                        <label class="form-label canvasedMainLabel">Marque</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque1"
                                value="Marque1">
                            <label class="form-check-label" for="marque1">Marque1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="marque" id="marque2"
                                value="Marque2">
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
                <div class="mb-3 canvased">
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
                        <!-- Add more checkboxes here -->
                    </div>
                </div>


                <hr class="LineHR">

                <!-- Année-Modèle -->
                <div class="mb-3">
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
                <div class="mb-3 canvased">
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
                <div class="mb-3 canvased">
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
                <div class="mb-3">
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
                <div class="mb-3">
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
                <div class="mb-3 canvased">
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
                <div class="mb-3">
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
                <div class="mb-3">
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
                <div class="mb-3">
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
                <div class="mb-3">
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
                <div class="mb-3 canvased">
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
                <div class="mb-3 canvased">
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
                <div class="mb-3 canvased">
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


                    <hr class="LineHR">


                    <!-- Permis -->
                    <div class="mb-3">
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
                    <div class="mb-3">
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
                    <div class="mb-3">
                        <label class="form-label">Type de vendeurs</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="typeVendeurs[]"
                                id="vendeursParticuliers" value="Particuliers">
                            <label class="form-check-label" for="vendeursParticuliers">Particuliers</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="typeVendeurs[]"
                                id="vendeursProfessionnels" value="Professionnels">
                            <label class="form-check-label" for="vendeursProfessionnels">Professionnels</label>
                        </div>
                    </div>

                    <hr class="LineHR">

                    <button type="submit" class="btn btn-primary">Rechercher</button>
                    <button type="reset" class="btn btn-secondary" id="resetButton">Tout Effacer</button>
            </form>
        </div>
    </div>
    </div>




    <!-- END FORM CANVAS -->


    <!-- Template for .infos -->
    <template id="infos-template">
        <div class="infos">
            <p class="info-title"></p>
            <p class="info-values">...</p>
            <p class="info-selected">Tout</p>
            <div class="info-arrow">›</div>
        </div>
    </template>

    <!-- Bootstrap 5 Offcanvas -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Dynamic content will be added here -->
        </div>
        <div class="offcanvas-footer">
            <button id="validateSelection" class="btn btn-success">Valider</button>
        </div>
    </div>



    <!-- START THE LISTING HERE -->




    <!-- ################  START Listing ################ -->

    <section class="SectionsBlog py-5 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">

            <div class="container">

                <div class="d-inline-block w-100 p-0 align-top sm-w-55">
                    <h1 class="mb-3 display-1 text-dark md-mb-4"
                        style="font-size: 1.5rem;line-height: 2.8rem;font-weight: 700;">
                        Annonces Voitures d’occasion :
                        Toute la France</h1>
                </div>
                <div class="d-flex align-items-center mb-3 md-mb-4">
                    <h2 class="h5 text-muted">47 039 annonces</h2>
                </div>
            </div>


            <div class="row">

                <div class="col-lg-8">


                    <!-- ################  START list ad-card ################ -->

                    @forelse ($annonceListings as $listing)
                        <a href="{{route('annonce.show', $listing->annonce_id)}}" class="ad-card my-2">
                            <div class="image-container">
                                <img src="{{ asset('storage/' . $listing->feature_img_path) }}"
                                    alt="{{ $listing->feature_img_alt }}" style="max-width: 22rem;">
                                <button class="favorite-button d-flex align-items-center"
                                    aria-label="Ajouter l’annonce aux favoris" title="Ajouter l’annonce aux favoris">
                                    <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                                        style="width: 18px;height: 18px;"></iconify-icon>
                                </button>
                            </div>
                            <div class="content">
                                <h5 class="mt-4 mt-lg-0">{{ $listing->annonce_title }}</h5>

                                <div class="details d-flex gap-3">
                                    @foreach ($listing->attributes as $attribute)
                                        <div>
                                            <p class="m-0 listAttributesColor">{{ $attribute->attribute_name }}</p>
                                            <p class="m-0">{{ $attribute->attribute_value }}</p>
                                        </div>
                                    @endforeach
                                </div>
                                <h6 class="pt-3">{{ number_format($listing->annonce_price, 2, ',', ' ') }} €</h6>
                                <div>
                                    <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span>
                                </div>

                                <p class="location listAttributesColor">{{ $listing->localization }}</p>
                            </div>
                        </a>
                    @empty
                    @endforelse


                    <!-- ################  END list ################ -->



                </div>



                <!-- START Listing Pagination -->

                <nav>
                    <ul class="pagination CustomPagination mt-5 justify-content-center justify-content-lg-start">
                        {{ $annonceListings->links() }}
                    </ul>
                </nav>
            </div>

            <!-- END Listing Pagination -->


    </section>

    <!-- ################  END Listing ################ -->




    <!-- END THE LISTING HERE -->





    <link rel="stylesheet" href="{{ asset('assets/styles/anounce.css') }}">
@endsection


@push('third_party_scripts')
    <!-- Option 1: Bootstrap Bundle with Popper
                                                                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                                                                            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
                                                                        </script> -->


    <script>
        document.getElementById('filterForm').addEventListener('submit', function(event) {
            // Perform any custom actions before form submission if needed
            // For now, just let the form submit as GET request
        });

        document.getElementById('resetButton').addEventListener('click', function() {
            // The form will be reset automatically by the 'reset' type button
        });






        document.addEventListener("DOMContentLoaded", function() {
            const MAX_ITEMS = 2; // Set your max items limit here
            const canvasedElements = document.querySelectorAll(".canvased");
            const offcanvasElement = document.getElementById("offcanvasRight");
            const offcanvasBody = offcanvasElement.querySelector(".offcanvas-body");
            const validateSelectionBtn = document.getElementById("validateSelection");

            let activeRealInputs; // To store the currently active .RealInputs div

            canvasedElements.forEach(canvased => {
                const realInputs = canvased.querySelector(".RealInputs");
                const inputs = realInputs.querySelectorAll("input[type='radio'], input[type='checkbox']");
                const labelMain = canvased.querySelector(".canvasedMainLabel").innerHTML;

                if (inputs.length > MAX_ITEMS) {
                    // Hide the RealInputs div
                    realInputs.style.display = "none";

                    // Use the template to create the .infos div
                    const template = document.getElementById("infos-template");
                    const clone = template.content.cloneNode(true);
                    const infosDiv = clone.querySelector(".infos");
                    const titleP = infosDiv.querySelector(".info-title");
                    const valuesP = infosDiv.querySelector(".info-values");
                    const selectedP = infosDiv.querySelector(".info-selected");

                    // Set the main label
                    titleP.textContent = labelMain;

                    // Get the first three labels
                    const firstThreeLabels = Array.from(inputs)
                        .slice(0, 3)
                        .map(input => input.nextElementSibling.textContent)
                        .join(", ");
                    valuesP.textContent = firstThreeLabels || "Tout";

                    // Set initial selected text
                    selectedP.textContent = "Tout";

                    // Append the infos div to the canvased div
                    canvased.appendChild(infosDiv);

                    // Add event listener to the infos div to open the Offcanvas
                    infosDiv.addEventListener("click", function() {
                        // Set the active RealInputs for the current canvased div
                        activeRealInputs = realInputs;

                        // Copy the RealInputs HTML to the Offcanvas body
                        offcanvasBody.innerHTML = realInputs.innerHTML;

                        // Sync the checked state of inputs in the Offcanvas with the hidden RealInputs
                        const offcanvasInputs = offcanvasBody.querySelectorAll(
                            "input[type='radio'], input[type='checkbox']");
                        offcanvasInputs.forEach((offcanvasInput, index) => {
                            offcanvasInput.checked = inputs[index].checked;
                        });

                        // Set the Offcanvas header
                        document.getElementById("offcanvasRightLabel").innerText =
                            `Select ${labelMain}`;

                        // Show the Offcanvas
                        const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
                        offcanvas.show();
                    });
                }
            });

            // Add event listener to the "Valider" button
            validateSelectionBtn.addEventListener("click", function() {
                if (activeRealInputs) {
                    // Get the inputs inside the active RealInputs
                    const realInputs = activeRealInputs.querySelectorAll(
                        "input[type='radio'], input[type='checkbox']");
                    const offcanvasInputs = offcanvasBody.querySelectorAll(
                        "input[type='radio'], input[type='checkbox']");

                    // Update the original RealInputs based on the selections made in the Offcanvas
                    offcanvasInputs.forEach((input, index) => {
                        realInputs[index].checked = input.checked;
                    });

                    // Update the info-selected text
                    const selectedLabels = Array.from(realInputs)
                        .filter(i => i.checked)
                        .map(i => i.nextElementSibling.textContent);

                    const selectedP = activeRealInputs.closest('.canvased').querySelector('.info-selected');
                    selectedP.textContent = selectedLabels.length ? selectedLabels.join(", ") : "Tout";

                    // Hide the Offcanvas
                    const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
                    offcanvas.hide();
                }
            });
        });
    </script>
@endpush
