@include('Dashboard.inc.DashBoardNavbars')




<style>
    /*
.EmailMessage {
    transition: all 0.5s ;

}
.EmailMessage:hover {
box-shadow: var(--dark-box-shadow) !important;
transition: all 0.5s ;

} */
    .EmailMessage .EmailMessageActions {
        display: none !important;
        transition: all 0.5s;

    }

    .EmailMessage:hover .EmailMessageDate {
        display: none !important;

    }

    .EmailMessage .EmailMessageDate {
        display: block !important;

    }

    .EmailMessage:hover .EmailMessageActions {
        display: block !important;
        transition: all 0.5s;
    }
</style>




<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Mail Inbox</h1>




    {{-- ===================================================================== --}}
    {{-- =========== START OF Mailbox section =================  --}}
    {{-- ===================================================================== --}}




    <section id="MailInboxSection" class="row pt-4">



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
        {{-- ======================= START OF Mail Inbox  =======================  --}}
        {{-- ===================================================================== --}}



        <div class="col-lg-9">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


                <div class="row">

                    <div class="col-md-6">
                        <h2 class="darkcolor fontw500 mb-1">Inbox</h2>
                        <p class="font12 my-0">You have 2 unread messages</p>

                    </div>
                    <div class="col-md-6 my-auto">

                        <div class="d-flex justify-content-end gap-2 ">

                            <p class="mt-1 graycolor my-auto"> 1-50 of 1200 </p>


                            <a class="bgtransparent my-auto py-0 px-1" type="button"><span
                                    class="iconify textcolor font18"
                                    data-icon="material-symbols:arrow-back-ios-new"></span></a>
                            <a class="bgtransparent my-auto  py-0 px-1" type="button"><span
                                    class="iconify graycolor font18"
                                    data-icon="material-symbols:arrow-forward-ios"></span></a>
                        </div>

                    </div>

                </div>






                <div class="row px-3 pt-4">






                    {{--  START check all emails --}}
                    <div class="col-md-6">

                        <div class="accordion-body my-2 d-flex justify-content-start">
                            <input class="form-check-input me-2 my-auto" type="checkbox" id="AllowComments">
                            <label class="form-check-label font14 graycolor my-auto" for="AllowComments">
                                Select All
                            </label>

                        </div>


                    </div>
                    {{--  END check all emails --}}

                    {{--  START email ICONS ACTIONS   --}}

                    <div class="col-md-6 d-flex justify-content-end my-auto">

                        <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                data-icon="material-symbols:refresh-rounded"></span></a>
                        <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                data-icon="mdi:archive-outline"></span></a>
                        <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                data-icon="gg:danger"></span></a>
                        <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                data-icon="mdi:trash-can-outline"></span></a>
                        <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                data-icon="material-symbols:folder-open-outline-sharp"></span></a>
                        <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                data-icon="mdi:tag-multiple-outline"></span></a>


                    </div>

                    {{--  END email ICONS ACTIONS   --}}



                    {{-- ========================================================================== --}}
                    {{-- ====================== START OF Email MESSAGES  ==========================  --}}
                    {{-- ========================================================================== --}}


                    <div id="EmailMESSAGES" class="col-md-12 pt-3">



                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage  flex-wrap flex-md-nowrap d-flex py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto textcolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}














                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage  d-flex  flex-wrap flex-md-nowrap py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto textcolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}










                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage d-flex flex-wrap flex-md-nowrap py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto textcolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}










                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage d-flex flex-wrap flex-md-nowrap  py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto textcolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}








                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage d-flex flex-wrap flex-md-nowrap py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto textcolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}



































                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage flex-wrap flex-md-nowrap d-flex py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto textcolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}











                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage  flex-wrap flex-md-nowrap  d-flex py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto textcolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}











                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage d-flex  flex-wrap flex-md-nowrap py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto seccolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}











                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage d-flex  flex-wrap flex-md-nowrap py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto textcolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}











                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage d-flex flex-wrap flex-md-nowrap py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto textcolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}











                        {{-- ######################################################### --}}
                        {{-- ##################### START OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}
                        <div
                            class="EmailMessage d-flex flex-wrap flex-md-nowrap py-2 border border-light border-top-0 border-start-0 border-end-0 ">
                            <div class="d-flex   me-4 my-auto">
                                <input class="form-check-input mx-auto" type="checkbox">

                            </div>

                            <div class="d-flex  me-4 my-auto">
                                <span class="iconify font24 mx-auto seccolor"
                                    data-icon="material-symbols:star-rounded"></span>
                            </div>


                            <div class="d-flex  me-4 my-auto">
                                <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                    class="rounded-circle" alt="avatar" width="38">

                            </div>

                            <a href='#' class="my-auto">
                                <div class="darkcolor my-0 fontw600 font14"> Carla Guden </div>
                                <div class="my-0">
                                    <strong class="text-capitalize graycolor font13"> Here's What You Missed This Week
                                    </strong> &nbsp;
                                    <span class="textcolor font11"> viva mus elemen tum semper nisi enean vulputat
                                        enean </span>

                                </div>
                            </a>

                            <div class="ms-auto d-flex">
                                <div class="EmailMessageActions my-auto">
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="ic:outline-mark-email-read"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="gg:danger"></span></a>
                                    <a href="#" class=""><span class="iconify textcolor font22 mx-2"
                                            data-icon="mdi:trash-can-outline"></span></a>

                                </div>


                                <p class="EmailMessageDate my-auto textcolor my-0 pe-2 font13">4:00 pm</p>
                            </div>

                        </div>


                        {{-- ######################################################### --}}
                        {{-- ##################### END OF EMAIL MESSAGE #################### --}}
                        {{-- ######################################################### --}}















                    </div>




                    {{-- ========================================================================== --}}
                    {{-- ====================== END OF Email MESSAGES  ==========================  --}}
                    {{-- ========================================================================== --}}






                </div>



            </div>
        </div>



        {{-- ===================================================================== --}}
        {{-- ====================== END OF Mail Inbox  ==========================  --}}
        {{-- ===================================================================== --}}







    </section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF Mailbox section =================  --}}
    {{-- ===================================================================== --}}







    @include('Dashboard.inc.DashBoardFooter')
