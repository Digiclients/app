@include('Dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">leads</h1>



    <div class="BlocksBackground row justify-content-between dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

        <div class="col-md-6">
    <p class="py-2 darkcolor font16">Ceci est les données collectées après que l'utilisateur ait utilisé le formulaire de recherche moyen 3 fois.</p>
        </div>

    <div class="col-md-6">

    <button class="primarybtn  d-block  ms-auto">
        exporter les données
    </button>

    </div>

    </div>


    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


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
                        <th class="text-start text-capitalize">views</th>
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
                            <td class="text-start text-capitalize">500</td>
                            
                        </tr>





                </tbody>



            </table>
        </div>




        </div>



        <!-- START Listing Pagination -->
        <div class="CustomPagination mt-3 justify-content-center justify-content-lg-start">
            {{-- {{ $annonces->links() }} --}}
        </div>






    </div>





</section>











@include('Dashboard.inc.DashBoardFooter')
