@extends('layouts.profile.app')


@push('third_party_stylesheets')
    <style>
        .CustomPagination nav ul {
            justify-content: end !important;
        }
    </style>
@endpush

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
    @endif


    <div class="">
        <h5 class="font-weight-700 float-start text-uppercase">Mes annonces ( <span class="anouncesNumber"></span> )</h5>
        <a href="index.html" class="site-button right-arrow button-sm float-end">Back</a>
    </div>

    <br>

    <!-- ################ START IF NO ANOUNCE IS IN THE DB DISPLAY THIS ################# -->


    <div class="rounded text-center border p-4 shadow-sm mt-4">
        <p class="darkcolor font18 fontw600 m-0">Vous n'avez pas d'annonces</p>
        <div class="d-block py-4 mx-auto">
            <a type="button" href="{{ route('create-annonce') }}" class="primarybtn mt-3  mx-auto">Déposer une annonce</a>
        </div>

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




        <div class="table-responsive pt-2">
            <table class="table CustomTable m-0">



                <thead>
                    <tr>
                        <th class="text-capitalize "> Titre

                            {{-- <div class="sortby ms-auto d-flex float-end">
                                <a href="#" class="">
                                    <span class="iconify textcolor font22 me-1" data-rotate="270deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                </a>
                                <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                        data-rotate="90deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                            </div> --}}


                        </th>
                        {{-- <th class="text-start text-capitalize">Id --}}
                        {{-- <div class="sortby ms-auto d-flex float-end">
                                    <a href="#" class="">
                                        <span class="iconify textcolor font22 me-1" data-rotate="270deg" data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                    </a>
                                    <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                            data-rotate="90deg" data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                    </a>
                            </div> --}}
                        {{-- </th> --}}
                        <th class="text-start text-capitalize">Prix
                            {{-- <div class="sortby ms-auto d-flex float-end">
                                <a href="#" class="">
                                    <span class="iconify textcolor font22 me-1" data-rotate="270deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                </a>
                                <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                        data-rotate="90deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                            </div> --}}
                        </th>
                        <th class="text-start d-none d-md-table-cell text-capitalize">Temps de publication
                            {{-- <div class="sortby ms-auto d-flex float-end">
                                <a href="#" class="">
                                    <span class="iconify textcolor font22 me-1" data-rotate="270deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                </a>
                                <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                        data-rotate="90deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                            </div> --}}
                        </th>

                        <th class="text-start text-capitalize">Actions


                        </th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($annonces as $annonce)
                        <tr>
                            <td>
                                <div class="d-flex my-auto">
                                    <div class="my-auto">
                                        <img src="{{ asset('storage/' . $annonce->images->first()->path) }}"
                                            alt="{{ $annonce->images->first()->alt }}" class="d-flex mx-auto rounded"
                                            width="40">
                                    </div>
                                    <div class="px-2 my-auto">
                                        <p class="my-0 fontw600 graycolor AnounceTitle">{{ $annonce->title }}</p>
                                        {{-- <p class="font12 my-0 textcolor">joyboy@joyness.com</p> --}}
                                    </div>
                                </div>

                            </td>
                            {{-- <td class="text-start">{{ $annonce->annonce_id }}</td> --}}
                            <td class="text-start">{{ number_format($annonce->price, 2, ',', ' ') }} €</td>
                            <td class="text-start d-none d-md-table-cell">
                                {{ \Carbon\Carbon::parse($annonce->publication_date)->diffForHumans() }}</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="{{ route('annonce.show', $annonce->id) }}" class=""><iconify-icon
                                            class="iconify graycolor font22 me-2" icon="tabler:eye"></iconify-icon></a>
                                    <a href="{{ route('annonce.edit', $annonce->id) }}" class="">
                                        <iconify-icon class="iconify graycolor font22 mx-2"
                                            icon="tabler:pencil"></iconify-icon>


                                    </a>

                                    <!-- Link with icon -->
                                    <a href="#" class="delete-confirm">
                                        <iconify-icon class="iconify graycolor font22 mx-2"
                                            icon="tabler:trash"></iconify-icon>
                                    </a>

                                    <!-- Hidden form -->
                                    <form action="{{ route('annonce.delete', $annonce->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>




                            </td>
                        </tr>

                    @empty
                    @endforelse




                </tbody>



            </table>
        </div>




        {{-- @forelse ($annonces as $annonce)
            <a href="{{ route('annonce.show', $annonce->annonce_id) }}" class="ad-card my-2">
                <div class="image-container">
                    <img src="{{ asset('storage/' . $annonce->feature_img_path) }}" alt="{{ $annonce->feature_img_alt }}"
                        alt="" style="">
                    <button class="favorite-button d-flex align-items-center" aria-label="Ajouter l’annonce aux favoris"
                        title="Ajouter l’annonce aux favoris">
                        <iconify-icon icon="tabler:heart" class="TheFavIcon" height="18"
                            style="width: 18px;height: 18px;"></iconify-icon>
                    </button>
                </div>
                <div class="content">
                    <div class="d-flex justify-content-between mt-3 mt-md-0">
                        <h5 class="mb-0">{{ $annonce->annonce_title }}</h5>
                        <div style="width: fit-content;">
                            <span
                                class="badge proBadge m-0 rounded-pill bgBadgeGrayColor darkcolor d-block">{{ $annonce->seller_type }}</span>
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

                    <p class="location listAttributesColor my-0">{{ $annonce->localization }}</p>
                    <div class="d-flex gap-2 justify-content-between align-items-center">
                        <p class="location listAttributesColor my-0">
                            {{ \Carbon\Carbon::parse($annonce->annonce_publication_date)->diffForHumans() }}</p>

                        <div class=""><a href="{{ route('annonce.edit', $annonce->annonce_id) }}"
                                class="primarybtn  minibtn"
                                style="padding: 8px 12px !important;font-size: 14px;padding: 0;padding-left: 0px;padding-right: 0px;">
                                <iconify-icon icon="lucide:edit"></iconify-icon>
                            </a></div>
                    </div>
                </div>
            </a>

        @empty
        @endforelse --}}

        </div>



        <!-- START Listing Pagination -->
        <div class="CustomPagination mt-3 justify-content-center justify-content-lg-start">
            {{ $annonces->links() }}
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.delete-confirm').forEach(button => {
                    button.addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior
                        if (confirm('Êtes-vous sûr de vouloir supprimer ce annonce ?')) {
                            // Find the corresponding form and submit it
                            const form = this.nextElementSibling; // Assumes form is the next sibling
                            form.submit();
                        }
                    });
                });
            });
        </script>


<script>
    function limitCharactersByClass(className, maxLength) {
        const elements = document.querySelectorAll(`.${className}`);

        elements.forEach(element => {
            const text = element.textContent;

            if (text.length > maxLength) {
                element.textContent = text.substring(0, maxLength) + '...'; // Adds '...' to indicate truncation
            }
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        limitCharactersByClass('AnounceTitle', 32); // Set maximum characters
    });
</script>

    @endsection
