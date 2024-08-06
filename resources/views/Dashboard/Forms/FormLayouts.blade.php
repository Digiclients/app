@include('dashboard.inc.DashBoardNavbars')





<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">


    <h1  class="darkcolor font20 mx-2 " > Form Layouts </h1>



    <section class="row pt-4">

        


        


        






        
{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">  
        
    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">  
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Form grid  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">
   
  
            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Grid Example  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">
   
  
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Address 2</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">State</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
              </form>


              
        
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Horizontal form  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">
   
  
            <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        First radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                      <label class="form-check-label" for="gridRadios2">
                        Second radio
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="row mb-3">
                  <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Example checkbox
                      </label>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
              </form>


              
        
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Column sizing  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">
   
  
            <div class="row g-3">
                <div class="col-sm-7">
                  <input type="text" class="form-control" placeholder="City" aria-label="City">
                </div>
                <div class="col-sm">
                  <input type="text" class="form-control" placeholder="State" aria-label="State">
                </div>
                <div class="col-sm">
                  <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
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






@include('dashboard.inc.DashBoardFooter')