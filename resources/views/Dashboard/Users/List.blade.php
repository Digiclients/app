@include('dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Users List</h1>










    {{-- ===================================================================== --}}
    {{-- =========== START OF Users Statistics  List section =================  --}}
    {{-- ===================================================================== --}}




    <section id="statistics-section" class="row pt-4">












        {{-- START OF statistics item 1  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">

            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgprimaryopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Total Users</p>
                        <h2 class="darkcolor mb-1"> 99,999+ </h2>

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
                            <i class="iconify primarycolor font40" data-icon="tabler:user"></i>


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
                        <p class="graycolor mb-1">Paid Users</p>
                        <h2 class="darkcolor mb-1"> 30,825 </h2>

                        <div class="mt-1">

                            <span class="successcolor">

                                <span class="iconify successcolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>


                                <strong>25.36%</strong></span>
                            <small class=""> Since last month </small>

                        </div>


                    </div>

                    <div class="col-4">

                        <div class="rounded right-icon float-end text-center p-3">
                            <i class="iconify seccolor font40" data-icon="tabler:user-plus"></i>

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
                        <p class="graycolor mb-1">Active Users</p>
                        <h2 class="darkcolor mb-1"> 30,825 </h2>

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
                            <i class="iconify thirdcolor font40" data-icon="tabler:user-check"></i>

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
                        <p class="graycolor mb-1">Pending Users</p>
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
                            <i class="iconify fourthcolor font40" data-icon="tabler:user-exclamation"></i>
                        </div>

                    </div>
                </div>




            </div>

        </div>

        {{-- END OF statistics item 4  --}}
























    </section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF UsersStatistics section =================  --}}
    {{-- ===================================================================== --}}













    {{-- ===================================================================== --}}
    {{-- =========== START OF Users List section =================  --}}
    {{-- ===================================================================== --}}




    <section id="UsersListSection" class="row pt-2">

        <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">






            <h3 class="darkcolor font18 text-capitalize"> Search Filter </h3>



            <div class="row py-3">


                <div class="col-md-4  px-3">
                    <label for="SelectRole" class="textcolor font14 pb-2">Select Role</label>
                    <select class="form-select customSelect py-2" id="SelectRole">
                        <option hidden disabled selected value></option>
                        <option value="Admin">Admin</option>
                        <option value="Author">Author</option>
                        <option value="Editor">Editor</option>
                        <option value="Subsciber">Subsciber</option>
                    </select>
                </div>

                <div class="col-md-4 px-3">
                    <label for="SelectPlan" class="textcolor font14 pb-2">Select Plan</label>
                    <select class="form-select customSelect py-2" id="SelectPlan">
                        <option hidden disabled selected value> </option>
                        <option value="1">Basic</option>
                        <option value="2">Company</option>
                        <option value="3">Entreprise</option>
                        <option value="3">Team</option>
                    </select>
                </div>

                <div class="col-md-4 px-3">
                    <label for="SelectStatus" class="textcolor font14 pb-2">Select Status</label>
                    <select class="form-select customSelect py-2" id="SelectStatus">
                        <option hidden disabled selected value></option>
                        <option value="1">Pending</option>
                        <option value="2">Active</option>
                        <option value="3">Inactive</option>
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

                    <button class="primarybtn minibtn  px-5 px-xl-3 d-block mx-auto" data-bs-toggle="modal"
                        data-bs-target="#AddNewUserModal">
                        <span class="iconify font20" data-icon="tabler:user-plus"></span>
                        Add New User
                    </button>





                    {{-- ===================================================================== --}}
                    {{-- =========== START OF ADD NEW USER   MODAL =================  --}}
                    {{-- ===================================================================== --}}


                    <div class="modal fade" id="AddNewUserModal" tabindex="-1" aria-labelledby="AddNewUserModal"
                        aria-hidden="true">
                        <div class="modal-dialog   modal-lg">
                            <div class="modal-content bgbodycolor">
                                <div class="modal-header  border-0 bgprimary">
                                    <h5 class="modal-title whitecolor h6">Add User</h5>
                                    <a class="bgprimary" data-bs-dismiss="modal" aria-label="Close"><span
                                            class="iconify font24 whitecolor" data-icon="ic:round-close"></span></a>
                                </div>
                                <div class="modal-body p-4  BlocksBackground">

                                    {{-- ------ START ADD NEW USER   form  ------- --}}
                                    <form>

                                        <div class="mb-2">
                                            <label for="FullName" class="darkcolor col-form-label font14">Full
                                                Name</label>
                                            <input type="text" id="FullName" class="form-control bgwhiteopacity"
                                                placeholder="">
                                        </div>


                                        <div class="mb-2">
                                            <label for="Email"
                                                class="darkcolor col-form-label font14">Email</label>
                                            <input type="text" id="Email" class="form-control bgwhiteopacity"
                                                placeholder="">
                                        </div>

                                        <div class="mb-2">
                                            <label for="Company"
                                                class="darkcolor col-form-label font14">Company</label>
                                            <input type="text" id="Company" class="form-control bgwhiteopacity"
                                                placeholder="">
                                        </div>

                                        <div class="mb-2">
                                            <label for="Country"
                                                class="darkcolor col-form-label font14">Country</label>
                                            <input type="text" id="Country" class="form-control bgwhiteopacity"
                                                placeholder="">
                                        </div>

                                        <div class="mb-2">
                                            <label for="Contact"
                                                class="darkcolor col-form-label font14">Contact</label>
                                            <input type="tel" id="Contact" class="form-control bgwhiteopacity"
                                                placeholder="">
                                        </div>


                                        <div class="mb-2">
                                            <label for="SelectRole" class="darkcolor font14 pb-2">Select Role</label>
                                            <select class="form-select customSelect py-2" id="SelectRole">
                                                <option hidden disabled selected value></option>
                                                <option value="Admin">Admin</option>
                                                <option value="Author">Author</option>
                                                <option value="Editor">Editor</option>
                                                <option value="Subsciber">Subsciber</option>
                                            </select>
                                        </div>


                                        <div class="mb-2">
                                            <label for="SelectPlan" class="darkcolor font14 pb-2">Select Plan</label>
                                            <select class="form-select customSelect py-2" id="SelectPlan">
                                                <option hidden disabled selected value> </option>
                                                <option value="Basic">Basic</option>
                                                <option value="Company">Company</option>
                                                <option value="Entreprise">Entreprise</option>
                                                <option value="Team">Team</option>
                                            </select>
                                        </div>


                                        <div class="mb-2">
                                            <label for="SelectStatus" class="darkcolor font14 pb-2">Select
                                                Status</label>
                                            <select class="form-select customSelect py-2" id="SelectStatus">
                                                <option hidden disabled selected value></option>
                                                <option value="Pending">Pending</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                        </div>

                                    </form>

                                    {{-- ------ END add user  form  ------- --}}


                                </div>
                                <div class="modal-footer px-4  BlocksBackground  border-0">
                                    <button type="button" class="primarybtn  minibtn"> Submit
                                    </button>


                                    <button type="button" data-bs-dismiss="modal" class="secbtn  minibtn"> Cancel
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- ===================================================================== --}}
                    {{-- =========== END OF ADD NEW USER  MODAL =================  --}}
                    {{-- ===================================================================== --}}




                </div>


            </div>


            {{-- END OF : show / Search / add --}}






            {{-- <hr class="textcolor my-2"> --}}










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
                            <th class="text-start text-capitalize">Plan
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
                            <th class="text-start text-capitalize">Billing
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
                            <td class="text-start">maintainer</td>
                            <td class="text-start">enterprise</td>
                            <td class="text-start"> Manual - Cash </td>
                            <td class="text-start">active</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
                                        </ul>
                                    </div>

                                </div>




                            </td>
                        </tr>
                        <tr>
                            <td>

                                <div class="d-flex my-auto">
                                    <div class="my-auto">
                                        <img src="https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-3/assets/avatar-5-d340221a.png"
                                            class="d-flex  mx-auto rounded-circle " alt="receiver profile"
                                            width="40">
                                    </div>
                                    <div class="px-2">
                                        <p class="my-0 fontw600 graycolor">Robert Clinton</p>
                                        <p class="font12 my-0 textcolor">joyboy@joyness.com</p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Asus</td>
                            <td class="text-start">Smart Phone</td>
                            <td class="text-start"> $4438,536 </td>
                            <td class="text-start">Done</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
                                        </ul>
                                    </div>

                                </div>




                            </td>
                        </tr>


                        <tr>
                            <td>

                                <div class="d-flex my-auto">
                                    <div class="my-auto">
                                        <img src="https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-3/assets/avatar-1-129659bb.png"
                                            class="d-flex  mx-auto rounded-circle " alt="receiver profile"
                                            width="40">
                                    </div>
                                    <div class="px-2">
                                        <p class="my-0 fontw600 graycolor">john doe</p>
                                        <p class="font12 my-0 textcolor">joyboy@joyness.com</p>
                                    </div>
                                </div>

                            </td>
                            <td class="text-start">Google</td>
                            <td class="text-start">Smart Phone</td>
                            <td class="text-start"> $3668,536 </td>
                            <td class="text-start">Done</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
                                        </ul>
                                    </div>

                                </div>




                            </td>
                        </tr>



                        <tr>
                            <td>

                                <div class="d-flex my-auto">
                                    <div class="my-auto">
                                        <img src="https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-3/assets/avatar-6-c56877f3.png"
                                            class="d-flex  mx-auto rounded-circle " alt="receiver profile"
                                            width="40">
                                    </div>
                                    <div class="px-2">
                                        <p class="my-0 fontw600 graycolor">Robert Clinton</p>
                                        <p class="font12 my-0 textcolor">joyboy@joyness.com</p>
                                    </div>
                                </div>


                            </td>
                            <td class="text-start">Apple</td>
                            <td class="text-start">laptop</td>
                            <td class="text-start"> $3800,536 </td>
                            <td class="text-start">Pending</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
                                        </ul>
                                    </div>

                                </div>




                            </td>
                        </tr>



                        <tr>
                            <td>
                                <div class="d-flex my-auto">
                                    <div class="my-auto">
                                        <img src="https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-3/assets/avatar-6-c56877f3.png"
                                            class="d-flex  mx-auto rounded-circle " alt="receiver profile"
                                            width="40">
                                    </div>
                                    <div class="px-2">
                                        <p class="my-0 fontw600 graycolor">Robert Clinton</p>
                                        <p class="font12 my-0 textcolor">joyboy@joyness.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-start">Panasonic</td>
                            <td class="text-start">Watch</td>
                            <td class="text-start"> $3800,536 </td>
                            <td class="text-start">Done</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
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
                            <td class="text-start">maintainer</td>
                            <td class="text-start">enterprise</td>
                            <td class="text-start"> Manual - Cash </td>
                            <td class="text-start">active</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
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
                            <td class="text-start">maintainer</td>
                            <td class="text-start">enterprise</td>
                            <td class="text-start"> Manual - Cash </td>
                            <td class="text-start">active</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
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
                            <td class="text-start">maintainer</td>
                            <td class="text-start">enterprise</td>
                            <td class="text-start"> Manual - Cash </td>
                            <td class="text-start">active</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
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
                            <td class="text-start">maintainer</td>
                            <td class="text-start">enterprise</td>
                            <td class="text-start"> Manual - Cash </td>
                            <td class="text-start">active</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
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
                            <td class="text-start">maintainer</td>
                            <td class="text-start">enterprise</td>
                            <td class="text-start"> Manual - Cash </td>
                            <td class="text-start">active</td>
                            <td class="text-start">


                                <div class="my-auto d-flex">


                                    <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                            data-icon="tabler:user-x"></span></a>
                                    <a href="#" class=""><span class="iconify graycolor font22 mx-2"
                                            data-icon="tabler:user-edit"></span></a>

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
                                            <li><a class="dropdown-item graycolor" href="#">Message</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Email</a></li>
                                            <li><a class="dropdown-item graycolor" href="#">Login</a></li>
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
    {{-- =========== END OF UsersList section =================  --}}
    {{-- ===================================================================== --}}







    @include('dashboard.inc.DashBoardFooter')
