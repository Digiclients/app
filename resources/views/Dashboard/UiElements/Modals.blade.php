@include('Dashboard.inc.DashBoardNavbars')





<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">


    <h1  class="darkcolor font20 mx-2 " >Modals</h1>



    <section class="row pt-4">

{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
    <div class="my-2  col-md-6 mx-auto">

        <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

            <h3 class="darkcolor m-0 font18 text-capitalize"> Live demo </h3>
            <div>
            <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
        </div>
        </div>

<hr class="graycolor ">
            <div class="DemoExamples my-3">



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



        </div>


        </div>
    </div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}
















{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
    <div class="my-2  col-md-6 mx-auto">

        <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

            <h3 class="darkcolor m-0 font18 text-capitalize"> Static backdrop </h3>
            <div>
            <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
        </div>
        </div>

<hr class="graycolor ">
            <div class="DemoExamples my-3">

           <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>


        </div>


        </div>
    </div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}















{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Scrolling long content </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
                Launch demo modal
              </button>

              <div class="modal fade" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLongTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="min-height: 1500px">
                      <p>This is some placeholder content to show the scrolling behavior for modals. Instead of repeating the text the modal, we use an inline style set a minimum height, thereby extending the length of the overall modal and demonstrating the overflow scrolling. When content becomes longer than the height of the viewport, scrolling will move the modal as needed.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>



              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
                Launch demo modal
              </button>

              <div class="modal fade" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>This is some placeholder content to show the scrolling behavior for modals. We use repeated line breaks to demonstrate how content can exceed minimum inner height, thereby showing inner scrolling. When content becomes longer than the prefedined max-height of modal, content will be cropped and scrollable within the modal.</p>
                      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                      <p>This content should appear at the bottom after you scroll.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}











{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Vertically centered </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                Vertically centered modal
              </button>
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>This is a vertically centered modal.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>


              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
                Vertically centered scrollable modal
              </button>
              <div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>This is some placeholder content to show a vertically centered modal. We've added some extra copy here to show how vertically centering the modal works when combined with scrollable modals. We also use some repeated line breaks to quickly extend the height of the content, thereby triggering the scrolling. When content becomes longer than the prefedined max-height of modal, content will be cropped and scrollable within the modal.</p>
                      <br><br><br><br><br><br><br><br><br><br>
                      <p>Just like that.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>







    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}



















{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Toggle between modals </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">

            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Show a second modal and hide this one with the button below.
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Hide this modal and show the first with the button below.
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
                    </div>
                  </div>
                </div>
              </div>
              <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>


    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}











{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Optional sizes </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Extra large modal</button>

<div class="modal fade" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalXlLabel">Extra large modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
    </div>
  </div>
</div>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLg">Large modal</button>

<div class="modal fade" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h4" id="exampleModalLgLabel">Large modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
      </div>
    </div>
  </div>


  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalSm">Small modal</button>


  <div class="modal fade" id="exampleModalSm" tabindex="-1" aria-labelledby="exampleModalSmLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h4" id="exampleModalSmLabel">Small modal</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
      </div>
    </div>
  </div>





    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}












{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Fullscreen Modal </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">
                <button type="button" class="btn btn-primary  my-1" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Full screen</button>
                <div class="modal fade" id="exampleModalFullscreen" tabindex="-1" aria-labelledby="exampleModalFullscreenLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Full screen modal</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary  my-1" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenSm">Full screen below sm</button>
                <div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1" aria-labelledby="exampleModalFullscreenSmLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-sm-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenSmLabel">Full screen below sm</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary  my-1" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>


                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenMd">Full screen below md</button>

                <div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1" aria-labelledby="exampleModalFullscreenMdLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-md-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenMdLabel">Full screen below md</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary  my-1" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>



                <button type="button" class="btn btn-primary  my-1" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenLg">Full screen below lg</button>

                <div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1" aria-labelledby="exampleModalFullscreenLgLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-lg-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenLgLabel">Full screen below lg</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>




                <button type="button" class="btn btn-primary my-1" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXl">Full screen below xl</button>

                <div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1" aria-labelledby="exampleModalFullscreenXlLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen-xl-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title h4" id="exampleModalFullscreenXlLabel">Full screen below xl</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          ...
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>



                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreenXxl">Full screen below xxl</button>

<div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1" aria-labelledby="exampleModalFullscreenXxlLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-xxl-down">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalFullscreenXxlLabel">Full screen below xxl</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



    </div>


    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}










</section>




</section>







<script src="{{ asset('assets/DashBoard/js/CopyCode.js') }}"></script>






@include('Dashboard.inc.DashBoardFooter')
