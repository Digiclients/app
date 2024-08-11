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
                        @include('form-annonce')
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
            document.querySelector('[name=modele]').disabled = true;
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
                                                    document.querySelector('[name=modele]').disabled = false;
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

    {{-- <script>
        // Get the current year and the next year
        const currentYear = new Date().getFullYear();
        const nextYear = currentYear + 1;

        // Set the max attribute to the next year
        document.getElementById('annee_modele').setAttribute('max', nextYear);
    </script> --}}
@endpush
