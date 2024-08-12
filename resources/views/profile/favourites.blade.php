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


{{-- 

            <div class="table-responsive pt-2">
                <table class="table CustomTable m-0">
    
    
    
                    <thead>
                        <tr>
                            <th class="text-capitalize "> Titre

    
                            </th>
                   
                            <th class="text-start text-capitalize">Prix
             
                            </th>
                            <th class="text-start d-none d-md-table-cell text-capitalize">Temps de publication
    
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
                                        </div>
                                    </div>
    
                                </td>
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
     --}}
    
{{-- 
        <!-- START Listing Pagination -->
        <div class="CustomPagination mt-3 justify-content-center justify-content-lg-start">
            {{ $annonces->links() }}
        </div> --}}


        {{-- <script>
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
        </script> --}}


{{-- <script>
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
</script> --}}







        </section>




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
