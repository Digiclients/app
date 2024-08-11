@extends('layouts.profile.app')

@push('third_party_stylesheets')
<style>
    .CustomPagination nav ul {
justify-content: end !important;
}
</style>
@endpush

@section('content')
    <div class="job-bx-title clearfix">

        <div>
            <h5 class="font-weight-700 float-start text-uppercase">Mes favoris</h5>
            <a href="index.html" class="site-button right-arrow button-sm float-end">Back</a>
        </div>
        <br>
        <p class="my-4">
            Retrouvez ici toutes les annonces que vous avez ajoutées à vos favoris.
            Les annonces qui disparaissent du site sont automatiquement retirées de votre sélection.
        </p>

        <!-- START display this if there is no Favourites yet -->


        <div class="rounded text-center shadow-sm border p-4 mt-4">
            <p class="darkcolor font18 fontw600 m-0">
                Aucune annonce en favoris
            </p>
        </div>
        <!-- END display this if there is no Favourites yet -->



        <div class="TheAnouncesAndSearch pt-4">

            <form action="" class="d-flex justify-content-end">
                <div class="col-md-6">

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Titre d'annonce">
                        <button class="primarybtn minibtn" type="button" id="button-addon2">Rechercher</button>
                    </div>
                </div>

            </form>


        </div>









        <section class="TheAnouncesAndPagination my-5">




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

















    </div>



    <!-- START Listing Pagination -->

    <nav>
        <ul class="pagination CustomPagination mt-5 justify-content-center justify-content-lg-start">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">&nbsp;&nbsp;<iconify-icon
                        icon="iconamoon:arrow-right-2" class="position-absolute" width="28"
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
@endsection

@php
    $active = 'myFavourites'; // or any other section that should be active
@endphp
