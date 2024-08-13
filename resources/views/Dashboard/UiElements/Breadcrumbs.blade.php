@include('Dashboard.inc.DashBoardNavbars')





<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">


    <h1  class="darkcolor font20 mx-2 " >Breadcrumbs</h1>



    <section class="row pt-4">

{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
    <div class="my-2  col-md-6 mx-auto">

        <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

            <h3 class="darkcolor m-0 font18 text-capitalize"> Example </h3>
            <div>
            <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
        </div>
        </div>

<hr class="graycolor ">
            <div class="DemoExamples my-3">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                  </nav>

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                  </nav>

                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Library</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                  </nav>
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Dividers </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
              </nav>
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
