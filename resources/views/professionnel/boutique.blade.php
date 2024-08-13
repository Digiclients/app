@extends('layouts.app')
@push('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('assets/styles/anounce.css') }}">
@endpush

@section('content')
    <br><br><br><br>


    <section class="pt-5 pb-1 container-fluid row justify-content-center">


        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0  rounded-3 px-4 py-2">
            <img src="{{ $boutique->cover  ? asset('storage/' . $boutique->cover ) : "https://via.placeholder.com/1000x300" }} " alt="Banner Image" class="img-fluid w-100 mb-4 rounded">
            <div class="bg-white p-3 rounded-3 shadow-sm d-flex flex-wrap align-items-center">
                <img src="{{ $user->avatar  ? asset('storage/' . $user->avatar ) : asset('assets/images/default-avatar.png') }} " alt="avatar" class="me-3" style="width: 8rem;">
                <div class="flex-grow-1">
                    <h1 class="font30  mt-3 mt-md-0">{{$boutique->name}}</h1>
                    <div class="d-flex gap-2">
                        <div style="width: 100px;">
                            <span class="badge proBadge m-0 rounded-pill bgBadgeGrayColor darkcolor d-block">Vendeur
                                vérifié</span>
                        </div>
                        <div style="width: 55px;">
                            <span class="badge proBadge m-0 rounded-pill bgBadgeGrayColor darkcolor d-block">Pro</span>
                        </div>
                    </div>
                    <p class="mb-1">SIREN {{$boutique->siren}}</p>
                    <p class="mb-1">Notre site web <a href="{{$boutique->website}}">{{$boutique->website}}</a></p>
                    {{-- <p class="mb-0">Actif depuis le 5.5.2022</p> --}}
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
                        <p>Téléphone vendeur : <strong>{{$user->phone}}</strong></p>
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
                <p id="text" data-max-words="10">{{$boutique->description}}</p>
                <a href="#" id="seeMoreLink" class="SeeMorelink mt-2 mt-lg-0">Voir tout</a>
            </div>
        </div>

        <!-- END description -->






        <section class="TheAnouncesAndPagination my-5 col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0  rounded-3 p-4 mx-auto">




            <!-- ################  START list ad-card ################ -->

            @forelse ($annonces as $annonce)


            <a href="{{route('annonce.show', $annonce->id)}}" class="ad-card  col-md-6 col-lg-4 my-2">
                <div class="image-container">
                    <img src="{{ asset('storage/' . $annonce->images->first()   ->path) }}"
                        alt="{{ $annonce->images->first()   ->alt }}" style="">
                    <button class="favorite-button d-flex align-items-center"
                        aria-label="Ajouter l’annonce aux favoris" title="Ajouter l’annonce aux favoris">
                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                            style="width: 18px;height: 18px;"></iconify-icon>
                    </button>
                </div>
                <div class="content">
                    <div class="d-flex justify-content-between mt-3">
                    <h5 class="mb-0">{{ $annonce->title }}</h5>
                    @if ($user->sellerType == 'professionnel')
                    <div style="width: 55px;">
                        <span class="badge proBadge m-0 rounded-pill bgBadgeGrayColor darkcolor d-block">Pro</span>
                    </div>
                    @endif
                </div>
                    {{-- <div class="details d-flex" style="gap: 5px 33px;">
                        @foreach ($listing->attributes as $attribute)
                            <div class="">
                                <p class="m-0 listAttributesColor">{{ $attribute->attribute_name }} : <span
                                        class="m-0 dark color">{{ $attribute->attribute_value }}</span> </p>

                            </div>
                        @endforeach
                    </div> --}}
                    <h6 class="pt-3">{{ number_format($annonce->price, 2, ',', ' ') }} €</h6>
                    {{-- <div style="width: 55px;">
                        <span class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor d-block">Pro</span>
                    </div> --}}
                    <p class="location listAttributesColor my-0">{{ $annonce->localization->localization }}</p>
                    <div class="d-flex gap-2 justify-content-between align-items-center">
                        <p class="location listAttributesColor my-0">{{ \Carbon\Carbon::parse($annonce->publication_date)->diffForHumans() }}</p>
                        <button type="button" href="" class="primarybtn  minibtn"
                            style="padding: 8px 12px !important;font-size: 14px;">Voir l'annonce</button>
                    </div>
                </div>
            </a>
            @empty

            @endforelse


            <div class="CustomPagination mt-3 justify-content-center justify-content-lg-start">
                {{ $annonces->links() }}
            </div>










        </section>
    </section>



    <br><br><br><br>
@endsection



@push('third_party_scripts')
@endpush
