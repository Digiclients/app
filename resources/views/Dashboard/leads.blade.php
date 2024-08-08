@include('dashboard.inc.DashBoardNavbars')






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
                        <th class="text-capitalize "> User

                            <div class="sortby ms-auto d-flex float-end">
                                <a href="#" class="">
                                    <span class="iconify textcolor font22 me-1" data-rotate="270deg"
                                        data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                </a>
                                <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                        data-rotate="90deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                            </div>


                        </th>
                        <th class="text-start text-capitalize">id
                            <div class="sortby ms-auto d-flex float-end">
                                <a href="#" class="">
                                    <span class="iconify textcolor font22 me-1" data-rotate="270deg"
                                        data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                </a>
                                <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                        data-rotate="90deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                            </div>
                        </th>
                        <th class="text-start text-capitalize">phone
                            <div class="sortby ms-auto d-flex float-end">
                                <a href="#" class="">
                                    <span class="iconify textcolor font22 me-1" data-rotate="270deg"
                                        data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                </a>
                                <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                        data-rotate="90deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                            </div>
                        </th>

                        <th class="text-start text-capitalize">email
                            <div class="sortby ms-auto d-flex float-end">
                                <a href="#" class="">
                                    <span class="iconify textcolor font22 me-1" data-rotate="270deg"
                                        data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                </a>
                                <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                        data-rotate="90deg" data-flip="horizontal"
                                        data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex my-auto">                 
                                <div class="px-2">
                                    <p class="my-0 fontw600 graycolor">Reynante Labares</p>
                                </div>
                            </div>

                        </td>
                        <td class="text-start">1453</td>
                        <td class="text-start">066666666</td>
                        <td class="text-start">joyboy@joyness.com</td>
                    </tr>
          



                    <tr>
                        <td>
                            <div class="d-flex my-auto">                 
                                <div class="px-2">
                                    <p class="my-0 fontw600 graycolor">Reynante Labares</p>
                                </div>
                            </div>

                        </td>
                        <td class="text-start">1453</td>
                        <td class="text-start">066666666</td>
                        <td class="text-start">joyboy@joyness.com</td>
                    </tr>
          

                </tbody>



            </table>
        </div>





        <div class="row  py-3">


            <div class="col-lg-6 my-auto">
                <p class="textcolor font14 text-center text-lg-start my-2 my-lg-auto">Showing 21 to 30 of 50
                    entries</p>
            </div>



            <div class="col-lg-6">


                <nav>
                    <ul
                        class="pagination CustomPagination   my-2 my-lg-auto justify-content-center justify-content-lg-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>






    </div>





</section>











@include('dashboard.inc.DashBoardFooter')