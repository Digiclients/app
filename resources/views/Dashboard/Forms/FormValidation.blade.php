@include('Dashboard.inc.DashBoardNavbars')





<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">


    <h1  class="darkcolor font20 mx-2 " > Form Validation</h1>



    <section class="row pt-4">


























{{-- ============================================================ --}}
{{-- Start of column --}}
{{-- ============================================================ --}}
<div class="my-2  col-md-6 mx-auto">

    <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2">
<div class="d-flex justify-content-between align-items-center">

        <h3 class="darkcolor m-0 font18 text-capitalize"> Custom styles  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustomUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">City</label>
                  <input type="text" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">State</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom05" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="validationCustom05" required>
                  <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form>




              <script>
                // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
              </script>

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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Browser defaults  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <form class="row g-3">
                <div class="col-md-4">
                  <label for="validationDefault01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefault02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                </div>
                <div class="col-md-4">
                  <label for="validationDefaultUsername" class="form-label">Username</label>
                  <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationDefault03" class="form-label">City</label>
                  <input type="text" class="form-control" id="validationDefault03" required>
                </div>
                <div class="col-md-3">
                  <label for="validationDefault04" class="form-label">State</label>
                  <select class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label for="validationDefault05" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="validationDefault05" required>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                      Agree to terms and conditions
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Server side  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">

            <form class="row g-3">
                <div class="col-md-4">
                  <label for="validationServer01" class="form-label">First name</label>
                  <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationServer02" class="form-label">Last name</label>
                  <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationServerUsername" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                    <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      Please choose a username.
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationServer03" class="form-label">City</label>
                  <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                  <div id="validationServer03Feedback" class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationServer04" class="form-label">State</label>
                  <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                  <div id="validationServer04Feedback" class="invalid-feedback">
                    Please select a valid state.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationServer05" class="form-label">Zip</label>
                  <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                  <div id="validationServer05Feedback" class="invalid-feedback">
                    Please provide a valid zip.
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                    <label class="form-check-label" for="invalidCheck3">
                      Agree to terms and conditions
                    </label>
                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
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

        <h3 class="darkcolor m-0 font18 text-capitalize"> Supported elements  </h3>
        <div>
        <button class="primarybtn minibtn  py-1  mx-auto copycode"> copy <span class="iconify  font20" data-icon="material-symbols:content-copy-outline"></span> </button>
    </div>
    </div>

<hr class="graycolor ">
        <div class="DemoExamples my-3">


            <form class="was-validated">
                <div class="mb-3">
                  <label for="validationTextarea" class="form-label">Textarea</label>
                  <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                  <div class="invalid-feedback">
                    Please enter a message in the textarea.
                  </div>
                </div>

                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                  <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                  <div class="invalid-feedback">Example invalid feedback text</div>
                </div>

                <div class="form-check">
                  <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                  <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                </div>
                <div class="form-check mb-3">
                  <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                  <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                  <div class="invalid-feedback">More example invalid feedback text</div>
                </div>

                <div class="mb-3">
                  <select class="form-select" required aria-label="select example">
                    <option value="">Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <div class="invalid-feedback">Example invalid select feedback</div>
                </div>

                <div class="mb-3">
                  <input type="file" class="form-control" aria-label="file example" required>
                  <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>

                <div class="mb-3">
                  <button class="btn btn-primary" type="submit" disabled>Submit form</button>
                </div>
              </form>




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
