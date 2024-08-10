@include('dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Tous les options du site Web</h1>



    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">

        input o search by name

        <form action="">
            <div class="row py-3">



                <div class="col-md-6 px-3">
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

        @forelse ($options as $option)
            <div class="row OptionItem py-4" dataId="{{ $option->id }}">
                <div class="col-md-6  px-2  py-1 py-md-0">
                    <p class="darkcolor font18 mt-2">{{ $option->option }}</p>
                </div>
                <div class="col-md-3 px-2  py-1 py-md-0">

                    {{-- Text or Number Input --}}
                    @if ($option->type === 'text' || $option->type === 'number')
                        <input type="{{ $option->type }}"
                            class="form-control bgwhiteopacity py-2 text-dark TheOptionValue" placeholder="valeur"
                            value="{{ $option->value }}" @if ($option->type === 'number') step="any" @endif>
                    @endif

                    {{-- Select Input for Boolean Type --}}
                    @if ($option->type === 'boolean')
                        <select class="form-control bgwhiteopacity py-2 text-dark TheOptionValue">
                            <option value="true" {{ $option->value == 'true' ? 'selected' : '' }}>True</option>
                            <option value="false" {{ $option->value == 'false' ? 'selected' : '' }}>False</option>
                        </select>
                    @endif

                </div>
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <button class="primarybtn minibtn changeValueButton">enregistrer</button>
                </div>
            </div>
            <hr class="graycolor my-0">
        @empty
            <div class="row OptionItem py-4">
                <p>empty</p>
            </div>
        @endforelse



        {{-- START pagination  --}}
        <nav class="py-2">
            <ul class="pagination CustomPagination   my-2 my-lg-auto justify-content-center justify-content-lg-end">
                {{ $options->appends(request()->query())->onEachSide(2)->links() }}
            </ul>
        </nav>

        {{-- END pagination  --}}








    </div>




</section>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.OptionItem .changeValueButton').forEach(button => {
            button.addEventListener('click', async () => {
                const optionItem = button.closest('.OptionItem');
                const dataId = optionItem.getAttribute('dataId');
                const optionValueInput = optionItem.querySelector('.TheOptionValue');
                // Determine whether the input is a select or a regular input
                let optionValue;
                if (optionValueInput.tagName.toLowerCase() === 'select') {
                    optionValue = optionValueInput
                        .value; // Get the selected value for the select input
                } else {
                    optionValue = optionValueInput
                        .value; // Get the value for text or number inputs
                }

                button.innerHTML = '<div class="loader"></div>'; // Show loader
                button.disabled = true;

                try {
                    console.log(dataId, optionValue);
                    const response = await axios.post('/admin/options', {
                        dataId: dataId,
                        optionValue: optionValue,
                    }, {
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        withCredentials: true
                    });
                    console.log(response)
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

@include('dashboard.inc.DashBoardFooter')
