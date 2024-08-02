@extends('layouts.app')
@push('third_party_stylesheets')
    <style>
        .step-progress {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .step {
            text-align: center;
            width: 25%;
        }

        .step-marker {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ccc;
            margin: auto;
            line-height: 30px;
            color: #fff;
        }

        .step-label {
            margin-top: 10px;
        }

        .form-step {
            display: none;
        }

        .form-step-active {
            display: block;
        }

        .is-invalid {
            border-color: #dc3545;
        }
    </style>
    <style>
        .custom-button-main {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }

        .custom-button-main:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .custom-button-secondary {
            color: #007bff;
            border-color: #007bff;
        }

        .custom-button-secondary:hover {
            background-color: rgba(0, 123, 255, 0.1);
        }

        .custom-img-wrapper img {
            max-height: 12rem;
            width: 100%;
        }

        .custom-img-wrapper-sm img {
            max-height: 19rem;
            width: 100%;
        }
    </style>
@endpush
@section('content')
    @guest
        <div class="container pt-5 my-5">
            <div class="row bg-light p-5 rounded-lg">
                <div class="col-sm-6 order-2 order-sm-1">
                    <h3 class="mb-4 text-sm-left">Bonjour !</h3>
                    <p class="text-sm-left">Connectez-vous ou créez un compte pour déposer votre annonce.</p>
                    <div class="d-flex flex-column flex-sm-row mt-4">
                        <a href="{{ route('login') }}" class="btn custom-button-main mb-3 mb-sm-0 mr-sm-3">Me connecter</a>
                        <a href="{{ route('register') }}" class="btn custom-button-secondary">Créer un compte</a>
                    </div>
                </div>
                <div class="col-sm-6 order-1 order-sm-2 text-center text-sm-right mb-4 mb-sm-0">
                    <div class="custom-img-wrapper-sm d-block d-sm-none">
                        <img src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fopen_account.b0abbdf3.png&amp;w=640&amp;q=75"
                            alt="Login">
                    </div>
                    <div class="custom-img-wrapper d-none d-sm-block">
                        <img src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fopen_account.b0abbdf3.png&amp;w=1080&amp;q=75"
                            alt="Login">
                    </div>
                </div>
            </div>
        </div>
    @endguest
    @auth
        @hasanyrole('particulier|professionnel')
            <section class="px-4 px-xl-0 pt-5 mt-5 container-fluid row justify-content-center">

                <div class="col-lg-12 col-xl-11 col-xxl-9 py-5 bgLight rounded row px-3">

                    <div class="pb-4">
                        <h5 class="font-weight-700 float-start text-uppercase">Déposer une annonce</h5>
                        <a href="{{ route('home') }}" class="site-button right-arrow button-sm float-end">Back</a>
                    </div>

                    <div class="container mt-5">
                        <div class="step-progress mb-4">
                            <div class="step">
                                <div class="step-marker">1</div>
                                <div class="step-label">Annonce</div>
                            </div>
                            <div class="step">
                                <div class="step-marker">2</div>
                                <div class="step-label">Détails</div>
                            </div>
                            <div class="step">
                                <div class="step-marker">3</div>
                                <div class="step-label">Critères</div>
                            </div>
                            <div class="step">
                                <div class="step-marker">4</div>
                                <div class="step-label">Contact</div>
                            </div>
                        </div>
                        <form action="{{ route('store-annonce') }}" id="multi-step-form" method="POST">
                            @csrf
                            <div class="form-step form-step-active">
                                <h2>Annonce</h2>
                                <div class="mb-3">
                                    <label for="title" class="form-label">{{ __('input.title') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                        name="title" placeholder="{{ __('input.placeholder_title') }}" required
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- Marque --}}
                                <div class="SearchandCheck input-container mb-3">
                                    <label for="title" class="form-label">{{ __('input.brand') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" data-array="marque" name="marque"
                                        class="form-control @error('marque') is-invalid @enderror"
                                        placeholder="{{ __('input.placeholder_brand') }}" readonly value="{{ old('marque') }}">
                                    <ul class="dropdown-menu w-100 p-2">
                                        <div class="sticky-container">
                                            <div class="search-container">
                                                <input type="text" class="form-control search-input"
                                                    placeholder="Rechercher un marque">
                                            </div>
                                            <div class="badge-container">
                                                <!-- Selected models will appear here as badges -->
                                            </div>
                                        </div>
                                        <div id="marques" class="model-list">
                                            <!-- Model items will be dynamically inserted here -->
                                        </div>
                                    </ul>
                                    @error('marque')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- Modele --}}
                                <div class="SearchandCheck SearchandCheck-models input-container mb-3">
                                    <label for="title" class="form-label">{{ __('input.model') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" data-array="modele" name="modele"
                                        class="form-control @error('modele') is-invalid @enderror"
                                        placeholder="{{ __('input.placeholder_model') }}" readonly value="{{ old('modele') }}">
                                    <ul class="dropdown-menu w-100 p-2">
                                        <div class="sticky-container">
                                            <div class="search-container">
                                                <input type="text" class="form-control search-input"
                                                    placeholder="Rechercher un modèle">
                                            </div>
                                            <div class="badge-container">
                                                <!-- Selected models will appear here as badges -->
                                            </div>
                                        </div>
                                        <div class="model-list">
                                            <!-- Model items will be dynamically inserted here -->
                                        </div>
                                    </ul>
                                    @error('modele')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" class="btn btn-primary" onclick="nextStep()">{{ __('input.next') }}</button>
                            </div>
                            <div class="form-step">
                                <h2>{{ __('input.details') }}</h2>
                                <div class="mb-3">
                                    <label for="price" class="form-label">{{ __('input.price') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control @error('price') is-invalid @enderror"
                                        id="price" name="price" required placeholder="{{ __('input.placeholder_price') }}"
                                        min="100" value="{{ old('price') }}">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('input.description') }} <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control  @error('description') is-invalid @enderror" id="description" rows="6"
                                        name="description" required placeholder="{{ __('input.placeholder_description') }}">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" class="btn btn-secondary"
                                    onclick="prevStep()">{{ __('input.prev') }}</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="nextStep()">{{ __('input.next') }}</button>
                            </div>
                            <div class="form-step">
                                <h2>{{ __('input.criteres') }}</h2>
                                <div class="row">
                                    <div class="col-md-6 pe-0 pe-md-2">
                                        <div class="mb-3">
                                            <label for="annee_modele" class="form-label">{{ __('input.annee_model') }} <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control @error('annee_modele') is-invalid @enderror"
                                                id="annee_modele" name="annee_modele"
                                                placeholder="{{ __('input.annee_model_placeholder') }} " min="1900"
                                                value="{{ old('annee_modele') }}">
                                            @error('annee_modele')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="date_premiere_mise_en_circulation"
                                                class="form-label">{{ __('input.date_premiere_mise_circulation') }}</label>
                                            <input type="date"
                                                class="form-control @error('date_premiere_mise_en_circulation') is-invalid @enderror"
                                                id="date_premiere_mise_en_circulation" name="date_premiere_mise_en_circulation"
                                                placeholder="{{ __('input.date_premiere_mise_circulation_placeholder') }}"
                                                value="{{ old('date_premiere_mise_en_circulation') }}">
                                            @error('date_premiere_mise_en_circulation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="carburant" class="form-label">{{ __('input.carburant') }} <span
                                                    class="text-danger">*</span></label>
                                            <select id="carburant" name="carburant"
                                                class="form-select @error('carburant') is-invalid @enderror" required>
                                            </select>
                                            @error('carburant')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="boite_vitesse" class="form-label ">{{ __('input.boite_vitesse') }} <span
                                                    class="text-danger">*</span></label>
                                            <select id="boite_vitesse" name="boite_vitesse"
                                                class="form-select @error('boite_vitesse') is-invalid @enderror" required>
                                            </select>
                                            @error('boite_vitesse')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="kilometrage" class="form-label">{{ __('input.km') }} <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control @error('kilometrage') is-invalid @enderror"
                                                id="kilometrage" name="kilometrage" required
                                                placeholder="{{ __('input.km_placeholder') }}">
                                            @error('kilometrage')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="permis" class="form-label">{{ __('input.permis') }} <span
                                                    class="text-danger">*</span></label>
                                            <select id="permis" name="permis"
                                                class="form-select @error('kilometrage') is-invalid @enderror">
                                            </select>
                                            @error('permis')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="etat_du_vehicule" class="form-label">{{ __('input.etat_du_vehicule') }}
                                            </label>
                                            <select id="etat_du_vehicule" name="etat_du_vehicule"
                                                class="form-select @error('etat_du_vehicule') is-invalid @enderror">
                                            </select>
                                            @error('etat_du_vehicule')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre_place" class="form-label">{{ __('input.nombre_place') }}</label>
                                            <select id="nombre_place" name="nombre_place"
                                                class="form-select @error('nombre_place') is-invalid @enderror">
                                            </select>
                                            @error('nombre_place')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="couleur" class="form-label">{{ __('input.couleur') }}</label>
                                            <select id="couleur" name="couleur"
                                                class="form-select @error('couleur') is-invalid @enderror">
                                            </select>
                                            @error('couleur')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="nombre_porte" class="form-label">{{ __('input.nombre_porte') }}</label>
                                            <select id="nombre_porte" name="nombre_porte"
                                                class="form-select @error('nombre_porte') is-invalid @enderror">
                                            </select>
                                            @error('nombre_porte')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="puissance_fiscale"
                                                class="form-label">{{ __('input.puissance_fiscale') }}</label>
                                            <input type="number"
                                                class="form-control @error('puissance_fiscale') is-invalid @enderror"
                                                id="puissance_fiscale" name="puissance_fiscale"
                                                placeholder="Indiquez la puissance fiscale de votre voiture.">
                                            @error('puissance_fiscale')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="puissance_DIN" class="form-label">{{ __('input.puissance_DIN') }}</label>
                                            <input type="number"
                                                class="form-control @error('puissance_DIN') is-invalid @enderror"
                                                id="puissance_DIN" name="puissance_DIN"
                                                placeholder="Indiquez la puissance DIN de votre voiture.">
                                            @error('puissance_DIN')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="matricule" class="form-label">{{ __('input.matricule') }} <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('matricule') is-invalid @enderror"
                                                id="matricule" name="matricule"
                                                placeholder="{{ __('input.matricule_placeholder') }}">
                                            @error('matricule')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="crit_air" class="form-label">{{ __('input.crit_air') }}</label>
                                            <select id="crit_air" name="crit_air"
                                                class="form-select @error('crit_air') is-invalid @enderror">
                                            </select>
                                            @error('crit_air')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="type_vehicule" class="form-label">{{ __('input.type_vehicule') }}</label>
                                            <select id="type_vehicule" name="type_vehicule" class="form-select">
                                            </select>
                                            @error('type_vehicule')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary"
                                    onclick="prevStep()">{{ __('input.prev') }}</button>
                                <button type="button" class="btn btn-primary"
                                    onclick="nextStep()">{{ __('input.next') }}</button>
                            </div>
                            <div class="form-step">
                                <h2>{{ __('input.contact') }}</h2>
                                <!-- location -->
                                <div class="autocompleteInput input-container mb-3">
                                    <label for="matricule" class="form-label">{{ __('input.location') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" data-array="location" name="location"
                                        class="form-control @error('location') is-invalid @enderror"
                                        placeholder="{{ __('input.location_placeholder') }}" readonly
                                        value="{{ request()->input('location') }}">
                                    <ul class="dropdown-menu w-100 p-2">
                                        <div class="search-container">
                                            <input type="text" class="form-control search-input"
                                                placeholder="Rechercher un lieu">
                                        </div>
                                        <div class="model-list">
                                            <!-- Location items will be dynamically inserted here -->
                                        </div>
                                    </ul>
                                    @error('location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('input.email') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" required
                                        placeholder="{{ __('input.email_placeholder') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">{{ __('input.phone') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" required
                                        placeholder="{{ __('input.phone_placeholder') }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="button" class="btn btn-secondary"
                                    onclick="prevStep()">{{ __('input.prev') }}</button>
                                <button type="submit" class="btn btn-primary">{{ __('input.next') }}</button>
                            </div>
                        </form>
                    </div>


                </div>

            </section>
        @endhasanyrole
    @endauth
@endsection
@push('third_party_scripts')
    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll(".form-step");

        function nextStep() {
            const currentForm = steps[currentStep];
            const requiredInputs = currentForm.querySelectorAll("input[required], textarea[required], select[required]");
            let allValid = true;

            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add("is-invalid");
                    allValid = false;
                } else {
                    input.classList.remove("is-invalid");
                }
            });

            if (allValid && currentStep < steps.length - 1) {
                steps[currentStep].classList.remove("form-step-active");
                currentStep++;
                steps[currentStep].classList.add("form-step-active");
                updateStepProgress();
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                steps[currentStep].classList.remove("form-step-active");
                currentStep--;
                steps[currentStep].classList.add("form-step-active");
                updateStepProgress();
            }
        }

        function updateStepProgress() {
            const stepMarkers = document.querySelectorAll(".step-marker");
            stepMarkers.forEach((marker, index) => {
                if (index <= currentStep) {
                    marker.style.backgroundColor = "#4CAF50";
                } else {
                    marker.style.backgroundColor = "#ccc";
                }
            });
        }

        document.getElementById("multi-step-form").addEventListener("submit", function(event) {
            const currentForm = steps[currentStep];
            const requiredInputs = currentForm.querySelectorAll(
                "input[required], textarea[required], select[required]");
            let allValid = true;

            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    input.classList.add("is-invalid");
                    allValid = false;
                } else {
                    input.classList.remove("is-invalid");
                }
            });

            if (!allValid) {
                event.preventDefault();
            }
        });
    </script>

    <script>
        let autocompleteData = {
            location: [],
            marque: [],
            modele: [],
        };
        document.addEventListener("DOMContentLoaded", () => {

            axios
                .get('{{ route('getMarques') }}')
                .then((responseMaruqe) => {

                    axios
                        .get('{{ route('getLocations') }}')
                        .then((responselocalization) => {

                            const data = responseMaruqe.data;


                            autocompleteData = {
                                location: [...new Set(responselocalization.data.map((item) => item
                                    .Localization))],
                                marque: [...new Set(data.map((item) => item.category_name))],
                                modele: [],
                            };

                            // fillAutocompleteComponent(autocompleteData);

                            document.querySelectorAll(".SearchandCheck").forEach((container) => {
                                CreateSearchandCheck(container);
                            });

                            // AutocompleteInput initialization

                            document.querySelectorAll(".autocompleteInput").forEach((container) => {
                                CreateAutocompleteInput(container);
                            });



                            var getModelsRoute = "{{ route('getModels', ':marqueName') }}";

                            var marquesDiv = document.querySelector('#marques');
                            var checkboxes = marquesDiv.querySelectorAll('.form-check-input');
                            checkboxes.forEach(function(checkbox) {
                                checkbox.addEventListener('change', function() {
                                    checkboxes.forEach(function(cb) {
                                        if (cb.checked) {

                                            var url = getModelsRoute.replace(
                                                ':marqueName',
                                                encodeURIComponent(cb.value));

                                            axios
                                                .get(url)
                                                .then((responseModeles) => {

                                                    autocompleteData.modele = [
                                                        ...new Set(
                                                            responseModeles
                                                            .data.map((
                                                                    item) =>
                                                                item
                                                                .category_name
                                                            ))
                                                    ]

                                                    document.querySelectorAll(
                                                            ".SearchandCheck-models"
                                                        )
                                                        .forEach((
                                                            container) => {
                                                            CreateSearchandCheck
                                                                (container);
                                                        });

                                                })
                                                .catch((error) => {
                                                    console.error(error);
                                                });
                                        } else {
                                            console.log("else");
                                        }
                                    });
                                });
                            });
                        })
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });

        });





        function CreateSearchandCheck(container) {
            const dataArrayName = container.querySelector("input").getAttribute("data-array");
            const models = autocompleteData[dataArrayName];
            const modelList = container.querySelector(".model-list");
            const searchInput = container.querySelector(".search-input");
            const selectedModelsContainer = container.querySelector(".badge-container");
            const selectedModelsInput = container.querySelector("input");
            const selectedModelNames = new Set();

            function renderModelList(filter = "") {
                modelList.innerHTML = "";
                models
                    .filter((model) => model.toLowerCase().includes(filter.toLowerCase()))
                    .forEach((model) => {
                        const listItem = document.createElement("div");
                        listItem.classList.add("form-check");
                        listItem.innerHTML = `
                    <input class="form-check-input" type="checkbox" value="${model}" id="check-${dataArrayName}-${model}">
                    <label class="form-check-label" for="check-${dataArrayName}-${model}">
                        ${model}
                    </label>
                `;
                        modelList.appendChild(listItem);

                        listItem.querySelector("input").addEventListener("change", (e) => {
                            if (e.target.checked) {
                                // Uncheck all other checkboxes
                                modelList.querySelectorAll(".form-check-input").forEach((checkbox) => {
                                    if (checkbox !== e.target) {
                                        checkbox.checked = false;
                                    }
                                });

                                // Clear the set and add the current model
                                selectedModelNames.clear();
                                selectedModelNames.add(model);
                            } else {
                                selectedModelNames.delete(model);
                            }
                            renderSelectedModels();
                        });
                    });
            }

            function renderSelectedModels() {
                selectedModelsContainer.innerHTML = "";
                const selectedNamesArray = Array.from(selectedModelNames);
                selectedModelsInput.value = selectedNamesArray.join(", ");
                selectedNamesArray.forEach((name) => {
                    const badge = document.createElement("span");
                    badge.classList.add("badge", "bg-secondary");
                    badge.textContent = name;
                    const closeBtn = document.createElement("button");
                    closeBtn.classList.add("btn-close", "btn-close-white", "ms-2");
                    closeBtn.setAttribute("aria-label", "Close");
                    closeBtn.addEventListener("click", () => {
                        selectedModelNames.delete(name);
                        renderSelectedModels();
                        document.getElementById(`check-${dataArrayName}-${name}`).checked = false;
                    });
                    badge.appendChild(closeBtn);
                    selectedModelsContainer.appendChild(badge);
                });
            }

            searchInput.addEventListener("input", () => {
                renderModelList(searchInput.value);
            });

            selectedModelsInput.addEventListener("focus", () => {
                container.querySelector(".dropdown-menu").classList.add("show");
            });

            document.addEventListener("click", (event) => {
                if (!container.contains(event.target)) {
                    container.querySelector(".dropdown-menu").classList.remove("show");
                }
            });

            renderModelList();
        }



        function CreateAutocompleteInput(container) {
            const dataArrayName = container.querySelector("input").getAttribute("data-array");
            const locations = autocompleteData[dataArrayName];
            const modelList = container.querySelector(".model-list");
            const searchInput = container.querySelector(".search-input");
            const selectedInput = container.querySelector("input");

            function renderLocationList(filter = "") {
                modelList.innerHTML = "";
                locations
                    .filter((location) => location.toLowerCase().includes(filter.toLowerCase()))
                    .forEach((location) => {
                        const listItem = document.createElement("div");
                        listItem.classList.add("dropdown-item");
                        listItem.textContent = location;
                        listItem.addEventListener("click", () => {
                            selectedInput.value = location;
                            container.querySelector(".dropdown-menu").classList.remove("show");
                        });
                        modelList.appendChild(listItem);
                    });
            }

            searchInput.addEventListener("input", () => {
                renderLocationList(searchInput.value);
            });

            selectedInput.addEventListener("focus", () => {
                container.querySelector(".dropdown-menu").classList.add("show");
            });

            document.addEventListener("click", (event) => {
                if (!container.contains(event.target)) {
                    container.querySelector(".dropdown-menu").classList.remove("show");
                }
            });

            renderLocationList();
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const selects = {
                carburant: document.querySelector("[name='carburant']"),
                boite_vitesse: document.querySelector("[name='boite_vitesse']"),
                couleur: document.querySelector("[name='couleur']"),
                permis: document.querySelector("[name='permis']"),
                crit_air: document.querySelector("[name='crit_air']"),
                etat_du_vehicule: document.querySelector("[name='etat_du_vehicule']"),
                type_vehicule: document.querySelector("[name='type_vehicule']"),
                nombre_place: document.querySelector("[name='nombre_place']"),
                nombre_porte: document.querySelector("[name='nombre_porte']")
            };

            axios.get('{{ route('getAttributesOptions') }}')
                .then((res) => {
                    const data = res.data;

                    Object.keys(data).forEach(slug => {
                        const select = selects[slug];
                        if (select) {
                            // Clear existing options
                            select.innerHTML = '<option value="" disabled selected>Select</option>';

                            // Populate options
                            data[slug].forEach(option => {
                                const optionElement = document.createElement('option');
                                optionElement.value = option.id;
                                optionElement.textContent = option.value;
                                select.appendChild(optionElement);
                            });
                        }
                    });
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });
        });
    </script>

    <script>
        // Get the current year and the next year
        const currentYear = new Date().getFullYear();
        const nextYear = currentYear + 1;

        // Set the max attribute to the next year
        document.getElementById('annee_modele').setAttribute('max', nextYear);
    </script>
@endpush
