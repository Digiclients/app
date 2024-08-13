@include('Dashboard.inc.DashBoardNavbars')



<style>

    /* START chat Contacts nav links */

    .chatContacts .badge {
        top: 3px !important;
        left: 92% !important;
        --bs-badge-padding-x: 0.45em;
        --bs-badge-padding-y: 0.25em;
        --bs-badge-font-size: 0.65em;
        border: 2px solid var(--white);

    }

    /* END chat Contacts nav links */

    .scrollablediv {
        height: 62vh;
        overflow-y: scroll;

    }


    .RecievierContact .badge {
  top: 82% !important;
  left: 91% !important;
  --bs-badge-padding-x: 0.45em;
  --bs-badge-padding-y: 0.45em;
  --bs-badge-font-size: 0.65em;
  border: 2px solid var(--white);
}


    #MessageBoxBody {
        height: 60vh !important;
        overflow-y: scroll !important;
        --scrollbar-size: 0px !important;
        --scrollbar-track-color: transparent !important;
        -ms-overflow-style: none;
        /* Internet Explorer 10+ */
        scrollbar-width: none;
        /* Firefox */
    }

    #MessageBoxBody::-webkit-scrollbar {
        display: none;
        /* Safari and Chrome */
    }


</style>



<section class="mx-0 mx-sm-3 my-4 px-2 py-4">



    <h1 class="darkcolor font20 mx-2 ">Chat</h1>




    {{-- ===================================================================== --}}
    {{-- =========== START OF Chat section =================  --}}
    {{-- ===================================================================== --}}




    <section id="ChatSection" class="row pt-4">



        {{-- ########################################################### --}}
        {{-- ####### Start of chat contacts / Recent Chat / Groups ###### --}}
        {{-- ########################################################### --}}


        <div class="col-lg-4">
            <div class="chatContacts BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


                <ul class="nav customTabs nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active font16 fontw600" id="pills-RecentChat-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-RecentChat" type="button" role="tab" aria-controls="RecentChat"
                            aria-selected="true">Recent Chat</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  font16 fontw600" id="pills-Groups-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Groups" type="button" role="tab" aria-controls="Groups"
                            aria-selected="false">Groups</button>
                    </li>

                </ul>
                <div class="tab-content scrollablediv" id="pills-tabContent">





                    {{-- ########################################################### --}}
                    {{-- ################### START SINGLE CHAT ##################### --}}
                    {{-- ########################################################### --}}


                    <div class="tab-pane fade show active" id="pills-RecentChat" role="tabpanel"
                        aria-labelledby="pills-RecentChat-tab">






                        {{-- ################### START CHAT MESSAGE ##################### --}}



                        <a href="#" class="px-0 py-3 d-flex align-items-center">
                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    1
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Ahaija Neru</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 20 min ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products Lorem ipsum dolor sit amet consectetur ...
                                </p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">
                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/12.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    0
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Petey Cruiser</p>
                                    <p class="my-0   mx-1 float-end font13 darkcolor"> 30 min ago </p>
                                </div>
                                <p class="my-0 font12">I'm sorry but i'm not sure how ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/11.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    4
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 40 min ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products CDS ...</p>
                            </div>

                        </a>
                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/7.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    0
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0"> Sahar Dary</p>
                                    <p class="my-0 mx-1 float-end font13 darkcolor"> 55 min ago </p>
                                </div>
                                <p class="my-0 font12">All set ! Now, time to get to you now ok ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">






                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/8.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    4
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 60 min ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 2 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ok ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/3.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    10
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 4 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products , thanks ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">

                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  d-none  translate-middle badge rounded-pill bg-danger">
                                    2
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 8 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  d-none  translate-middle badge rounded-pill bg-danger">
                                    1
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 10 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}



                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  d-none  translate-middle badge rounded-pill bg-danger">
                                    3
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 15 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  d-none  translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 2 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    18
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 3 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    1
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0 mx-1 float-end font13 darkcolor"> 3 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 3 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">

                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 4 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 5 days ago</p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 6 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products Lorem ipsum dolor sit amet consectetur
                                    ...</p>
                            </div>

                        </a>



                        {{-- ################### END CHAT MESSAGE ##################### --}}





                    </div>






                    {{-- ########################################################### --}}
                    {{-- ################### END SINGLE CHAT ##################### --}}
                    {{-- ########################################################### --}}





                    {{-- ########################################################### --}}
                    {{-- ################### START GROUPS CHAT ##################### --}}
                    {{-- ########################################################### --}}





                    <div class="tab-pane fade" id="pills-Groups" role="tabpanel" aria-labelledby="pills-Groups-tab">





                        {{-- ################### START CHAT MESSAGE ##################### --}}



                        <a href="#" class="px-0 py-3 d-flex align-items-center">
                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    1
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Admins area Group</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 20 min ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products Lorem ipsum dolor sit amet consectetur
                                    ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">
                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/12.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    0
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">friends group</p>
                                    <p class="my-0   mx-1 float-end font13 darkcolor"> 30 min ago </p>
                                </div>
                                <p class="my-0 font12">I'm sorry but i'm not sure how...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/11.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    4
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">commerce advices group</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 40 min ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>
                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/7.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    0
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0"> work </p>
                                    <p class="my-0 mx-1 float-end font13 darkcolor"> 55 min ago </p>
                                </div>
                                <p class="my-0 font12">All set ! Now, time to get to you now......</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">






                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/8.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    4
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 60 min ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 2 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/3.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    10
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 4 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">

                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  d-none  translate-middle badge rounded-pill bg-danger">
                                    2
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 8 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  d-none  translate-middle badge rounded-pill bg-danger">
                                    1
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 10 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}



                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  d-none  translate-middle badge rounded-pill bg-danger">
                                    3
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 15 hours ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute  d-none  translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 2 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                                    18
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 3 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    1
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0 mx-1 float-end font13 darkcolor"> 3 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 3 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">

                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 4 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>

                        {{-- ################### END CHAT MESSAGE ##################### --}}


                        <hr class="graycolor my-0">


                        {{-- ################### START CHAT MESSAGE ##################### --}}


                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 5 days ago</p>
                                </div>
                                <p class="my-0 font12">Here are some products ...</p>
                            </div>

                        </a>


                        {{-- ################### END CHAT MESSAGE ##################### --}}

                        <hr class="graycolor my-0">



                        {{-- ################### START CHAT MESSAGE ##################### --}}

                        <a href="#" class="px-0 py-3 d-flex align-items-center">

                            <div class="position-relative me-2">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="img-fluid rounded-circle " alt="" width="40">
                                <span class="position-absolute d-none translate-middle badge rounded-pill bg-danger">
                                    8
                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </div>

                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <p class="darkcolor my-0">Barney Cull</p>
                                    <p class="my-0  mx-1 float-end font13 darkcolor"> 6 days ago </p>
                                </div>
                                <p class="my-0 font12">Here are some products Lorem ipsum dolor sit amet consectetur
                                    ...</p>
                            </div>

                        </a>



                        {{-- ################### END CHAT MESSAGE ##################### --}}




                    </div>




                    {{-- ########################################################### --}}
                    {{-- ####################### END GROUPS CHAT ################### --}}
                    {{-- ########################################################### --}}





                </div>


            </div>

        </div>

        {{-- ########################################################### --}}
        {{-- ####### End of chat contacts / Recent Chat / Groups ###### --}}
        {{-- ########################################################### --}}



        {{-- ################################################################### --}}
        {{-- ######################## Start of chat messages  ################## --}}
        {{-- ################################################################### --}}



        <div class="col-lg-4">
            <div class="BlocksBackground dark-box-shadow rounded  mt-md-3 mb-md-0 m-2 bgwhite">


                {{-- ------------- Start  message box header   ---------------- --}}

                <div class="row px-4 py-3">

                    <div class="col-md-8 d-md-flex d-block  justify-content-center justify-content-md-start my-auto">
                        <div class="position-relative RecievierContact">
                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                class="img-fluid d-flex  mx-auto rounded-circle " alt="receiver profile" width="40">

                                <span class="position-absolute translate-middle badge rounded-pill bg-danger"><span class="visually-hidden">unread messages</span>
                            </span>

                            </div>
                        <div class="px-2 text-center text-md-none">
                            <h4 class="my-0 h6 darkcolor">Reynante Labares</h4>
                            <p class="font12 my-0">Last seen: 2 minutes ago</p>
                        </div>
                    </div>

                    <div class="col-md-4 my-auto text-md-none text-center">

                        <a href="#" class="float-none float-md-end"><span class="iconify textcolor font20 mx-2"
                                data-icon="mdi:information-box-outline"></span></a>
                        <a href="#" class="float-none float-md-end"><span class="iconify textcolor font20 mx-2"
                                data-icon="icon-park-outline:phone-call"></span></a>
                        <a href="#" class="float-none float-md-end"><span class="iconify textcolor font20 mx-2"
                                data-icon="material-symbols:video-call-outline-rounded"></span></a>


                    </div>


                </div>

                {{-- ------------- END  message box header   ---------------- --}}

                <hr class="textcolor my-0">

                {{-- ----------------------------------------------------------- --}}
                {{-- ------------- START  message box body   ---------------- --}}
                {{-- ----------------------------------------------------------- --}}

                <div id="MessageBoxBody" class="p-4">

                    {{-- START last messages date --}}
                    <p class="text-center textcolor font11 fontw500 text-uppercase">3 days ago</p>
                    {{-- END last messages date --}}


                    {{-- ###################################################################### --}}
                    {{-- ######################## START SENDER MESSAGES ####################### --}}
                    {{-- ###################################################################### --}}


                    <div class="col-md-11 py-2 d-flex ms-auto flex-row-reverse my-auto">
                        {{-- start avatar --}}
                        <div>
                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                class="mx-auto rounded-circle " alt="receiver profile" width="46">
                        </div>
                        {{-- end avatar --}}
                        <div class="mx-3">
                            {{-- start message --}}
                            <div class="my-1 bgprimary whitecolor font14 rounded p-2">
                                Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
                            </div>
                            {{-- end message --}}

                            {{-- start message --}}
                            <div class="my-1 bgprimary whitecolor font14 rounded p-2">
                                rhoncus ut, imperdiet a, venenatis vitae, justo...
                            </div>
                            {{-- end message --}}

                            {{-- start image message --}}
                            <div class="my-1 d-flex flex-row-reverse">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/ecommerce/01.jpg"
                                    class="img-fluid rounded float-end" alt="receiver profile" width="100">
                            </div>
                            {{-- end image message --}}

                            {{-- start message sending time --}}
                            <div class="my-1 d-flex flex-row-reverse">
                                <p class="text-color my-0 font11"> <span> 3:00 pm </span> <span class="iconify ms-1 font18 primarycolor" data-icon="ri:check-double-line"></span></p>
                            </div>
                            {{-- end message sending time --}}

                        </div>

                    </div>

                    {{-- ###################################################################### --}}
                    {{-- ######################## END SENDER MESSAGES ####################### --}}
                    {{-- ###################################################################### --}}








                    {{-- ###################################################################### --}}
                    {{-- ######################## START RECIEVER MESSAGES ####################### --}}
                    {{-- ###################################################################### --}}


                    <div class="col-md-11 py-2 d-flex my-auto">
                        {{-- start avatar --}}
                        <div>
                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/12.jpg"
                                class="mx-auto rounded-circle " alt="receiver profile" width="46">
                        </div>
                        {{-- end avatar --}}
                        <div class="mx-3">
                            {{-- start message --}}
                            <div class="my-1 bgwhiteopacity   darkcolor font14 rounded p-2">
                                Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
                            </div>
                            {{-- end message --}}

                            {{-- start message sending time --}}
                            <div class="my-1">
                                <p class="text-color my-0 font11">9:56 am</p>
                            </div>
                            {{-- end message sending time --}}

                        </div>

                    </div>

                    {{-- #################################################################### --}}
                    {{-- ######################## END RECEIVER MESSAGES ####################### --}}
                    {{-- #################################################################### --}}





                    {{-- ###################################################################### --}}
                    {{-- ######################## START SENDER MESSAGES ####################### --}}
                    {{-- ###################################################################### --}}


                    <div class="col-md-11 py-2 d-flex ms-auto flex-row-reverse my-auto">
                        {{-- start avatar --}}
                        <div>
                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                class="mx-auto rounded-circle " alt="receiver profile" width="46">
                        </div>
                        {{-- end avatar --}}
                        <div class="mx-3">
                            {{-- start message --}}
                            <div class="my-1 bgprimary whitecolor font14 rounded p-2">
                                Nullam dictum felis eu pede mollis pretium
                            </div>
                            {{-- end message --}}


                            {{-- start message sending time --}}
                            <div class="my-1 d-flex flex-row-reverse">
                                <p class="text-color my-0 font11"> <span>11:00 am </span> <span class="iconify ms-1 font18 text-color" data-icon="ri:check-double-line"></span></p>
                            </div>
                            {{-- end message sending time --}}

                        </div>

                    </div>

                    {{-- ###################################################################### --}}
                    {{-- ######################## END SENDER MESSAGES ####################### --}}
                    {{-- ###################################################################### --}}










                    {{-- START last messages date --}}
                    <p class="text-center textcolor font11 fontw500 text-uppercase">Yesterday</p>
                    {{-- END last messages date --}}





                    {{-- ###################################################################### --}}
                    {{-- ######################## START RECEIVER MESSAGES ####################### --}}
                    {{-- ###################################################################### --}}


                    <div class="col-md-11 py-2 d-flex my-auto">
                        {{-- start avatar --}}
                        <div>
                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/12.jpg"
                                class="mx-auto rounded-circle " alt="receiver profile" width="46">
                        </div>
                        {{-- end avatar --}}
                        <div class="mx-3">
                            {{-- start message --}}
                            <div class="my-1 bgwhiteopacity darkcolor font14 rounded p-2">
                                Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
                            </div>
                            {{-- end message --}}

                            {{-- start message --}}
                            <div class="my-1 bgwhiteopacity darkcolor font14 rounded p-2">
                                rhoncus ut, imperdiet a, venenatis vitae, justo...
                            </div>
                            {{-- end message --}}

                            {{-- start image message --}}
                            <div class="my-1">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/12.jpg"
                                    class="img-fluid rounded" alt="receiver profile" width="100">
                            </div>
                            {{-- end image message --}}

                            {{-- start message sending time --}}
                            <div class="my-1">
                                <p class="text-color my-0 font11">8:48 am</p>
                            </div>
                            {{-- end message sending time --}}

                        </div>

                    </div>

                    {{-- ###################################################################### --}}
                    {{-- ######################## END RECEIVER MESSAGES ####################### --}}
                    {{-- ###################################################################### --}}



                    {{-- START last messages date --}}
                    <p class="text-center textcolor font11 fontw500 text-uppercase">today</p>
                    {{-- END last messages date --}}






                    {{-- ###################################################################### --}}
                    {{-- ######################## START SENDER MESSAGES ####################### --}}
                    {{-- ###################################################################### --}}


                    <div class="col-md-11 py-2 d-flex ms-auto flex-row-reverse my-auto">
                        {{-- start avatar --}}
                        <div>
                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                class="mx-auto rounded-circle" alt="receiver profile" width="46">
                        </div>
                        {{-- end avatar --}}
                        <div class="mx-3">
                            {{-- start message --}}
                            <div class="my-1 bgprimary whitecolor font14 rounded p-2">
                                Nullam dictum felis eu pede mollis pretium
                            </div>
                            {{-- end message --}}

                            {{-- start message --}}
                            <div class="my-1 bgprimary whitecolor font14 rounded p-2">
                                lorem impsom dolar
                            </div>
                            {{-- end message --}}


                            {{-- start message sending time --}}
                            <div class="my-1 d-flex flex-row-reverse">
                                <p class="text-color my-0 font11"> <span> 4:00 pm </span> <span class="iconify ms-1 font18 text-color" data-icon="material-symbols:check"></span></p>
                            </div>
                            {{-- end message sending time --}}

                        </div>

                    </div>

                    {{-- ###################################################################### --}}
                    {{-- ######################## END SENDER MESSAGES ####################### --}}
                    {{-- ###################################################################### --}}







                </div>

                {{-- ----------------------------------------------------------- --}}
                {{-- ------------- END  message box body   ---------------- --}}
                {{-- ----------------------------------------------------------- --}}



                {{-- ----------------------------------------------------------- --}}
                {{-- ------------- START  message SENDING FORM   ---------------- --}}
                {{-- ----------------------------------------------------------- --}}
                <form id="chatForm" action="">

                    <div class="input-group">
                        <input type="text" class="form-control py-3 px-4 bgwhiteopacity border-0"
                            placeholder="Type your message here..."
                            aria-label="Recipient's username with two button addons">
                        <button class="btn bgwhiteopacity border-0" type="button"> <span
                                class="iconify font20 textcolor" data-icon="ri:mic-line"></span> </button>

                                <button class="btn bgwhiteopacity border-0" type="button"> <span
                                    class="iconify font20 textcolor" data-icon="ph:paperclip"></span> </button>


                                <button class="btn bgwhiteopacity border-0" type="button"><span
                                class="iconify font20 primarycolor" data-icon="ph:paper-plane-tilt"></span></button>
                    </div>


                </form>

                {{-- ----------------------------------------------------------- --}}
                {{-- ------------- END  message SENDING FORM   ---------------- --}}
                {{-- ----------------------------------------------------------- --}}


            </div>

        </div>


        {{-- ################################################################### --}}
        {{-- ######################## END of chat messages  ################## --}}
        {{-- ################################################################### --}}


        {{-- ######################## START function to set the scoll to the bottom to see last messages  ################## --}}

        <script>
            function updateScroll() {
                var element = document.getElementById("MessageBoxBody");
                element.scrollTop = element.scrollHeight;
            }
            updateScroll();
        </script>
        {{-- ######################## END function to set the scoll to the bottom to see last messages  ################## --}}


        {{-- ################################################################### --}}
        {{-- ######################## Start of Contact Details  ################# --}}
        {{-- ################################################################### --}}



        <div class="col-lg-4">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                    class="mx-auto rounded-circle d-flex" alt="receiver profile" width="100">
                <h4 class="my-2 h6 text-center darkcolor">Reynante Labares</h4>
                <p class="font14 text-center my-0"> Senior Web Designer</p>
                <p class="font14 text-center my-0"> +123(45)-678-90</p>

                <div class="py-4 px-3">
                    <h6 class="my-3 font15 darkcolor">Contact Details :</h6>


                    {{-- start info --}}
                    <div class="d-flex my-2">
                        <div class="d-flex  ms-2 me-4 my-auto">
                            <span class="iconify font20 mx-auto primarycolor"
                                data-icon="teenyicons:id-outline"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor fontw600 font12">Id</div>
                            <div>
                                <small class="text-capitalize textcolor font12"> 2E345D4</small>

                            </div>
                        </div>
                    </div>
                    {{-- end info --}}


                    {{-- start info --}}
                    <div class="d-flex my-2">
                        <div class="d-flex  ms-2 me-4 my-auto">
                            <span class="iconify font20 mx-auto primarycolor"
                                data-icon="ic:twotone-mail-outline"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor fontw600 font12">Email</div>
                            <div>
                                <small class="text-capitalize textcolor font12"> joyboy@email.me</small>

                            </div>
                        </div>
                    </div>
                    {{-- end info --}}



                    {{-- start info --}}
                    <div class="d-flex my-2">
                        <div class="d-flex  ms-2 me-4 my-auto">
                            <span class="iconify font20 mx-auto primarycolor"
                                data-icon="material-symbols:location-on-outline"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor fontw600 font12">Address</div>
                            <div>
                                <small class="text-capitalize textcolor font12"> 2nd street,houston texas,united
                                    states. </small>

                            </div>
                        </div>
                    </div>
                    {{-- end info --}}



                </div>









                <div class="py-2 px-3">
                    <h6 class="my-3 font15 darkcolor">Shared Files :</h6>


                    {{-- start info --}}
                    <div class="d-flex my-2">
                        <div class="d-flex  ms-2 me-4 my-auto">
                            <span class="iconify font20 mx-auto primarycolor"
                                data-icon="material-symbols:folder-open-outline"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor fontw600 font12"> Ex Document </div>
                            <div>
                                <small class="text-capitalize textcolor font12"> ppt 1.2 mb</small>

                            </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <a href="#" class="badge bgprimary font11">4 hrs ago </a>
                        </div>

                    </div>
                    {{-- end info --}}


                    {{-- start info --}}
                    <div class="d-flex my-2">
                        <div class="d-flex  ms-2 me-4 my-auto">
                            <span class="iconify font20 mx-auto primarycolor"
                                data-icon="material-symbols:image-outline"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor fontw600 font12">  Sam Photo </div>
                            <div>
                                <small class="text-capitalize textcolor font12"> img 12 mb</small>

                            </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <a href="#" class="badge bgprimary font11"> 4 hrs ago </a>
                        </div>

                    </div>
                    {{-- end info --}}





                    {{-- start info --}}
                    <div class="d-flex my-2">
                        <div class="d-flex  ms-2 me-4 my-auto">
                            <span class="iconify font20 mx-auto primarycolor"
                                data-icon="material-symbols:video-camera-back-outline-rounded"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor fontw600 font12"> video </div>
                            <div>
                                <small class="text-capitalize textcolor font12"> Video 16 mb </small>

                            </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <a href="#" class="badge bgprimary font11"> 22 mins ago </a>
                        </div>

                    </div>
                    {{-- end info --}}



                </div>

















            </div>
        </div>

        {{-- ################################################################### --}}
        {{-- ######################## END of Contact Details  ################## --}}
        {{-- ################################################################### --}}













    </section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF Chat section =================  --}}
    {{-- ===================================================================== --}}







    @include('Dashboard.inc.DashBoardFooter')
