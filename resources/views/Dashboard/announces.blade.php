@include('Dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Anounces</h1>



    <div class="BlocksBackground row justify-content-between dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">
        <h3 class="darkcolor font18 text-capitalize"> Filtre de recherche :</h3>
        <form action="">
            <div class="row py-3">
                <div class="col-md-4 px-3">
                    <label for="SelectStatus" class="textcolor font14 pb-2">Nom d'utilisateur :</label>
                    <input type="text" class="form-control bgwhiteopacity py-2" placeholder="Nom d'utilisateur">
                </div>
                <div class="col-md-4  px-3">
                    <label for="" class="textcolor font14 pb-2">Choisir un rôle</label>
                    <select class="form-select customSelect py-2">
                        <option hidden="" disabled="" selected="" value=""></option>
                        <option value="admin">admin</option>
                        <option value="manager">manager</option>
                        <option value="particulier">particulier</option>
                        <option value="professionnel">professionnel</option>
                    </select>
                </div>
                <div class="col-md-4 px-3">
                    <label for="Recherche" class="textcolor font14 pb-2">Recherche :</label>
                    <button class="primarybtn minibtn d-block w-100 mx-auto text-center">
                        Recherche
                    </button>
                </div>
            </div>
        </form>

    </div>


    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">







            <!-- ################  START list ad-card ################ -->

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

                        {{-- @forelse ($annonces as $annonce)
                            <tr>
                                <td>
                                    <div class="d-flex my-auto">
                                        <div class="my-auto">
                                            <img src="{{ asset('storage/' . $annonce->images->first()->path) }}"
                                                alt="{{ $annonce->images->first()->alt }}"
                                                class="d-flex mx-auto rounded" width="40">
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
                                                class="iconify graycolor font22 me-2"
                                                icon="tabler:eye"></iconify-icon></a>
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
                        @endforelse --}}




                    </tbody>



                </table>
            </div>




            notice the page has the table and pagination with loop and variables ready to use 
            but commented to prevent error
        
        
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





    </div>


        





</div>





</section>











@include('Dashboard.inc.DashBoardFooter')
