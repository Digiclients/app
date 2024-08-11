@extends('layouts.app')
@push('third_party_stylesheets')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Demo styles -->





    <style>
        .ad-card {
            display: flex;
            flex-direction: column !important;
            height: 462px !important;

            /* border: 1px solid #dee2e6; */
            /* border-radius: 0.25rem; */
            overflow: hidden;
            /* min-height: 21.5rem; */
            text-decoration: none !important;
            transition: 0.6s;

        }


        .ad-card:hover h5 {
            color: var(--primarycolor) !important;
        }

        .ad-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ad-card .image-container {
            position: relative;
            overflow: hidden;
            min-width: 100% !important;

            border-radius: 0.4rem;

        }

        .ad-card .image-container .badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background-color: #6f42c1;
        }





        .ad-card .favorite-button {
            position: absolute;
            top: 9px;
            right: 1rem;
            background-color: var(--white);
            border: none;
            padding: 0.5rem;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.6s;

        }

        .ad-card .favorite-button .TheFavIcon {
            color: var(--darkcolor);
            transition: 0.6s;

        }

        .ad-card .favorite-button:hover {
            background-color: var(--primarycolor);
        }

        .ad-card .favorite-button:hover .TheFavIcon {
            color: var(--white);
        }

        .ad-card .content {
            padding: 0.4rem 1rem;
            /* display: flex; */
            /* flex-direction: column; */
            /* justify-content: space-between; */
            width: 100%;
        }

        .ad-card .content h5 {
            /* margin: 0; */
            font-weight: bold;
            color: var(--darkcolor);
            font-size: 16px !important;
            /* line-height: 0px; */
        }

        .ad-card .content h6 {
            /* margin: 0; */
            color: var(--darkcolor);
            font-weight: bold;
            font-size: 16px !important;
            /* line-height: 0px; */

        }

        .ad-card .content .details {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .ad-card .content .details p {
            /* background-color: #e9ecef; */
            /* border-radius: 0.25rem; */
            /* padding: 0.25rem 0.5rem; */
            font-size: 14px;
        }

        .ad-card .content p.location {
            margin-top: 1rem;
            font-size: 0.875rem;
        }
    </style>


    <style>
        .RelatedAnouncesSwiper {
            width: 100%;
            height: 100%;
            padding: 0px 43px;
        }


        @media (min-width: 801px) {
            .RelatedAnouncesSwiper {
                padding: 0px 51px;
            }
        }


        .RelatedAnouncesSwiper .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 801px) {

            .RelatedAnouncesSwiper .swiper-horizontal>.swiper-pagination-bullets,
            .RelatedAnouncesSwiper .swiper-pagination-bullets.swiper-pagination-horizontal,
            .RelatedAnouncesSwiper .swiper-pagination-custom,
            .RelatedAnouncesSwiper .swiper-pagination-fraction {
                bottom: var(--swiper-pagination-bottom, -5px) !important;

            }

        }


        :root {
            --swiper-navigation-size: 22px !important;

        }

        .RelatedAnouncesSwiper .swiper-button-next,
        .RelatedAnouncesSwiper .swiper-button-prev {
            background-color: var(--primarycolor) !important;
            color: var(--white);
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        .RelatedAnouncesSwiper .swiper-pagination-bullet-active {
            background: var(--primarycolor);
        }





        .ImagesSwiper .swiper-button-next,
        .ImagesSwiper .swiper-button-prev {
            background-color: var(--primarycolor) !important;
            color: var(--white);
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        .ImagesSwiper .swiper-pagination-bullet-active {
            background: var(--primarycolor);
        }
    </style>
    <style>
        .anouncePhotos .image-container {
            min-width: 100% !important;
        }

        .anouncePhotos .image-container {
            position: relative;
            overflow: hidden;
            min-width: 310px;
            border-radius: 0.4rem;

        }

        .anouncePhotos .image-container .badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background-color: #6f42c1;
        }

        .anouncePhotos .favorite-button {
            position: absolute;
            top: 9px;
            right: 1rem;
            background-color: var(--white);
            border: none;
            padding: 0.5rem;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.6s;

        }

        .anouncePhotos .favorite-button .TheFavIcon {
            color: var(--darkcolor);
            transition: 0.6s;

        }

        .anouncePhotos .favorite-button:hover {
            background-color: var(--primarycolor);
        }

        .anouncePhotos .favorite-button:hover .TheFavIcon {
            color: var(--white);
        }

        .anouncePhotos .share-button {
            position: absolute;
            top: 9px;
            right: 3.8rem;
            background-color: var(--white);
            border: none;
            padding: 0.5rem;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.6s;

        }

        .anouncePhotos .share-button .TheFavIcon {
            color: var(--darkcolor);
            transition: 0.6s;

        }

        .anouncePhotos .share-button:hover {
            background-color: var(--primarycolor);
        }

        .anouncePhotos .share-button:hover .TheFavIcon {
            color: var(--white);
        }



        /* .anouncePhotos img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        max-height: 320px;
                    } */


        .anouncePhotos img {
            width: auto;
            object-fit: cover;
            max-height: 416px;
            display: block;
            margin: auto;
        }

        @media (max-width: 608px) {
            .anouncePhotos img {
                width: 100% !important;
                max-height: 287px;

            }
        }
    </style>
    <style>
        .Attributes .attr {
            width: 255px;
        }
    </style>
@endpush
@section('content')
    <section class="ADS px-4 px-xl-0 pt-5 mt-5 container-fluid row justify-content-center" style="width: 98%;margin: 0 auto;">

        <div class="col-lg-12 col-xl-11 col-xxl-9 py-5 bgLight rounded row px-3 text-center">


            <p class="LightGrayColor font35 fontw900 m-0 pt-5">AutoPrix</p>
            <p class="LightGrayColor font20 fontw900 m-0  pb-5">publicité</p>


        </div>
    </section>


    <section class="SectionsBlog py-5 container-fluid row justify-content-center">

        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">
            <!-- START breadcrumb -->
            {{-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="breadcrumb-item" aria-current="page">Voitures</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $annonceDetails->localization }}</li>
                    <li class="breadcrumb-item active fontwbold" aria-current="page">{{ $annonceDetails->annonce_title }}
                    </li>
                </ol>
            </nav> --}}
            {{-- </nav>  --}}
            <!-- END breadcrumb -->

            <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

            <div class="row">

                <div class="row">
                    <div class="col-md-8">
                        <div class="col-lg-12 mt-3 mt-lg-0 anouncePhotos pe-3">
                            <div class="swiper ImagesSwiper">
                                <div class="swiper-wrapper">
                                    <!-- Group images together using the same 'data-fancybox' attribute -->
                                    @forelse ($annonceDetails->images as $img)
                                        <a class="swiper-slide my-auto" href="{{ asset('storage/' . $img->path) }}"
                                            data-fancybox="gallery">
                                            <div class="image-container">
                                                <img src="{{ asset('storage/' . $img->path) }}" alt="{{ $img->alt }}">
                                                {{-- <button class="favorite-button d-flex align-items-center" aria-label="Ajouter l’annonce aux favoris" title="Ajouter l’annonce aux favoris">
                                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18" style="width: 18px;height: 18px;"></iconify-icon>
                                    </button>
                                    <button class="share-button d-flex align-items-center" aria-label="Ajouter l’annonce aux favoris" title="Ajouter l’annonce aux favoris">
                                        <iconify-icon icon="solar:share-outline" class="TheFavIcon" height="18" style="width: 18px;height: 18px;"></iconify-icon>
                                    </button> --}}
                                            </div>
                                        </a>
                                    @empty
                                    @endforelse

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination pt-3"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 ps-2">
                            <!-- START priceAndTitle -->
                            <div class="priceAndTitle my-4">
                                <h1 class="font24 darkcolor">{{ $annonceDetails->annonce_title }}</h1>
                                <p class="">
                                    {{ $annonceDetails->localization }}
                                    {{-- •
                            {{ $annonceDetails->attributes->where('attribute_slug', 'annee_modele')->first()->attribute_value ?? '' }}
                            •
                            {{ $annonceDetails->attributes->where('attribute_slug', 'kilometrage')->first()->attribute_value ?? '' }}
                            km •
                            {{ $annonceDetails->attributes->where('attribute_slug', 'carburant')->first()->attribute_value ?? '' }}
                            • --}}
                                </p>
                                <p class="font18 fontwbold">{{ number_format($annonceDetails->annonce_price) }}€</p>
                                <p class="graycolor font12">{{ $annonceDetails->annonce_publication_date }}</p>
                            </div>
                            <!-- END priceAndTitle -->
                            <hr class="ListingLineHR">

                            <!-- START Attributes -->

                            <div class="Attributes my-4">
                                <h3 class="font18 darkcolor py-2">Critères</h3>
                                <div class="row">

                                    @foreach ($annonceDetails->attributes as $attributes)
                                        <div class="attr col-sm-4">
                                            <p class="font12 m-0 graycolor">{{ $attributes->attribute_name }}</p>
                                            <p class="font16 darkcolor fontw600">{{ $attributes->attribute_value }}</p>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <!-- END Attributes -->

                            <hr class="ListingLineHR">
                            <!-- START Description -->
                            <div class="Description my-4">
                                <h3 class="font18 darkcolor py-2">Description</h3>
                                <p id="text" data-max-words="30">
                                    {{ $annonceDetails->annonce_description }}
                                </p>
                                <a href="#" id="seeMoreLink" class="SeeMorelink mt-2 mt-lg-0">Voir tout</a>
                            </div>

                            <!-- END Description -->
                            {{--
                        <hr class="ListingLineHR">

                        <!-- START Map Location for zip code and city name -->

                        <div class="MapLocation my-4">
                            <h3 class="font18 darkcolor py-2">{{ $annonceDetails->localization }}</h3>
                            <iframe style="width: 100%;height: 300px;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10499.1005294604!2d2.346594792761225!3d48.86249823473987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e045ead4fc3%3A0x1c0b82c6e1d85120!2s75003%20Paris%2C%20France!5e0!3m2!1sen!2sma!4v1721836108313!5m2!1sen!2sma"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- END  MapLocation for zip code and city name --> --}}

                            <hr class="ListingLineHR">

                            <!-- START Anounces Like this -->
                            <div class="AnouncesLikethis my-4">
                                <h3 class="font18 darkcolor py-2">Ces annonces peuvent vous intéresser</h3>
                                <!-- Swiper -->
                                <div class="swiper RelatedAnouncesSwiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="/singleListPage.html" class="ad-card my-2">
                                                <div class="image-container">
                                                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                                                        alt="Car">
                                                    <span class="badge text-white">À la une</span>
                                                    <button class="favorite-button d-flex align-items-center"
                                                        aria-label="Ajouter l’annonce aux favoris"
                                                        title="Ajouter l’annonce aux favoris">
                                                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                                                            style="width: 18px;height: 18px;"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110 cté
                                                    </h5>
                                                    <h6>15 400 €</h6>
                                                    <div>
                                                        <!-- <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span> -->
                                                        <span
                                                            class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor">Pro</span>
                                                    </div>

                                                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide">
                                            <a href="/singleListPage.html" class="ad-card my-2">
                                                <div class="image-container">
                                                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                                                        alt="Car">
                                                    <span class="badge text-white">À la une</span>
                                                    <button class="favorite-button d-flex align-items-center"
                                                        aria-label="Ajouter l’annonce aux favoris"
                                                        title="Ajouter l’annonce aux favoris">
                                                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                                                            style="width: 18px;height: 18px;"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110 cté
                                                    </h5>
                                                    <h6>15 400 €</h6>
                                                    <div>
                                                        <!-- <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span> -->
                                                        <span
                                                            class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor">Pro</span>
                                                    </div>

                                                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide">
                                            <a href="/singleListPage.html" class="ad-card my-2">
                                                <div class="image-container">
                                                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                                                        alt="Car">
                                                    <span class="badge text-white">À la une</span>
                                                    <button class="favorite-button d-flex align-items-center"
                                                        aria-label="Ajouter l’annonce aux favoris"
                                                        title="Ajouter l’annonce aux favoris">
                                                        <iconify-icon icon="tabler:heart" class="TheFavIcon"
                                                            height="18"
                                                            style="width: 18px;height: 18px;"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110
                                                        cté
                                                    </h5>
                                                    <h6>15 400 €</h6>
                                                    <div>
                                                        <!-- <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span> -->
                                                        <span
                                                            class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor">Pro</span>
                                                    </div>

                                                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide">
                                            <a href="/singleListPage.html" class="ad-card my-2">
                                                <div class="image-container">
                                                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                                                        alt="Car">
                                                    <span class="badge text-white">À la une</span>
                                                    <button class="favorite-button d-flex align-items-center"
                                                        aria-label="Ajouter l’annonce aux favoris"
                                                        title="Ajouter l’annonce aux favoris">
                                                        <iconify-icon icon="tabler:heart" class="TheFavIcon"
                                                            height="18"
                                                            style="width: 18px;height: 18px;"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110
                                                        cté
                                                    </h5>
                                                    <h6>15 400 €</h6>
                                                    <div>
                                                        <!-- <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span> -->
                                                        <span
                                                            class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor">Pro</span>
                                                    </div>

                                                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide">
                                            <a href="/singleListPage.html" class="ad-card my-2">
                                                <div class="image-container">
                                                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                                                        alt="Car">
                                                    <span class="badge text-white">À la une</span>
                                                    <button class="favorite-button d-flex align-items-center"
                                                        aria-label="Ajouter l’annonce aux favoris"
                                                        title="Ajouter l’annonce aux favoris">
                                                        <iconify-icon icon="tabler:heart" class="TheFavIcon"
                                                            height="18"
                                                            style="width: 18px;height: 18px;"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110
                                                        cté
                                                    </h5>
                                                    <h6>15 400 €</h6>
                                                    <div>
                                                        <!-- <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span> -->
                                                        <span
                                                            class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor">Pro</span>
                                                    </div>

                                                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide">
                                            <a href="/singleListPage.html" class="ad-card my-2">
                                                <div class="image-container">
                                                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                                                        alt="Car">
                                                    <span class="badge text-white">À la une</span>
                                                    <button class="favorite-button d-flex align-items-center"
                                                        aria-label="Ajouter l’annonce aux favoris"
                                                        title="Ajouter l’annonce aux favoris">
                                                        <iconify-icon icon="tabler:heart" class="TheFavIcon"
                                                            height="18"
                                                            style="width: 18px;height: 18px;"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110
                                                        cté
                                                    </h5>
                                                    <h6>15 400 €</h6>
                                                    <div>
                                                        <!-- <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span> -->
                                                        <span
                                                            class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor">Pro</span>
                                                    </div>

                                                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide">
                                            <a href="/singleListPage.html" class="ad-card my-2">
                                                <div class="image-container">
                                                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                                                        alt="Car">
                                                    <span class="badge text-white">À la une</span>
                                                    <button class="favorite-button d-flex align-items-center"
                                                        aria-label="Ajouter l’annonce aux favoris"
                                                        title="Ajouter l’annonce aux favoris">
                                                        <iconify-icon icon="tabler:heart" class="TheFavIcon"
                                                            height="18"
                                                            style="width: 18px;height: 18px;"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110
                                                        cté
                                                    </h5>
                                                    <h6>15 400 €</h6>
                                                    <div>
                                                        <!-- <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span> -->
                                                        <span
                                                            class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor">Pro</span>
                                                    </div>

                                                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide">
                                            <a href="/singleListPage.html" class="ad-card my-2">
                                                <div class="image-container">
                                                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                                                        alt="Car">
                                                    <span class="badge text-white">À la une</span>
                                                    <button class="favorite-button d-flex align-items-center"
                                                        aria-label="Ajouter l’annonce aux favoris"
                                                        title="Ajouter l’annonce aux favoris">
                                                        <iconify-icon icon="tabler:heart" class="TheFavIcon"
                                                            height="18"
                                                            style="width: 18px;height: 18px;"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110
                                                        cté
                                                    </h5>
                                                    <h6>15 400 €</h6>
                                                    <div>
                                                        <!-- <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span> -->
                                                        <span
                                                            class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor">Pro</span>
                                                    </div>

                                                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="swiper-slide">
                                            <a href="/singleListPage.html" class="ad-card my-2">
                                                <div class="image-container">
                                                    <img src="https://img.leboncoin.fr/api/v1/lbcpb1/images/e4/6f/ca/e46fca9b9944d25f0eb95bfaa16e8ff1d8aaf087.jpg?rule=ad-image"
                                                        alt="Car">
                                                    <span class="badge text-white">À la une</span>
                                                    <button class="favorite-button d-flex align-items-center"
                                                        aria-label="Ajouter l’annonce aux favoris"
                                                        title="Ajouter l’annonce aux favoris">
                                                        <iconify-icon icon="tabler:heart" class="TheFavIcon"
                                                            height="18"
                                                            style="width: 18px;height: 18px;"></iconify-icon>
                                                    </button>
                                                </div>
                                                <div class="content">
                                                    <h5 class="mt-4 mt-lg-0">Dacia Sandero 2023 stepway expression + 110
                                                        cté
                                                    </h5>
                                                    <h6>15 400 €</h6>
                                                    <div>
                                                        <!-- <span class="badge rounded-pill bgBadgeGrayColor darkcolor">Paiement sécurisé</span> -->
                                                        <span
                                                            class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor">Pro</span>
                                                    </div>

                                                    <p class="location listAttributesColor">Saint-Jean-de-Luz 64500</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination pt-3"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Fancybox JS Initialization -->
                    <script>
                        Fancybox.bind("[data-fancybox='gallery']", {
                            // Optional custom options can be added here
                        });
                    </script>

                    <div class="row col-lg-4 align-content-start">


                        <div class="col-lg-12 sticky-top  whitebg mt-3 mt-lg-0  ps-3" style="top: 12%;">
                            <div class="border p-3 bgwhite  rounded">

                                <div class="d-flex align-items-center gap-3">
                                    <img class="img-fluid rounded-circle" width="80"
                                        src="{{ $user->avatar ? $user->avatar : 'https://img.leboncoin.fr/api/v1/lbcpb1/images/0d/84/76/0d847602-1050-4598-8171-f8e635bf4b20?rule=bo-thumb' }}"
                                        alt="{{ $user->name . '-img' }}">

                                    <div class="pt-2">
                                        <h4 class="font18 darkcolor fontwbold m-0">{{ $user->name }}</h4>
                                        <p class="m-0">{{ $annoncesUserCount }} annonces</p>
                                        @if ($user->sellerType == 'professionnel')
                                            <div style="width: 55px;">
                                                <span class="badge proBadge rounded-pill">Pro</span>
                                            </div>
                                        @endif
                                        {{-- <span class="badge proBadge rounded-pill">{{ $user->sellerType }}</span> --}}
                                    </div>
                                </div>

                                <hr class="ListingLineHR">
                                <button type="button" class="primarybtnoutline my-2 d-block mx-auto w-100"
                                    id="d-phone" data-phone="{{ $annonceDetails->annonce_phone }}">Voir le
                                    numéro</button>

                            </div>
                        </div>



                        <section class="ADS col-lg-12 px-4 px-xl-0 pt-5 container-fluid row justify-content-center">

                            <div class="col-lg-12 col-xl-11 col-xxl-9 py-5 bgLight rounded row px-3 text-center">


                                <p class="LightGrayColor font35 fontw900 m-0 pt-5">AutoPrix</p>
                                <p class="LightGrayColor font20 fontw900 m-0  pb-5">publicité</p>


                            </div>
                        </section>

                    </div>





                </div>














            </div>
    </section>
@endsection
@push('third_party_scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var button = document.getElementById('d-phone');

            button.addEventListener('click', function() {
                var phoneNumber = this.getAttribute('data-phone');
                this.textContent = phoneNumber;
            });
        });
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".RelatedAnouncesSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    </script>




    <script>
        var swiper = new Swiper(".ImagesSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true,
        });
    </script>
@endpush
