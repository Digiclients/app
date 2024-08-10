@extends('layouts.app')
@push('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/styles/anounce.css') }}">
@endpush

@section('content')
    <br><br><br><br>


    <section class="pt-5 pb-1 container-fluid row justify-content-center">






        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0  rounded-3 px-4 py-2">
            <img src="https://via.placeholder.com/1000x300" alt="Banner Image" class="img-fluid w-100 mb-4 rounded">
            <div class="bg-white p-3 rounded-3 shadow-sm d-flex flex-wrap align-items-center">
                <img src="https://via.placeholder.com/100" alt="Logo" class="me-3">
                <div class="flex-grow-1">
                    <h1 class="font30  mt-3 mt-md-0">AUTOMALIN</h1>
                    <div class="d-flex gap-2">
                        <div style="width: 100px;">
                            <span class="badge proBadge m-0 rounded-pill bgBadgeGrayColor darkcolor d-block">Vendeur
                                vérifié</span>
                        </div>
                        <div style="width: 55px;">
                            <span class="badge proBadge m-0 rounded-pill bgBadgeGrayColor darkcolor d-block">Pro</span>
                        </div>
                    </div>
                    <p class="mb-1">SIREN 444297188</p>
                    <p class="mb-1">Notre site web <a href="AUTOMALIN.fr">AUTOMALIN.fr</a></p>
                    <p class="mb-0">Actif depuis le 5.5.2022</p>
                </div>
                <div class="d-flex gap-2">
                    <button class="primarybtn mt-4 mt-md-0" data-bs-toggle="modal" data-bs-target="#phoneModal">Afficher le
                        numéro</button>
                </div>
            </div>
        </div>
        </div>

        <!-- Phone Number Modal -->
        <div class="modal fade" id="phoneModal" tabindex="-1" aria-labelledby="phoneModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bgprimary">
                        <h5 class="modal-title whitecolor" id="phoneModalLabel">N° téléphone</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Téléphone vendeur : <strong>+33 1 23 45 67 89</strong></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="primarybtn" data-bs-dismiss="modal">fermer</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- START description -->
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0  rounded-3 px-4 py-3 mx-auto">

            <div class="Description bg-white p-3  rounded-3 shadow-sm">

                <h3 class="font18 darkcolor py-2">Description</h3>


                <p id="text" data-max-words="10">Bonjour, Je vend ma Renault Clio 4 1.5 Dci 90ch édition limited.
                    Véhicule très économique comprenant 5 place 4 porte ,vitre électrique avant arrière climatisation ,
                    régulateur l’imitateur, mode éco,...</p>

                <a href="#" id="seeMoreLink" class="SeeMorelink mt-2 mt-lg-0">Voir tout</a>



            </div>
        </div>

        <!-- END description -->






        <section class="TheAnouncesAndPagination my-5 col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0  rounded-3 p-4 mx-auto">




            <!-- ################  START list ad-card ################ -->






            <a href="/singleListPage.html" class="ad-card my-2">
                <div class="image-container">
                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                        alt="Car">
                    <button class="favorite-button d-flex align-items-center" aria-label="Ajouter l’annonce aux favoris"
                        title="Ajouter l’annonce aux favoris">
                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                            style="width: 18px;height: 18px;"></iconify-icon>
                    </button>
                </div>
                <div class="content">
                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110 cté</h5>

                    <div class="details d-flex gap-3">
                        <div>
                            <p class="m-0 listAttributesColor">Année</p>
                            <p class="m-0">2023</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Kilométrage</p>
                            <p class="m-0">18500 km</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Carburant</p>
                            <p class="m-0">Essence</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Boîte de vitesse</p>
                            <p class="m-0">Manuelle</p>
                        </div>


                    </div>

                    <h6 class="pt-3">15 400 €</h6>
                    <div>
                        <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span>
                    </div>

                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                </div>
            </a>

            <hr class="ListingLineHR">

            <!-- ################  END list ################ -->


            <a href="/singleListPage.html" class="ad-card my-2">
                <div class="image-container">
                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                        alt="Car">
                    <button class="favorite-button d-flex align-items-center" aria-label="Ajouter l’annonce aux favoris"
                        title="Ajouter l’annonce aux favoris">
                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                            style="width: 18px;height: 18px;"></iconify-icon>
                    </button>
                </div>
                <div class="content">
                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110 cté</h5>

                    <div class="details d-flex gap-3">
                        <div>
                            <p class="m-0 listAttributesColor">Année</p>
                            <p class="m-0">2023</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Kilométrage</p>
                            <p class="m-0">18500 km</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Carburant</p>
                            <p class="m-0">Essence</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Boîte de vitesse</p>
                            <p class="m-0">Manuelle</p>
                        </div>


                    </div>

                    <h6 class="pt-3">15 400 €</h6>
                    <div>
                        <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span>
                    </div>

                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                </div>
            </a>

            <hr class="ListingLineHR">





            <a href="/singleListPage.html" class="ad-card my-2">
                <div class="image-container">
                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                        alt="Car">
                    <button class="favorite-button d-flex align-items-center" aria-label="Ajouter l’annonce aux favoris"
                        title="Ajouter l’annonce aux favoris">
                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                            style="width: 18px;height: 18px;"></iconify-icon>
                    </button>
                </div>
                <div class="content">
                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110 cté</h5>

                    <div class="details d-flex gap-3">
                        <div>
                            <p class="m-0 listAttributesColor">Année</p>
                            <p class="m-0">2023</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Kilométrage</p>
                            <p class="m-0">18500 km</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Carburant</p>
                            <p class="m-0">Essence</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Boîte de vitesse</p>
                            <p class="m-0">Manuelle</p>
                        </div>


                    </div>

                    <h6 class="pt-3">15 400 €</h6>
                    <div>
                        <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span>
                    </div>

                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                </div>
            </a>

            <hr class="ListingLineHR">




            <a href="/singleListPage.html" class="ad-card my-2">
                <div class="image-container">
                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                        alt="Car">
                    <button class="favorite-button d-flex align-items-center" aria-label="Ajouter l’annonce aux favoris"
                        title="Ajouter l’annonce aux favoris">
                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                            style="width: 18px;height: 18px;"></iconify-icon>
                    </button>
                </div>
                <div class="content">
                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110 cté</h5>

                    <div class="details d-flex gap-3">
                        <div>
                            <p class="m-0 listAttributesColor">Année</p>
                            <p class="m-0">2023</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Kilométrage</p>
                            <p class="m-0">18500 km</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Carburant</p>
                            <p class="m-0">Essence</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Boîte de vitesse</p>
                            <p class="m-0">Manuelle</p>
                        </div>


                    </div>

                    <h6 class="pt-3">15 400 €</h6>
                    <div>
                        <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span>
                    </div>

                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                </div>
            </a>

            <hr class="ListingLineHR">





            <a href="/singleListPage.html" class="ad-card my-2">
                <div class="image-container">
                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                        alt="Car">
                    <button class="favorite-button d-flex align-items-center" aria-label="Ajouter l’annonce aux favoris"
                        title="Ajouter l’annonce aux favoris">
                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                            style="width: 18px;height: 18px;"></iconify-icon>
                    </button>
                </div>
                <div class="content">
                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110 cté</h5>

                    <div class="details d-flex gap-3">
                        <div>
                            <p class="m-0 listAttributesColor">Année</p>
                            <p class="m-0">2023</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Kilométrage</p>
                            <p class="m-0">18500 km</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Carburant</p>
                            <p class="m-0">Essence</p>
                        </div>
                        <div>
                            <p class="m-0 listAttributesColor">Boîte de vitesse</p>
                            <p class="m-0">Manuelle</p>
                        </div>


                    </div>

                    <h6 class="pt-3">15 400 €</h6>
                    <div>
                        <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span>
                    </div>

                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                </div>
            </a>

            <hr class="ListingLineHR">






            <nav>
                <ul class="pagination CustomPagination mt-5 justify-content-center justify-content-lg-start">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"
                            aria-disabled="true">&nbsp;&nbsp;<iconify-icon icon="iconamoon:arrow-right-2"
                                class="position-absolute" width="28"
                                style="width: 28px;height: 28px;right: 6px;top:6px;" rotate="180deg"></iconify-icon></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#">9</a></li>
                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                    <li class="page-item"><a class="page-link" href="#">11</a></li>
                    <li class="page-item">
                        <a class="page-link position-relative" href="#">&nbsp;&nbsp;<iconify-icon
                                icon="iconamoon:arrow-right-2" class="position-absolute" width="28"
                                style="width: 28px;height: 28px;right: 6px;top:6px;"></iconify-icon></a>
                    </li>
                </ul>
            </nav>










        </section>
    </section>



    <br><br><br><br>
@endsection



@push('third_party_scripts')
@endpush
