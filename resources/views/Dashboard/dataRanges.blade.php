@include('dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Gestion des valeurs minimales et maximales des données</h1>


    
    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

  
    <form action="">
        <div class="row py-3">

            <div class="col-md-4  px-3">
                <label for="SelectRole" class="textcolor font14 pb-2">Choisir une marque *</label>
                <select class="form-select customSelect py-2" id="SelectRole">
                    <option hidden="" disabled="" selected="" value=""></option>
                    <option value="admin">Audi</option>
                    <option value="manager">Renaut</option>
                    <option value="particulier">Clio</option>
                    <option value="professionnel">Toyota</option>
                </select>
            </div>


            <div class="col-md-4 px-3">
                <label for="SelectStatus" class="textcolor font14 pb-2">model</label>
                <input type="text" class="form-control bgwhiteopacity py-2" placeholder="model">
            </div>


            <div class="col-md-4 px-3">
                <label for="Recherche" class="textcolor font14 pb-2">Recherche :</label>

                <button class="primarybtn minibtn d-block w-100 mx-auto text-center">
                    Recherche
                </button>
            </div>


        </div>

    </form>

    </div>

    <br>


    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

    
        {{-- start RangeItem --}}
       <div class="row RangeItem py-4" dataId="122">

        <div class="col-md-2 px-2  py-1 py-md-0">
            <p class="darkcolor font18 mt-2">Renaut - 19</p>
        </div>
        <div class="col-md-2 px-2  py-1 py-md-0">
            <input type="number" id="min" class="form-control bgwhiteopacity py-2" placeholder="min">
        </div>
        <div class="col-md-2 px-2  py-1 py-md-0">
            <input type="number" id="max" class="form-control bgwhiteopacity py-2" placeholder="max">
        </div>
        <div class="col-md-2 px-2  py-1 py-md-0">
            <button class="primarybtn minibtn changeRangeButton">enregistrer</button>
        </div>

       </div>
        {{-- End RangeItem --}}
       <hr class="graycolor my-0">


        {{-- start RangeItem --}}
        <div class="row RangeItem py-4" dataId="123">

            <div class="col-md-2 px-2  py-1 py-md-0">
                <p class="darkcolor font18 mt-2">Renaut - 19</p>
            </div>
            <div class="col-md-2 px-2  py-1 py-md-0">
                <input type="number" id="min" class="form-control bgwhiteopacity py-2" placeholder="min">
            </div>
            <div class="col-md-2 px-2  py-1 py-md-0">
                <input type="number" id="max" class="form-control bgwhiteopacity py-2" placeholder="max">
            </div>
            <div class="col-md-2 px-2  py-1 py-md-0">
                <button class="primarybtn minibtn changeRangeButton">enregistrer</button>
            </div>
    
           </div>
            {{-- End RangeItem --}}
           <hr class="graycolor my-0">
    



        {{-- start RangeItem --}}

        {{-- start RangeItem --}}
        <div class="row RangeItem py-4" dataId="124">

            <div class="col-md-2 px-2  py-1 py-md-0">
                <p class="darkcolor font18 mt-2">Renaut - 19</p>
            </div>
            <div class="col-md-2 px-2  py-1 py-md-0">
                <input type="number" id="min" class="form-control bgwhiteopacity py-2" placeholder="min">
            </div>
            <div class="col-md-2 px-2  py-1 py-md-0">
                <input type="number" id="max" class="form-control bgwhiteopacity py-2" placeholder="max">
            </div>
            <div class="col-md-2 px-2  py-1 py-md-0">
                <button class="primarybtn minibtn changeRangeButton">enregistrer</button>
            </div>
    
        </div>
            {{-- End RangeItem --}}
           <hr class="graycolor my-0">
    















           <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
           <script>
               document.addEventListener('DOMContentLoaded', () => {
                   document.querySelectorAll('.RangeItem .changeRangeButton').forEach(button => {
                       button.addEventListener('click', async () => {
                           const rangeItem = button.closest('.RangeItem');
                           const dataId = rangeItem.getAttribute('dataId');
                           const minInput = rangeItem.querySelector('#min');
                           const maxInput = rangeItem.querySelector('#max');
                           const minValue = minInput.value;
                           const maxValue = maxInput.value;
       
                           if (!minValue || !maxValue) {
                               console.log('Both min and max values are required.');
                               return;
                           }
       
                           button.innerHTML = '...'; // Show loader
                           button.disabled = true;
       
                           try {
                               const response = await axios.post('/dataRanges', {
                                   dataId: dataId,
                                   min: minValue,
                                   max: maxValue
                               }, {
                                   headers: {
                                       'Content-Type': 'application/json',
                                     //  'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                   },
                                   withCredentials: true
                               });
       
                               if (response.data.success) {
                                   button.innerHTML = 'Succès'; // Success message in French
                               } else {
                                   button.innerHTML = 'Erreur'; // Error message in French
                               }
                           } catch (error) {
                               console.error('Error sending request:', error);
                               button.innerHTML = 'Erreur'; // Error message in French
                           } finally {
                               button.disabled = false;
                           }
                       });
                   });
               });
           </script>

















           {{-- START pagination  --}}


<nav class="py-2">
    <ul class="pagination CustomPagination   my-2 my-lg-auto justify-content-center justify-content-lg-end">
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

{{-- END pagination  --}}



            
        </div>



</section>











@include('dashboard.inc.DashBoardFooter')