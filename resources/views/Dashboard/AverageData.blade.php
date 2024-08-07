@include('dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Users List</h1>


    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">
    

<h1>PUT HERE THE AVERAGE SEARCH FORM</h1>

    </div>




<br><br><br>


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
                        <th class="text-start text-capitalize">Role
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
                
                        <th class="text-start text-capitalize">Actions


                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex my-auto">
                                <div class="my-auto">
                                    <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                        class="d-flex  mx-auto rounded-circle " alt="receiver profile"
                                        width="40">
                                </div>
                                <div class="px-2">
                                    <p class="my-0 fontw600 graycolor">Reynante Labares</p>
                                    <p class="font12 my-0 textcolor">joyboy@joyness.com</p>
                                </div>
                            </div>

                        </td>
                        <td class="text-start">1453</td>
                        <td class="text-start">admin</td>
                        <td class="text-start">066666666</td>
                        <td class="text-start">


                            <div class="my-auto d-flex">


                                <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                        data-icon="tabler:user-x"></span></a>
                                <a href="{{ route('dashboard.Users.View') }}" class=""><span class="iconify graycolor font22 mx-2"
                                        data-icon="tabler:user-edit"></span></a>

                                <div class="dropdown">
                                    <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                        aria-expanded="false" class="">
                                        <span class="iconify graycolor font22 mx-2"
                                            data-icon="material-symbols:more-vert"></span>
                                    </a>
                                    <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                        aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item graycolor" href="{{ route('dashboard.Users.View') }}">View</a></li>
                                        <li><a class="dropdown-item graycolor" href="{{ route('dashboard.Users.View') }}">Edit</a></li>
                                        <li><a class="dropdown-item graycolor" href="#">Delete</a></li>
                                    </ul>
                                </div>

                            </div>




                        </td>
                    </tr>
          



                    <tr>
                        <td>
                            <div class="d-flex my-auto">
                                <div class="my-auto">
                                    <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                        class="d-flex  mx-auto rounded-circle " alt="receiver profile"
                                        width="40">
                                </div>
                                <div class="px-2">
                                    <p class="my-0 fontw600 graycolor">Reynante Labares</p>
                                    <p class="font12 my-0 textcolor">joyboy@joyness.com</p>
                                </div>
                            </div>

                        </td>
                        <td class="text-start">1453</td>
                        <td class="text-start">admin</td>
                        <td class="text-start">0666666666</td>
                        <td class="text-start">


                            <div class="my-auto d-flex">


                                <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                        data-icon="tabler:user-x"></span></a>
                                <a href="{{ route('dashboard.Users.View') }}" class=""><span class="iconify graycolor font22 mx-2"
                                        data-icon="tabler:user-edit"></span></a>

                                <div class="dropdown">
                                    <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                        aria-expanded="false" class="">
                                        <span class="iconify graycolor font22 mx-2"
                                            data-icon="material-symbols:more-vert"></span>
                                    </a>
                                    <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                        aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item graycolor" href="{{ route('dashboard.Users.View') }}">View</a></li>
                                        <li><a class="dropdown-item graycolor" href="{{ route('dashboard.Users.View') }}">Edit</a></li>
                                        <li><a class="dropdown-item graycolor" href="#">Delete</a></li>
                                    </ul>
                                </div>

                            </div>




                        </td>
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