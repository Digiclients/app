@include('dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Tous les options du site Web</h1>


    
    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

    input o search by name

    <form action="">
        <div class="row py-3">



            <div class="col-md-4 px-3">
                <label for="SelectStatus" class="textcolor font14 pb-2">Nom de l'option</label>
                <input type="text" class="form-control bgwhiteopacity py-2" placeholder="Nom de l'option">
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




    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

    
    
    
            {{-- start OptionItem --}}
            <div class="row OptionItem py-4" dataId="120">
    
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <p class="darkcolor font18 mt-2">OPTION NAME</p>
                </div>
                <div class="col-md-3 px-2  py-1 py-md-0">
                    <input type="text" id="TheOptionValue" class="form-control bgwhiteopacity py-2" placeholder="valeur">
                </div>
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <button class="primarybtn minibtn changeValueButton">enregistrer</button>
                </div>
        
            </div>
                {{-- End OptionItem --}}
               <hr class="graycolor my-0">
        
    
    
    
    
    
    
            {{-- start OptionItem --}}
            <div class="row OptionItem py-4" dataId="129">
    
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <p class="darkcolor font18 mt-2">OPTION NAME</p>
                </div>
                <div class="col-md-3 px-2  py-1 py-md-0">
                    <input type="number" id="TheOptionValue" class="form-control bgwhiteopacity py-2" placeholder="valeur">
                </div>
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <button class="primarybtn minibtn changeValueButton">enregistrer</button>
                </div>
        
            </div>
                {{-- End OptionItem --}}
               <hr class="graycolor my-0">
        
    
    
       
            {{-- start OptionItem --}}
            <div class="row OptionItem py-4" dataId="124">
    
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <p class="darkcolor font18 mt-2">OPTION NAME</p>
                </div>
                <div class="col-md-3 px-2  py-1 py-md-0">

                        <input class="form-check-input" type="checkbox" id="TheOptionValue" checked>
                        <label class="form-check-label" for="flexSwitchCheckChecked">Activer ou désactiver cette option</label>
                </div>
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <button class="primarybtn minibtn changeValueButton">enregistrer</button>
                </div>
        
            </div>
                {{-- End OptionItem --}}
               <hr class="graycolor my-0">
        
    
    
    
    
    
    
    
    
               <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
               <script>
                document.addEventListener('DOMContentLoaded', () => {
                    document.querySelectorAll('.OptionItem .changeValueButton').forEach(button => {
                        button.addEventListener('click', async () => {
                            const optionItem = button.closest('.OptionItem');
                            const dataId = optionItem.getAttribute('dataId');
                            const optionValueInput = optionItem.querySelector('#TheOptionValue');
                            const inputType = optionValueInput.type;
                            let optionValue;
        
                            if (inputType === 'checkbox') {
                                optionValue = optionValueInput.checked; // Get checked status for checkbox
                            } else {
                                optionValue = optionValueInput.value; // Get value for text input
                            }
        
                            if (inputType === 'checkbox' && !optionValueInput.checked && optionValueInput.value === '') {
                                console.log('TheOptionValue is required.');
                                return;
                            }
        
                            button.innerHTML = '<div class="loader"></div>'; // Show loader
                            button.disabled = true;
        
                            try {
                                const response = await axios.post('/options', {
                                    dataId: dataId,
                                    TheOptionValue: optionValue,
                                }, {
                                    headers: {
                                        'Content-Type': 'application/json',
                                        // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
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