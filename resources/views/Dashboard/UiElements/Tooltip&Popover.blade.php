@include('dashboard.inc.DashBoardNavbars')





<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">


    <h1  class="darkcolor font20 mx-2 " >Tooltip & Popover</h1>





    <section class="row pt-4">



{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
    <div class="my-2  col-md-6 mx-auto">  
        
        <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">  
<div class="d-flex justify-content-between align-items-center">

            <h3 class="darkcolor m-0 font18 text-capitalize">Tooltip Examples </h3>
            <div>
            <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
        </div>
        </div>

<hr class="graycolor ">
            <div class="DemoExamples my-3">
          
          
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                    Tooltip on top
                  </button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                    Tooltip on right
                  </button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    Tooltip on bottom
                  </button>
                  <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                    Tooltip on left
                  </button>
                  
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Tooltip Disabled elements </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">
      
      
            <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Disabled tooltip">
                <button class="btn btn-primary" type="button" disabled>Disabled button</button>
              </span>

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

        <h3 class="darkcolor m-0 font18 text-capitalize">Popover Example </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">
      
      
            <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Popover Four directions </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">
      
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                Popover on top
              </button>
              <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                Popover on right
              </button>
              <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                Popover on bottom
              </button>
              <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
                Popover on left
              </button>

    </div>
        

    </div>
</div>

{{-- ============================================================ --}}
{{-- End of column --}}
{{-- ============================================================ --}}









        




















</section>




</section>





<script src="{{ asset('assets/DashBoard/js/CopyCode.js') }}"></script>






@include('dashboard.inc.DashBoardFooter')


{{-- ============================================================ --}}
{{-- Start Enable tooltips everywhere --}}
{{-- ============================================================ --}}

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    
    </script>
    
    {{-- ============================================================ --}}
    {{-- END Enable tooltips everywhere --}}
    {{-- ============================================================ --}}
    
    
{{-- ============================================================ --}}
{{-- Start Enable popovers  everywhere --}}
{{-- ============================================================ --}}

<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

    </script>
    
    {{-- ============================================================ --}}
    {{-- END Enable popovers  everywhere --}}
    {{-- ============================================================ --}}
    
    
