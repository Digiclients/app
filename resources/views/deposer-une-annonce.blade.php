@extends('layouts.app')
@push('third_party_stylesheets')
    <style>
        .form-control,
        select {
            padding: 8px 12px !important;
        }

        .step-progress {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            flex-wrap: wrap !important;
        }

        .step {
            text-align: center;
            width: 16%;
        }

        @media screen and (max-width: 589px) {
            .step {
                width: 86px;
                margin: 4px 0px;
            }

        }


        .step-marker {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--primarycolor);
            margin: auto;
            line-height: 30px;
            color: var(--white);
            font-family: var(--primaryfont);
            font-weight: 600;
        }

        .first-step-marker {

            background-color: var(--color-success) !important;


        }

        .step-label {
            margin-top: 5px;
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
            background-color: var(--primarycolor);
            color: white;
            border-color: var(--primarycolor);
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
        <div class="mt-5 pt-5"></div>
        <div class="container pt-5 my-5">
            <div class="row bg-light p-5 rounded-lg">
                <div class="col-sm-6 order-2 order-sm-1">
                    <h3 class="mb-4 text-sm-left primarycolor">Bonjour !</h3>
                    <p class="darkcolor fontw600">Connectez-vous ou créez un compte pour déposer votre annonce.</p>
                    <div class="d-flex flex-column flex-sm-row mt-4">
                        <a href="{{ route('login') }}" class="primarybtn  me-3 my-1">Me connecter</a>
                        <a href="{{ route('register') }}" class="primarybtnoutline me-3 my-1">Créer un compte</a>
                    </div>
                </div>
                {{-- <div class="col-sm-6 order-1 order-sm-2 text-center text-sm-right mb-4 mb-sm-0">
                    <div class="custom-img-wrapper-sm d-block d-sm-none">
                        <img src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fopen_account.b0abbdf3.png&amp;w=640&amp;q=75"
                            alt="Login">
                    </div>
                    <div class="custom-img-wrapper d-none d-sm-block">
                        <img src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fopen_account.b0abbdf3.png&amp;w=1080&amp;q=75"
                            alt="Login">
                    </div>
                </div> --}}
            </div>
        </div>
        <br><br><br><br>

    @endguest
    @auth
        @hasanyrole('particulier|professionnel')
            <br>
            <section class="px-4 px-xl-0 pt-5 mt-5 container-fluid row justify-content-center">
                <div class="col-lg-12 col-xl-11 col-xxl-9 py-5 bgLight rounded row px-3">
                    <div class="pb-4">
                        <h1 class="font30 float-start text-uppercase fontwbold primarycolor primaryfont ms-2">Déposer une annonce
                        </h1>
                        {{-- <a href="{{ route('home') }}" class="site-button right-arrow button-sm float-end">Back</a> --}}
                    </div>
                    <div class="container mt-5">
                        <div class="step-progress mb-4">
                            <div class="step">
                                <div class="step-marker first-step-marker">1</div>
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
            <br>
            <br>
        @endhasanyrole
    @endauth
@endsection
@push('third_party_scripts')
    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll(".form-step");

        function nextStep() {
            // Scroll to the top of the page
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Optional: Smooth scrolling effect
            });

            const currentForm = steps[currentStep];
            console.log(currentStep)
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

            // START CUSTOM FORM VALIDATION
            let ValidStep = true;
            validationErrors = document.querySelector(".validationErrors");


            if (currentStep == 0) {
                validationErrors.innerHTML = ""
                console.log("i will check the 0")
                // Title validation
                title = document.querySelector('[name="title"]');
                console.log(title)
                if (title.value.length < 10 || title.value.length > 80) {
                    validationErrors.innerHTML += "Le titre doit comporter entre 10 et 80 caractères. <br> ";
                    ValidStep = false;
                }

                // Marque validation
                marque = document.querySelector('[name="marque"]');
                if (!marque.value.trim()) {
                    validationErrors.innerHTML += "La marque est requise. <br> ";
                    ValidStep = false;
                }

                // Modèle validation
                modele = document.querySelector('[name="modele"]');
                if (!modele.value.trim()) {
                    validationErrors.innerHTML += "Le modèle est requis. <br> ";
                    ValidStep = false;
                }

            }

            if (currentStep == 1) {
                validationErrors.innerHTML = "";
                console.log("i will check the 1");

                // Price validation
                price = document.querySelector('[name="price"]');
                if (price.value <= 99 || !price.value.trim()) {
                    validationErrors.innerHTML += "Le prix est requis et doit être au moins 100. <br>";
                    ValidStep = false;
                }

                // Description validation
                description = document.querySelector('[name="description"]');
                if (description.value.trim().length === 0) {
                    validationErrors.innerHTML += "La description est requise. <br>";
                    ValidStep = false;
                }
            }


            if (currentStep == 2) {
                validationErrors.innerHTML = "";
                console.log("i will check the 2");

                // Année Modèle validation
                anneeModele = document.querySelector('[name="annee_modele"]');
                if (anneeModele.value < 1850 || anneeModele.value > 2025 || !anneeModele.value.trim()) {
                    validationErrors.innerHTML +=
                        "L'année modèle est requise et doit être comprise entre 1850 et 2025. <br>";
                    ValidStep = false;
                }

                // Carburant validation
                carburant = document.querySelector('[name="carburant"]');
                if (!carburant.value.trim()) {
                    validationErrors.innerHTML += "Le carburant est requis. <br>";
                    ValidStep = false;
                }

                // Kilométrage validation
                kilometrage = document.querySelector('[name="kilometrage"]');
                if (kilometrage.value <= 0 || !kilometrage.value.trim()) {
                    validationErrors.innerHTML += "Le kilométrage est requis et doit être supérieur à 0. <br>";
                    ValidStep = false;
                }

                // Boîte de vitesses validation
                boiteVitesse = document.querySelector('[name="boite_vitesse"]');
                if (!boiteVitesse.value.trim()) {
                    validationErrors.innerHTML += "La boîte de vitesses est requise. <br>";
                    ValidStep = false;
                }
            }

            // if (currentStep == 3) {
            //     validationErrors.innerHTML = "";
            //     console.log("i will check the 3");

            //     // Location validation
            //     locationInput = document.querySelector('[name="location"]');
            //     if (!locationInput.value.trim()) {
            //         validationErrors.innerHTML += "La location est requise. <br>";
            //         ValidStep = false;
            //     }

            //     // Email validation
            //     emailInput = document.querySelector('[name="email"]');
            //     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple regex for email validation
            //     if (!emailInput.value.trim() || !emailPattern.test(emailInput.value)) {
            //         validationErrors.innerHTML += "L'email est requis et doit être valide. <br>";
            //         ValidStep = false;
            //     }

            //     // Phone validation
            //     phoneInput = document.querySelector('[name="phone"]');
            //     const phonePattern = /^\+?[0-9]{10,15}$/; // Regex for international and local phone numbers
            //     if (!phoneInput.value.trim() || !phonePattern.test(phoneInput.value)) {
            //         validationErrors.innerHTML += "Le numéro de téléphone est requis et doit être valide. <br>";
            //         ValidStep = false;
            //     }
            // }

            // END CUSTOM FORM VALIDATION

            if (allValid && currentStep < steps.length - 1 && ValidStep) {
                steps[currentStep].classList.remove("form-step-active");
                currentStep++;
                steps[currentStep].classList.add("form-step-active");
                document.querySelector(".validationErrors").innerHTML = ""

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
                    marker.style.backgroundColor = "var(--color-success)";
                } else {
                    marker.style.backgroundColor = "var(--primarycolor)";
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


            ValidSubmitStep = true;
            validationErrors.innerHTML = "";

            // Location validation
            locationInput = document.querySelector('[name="location"]');
            if (!locationInput.value.trim()) {
                validationErrors.innerHTML += "La location est requise. <br>";
                ValidSubmitStep = false;
            }

            // Email validation
            emailInput = document.querySelector('[name="email"]');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Simple regex for email validation
            if (!emailInput.value.trim() || !emailPattern.test(emailInput.value)) {
                validationErrors.innerHTML += "L'email est requis et doit être valide. <br>";
                ValidSubmitStep = false;
            }

            // Phone validation
            phoneInput = document.querySelector('[name="phone"]');
            const phonePattern = /^\+?[0-9]{10,15}$/; // Regex for international and local phone numbers
            if (!phoneInput.value.trim() || !phonePattern.test(phoneInput.value)) {
                validationErrors.innerHTML += "Le numéro de téléphone est requis et doit être valide. <br>";
                ValidSubmitStep = false;
            }



            if (!allValid || !ValidSubmitStep) {
                event.preventDefault();
            }
        });
    </script>

    {{-- <script>
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
                                                    document.querySelector(
                                                            '[name=modele]')
                                                        .disabled = false;
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
    </script> --}}

    <script>
        let autocompleteData = {
            location: [],
            marque: [],
            modele: [],
        };

        document.addEventListener("DOMContentLoaded", () => {
            // Function to compare two objects
            function isDataDifferent(data1, data2) {
                return JSON.stringify(data1) !== JSON.stringify(data2);
            }

            // Function to initialize components with autocomplete data
            function initializeComponents() {
                document.querySelectorAll(".SearchandCheck").forEach((container) => {
                    CreateSearchandCheck(container);
                });

                document.querySelectorAll(".autocompleteInput").forEach((container) => {
                    CreateAutocompleteInput(container);
                });

                setupMarqueCheckboxListeners();
            }

            function setupMarqueCheckboxListeners() {
                const getModelsRoute = "{{ route('getLeboncoinModeles', ':marque') }}";
                const marquesDiv = document.querySelector('#marques');
                const modelListDiv = document.querySelector('#models');
                const modeleInput = document.querySelector('[name=modele]');

                function updateModeleInputState() {
                    const anyChecked = Array.from(marquesDiv.querySelectorAll('.form-check-input')).some(cb => cb.checked);
                    modeleInput.disabled = !anyChecked;
                }

                function handleCheckboxChange(event) {
                    const checkbox = event.target;

                    console.log('Checkbox changed:', checkbox.value, 'Checked:', checkbox.checked);

                    updateModeleInputState(); // Update the state of modeleInput based on checked checkboxes

                    if (checkbox.checked) {
                        console.log(checkbox.value)
                        // document.querySelector("#modele").value = '';
                        const url = getModelsRoute.replace(':marque', encodeURIComponent(checkbox.value));
                        modelListDiv.innerHTML = `
                    <div class="spinner-border text-primary" role="status">
                        <span class="sr-only"></span>
                    </div>`;

                    console.log("url : ", url)


                        axios.get(url)
                            .then((responseModeles) => {
                                autocompleteData.modele = [...new Set(
                                    responseModeles.data.modeles.map(item => item.u_car_model)
                                )];

                                modeleInput.value = ''; // Clear input value

                                // Clear the loader
                                modelListDiv.innerHTML = '';

                                document.querySelectorAll(".SearchandCheck-models").forEach((container) => {
                                    CreateSearchandCheck(container);
                                });
                            })
                            .catch((error) => {
                                console.error('Error fetching models:', error);
                                modelListDiv.innerHTML = '<p>Failed to load models.</p>';
                            });
                    } else {
                        // Check if there are any other checkboxes still checked
                        updateModeleInputState();
                    }
                }

                // Event delegation for dynamically added checkboxes
                marquesDiv.addEventListener('change', (event) => {
                    if (event.target.classList.contains('form-check-input')) {
                        handleCheckboxChange(event);
                    }
                });

                // Initial state of modeleInput
                updateModeleInputState();
            }

            // Fetch leboncoin data and update other fields
            function fetchAndUpdateAutocompleteData() {
                axios.get('/api/leboncoin-data')
                    .then((response) => {
                        const data = response.data.LeboncoindData;

                        const newAutocompleteData = {
                            ...autocompleteData,
                            marque: [...new Set(data.map((item) => item.u_car_brand))],
                            location: [...new Set(data.map((item) => item.u_location))], // Assuming locations are also in the API response
                        };

                        // Check if the new data is different from the current data
                        if (isDataDifferent(autocompleteData, newAutocompleteData)) {
                            autocompleteData = newAutocompleteData;
                            initializeComponents(); // Reinitialize components with new data
                            console.log("autocompleteData has been updated.");
                        } else {
                            console.log("No changes detected in autocompleteData.");
                        }
                    })
                    .catch((error) => {
                        console.error('Error fetching leboncoin data:', error);
                    });
            }

            // Initialize the components and fetch the initial data from the API
            setupMarqueCheckboxListeners();
            fetchAndUpdateAutocompleteData()
            // fetchRegions().then(() => fetchAndUpdateAutocompleteData());
        });

        function CreateSearchandCheck(container) {
            const dataArrayName = container.querySelector("input").getAttribute("data-array");
            const models = autocompleteData[dataArrayName];
            const modelList = container.querySelector(".model-list");
            const searchInput = container.querySelector(".search-input");
            const selectedModelsContainer = container.querySelector(".badge-container");
            const selectedModelsInput = container.querySelector("input");
            const selectedModelNames = new Set();

            function getSelectedModelNames() {
                // Get the value from the input and split it into an array
                const values = selectedModelsInput.value.split(", ").filter(Boolean);
                return new Set(values);
            }

            function renderModelList(filter = "") {
                modelList.innerHTML = "";
                const selectedNames = getSelectedModelNames();

                models
                    .filter((model) => model.toLowerCase().includes(filter.toLowerCase()))
                    .forEach((model) => {
                        const listItem = document.createElement("div");
                        listItem.classList.add("form-check");
                        listItem.innerHTML = `
                    <input class="form-check-input" type="checkbox" value="${model}" id="check-${dataArrayName}-${model}">
                    <label class="form-check-label" for="check-${dataArrayName}-${model}">
                        ${model}
                    </label>`;
                        modelList.appendChild(listItem);

                        // Check if the model should be pre-checked
                        if (selectedNames.has(model)) {
                            listItem.querySelector("input").checked = true;
                            selectedModelNames.add(model);
                        }

                        listItem.querySelector("input").addEventListener("change", (e) => {
                            if (e.target.checked) {
                                // Uncheck all other checkboxes and clear the set
                                modelList.querySelectorAll(".form-check-input").forEach((checkbox) => {
                                    checkbox.checked = false;
                                });

                                // Clear the set and add the current model
                                selectedModelNames.clear();
                                selectedModelNames.add(model);

                                // Recheck the current checkbox
                                e.target.checked = true;
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

            // Initial render with the pre-checked values
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
                // Add default item
                const defaultItem = document.createElement("div");
                defaultItem.classList.add("dropdown-item");
                defaultItem.textContent = "Toute-la-France";
                defaultItem.addEventListener("click", () => {
                    selectedInput.value = "Toute-la-France";
                    modelList.innerHTML = "";
                });
                modelList.appendChild(defaultItem);

                // Add filtered locations
                locations
                    .filter((model) => model.toLowerCase().includes(filter.toLowerCase()))
                    .forEach((model) => {
                        const listItem = document.createElement("div");
                        listItem.classList.add("dropdown-item");
                        listItem.textContent = model;
                        listItem.addEventListener("click", () => {
                            selectedInput.value = model;
                            modelList.innerHTML = "";
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

            // Initial render
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
@endpush
