@include('Dashboard.inc.DashBoardNavbars')







<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">User View</h1>




    {{-- ===================================================================== --}}
    {{-- =========== START OF USER INFO section =================  --}}
    {{-- ===================================================================== --}}




    <section id="UserViewSection" class="row pt-4">







        {{-- ===================================================================== --}}
        {{-- =================== START OF USER INFO sidebar =====================  --}}
        {{-- ===================================================================== --}}



        <div class="col-lg-3">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">





                <div class="profile mx-auto">

                    <div class="text-center">
                        <img class="mx-auto rounded my-3" width="100"
                            src="https://demos.pixinvent.com/vuexy-vuejs-admin-template/demo-3/assets/avatar-3-47317f35.png"
                            alt="profile picture">

                        <h2 class="darkcolor h5">Selin Kyle</h2>
                        <p class="textcolor">Admin</p>
                    </div>

                    <div class="row my-4  mx-auto">
                        {{-- start info --}}
                        <div class="col-10 col-sm-6 col-lg-10 col-xl-6 d-flex mx-auto my-2 justify-content-center">
                            <div class="d-flex  ms-2 me-4 my-auto">
                                <span class="iconify font20 mx-auto primarycolor" data-icon="pajamas:task-done"></span>
                            </div>

                            <div class="my-auto">
                                <div class="darkcolor fontw600 font12">1,230</div>
                                <div>
                                    <small class="text-capitalize textcolor font12">Task Done</small>

                                </div>
                            </div>
                        </div>
                        {{-- end info --}}



                        {{-- start info --}}
                        <div class="col-10 col-sm-6 col-lg-10 col-xl-6 d-flex mx-auto my-2 justify-content-center">
                            <div class="d-flex  ms-2 me-4 my-auto">
                                <span class="iconify font20 mx-auto primarycolor" data-icon="uil:suitcase"></span>
                            </div>

                            <div class="my-auto">
                                <div class="darkcolor fontw600 font12">568</div>
                                <div>
                                    <small class="text-capitalize textcolor font12">Project Done</small>

                                </div>
                            </div>
                        </div>
                        {{-- end info --}}

                    </div>




                    <hr class="textcolor my-2">



                    <div class="my-auto py-2 d-flex justify-content-around g-4">


                        <a href="#" class="" title="delete user"><span class="iconify primarycolor font22"
                                data-icon="tabler:user-x"></span></a>
                        <a href="#" class="" title="message">
                            <span class="iconify primarycolor font22" data-icon="tabler:message"></span>
                        </a>

                        <a href="#" class="" title="email"><span class="iconify primarycolor font22"
                                data-icon="tabler:mail"></span></a>

                        <a href="#" class="" title="login as">
                            <span class="iconify primarycolor font22" data-icon="mdi:login-variant"></span>
                        </a>


                    </div>

                    <hr class="textcolor my-2">






                    {{-- start User datails --}}
                    <div class="details p-3">
                        <p class="textcolor font16"> Details </p>

                        <div class="userinfo">
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> User ID : </span>
                                58 </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Username : </span> Selina
                                Kyle </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Email : </span>
                                irena.dubrovna@wayne.com </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Status : </span> active
                            </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Role : </span> admin </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Tax ID : </span> Tax-8894
                            </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Contact : </span> (829)
                                537-0057 </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Language : </span>
                                English </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Country : </span> USA
                            </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Register At : </span>
                                Nov 24, 2019
                            </p>
                            <p class="text-capitalize textcolor my-2"><span class="darkcolor"> Last Login : </span>
                                15 Feb, 2019 01:02 PM
                            </p>


                        </div>


                    </div>
                    {{-- end User datails --}}





                </div>















                <div class="d-flex py-2   p-2 gap-2  justify-content-md-start">

                    <button class="primarybtn minibtn" data-bs-toggle="modal" data-bs-target="#AddNewUserModal">
                        <span class="iconify font20" data-icon="tabler:user-edit"></span>
                        Edit
                    </button>



                    <button class="btn btn-danger">
                        <span class="iconify font20" data-icon="tabler:user-exclamation"></span>
                        Suspend
                    </button>

                </div>



                {{-- ===================================================================== --}}
                {{-- =========== START OF EDIT USER   MODAL =================  --}}
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

                                {{-- ------ START EDIT  USER   form  ------- --}}
                                <form>

                                    <div class="mb-2">
                                        <label for="FullName" class="darkcolor col-form-label font14">Full
                                            Name</label>
                                        <input type="text" id="FullName" class="form-control bgwhiteopacity"
                                            value="Selina Kyle">
                                    </div>


                                    <div class="mb-2">
                                        <label for="Email" class="darkcolor col-form-label font14">Email</label>
                                        <input type="text" id="Email" class="form-control bgwhiteopacity"
                                            value="irena.dubrovna@wayne.com">
                                    </div>

                                    <div class="mb-2">
                                        <label for="Company" class="darkcolor col-form-label font14">Company</label>
                                        <input type="text" id="Company" class="form-control bgwhiteopacity"
                                            value="spaceX">
                                    </div>

                                    <div class="mb-2">
                                        <label for="Country" class="darkcolor col-form-label font14">Country</label>
                                        <input type="text" id="Country" class="form-control bgwhiteopacity"
                                            value="USA">
                                    </div>

                                    <div class="mb-2">
                                        <label for="Contact" class="darkcolor col-form-label font14">Contact</label>
                                        <input type="tel" id="Contact" class="form-control bgwhiteopacity"
                                            value="(829) 537-0057">
                                    </div>


                                    <div class="mb-2">
                                        <label for="SelectRole" class="darkcolor font14 pb-2">Select Role</label>
                                        <select class="form-select customSelect py-2" id="SelectRole">
                                            <option hidden disabled selected value></option>
                                            <option value="Admin" selected>Admin</option>
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
                                        <label for="SelectStatus" class="darkcolor font14 pb-2">Select Status</label>
                                        <select class="form-select customSelect py-2" id="SelectStatus">
                                            <option hidden disabled selected value></option>
                                            <option value="Pending">Pending</option>
                                            <option value="Active" selected>Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>

                                </form>

                                {{-- ------ END EDIT user  form  ------- --}}


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
                {{-- =========== END OF EDIT USER  MODAL =================  --}}
                {{-- ===================================================================== --}}





            </div>



            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">






            </div>

        </div>



        {{-- ===================================================================== --}}
        {{-- ===================== END OF USER INFO SIDEBAR =====================  --}}
        {{-- ===================================================================== --}}





        {{-- ===================================================================== --}}
        {{-- ======================= START OF USER DETAILS    =======================  --}}
        {{-- ===================================================================== --}}

        <div class="col-lg-9">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">
                {{-- start of tabs list --}}
                <ul class="nav customTabs nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link font16 fontw600 active" id="pills-Account-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Account" type="button" role="tab" aria-controls="Account"
                            aria-selected="false" tabindex="-1">
                            <span class="iconify font20" data-icon="tabler:user-check"></span>
                            Account
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link font16 fontw600" id="pills-Security-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Security" type="button" role="tab" aria-controls="Security"
                            aria-selected="true">
                            <span class="iconify font20" data-icon="material-symbols:lock-outline"></span>
                            Security
                        </button>
                    </li>

                </ul>
                {{-- end of tabs list --}}



                <div class="tab-content" id="pills-tabContent">
                    {{-- start of Account tab content --}}
                    <div class="tab-pane fade active show px-2" id="pills-Account" role="tabpanel"
                        aria-labelledby="pills-Account-tab">



                        <div class="py-3 ">




                            {{-- start  user statistics --}}
                            <div id="statistics" class="py-2 row">

                                <p class="h6 darkcolor pb-2">Account</p>

                                <div class="col-lg-3 my-2  my-md-auto mx-auto">
                                    <div class="rounded  mx-auto text-center  w-50 p-2 m-2  bgprimaryopacity">
                                        <i class="iconify primarycolor font40" data-icon="ph:article-medium"></i>
                                    </div>
                                    <p class="graycolor h6 text-center">938</p>
                                    <small class="text-center  textcolor d-block"> Posts </small>
                                </div>

                                <div class="col-lg-3 my-2 my-md-auto mx-auto">
                                    <div class="rounded  mx-auto text-center w-50 p-2 m-2  bgsecondaryopacity">
                                        <i class="iconify seccolor  font40"
                                            data-icon="octicon:project-roadmap-24"></i>
                                    </div>
                                    <p class="graycolor h6 text-center">544</p>
                                    <small class="text-center textcolor d-block"> Projects </small>
                                </div>

                                <div class="col-lg-3 my-2 my-md-auto mx-auto">
                                    <div class="rounded  mx-auto text-center  w-50 p-2 m-2  bgthirdopacity">
                                        <i class="iconify thirdcolor  font40" data-icon="fluent-mdl2:product"></i>
                                    </div>
                                    <p class="graycolor text-center h6">86</p>
                                    <small class="text-center textcolor  d-block"> products </small>
                                </div>

                                <div class="col-lg-3 my-2 my-md-auto mx-auto">
                                    <div class="rounded  mx-auto text-center  w-50 p-2 m-2  bgfourthopacity">
                                        <i class="iconify fourthcolor  font40"
                                            data-icon="material-symbols:order-approve-outline"></i>
                                    </div>
                                    <p class="graycolor text-center h6">2,659</p>
                                    <small class="text-center textcolor d-block"> orders </small>
                                </div>

                            </div>
                            {{-- end  user statistics --}}



                            {{-- start about user --}}
                            <div class="about py-4">
                                <p class="h6 darkcolor pb-2">About</p>

                                <p class="font14 textcolor">

                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.

                                </p>


                            </div>

                            {{-- end about user --}}





                        </div>


                    </div>
                    {{-- end of Account tab content --}}

                    {{-- start of Security tab content --}}

                    <div class="tab-pane fade px-2" id="pills-Security" role="tabpanel"
                        aria-labelledby="pills-Security-tab">

                        {{-- start change user password --}}
                        <div id="changepassword" class="py-3">

                            <p class="h6 darkcolor">Change Password</p>

                            <div class="p-3 my-3 rounded bgfourthopacity">
                                <p class="fourthcolor font18 my-0"> Ensure that these requirements are met </p>
                                <p class="fourthcolor font16 my-0"> Minimum 8 characters long, uppercase & symbol </p>
                            </div>

                            <form class="row g-4 my-3">
                                <div class="col-md-6">
                                    <label for="NewPassword" class="darkcolor col-form-label font14">New
                                        Password</label>
                                    <input type="password" id="NewPassword" class="form-control bgwhiteopacity py-2">
                                </div>
                                <div class="col-md-6">
                                    <label for="ConfirmPassword" class="darkcolor col-form-label font14">Confirm
                                        Password</label>
                                    <input type="password" class="form-control bgwhiteopacity py-2"
                                        id="ConfirmPassword">
                                </div>
                                <div class="py-4">
                                    <button type="submit" class="primarybtn minibtn px-5 px-xl-3">
                                        Change Password
                                    </button>
                                </div>
                            </form>

                        </div>

                        {{-- end change user password --}}


                    </div>

                    {{-- End of Security tab content --}}


                </div>


            </div>
        </div>


        {{-- ===================================================================== --}}
        {{-- ===================== END OF USER DETAILS   =====================  --}}
        {{-- ===================================================================== --}}













    </section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF USER VIEW section ================  --}}
    {{-- ===================================================================== --}}







    @include('Dashboard.inc.DashBoardFooter')
