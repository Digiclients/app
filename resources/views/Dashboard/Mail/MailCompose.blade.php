@include('dashboard.inc.DashBoardNavbars')







<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">
 


    <h1  class="darkcolor font20 mx-2 " >Mail Compose</h1>




    {{-- ===================================================================== --}}
    {{-- =========== START OF Mail Compose section =================  --}}
    {{-- ===================================================================== --}}
    



   <section id="MailComposeSection" class="row pt-4">





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

                                    <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                            data-icon="ph:paperclip"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                            data-icon="material-symbols:image-outline"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                            data-icon="mdi:link-box-variant-outline"></span></a>
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
        {{-- ======================= START OF Mail Compose kkk  =======================  --}}
        {{-- ===================================================================== --}}



        <div class="col-lg-9">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


                <h4 class="font18 mb-4 darkcolor">Compose new message</h4>


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
                                <input type="text" id="Subject"  placeholder="Enter the email Subject address" class="form-control bgwhiteopacity">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="CC" class="col-sm-1 darkcolor col-form-label">CC</label>
                            <div class="col-sm-11">
                                <input type="text" id="CC" placeholder="CC" class="form-control bgwhiteopacity">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="BC" class="col-sm-1 darkcolor col-form-label">BC</label>
                            <div class="col-sm-11">
                                <input type="text" id="BC" placeholder="BC" class="form-control bgwhiteopacity">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="Message" class="col-sm-1 darkcolor col-form-label">Message</label>
                            <div class="col-sm-11">
                                <textarea rows="8" id="Message" class="form-control bgwhiteopacity" placeholder="Write your message here..."></textarea>
                            </div>
                        </div>
                        





                        <div class=" p-4 row flex-nowrap BlocksBackground rounded  border-0">

                            <div class="col-md-6 my-auto">
        
                                <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                        data-icon="ph:paperclip"></span></a>
                                <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                        data-icon="material-symbols:image-outline"></span></a>
                                <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                        data-icon="mdi:link-box-variant-outline"></span></a>
                                <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                        data-icon="solar:smile-circle-linear"></span></a>
                                <a href="#" class=""><span class="iconify textcolor font24 mx-2"
                                        data-icon="mdi:trash-can-outline"></span></a>
        
        
                            </div>
        
                            <div class="col-md-6 d-flex justify-content-end">
                                <button type="button" class="secbtn mx-2 minibtn"> Discard </button>
                                <button type="button" class="primarybtn mx-2 minibtn"> Send message </button>
                            </div>
        
                        </div>




                    </form>

                    {{-- ------ END Message compose form  ------- --}}


           




            </div>
        </div>


        {{-- ===================================================================== --}}
        {{-- ===================== END OF Mail Compose  =====================  --}}
        {{-- ===================================================================== --}}











</section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF Mail Compose section =================  --}}
    {{-- ===================================================================== --}}
    






@include('dashboard.inc.DashBoardFooter')





