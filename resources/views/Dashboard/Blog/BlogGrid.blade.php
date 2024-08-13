@include('Dashboard.inc.DashBoardNavbars')










<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 "> Blog Grid </h1>





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
    {{-- =========== START OF Blog Grid section =================  --}}
    {{-- ===================================================================== --}}


    <section id="BlogGridSection" class="row pt-4">




        {{-- START OF : show / Search / add --}}
        <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">
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
                        Add New Blog
                    </button>
                </div>
            </div>
        </div>
        {{-- END OF : show / Search / add --}}







        <div class="d-flex flex-wrap gx-4 gy-4 mx-auto">








            {{-- #################################################################### --}}
            {{-- #################### Start OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}

            <div class="mx-auto my-2" style="width:380px">
                <div class="card h-100 Customcard">
                    <div id="CardimageAndDate">
                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                            class="card-img-top" alt="blog image">

                        <div id='blogCardDate' class="text-center d-flex rounded">
                            <div id="date">28</div>
                            <div id="mounthAndYear">March 2023</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex my-auto">
                            <div class="my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                    class="d-flex  mx-auto rounded-circle " alt="receiver profile" width="40">
                            </div>
                            <div class="px-2 my-auto">
                                <p class="my-auto fontw600 textcolor"> By Reynante Labares</p>
                            </div>
                        </div>
                        <h5 class="card-title darkcolor my-2 font22">Introducing the latest tech features for you</h5>
                        <p class="card-text textcolor">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...

                        <div class="d-flex my-auto justify-content-between">
                            <p class="textcolor my-auto">
                                <span class="iconify primarycolor" data-icon="fa6-regular:comments"
                                    style="margin-top: -3px !important;"></span>
                                2 Comments
                            </p>
                            <a href="#" class="textcolor my-auto">MORE <span class="iconify font30"
                                    data-icon="material-symbols:arrow-right-rounded"
                                    style="margin-top: -3px !important;"></span></a>

                        </div>

                    </div>

                    <hr class="textcolor my-2">


                    <div id='BlogActions' class="d-flex py-2  px-3 gap-2  justify-content-end">
                        <button class="primarybtn minibtn me-md-2 px-4" type="button">Edit</button>
                        <button class="btn btn-danger px-4" type="button">Delete</button>
                    </div>

                </div>
            </div>


            {{-- #################################################################### --}}
            {{-- #################### End OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}


















            {{-- #################################################################### --}}
            {{-- #################### Start OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}

            <div class="mx-auto my-2" style="width:380px">
                <div class="card h-100 Customcard">
                    <div id="CardimageAndDate">
                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                            class="card-img-top" alt="blog image">

                        <div id='blogCardDate' class="text-center d-flex rounded">
                            <div id="date">28</div>
                            <div id="mounthAndYear">March 2023</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex my-auto">
                            <div class="my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                    class="d-flex  mx-auto rounded-circle " alt="receiver profile" width="40">
                            </div>
                            <div class="px-2 my-auto">
                                <p class="my-auto fontw600 textcolor"> By Reynante Labares</p>
                            </div>
                        </div>
                        <h5 class="card-title darkcolor my-2 font22">Introducing the latest tech features for you</h5>
                        <p class="card-text textcolor">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...

                        <div class="d-flex my-auto justify-content-between">
                            <p class="textcolor my-auto">
                                <span class="iconify primarycolor" data-icon="fa6-regular:comments"
                                    style="margin-top: -3px !important;"></span>
                                2 Comments
                            </p>
                            <a href="#" class="textcolor my-auto">MORE <span class="iconify font30"
                                    data-icon="material-symbols:arrow-right-rounded"
                                    style="margin-top: -3px !important;"></span></a>

                        </div>

                    </div>

                    <hr class="textcolor my-2">


                    <div id='BlogActions' class="d-flex py-2  px-3 gap-2  justify-content-end">
                        <button class="primarybtn minibtn me-md-2 px-4" type="button">Edit</button>
                        <button class="btn btn-danger px-4" type="button">Delete</button>
                    </div>

                </div>
            </div>


            {{-- #################################################################### --}}
            {{-- #################### End OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}






















            {{-- #################################################################### --}}
            {{-- #################### Start OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}

            <div class="mx-auto my-2" style="width:380px">
                <div class="card h-100 Customcard">
                    <div id="CardimageAndDate">
                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                            class="card-img-top" alt="blog image">

                        <div id='blogCardDate' class="text-center d-flex rounded">
                            <div id="date">28</div>
                            <div id="mounthAndYear">March 2023</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex my-auto">
                            <div class="my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                    class="d-flex  mx-auto rounded-circle " alt="receiver profile" width="40">
                            </div>
                            <div class="px-2 my-auto">
                                <p class="my-auto fontw600 textcolor"> By Reynante Labares</p>
                            </div>
                        </div>
                        <h5 class="card-title darkcolor my-2 font22">Introducing the latest tech features for you</h5>
                        <p class="card-text textcolor">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...

                        <div class="d-flex my-auto justify-content-between">
                            <p class="textcolor my-auto">
                                <span class="iconify primarycolor" data-icon="fa6-regular:comments"
                                    style="margin-top: -3px !important;"></span>
                                2 Comments
                            </p>
                            <a href="#" class="textcolor my-auto">MORE <span class="iconify font30"
                                    data-icon="material-symbols:arrow-right-rounded"
                                    style="margin-top: -3px !important;"></span></a>

                        </div>

                    </div>

                    <hr class="textcolor my-2">


                    <div id='BlogActions' class="d-flex py-2  px-3 gap-2  justify-content-end">
                        <button class="primarybtn minibtn me-md-2 px-4" type="button">Edit</button>
                        <button class="btn btn-danger px-4" type="button">Delete</button>
                    </div>

                </div>
            </div>


            {{-- #################################################################### --}}
            {{-- #################### End OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}















            {{-- #################################################################### --}}
            {{-- #################### Start OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}

            <div class="mx-auto my-2" style="width:380px">
                <div class="card h-100 Customcard">
                    <div id="CardimageAndDate">
                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                            class="card-img-top" alt="blog image">

                        <div id='blogCardDate' class="text-center d-flex rounded">
                            <div id="date">28</div>
                            <div id="mounthAndYear">March 2023</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex my-auto">
                            <div class="my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                    class="d-flex  mx-auto rounded-circle " alt="receiver profile" width="40">
                            </div>
                            <div class="px-2 my-auto">
                                <p class="my-auto fontw600 textcolor"> By Reynante Labares</p>
                            </div>
                        </div>
                        <h5 class="card-title darkcolor my-2 font22">Introducing the latest tech features for you</h5>
                        <p class="card-text textcolor">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...

                        <div class="d-flex my-auto justify-content-between">
                            <p class="textcolor my-auto">
                                <span class="iconify primarycolor" data-icon="fa6-regular:comments"
                                    style="margin-top: -3px !important;"></span>
                                2 Comments
                            </p>
                            <a href="#" class="textcolor my-auto">MORE <span class="iconify font30"
                                    data-icon="material-symbols:arrow-right-rounded"
                                    style="margin-top: -3px !important;"></span></a>

                        </div>

                    </div>

                    <hr class="textcolor my-2">


                    <div id='BlogActions' class="d-flex py-2  px-3 gap-2  justify-content-end">
                        <button class="primarybtn minibtn me-md-2 px-4" type="button">Edit</button>
                        <button class="btn btn-danger px-4" type="button">Delete</button>
                    </div>

                </div>
            </div>


            {{-- #################################################################### --}}
            {{-- #################### End OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}
















            {{-- #################################################################### --}}
            {{-- #################### Start OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}

            <div class="mx-auto my-2" style="width:380px">
                <div class="card h-100 Customcard">
                    <div id="CardimageAndDate">
                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                            class="card-img-top" alt="blog image">

                        <div id='blogCardDate' class="text-center d-flex rounded">
                            <div id="date">28</div>
                            <div id="mounthAndYear">March 2023</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex my-auto">
                            <div class="my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                    class="d-flex  mx-auto rounded-circle " alt="receiver profile" width="40">
                            </div>
                            <div class="px-2 my-auto">
                                <p class="my-auto fontw600 textcolor"> By Reynante Labares</p>
                            </div>
                        </div>
                        <h5 class="card-title darkcolor my-2 font22">Introducing the latest tech features for you</h5>
                        <p class="card-text textcolor">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...

                        <div class="d-flex my-auto justify-content-between">
                            <p class="textcolor my-auto">
                                <span class="iconify primarycolor" data-icon="fa6-regular:comments"
                                    style="margin-top: -3px !important;"></span>
                                2 Comments
                            </p>
                            <a href="#" class="textcolor my-auto">MORE <span class="iconify font30"
                                    data-icon="material-symbols:arrow-right-rounded"
                                    style="margin-top: -3px !important;"></span></a>

                        </div>

                    </div>

                    <hr class="textcolor my-2">


                    <div id='BlogActions' class="d-flex py-2  px-3 gap-2  justify-content-end">
                        <button class="primarybtn minibtn me-md-2 px-4" type="button">Edit</button>
                        <button class="btn btn-danger px-4" type="button">Delete</button>
                    </div>

                </div>
            </div>


            {{-- #################################################################### --}}
            {{-- #################### End OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}














            {{-- #################################################################### --}}
            {{-- #################### Start OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}

            <div class="mx-auto my-2" style="width:380px">
                <div class="card h-100 Customcard">
                    <div id="CardimageAndDate">
                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                            class="card-img-top" alt="blog image">

                        <div id='blogCardDate' class="text-center d-flex rounded">
                            <div id="date">28</div>
                            <div id="mounthAndYear">March 2023</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex my-auto">
                            <div class="my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                    class="d-flex  mx-auto rounded-circle " alt="receiver profile" width="40">
                            </div>
                            <div class="px-2 my-auto">
                                <p class="my-auto fontw600 textcolor"> By Reynante Labares</p>
                            </div>
                        </div>
                        <h5 class="card-title darkcolor my-2 font22">Introducing the latest tech features for you</h5>
                        <p class="card-text textcolor">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...

                        <div class="d-flex my-auto justify-content-between">
                            <p class="textcolor my-auto">
                                <span class="iconify primarycolor" data-icon="fa6-regular:comments"
                                    style="margin-top: -3px !important;"></span>
                                2 Comments
                            </p>
                            <a href="#" class="textcolor my-auto">MORE <span class="iconify font30"
                                    data-icon="material-symbols:arrow-right-rounded"
                                    style="margin-top: -3px !important;"></span></a>

                        </div>

                    </div>

                    <hr class="textcolor my-2">


                    <div id='BlogActions' class="d-flex py-2  px-3 gap-2  justify-content-end">
                        <button class="primarybtn minibtn me-md-2 px-4" type="button">Edit</button>
                        <button class="btn btn-danger px-4" type="button">Delete</button>
                    </div>

                </div>
            </div>


            {{-- #################################################################### --}}
            {{-- #################### End OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}













            {{-- #################################################################### --}}
            {{-- #################### Start OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}

            <div class="mx-auto my-2" style="width:380px">
                <div class="card h-100 Customcard">
                    <div id="CardimageAndDate">
                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                            class="card-img-top" alt="blog image">

                        <div id='blogCardDate' class="text-center d-flex rounded">
                            <div id="date">28</div>
                            <div id="mounthAndYear">March 2023</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex my-auto">
                            <div class="my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                    class="d-flex  mx-auto rounded-circle " alt="receiver profile" width="40">
                            </div>
                            <div class="px-2 my-auto">
                                <p class="my-auto fontw600 textcolor"> By Reynante Labares</p>
                            </div>
                        </div>
                        <h5 class="card-title darkcolor my-2 font22">Introducing the latest tech features for you</h5>
                        <p class="card-text textcolor">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...

                        <div class="d-flex my-auto justify-content-between">
                            <p class="textcolor my-auto">
                                <span class="iconify primarycolor" data-icon="fa6-regular:comments"
                                    style="margin-top: -3px !important;"></span>
                                2 Comments
                            </p>
                            <a href="#" class="textcolor my-auto">MORE <span class="iconify font30"
                                    data-icon="material-symbols:arrow-right-rounded"
                                    style="margin-top: -3px !important;"></span></a>

                        </div>

                    </div>

                    <hr class="textcolor my-2">


                    <div id='BlogActions' class="d-flex py-2  px-3 gap-2  justify-content-end">
                        <button class="primarybtn minibtn me-md-2 px-4" type="button">Edit</button>
                        <button class="btn btn-danger px-4" type="button">Delete</button>
                    </div>

                </div>
            </div>


            {{-- #################################################################### --}}
            {{-- #################### End OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}













            {{-- #################################################################### --}}
            {{-- #################### Start OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}

            <div class="mx-auto my-2" style="width:380px">
                <div class="card h-100 Customcard">
                    <div id="CardimageAndDate">
                        <img src="https://tplabs.co/disle/wp-content/uploads/2023/04/blog-02-370x320.webp"
                            class="card-img-top" alt="blog image">

                        <div id='blogCardDate' class="text-center d-flex rounded">
                            <div id="date">28</div>
                            <div id="mounthAndYear">March 2023</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex my-auto">
                            <div class="my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg"
                                    class="d-flex  mx-auto rounded-circle " alt="receiver profile" width="40">
                            </div>
                            <div class="px-2 my-auto">
                                <p class="my-auto fontw600 textcolor"> By Reynante Labares</p>
                            </div>
                        </div>
                        <h5 class="card-title darkcolor my-2 font22">Introducing the latest tech features for you</h5>
                        <p class="card-text textcolor">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...

                        <div class="d-flex my-auto justify-content-between">
                            <p class="textcolor my-auto">
                                <span class="iconify primarycolor" data-icon="fa6-regular:comments"
                                    style="margin-top: -3px !important;"></span>
                                2 Comments
                            </p>
                            <a href="#" class="textcolor my-auto">MORE <span class="iconify font30"
                                    data-icon="material-symbols:arrow-right-rounded"
                                    style="margin-top: -3px !important;"></span></a>

                        </div>

                    </div>

                    <hr class="textcolor my-2">


                    <div id='BlogActions' class="d-flex py-2  px-3 gap-2  justify-content-end">
                        <button class="primarybtn minibtn me-md-2 px-4" type="button">Edit</button>
                        <button class="btn btn-danger px-4" type="button">Delete</button>
                    </div>

                </div>
            </div>


            {{-- #################################################################### --}}
            {{-- #################### End OF Blog Cart Component ##################  --}}
            {{-- #################################################################### --}}


















        </div>




        {{-- START OF : Pagination --}}
        <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


            <div class="row  py-3">
                <div class="col-lg-6 my-auto">
                    <p class="textcolor font14 text-center text-lg-start my-2 my-lg-auto">Showing 21 to 30 of 50
                        entries
                    </p>
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
        {{-- END OF : Pagination --}}






    </section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF Blog Grid section =================  --}}
    {{-- ===================================================================== --}}







    @include('dashboard.inc.DashBoardFooter')
