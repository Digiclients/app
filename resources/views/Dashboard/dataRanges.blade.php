@include('dashboard.inc.DashBoardNavbars')





<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">



    <h1 class="darkcolor font20 mx-2 ">Gestion des valeurs minimales et maximales des données</h1>



    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


        <form action="{{ route('admin.range') }}" method="GET">
            {{-- @csrf --}}
            <div class="row py-3">

                <div class="col-md-4  px-3">
                    <label for="brand" class="textcolor font14 pb-2">Choisir une marque *</label>
                    <select class="form-select customSelect py-2" id="brand" name="brand">
                        {{-- <option disabled="" selected="" value=""></option> --}}
                        <option value="">-- Voir tout --</option> <!-- Option to view all -->
                        @forelse ($brands as $brand)
                            <option value="{{ $brand->u_car_brand }}"
                                {{ request('brand') === $brand->u_car_brand ? 'selected' : '' }}>
                                {{ $brand->u_car_brand }}</option>
                        @empty
                            <option disabled="">empty</option>
                        @endforelse
                    </select>
                    @if ($errors->has('brand'))
                        <div class="alert alert-danger mt-2">{{ $errors->first('brand') }}</div>
                    @endif
                </div>


                {{-- <div class="col-md-4 px-3">
                    <label for="SelectStatus" class="textcolor font14 pb-2">model</label>
                    <input type="text" class="form-control bgwhiteopacity py-2" placeholder="model">
                </div> --}}


                <div class="col-md-4 px-3">
                    <label for="Recherche" class="textcolor font14 pb-2">Recherche :</label>

                    <button class="primarybtn minibtn d-block w-100 mx-auto text-center" type="submit">
                        Recherche
                    </button>
                </div>


            </div>

        </form>

    </div>

    <br>


    <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">


        <div class="row RangeItem py-4" data-slug="all">
            <div class="col-md-2 px-2  py-1 py-md-0">
                <p class="darkcolor font18 mt-2">Set default value</p>
            </div>
            <div class="col-md-2 px-2  py-1 py-md-0">
                <input type="number" id="min" class="form-control bgwhiteopacity py-2 text-dark min"
                    placeholder="min" value="" min="0">
            </div>
            <div class="col-md-2 px-2  py-1 py-md-0">
                <input type="number" id="max" class="form-control bgwhiteopacity py-2 text-dark max"
                    placeholder="max" value="" min="0">
            </div>
            <div class="col-md-2 px-2  py-1 py-md-0">
                <button class="primarybtn minibtn changeRangeButton">Enregistrer</button>
            </div>
        </div>
        <hr class="graycolor my-0">
        {{-- start RangeItem --}}
        @forelse ($price_range as $range)
            <div class="row RangeItem py-4" data-slug="{{ $range['model-slug'] }}">
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <p class="darkcolor font18 mt-2">{{ $range['model-slug'] }}</p>
                </div>
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <input type="number" id="min" class="form-control bgwhiteopacity py-2 text-dark min"
                        placeholder="min" value="{{ $range['min-price'] }}">
                </div>
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <input type="number" id="max" class="form-control bgwhiteopacity py-2 text-dark max"
                        placeholder="max" value="{{ $range['max-price'] }}">
                </div>
                <div class="col-md-2 px-2  py-1 py-md-0">
                    <button class="primarybtn minibtn changeRangeButton">enregistrer</button>
                </div>
            </div>
            {{-- End RangeItem --}}
            <hr class="graycolor my-0">

        @empty
            <div class="row RangeItem py-4">
                <p>empty</p>
            </div>
        @endforelse







        {{-- START pagination  --}}


        <nav class="py-2">
            <ul class="pagination CustomPagination   my-2 my-lg-auto justify-content-center justify-content-lg-end">
                {{-- {{ $price_range->onEachSide(2)->links() }} --}}
                {{ $price_range->appends(request()->query())->onEachSide(2)->links() }}
                {{-- <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li> --}}
            </ul>
        </nav>

        {{-- END pagination  --}}












        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                axios.defaults.headers.common["X-CSRF-TOKEN"] = document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content");



                // Function to get URL parameter by name
                function getUrlParameter(name) {
                    const regex = new RegExp('[?&]' + name + '=([^&#]*)');
                    const results = regex.exec(window.location.search);
                    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
                }

                // Get the brand value from URL
                const brand = getUrlParameter('brand');



                document.querySelectorAll('.RangeItem .changeRangeButton').forEach(button => {
                    button.addEventListener('click', async () => {
                        const rangeItem = button.closest('.RangeItem');
                        const slug = rangeItem.getAttribute('data-slug');
                        const minInput = rangeItem.querySelector('.min');
                        const maxInput = rangeItem.querySelector('.max');
                        const minValue = minInput.value;
                        const maxValue = maxInput.value;

                        if (!minValue || !maxValue) {
                            console.log('Both min and max values are required.');
                            return;
                        }

                        button.innerHTML = '...'; // Show loader
                        button.disabled = true;

                        try {
                            // Prepare the payload
                            const payload = {
                                slug: slug,
                                min: minValue,
                                max: maxValue
                            };

                            // Include brand in payload only if it exists
                            if (brand) {
                                payload.brand = brand;
                            }

                            const response = await axios.post('/admin/price_range', payload, {
                                headers: {
                                    'Content-Type': 'application/json',
                                },
                                withCredentials: true
                            });

                            console.log(response);
                            if (response.data.success) {
                                button.innerHTML = 'Succès'; // Success message in French
                                location.reload(); // Reload the page
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













    </div>



</section>











@include('dashboard.inc.DashBoardFooter')
