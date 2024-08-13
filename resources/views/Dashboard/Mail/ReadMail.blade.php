@include('Dashboard.inc.DashBoardNavbars')







<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1  class="darkcolor font20 mx-2 " >Read Mail</h1>




    {{-- ===================================================================== --}}
    {{-- =========== START OF Read Mail section =================  --}}
    {{-- ===================================================================== --}}




   <section id="ReadMailSection" class="row pt-4">







        {{-- ===================================================================== --}}
        {{-- =================== START OF Mail Inbox sidebar =====================  --}}
        {{-- ===================================================================== --}}



        <div class="col-lg-3">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">





                <!-- Button trigger modal -->
                <button type="button" class="primarybtn mx-auto d-block text-center w-100" data-bs-toggle="modal"
                    data-bs-target="#MailboxComposeModal">
                    Compose
                </button>


                {{-- ===================================================================== --}}
                {{-- =========== START OF Mailbox COMPOSE MODAL =================  --}}
                {{-- ===================================================================== --}}


                <div class="modal fade" id="MailboxComposeModal" tabindex="-1" aria-labelledby="MailboxComposeModal"
                    aria-hidden="true">
                    <div class="modal-dialog   modal-lg">
                        <div class="modal-content bgbodycolor">
                            <div class="modal-header  border-0 bgprimary">
                                <h5 class="modal-title whitecolor h6">New Message</h5>
                                <a class="bgprimary" data-bs-dismiss="modal" aria-label="Close"><span
                                        class="iconify font24 whitecolor" data-icon="ic:round-close"></span></a>
                            </div>
                            <div class="modal-body p-4  BlocksBackground">

                                {{-- ------ START Message compose form  ------- --}}
                                <form>

                                    <div class="row mb-3">
                                        <label for="To" class="col-sm-1 darkcolor col-form-label">To</label>
                                        <div class="col-sm-11">
                                            <input type="text" id="To" class="form-control bgwhiteopacity"
                                                placeholder="Enter recipient's email address">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="Subject" class="col-sm-1 darkcolor col-form-label">Subject</label>
                                        <div class="col-sm-11">
                                            <input type="text" id="Subject" class="form-control bgwhiteopacity">
                                        </div>
                                    </div>

                                    <textarea rows="8" class="form-control bgwhiteopacity" placeholder="Write your message here..."></textarea>




                                </form>

                                {{-- ------ END Message compose form  ------- --}}


                            </div>
                            <div class="modal-footer px-4 row flex-nowrap BlocksBackground  border-0">

                                <div class="col-md-6 my-auto">

                                    <a href="#" class=""><span class="iconify textcolor font24 mx-2"     data-icon="ph:paperclip"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font24 mx-2"    data-icon="material-symbols:image-outline"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font24 mx-2"   data-icon="mdi:link-box-variant-outline"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                            data-icon="solar:smile-circle-linear"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>


                                </div>

                                <div class="col-md-6">
                                    <button type="button" class="primarybtn d-block ms-auto minibtn"> Send message
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



                {{-- ===================================================================== --}}
                {{-- =========== END OF Mailbox COMPOSE MODAL =================  --}}
                {{-- ===================================================================== --}}





                {{-- ===================================================================== --}}
                {{-- =========== START OF Mailbox Categories =================  --}}
                {{-- ===================================================================== --}}


                <div id="mailBoxCategories" class="py-2">




                    {{-- ######## START CATEGORIE ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor" data-icon="tabler:mail-down"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor  font14"> Inbox </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bgprimary font11"> 20 </span>
                        </div>

                    </a>
                    {{-- ######## END CATEGORIE ####### --}}





                    {{-- ######## START CATEGORIE ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor"
                                data-icon="material-symbols:star-outline-rounded"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor  font14"> Starred </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bg-success font11"> 10 </span>
                        </div>

                    </a>
                    {{-- ######## END CATEGORIE ####### --}}





                    {{-- ######## START CATEGORIE ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor"
                                data-icon="material-symbols:bookmark-added-outline-rounded"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor  font14"> Important </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bg-warning font11"> 10 </span>
                        </div>

                    </a>
                    {{-- ######## END CATEGORIE ####### --}}






                    {{-- ######## START CATEGORIE ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor"
                                data-icon="mdi:email-sent-outline"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor  font14"> Sent Mail </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bg-info font11"> 8 </span>
                        </div>

                    </a>
                    {{-- ######## END CATEGORIE ####### --}}




                    {{-- ######## START CATEGORIE ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor"
                                data-icon="material-symbols:edit-note-rounded"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor  font14"> Drafts </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bg-secondary font11"> 15 </span>
                        </div>

                    </a>
                    {{-- ######## END CATEGORIE ####### --}}





                    {{-- ######## START CATEGORIE ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor" data-icon="ri:spam-2-line"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor  font14"> Spam </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bg-danger font11"> 100 </span>
                        </div>

                    </a>
                    {{-- ######## END CATEGORIE ####### --}}



                    {{-- ######## START CATEGORIE ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor"
                                data-icon="mdi:trash-can-outline"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor font14"> Trash </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bg-primary font11"> 23 </span>
                        </div>

                    </a>
                    {{-- ######## END CATEGORIE ####### --}}


                    {{-- ######################################################### --}}
                    {{-- ##################### START TAGS #################### --}}
                    {{-- ######################################################### --}}

                    <p class="mt-4 mb-3 ps-2 font11 fontw500 text-uppercase">Tags</p>

                    {{-- ######## START TAG ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor" data-icon="ri:twitter-line"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor font14"> twitter </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bg-info font11"> 9 </span>
                        </div>

                    </a>
                    {{-- ######## END TAG ####### --}}



                    {{-- ######## START TAG ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor" data-icon="ri:github-line"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor font14"> github </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bg-warning font11"> 6 </span>
                        </div>

                    </a>
                    {{-- ######## END TAG ####### --}}




                    {{-- ######## START TAG ####### --}}
                    <a href="#" class="d-flex my-3">
                        <div class="d-flex  ms-2 me-3 my-auto">
                            <span class="iconify font22 mx-auto primarycolor" data-icon="mdi:google"></span>
                        </div>

                        <div class="my-auto">
                            <div class="darkcolor font14"> google </div>
                        </div>

                        <div class="my-auto ms-auto">
                            <span class="badge bg-danger font11"> 19 </span>
                        </div>

                    </a>
                    {{-- ######## END TAG ####### --}}



                    {{-- ######################################################### --}}
                    {{-- ##################### END TAGS #################### --}}
                    {{-- ######################################################### --}}


                </div>


                {{-- ===================================================================== --}}
                {{-- =========== END OF Mailbox Categories =================  --}}
                {{-- ===================================================================== --}}







            </div>



            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">



                <h5 class="font16 mb-4 darkcolor">Labels</h5>











                {{-- ######## START Label ####### --}}
                <a href="#" class="d-flex my-3">
                    <div class="d-flex ms-2 me-3 my-auto">
                        <span class="iconify font22 mx-auto graycolor" data-icon="ph:briefcase-bold"></span>
                    </div>

                    <div class="my-auto">
                        <div class="graycolor  font14"> Works </div>
                    </div>



                </a>
                {{-- ######## END Label ####### --}}





                {{-- ######## START Label ####### --}}
                <a href="#" class="d-flex my-3">
                    <div class="d-flex ms-2 me-3 my-auto">
                        <span class="iconify font22 mx-auto graycolor"
                            data-icon="material-symbols:folder-open-outline-sharp"></span>
                    </div>

                    <div class="my-auto">
                        <div class="graycolor  font14"> Job </div>
                    </div>



                </a>
                {{-- ######## END Label ####### --}}




                {{-- ######## START Label ####### --}}
                <a href="#" class="d-flex my-3">
                    <div class="d-flex ms-2 me-3 my-auto">
                        <span class="iconify font22 mx-auto graycolor" data-icon="uil:users-alt"></span>
                    </div>

                    <div class="my-auto">
                        <div class="graycolor font14"> Clients </div>
                    </div>



                </a>
                {{-- ######## END Label ####### --}}




                {{-- ######## START Label ####### --}}
                <a href="#" class="d-flex my-3">
                    <div class="d-flex ms-2 me-3 my-auto">
                        <span class="iconify font22 mx-auto graycolor" data-icon="fluent:news-16-regular"></span>
                    </div>

                    <div class="my-auto">
                        <div class="graycolor  font14"> News </div>
                    </div>



                </a>
                {{-- ######## END Label ####### --}}








            </div>

        </div>



        {{-- ===================================================================== --}}
        {{-- ===================== END OF Mail Inbox sidebar =====================  --}}
        {{-- ===================================================================== --}}




        {{-- ===================================================================== --}}
        {{-- ======================= START OF Read Mail   =======================  --}}
        {{-- ===================================================================== --}}



        <div class="col-lg-9">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


                <h4 class="font18 mb-4 darkcolor">Mail Read</h4>
                <hr class="textcolor">



                <div class="row">

                    <div class="col-md-6 d-flex">
                        <div class="my-auto">
                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/2.jpg" class="mx-auto rounded-circle d-flex" alt="receiver profile" width="72">
                        </div>

                        <div class="my-auto mx-3">
                            <h4 class="my-0 fontw500 font16 darkcolor">Alica Nestle <span>( alicnestle@gmail.com )</span> </h4>
                            <p class="font12 graycolor  my-0"> to Adam Cotter ( adamcotter@gmail.com ) </p>
                        </div>

                    </div>



                    <div class="col-md-6 EmailActions my-auto d-flex justify-content-end">


                      <span class="my-auto font13 graycolor mx-2"> Sep 13 , 2019 12:45 pm</span>

                      <a href="#" class=""><span class="iconify textcolor font24 mx-2"     data-icon="material-symbols:star-outline-rounded"></span></a>
                      <a href="#" class=""><span class="iconify textcolor font24 mx-2"    data-icon="ic:baseline-reply"></span></a>

                      <div class="dropdown">


                        <a href="#" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown" aria-expanded="false" class=""><span class="iconify textcolor font24 mx-2"   data-icon="material-symbols:more-horiz"></span></a>


                        <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item graycolor" href="#">Reply</a></li>
                          <li><a class="dropdown-item graycolor" href="#">Report Spam</a></li>
                          <li><a class="dropdown-item graycolor" href="#">Delete</a></li>
                          <li><a class="dropdown-item graycolor" href="#">Show Original</a></li>
                          <li><a class="dropdown-item graycolor" href="#">Print</a></li>
                          <li><a class="dropdown-item graycolor" href="#">Filter</a></li>

                        </ul>
                      </div>

                    </div>



                </div>

                    {{-- ######################################################### --}}
                    {{-- ##################### START Email Body ################## --}}
                    {{-- ######################################################### --}}


                <div id="Emailbody" class="pt-4 pb-1">


                    <div class="EmailContent">
<strong class="darkcolor font15 d-block pb-2">Hi Sir/Madam</strong>
<p class="graycolor">

    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
<br>
<br>
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
    <br>
    <br>
    Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?
    <br>
    <br>
    Thanking you Sir/Madam

</p>
                    </div>

                    <div class="EmailAttachments py-1">

                        <span class="textcolor"> 3 Attachments </span> <a href="#" class="graycolor">View All Images</a>

<div class="">
    <img class="rounded my-1" src="https://angular.spruko.com/adminor/preview/assets/img/photos/1.jpg" width="150" alt="attachment">
    <img class="rounded my-1" src="https://angular.spruko.com/adminor/preview/assets/img/photos/2.jpg" width="150" alt="attachment">
    <img class="rounded my-1" src="https://angular.spruko.com/adminor/preview/assets/img/photos/3.jpg"  width="150" alt="attachment">
</div>

                    </div>
                </div>


                    {{-- ######################################################### --}}
                    {{-- ##################### END Email Body #################### --}}
                    {{-- ######################################################### --}}
                    {{-- <!-- ##############################################################-->
                    <!-- ######################  END Email Body ########################-->
                    <!-- ##############################################################--> --}}

<hr class="textcolor">

                    <div class="col-md-6 py-2 d-flex justify-content-start">
                        <button type="button" class="primarybtn mx-1 d-flex minibtn"> <span class="iconify me-2 font20"    data-icon="ic:baseline-reply"></span> <span class="my-auto whitecolor">Reply</span>  </button>
                        <button type="button" class="secbtn mx-1 d-flex  minibtn"> <span class="iconify me-2 font20"    data-icon="ic:baseline-reply"  data-flip="horizontal"></span> <span class="my-auto whitecolor">Forward</span>  </button>
                    </div>




            </div>
        </div>


        {{-- ===================================================================== --}}
        {{-- ===================== END OF Read Mail   =====================  --}}
        {{-- ===================================================================== --}}













</section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF Read Mail section =================  --}}
    {{-- ===================================================================== --}}







@include('dashboard.inc.DashBoardFooter')





