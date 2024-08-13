@include('Dashboard.inc.DashBoardNavbars')







<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 "> Blog List </h1>






    {{-- ===================================================================== --}}
    {{-- =========== START OF Blog Statistics  List section =================  --}}
    {{-- ===================================================================== --}}




    <section id="statistics-section" class="row pt-4">












        {{-- START OF statistics item 1  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgprimaryopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Total Articles</p>
                        <h2 class="darkcolor mb-1"> 992 </h2>

                        <div class="mt-1">

                            <span class="successcolor">

                                <span class="iconify successcolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>

                                {{-- <i class="successcolor fa-solid fa-arrow-up"></i> --}}

                                <strong>25.36%</strong></span>
                            <small class=""> Since last month </small>

                        </div>


                    </div>

                    <div class="col-4">

                        <div class="rounded right-icon float-end text-center p-3">
                            {{-- <i class="font30 fa-solid primarycolor fa-arrow-trend-up"></i> --}}
                            <i class="iconify primarycolor font40" data-icon="ph:article-medium"></i>


                        </div>

                    </div>
                </div>




            </div>

        </div>

        {{-- END OF statistics item 1  --}}



















        {{-- START OF statistics item 2  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgsecondaryopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1"> Draft Articles</p>
                        <h2 class="darkcolor mb-1"> 10 </h2>

                        <div class="mt-1">

                            <span class="successcolor">

                                <span class="iconify successcolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>


                                <strong>10.36%</strong></span>
                            <small class=""> Since last month </small>

                        </div>


                    </div>

                    <div class="col-4">

                        <div class="rounded right-icon float-end text-center p-3">
                            <i class="iconify seccolor font40" data-icon="fluent:drafts-24-regular"></i>

                        </div>

                    </div>
                </div>




            </div>

        </div>

        {{-- END OF statistics item 2  --}}


























        {{-- START OF statistics item 3  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgthirdopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Total Comments</p>
                        <h2 class="darkcolor mb-1"> 1832 </h2>

                        <div class="mt-1">

                            <span class="dangercolor">

                                <span class="iconify dangercolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="90deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>

                                {{-- <i class="dangercolor fa-solid fa-arrow-down"></i> --}}


                                <strong>25.36%</strong></span>
                            <small class=""> Since last month </small>

                        </div>


                    </div>

                    <div class="col-4">

                        <div class="rounded right-icon float-end text-center p-3">
                            {{-- <i class="font30 fa-solid primarycolor fa-dollar-sign"></i> --}}
                            <i class="iconify thirdcolor font40" data-icon="mdi:comments-text-outline"></i>

                        </div>

                    </div>
                </div>




            </div>

        </div>

        {{-- END OF statistics item 3  --}}




























        {{-- START OF statistics item 4  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgfourthopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Total Views</p>
                        <h2 class="darkcolor mb-1"> 30,825 </h2>

                        <div class="mt-1">

                            <span class="successcolor">

                                <span class="iconify successcolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>
                                <strong>88.62%</strong></span>
                            <small class=""> Since last month </small>

                        </div>


                    </div>

                    <div class="col-4">

                        <div class="rounded right-icon float-end text-center p-3">
                            <i class="iconify fourthcolor font40" data-icon="ic:outline-remove-red-eye"></i>
                        </div>

                    </div>
                </div>




            </div>

        </div>

        {{-- END OF statistics item 4  --}}
























    </section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF BlogStatistics section =================  --}}
    {{-- ===================================================================== --}}

















    {{-- ===================================================================== --}}
    {{-- =========== START OF Blog List section =================  --}}
    {{-- ===================================================================== --}}




    <section id="BlogListSection" class="row pt-4">




        <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">






            <h3 class="darkcolor font18 text-capitalize"> Search Filter </h3>



            <div class="row py-3">


                <div class="col-md-4 px-3">
                    <label for="SelectAuthor" class="textcolor font14 pb-2">Select Author</label>
                    <select class="form-select customSelect py-2" id="SelectAuthor">
                        <option hidden disabled selected value></option>
                        <option value="1">1 - Reynante Labares </option>
                        <option value="2">2 - alex smith </option>
                        <option value="3"> 3 - imran gogo</option>
                        <option value="56">56 - ameer khan</option>
                        <option value="96">56 - nikita jojo</option>
                        <option value="100">56 - sam doe</option>
                    </select>
                </div>



                <div class="col-md-4  px-3">
                    <label for="SelectCategories" class="textcolor font14 pb-2">Select Categories</label>
                    <select class="form-select customSelect py-2" id="SelectCategories">
                        <option hidden disabled selected value></option>
                        <option value="Marketing">Marketing</option>
                        <option value="IT">IT</option>
                        <option value="cyber-security">cyber security</option>
                        <option value="graphic-design">graphic design</option>
                    </select>
                </div>

                <div class="col-md-4 px-3 py-2">
                    <label for="SelectStatus" class="textcolor font14 pb-2">Select Status</label>
                    <select class="form-select customSelect py-2" id="SelectStatus">
                        <option hidden disabled selected value> </option>
                        <option value="Published">Published</option>
                        <option value="Draft">Draft</option>
                        <option value="Private">Private</option>
                        <option value="Pending">Pending</option>

                    </select>
                </div>




            </div>


            <hr class="textcolor my-2">

            {{-- START OF : show / Search / add --}}
            <div class="row py-3 flex-column-reverse flex-xl-row">

                <div class="col-xl-8 px-2 my-xl-0 my-2">

                    <select class="form-select customSelect py-2 width80px">
                        <option value="10">10</option>
                        <option value="20">25</option>
                        <option value="30">50</option>
                        <option value="30">100</option>
                        <option value="All">All</option>
                    </select>

                </div>


                <div class="col-xl-2 my-xl-0 my-2">

                    <input type="text" class="form-control bgwhiteopacity py-2" placeholder="Search">

                </div>


                <div class="col-xl-2 my-xl-0 my-2">

                    <button class="primarybtn minibtn  px-5 px-xl-3 d-block mx-auto">
                        <span class="iconify font20" data-icon="tabler:user-plus"></span>
                        Add New Blog
                    </button>







                </div>


            </div>


            {{-- END OF : show / Search / add --}}






            {{-- <hr class="textcolor my-2"> --}}










            <div class="table-responsive pt-2">
                <table class="table CustomTable m-0">



                    <thead>
                        <tr>
                            <th class="text-capitalize "> Title

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
                            <th class="text-start text-capitalize"> Author
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
                            <th class="text-start text-capitalize"> Categories
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
                            <th class="text-start text-capitalize">Status
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
                            <th class="text-start text-capitalize">Modified
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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
                                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                                            class="d-flex  mx-auto rounded " alt="receiver profile"
                                            style="width: 82px !important;">
                                    </div>
                                    <div class="px-2  my-auto">
                                        <p class="my-0 fontw600 graycolor">Introducing the latest tech features for you
                                        </p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Reynante Labares</td>
                            <td class="text-start"> Marketing , IT
                            </td>
                            <td class="text-start"> Published </td>
                            <td class="text-start"> Sep 13 , 2019 12:45 pm</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="carbon:delete"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="fluent:drafts-24-regular"></span></a>

                                    <div class="dropdown">
                                        <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                            aria-expanded="false" class="">
                                            <span class="iconify graycolor font22 mx-2"
                                                data-icon="material-symbols:more-vert"></span>
                                        </a>
                                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item graycolor" href="#">View</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Edit</a></li>
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


    {{-- ===================================================================== --}}
    {{-- =========== END OF Blog List section =================  --}}
    {{-- ===================================================================== --}}































    @include('dashboard.inc.DashBoardFooter')
