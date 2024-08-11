@extends('layouts.profile.app')

@section('content')
    <div class="">
        <h5 class="font-weight-700 float-start text-uppercase">Mes annonces ( <span class="anouncesNumber"></span> )</h5>
        <a href="index.html" class="site-button right-arrow button-sm float-end">Back</a>
    </div>

    <br>

    <!-- ################ START IF NO ANOUNCE IS IN THE DB DISPLAY THIS ################# -->


    <div class="rounded text-center border p-4 shadow-sm mt-4">
        <p class="darkcolor font18 fontw600 m-0">Vous n'avez pas d'annonces</p>

        <button type="button" class="primarybtn mt-3 d-block mx-auto">Déposer une annonce</button>

    </div>
    <!-- ################ END IF NO ANOUNCE IS IN THE DB DISPLAY THIS ################# -->









    {{-- <div class="TheAnouncesAndSearch pt-4">
        <form action="" class="d-flex justify-content-end">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Titre d'annonce">
                    <button class="primarybtn minibtn" type="button" id="button-addon2">Rechercher</button>
                </div>
            </div>
        </form>
    </div> --}}




    <section class="TheAnouncesAndPagination my-5">




        <!-- ################  START list ad-card ################ -->



        @forelse ($annonces as $annonce)
            <a href="{{ route('annonce.show', $annonce->annonce_id) }}" class="ad-card my-2">
                <div class="image-container">
                    <img src="{{ asset('storage/' . $annonce->feature_img_path) }}" alt="{{ $annonce->feature_img_alt }}"
                        alt="" style="">
                    <button class="favorite-button d-flex align-items-center"
                        aria-label="Ajouter l’annonce aux favoris" title="Ajouter l’annonce aux favoris">
                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                            style="width: 18px;height: 18px;"></iconify-icon>
                    </button>
                </div>
                <div class="content">
                    <div class="d-flex justify-content-between mt-3 mt-md-0">
                        <h5 class="mb-0">{{ $annonce->annonce_title }}</h5>
                        <div style="width: fit-content;">
                            <span
                                class="badge proBadge m-0 rounded-pill bgBadgeGrayColor darkcolor d-block">{{$annonce->seller_type}}</span>
                        </div>
                    </div>
                    <div class="details d-flex" style="gap: 5px 33px;">
                        @foreach ($annonce->attributes as $attribute)
                            <div class="">
                                <p class="m-0 listAttributesColor">{{ $attribute->attribute_name }} : <span
                                        class="m-0 dark color">{{ $attribute->attribute_value }}</span> </p>

                            </div>
                        @endforeach
                    </div>
                    <h6 class="pt-3">{{ number_format($annonce->annonce_price, 2, ',', ' ') }} €</h6>
                    {{-- <div style="width: 55px;">
                        <span class="badge proBadge rounded-pill bgBadgeGrayColor darkcolor d-block">Pro</span>
                    </div> --}}
                    <p class="location listAttributesColor my-0">{{ $annonce->localization }}</p>
                    <div class="d-flex gap-2 justify-content-between align-items-center">
                        <p class="location listAttributesColor my-0">{{ \Carbon\Carbon::parse($annonce->annonce_publication_date)->diffForHumans() }}</p>
                        {{-- <button type="button" href="" class="primarybtn  minibtn"
                            style="padding: 8px 12px !important;font-size: 14px;">Voir l'annonce</button> --}}
                            <div class=""><a href="{{ route('annonce.edit', $annonce->annonce_id) }}" class="primarybtn  minibtn" style="padding: 8px 12px !important;font-size: 14px;padding: 0;padding-left: 0px;padding-right: 0px;">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a></div>
                    </div>
                </div>
            </a>
            {{-- <hr class="ListingLineHR"> --}}
        @empty
        @endforelse

        </div>



        <!-- START Listing Pagination -->
        <div class="CustomPagination mt-3 justify-content-center justify-content-lg-start">
            {{ $annonces->links() }}
        </div>
        {{-- <nav>
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
        </nav> --}}
    @endsection
