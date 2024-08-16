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
        <p class="darkcolor font18 fontw600 m-0">Vous n'avez pas des notifications</p>
        <div class="d-block py-4 mx-auto">
            <a type="button" href="{{ route('home') }}" class="primarybtn mt-3 mx-auto">Ajouter une notifications</a>
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





        <div class="table-responsive pt-2">
            <table class="table CustomTable m-0">



                <thead>
                    <tr>
                        <th class="text-capitalize">location</th>
                        <th class="text-start text-capitalize">marque</th>
                        <th class="text-start text-capitalize">modele</th>

                        <th class="text-start text-capitalize">title</th>
                        <th class="text-start text-capitalize">annee_modele_min-max</th>
                        <th class="text-start text-capitalize">carburant</th>
                        <th class="text-start text-capitalize">boite_vitesse</th>
                        <th class="text-start text-capitalize">kilometrage_min-max</th>
                        <th class="text-start text-capitalize">Actions</th>
                    </tr>
                </thead>
                <tbody>

                   
                        <tr>
                            <td class="text-capitalize">location</td>
                            <td class="text-start text-capitalize">marque</td>
                            <td class="text-start text-capitalize">modele</td>
                            <td class="text-start text-capitalize">title</td>
                            <td class="text-start text-capitalize">annee_modele_min-max</td>
                            <td class="text-start text-capitalize">carburant</td>
                            <td class="text-start text-capitalize">boite_vitesse</td>
                            <td class="text-start text-capitalize">kilometrage_min-max</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="" class=""><iconify-icon
                                            class="iconify graycolor font22 me-2" icon="tabler:eye"></iconify-icon></a>
                 
                                    <!-- Link with icon -->
                                    <a href="#" class="delete-confirm">
                                        <iconify-icon class="iconify graycolor font22 mx-2"
                                            icon="tabler:trash"></iconify-icon>
                                    </a>

                                    {{-- <!-- Hidden form -->
                                    <form action="{{ route('annonce.delete', $annonce->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form> --}}
                                </div>




                            </td>
                        </tr>





                </tbody>



            </table>
        </div>




        </div>



        <!-- START Listing Pagination -->
        <div class="CustomPagination mt-3 justify-content-center justify-content-lg-start">
            {{-- {{ $annonces->links() }} --}}
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
