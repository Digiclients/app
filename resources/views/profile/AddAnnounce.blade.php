@extends('layouts.profile')

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
@endpush

@section('ProfileContent')
    <div class="pb-4">

        <h5 class="font-weight-700 float-start text-uppercase">Déposer une annonce</h5>
        <a href="index.html" class="site-button right-arrow button-sm float-end">Back</a>
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
        <form id="multi-step-form" method="get" action="/submit-form">


            <div class="form-step form-step-active">
                <h2>Annonce</h2>
                <div class="mb-3">
                    <label for="title" class="form-label">Titre de l'annonce *</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Écrivez ici le titre de l'annonce" required>
                </div>
                {{-- Marque --}}
                <div class="SearchandCheck input-container mb-3">
                    <input type="text" data-array="marque" name="marque" class="form-control" placeholder="Marque"
                        readonly>
                    <ul class="dropdown-menu w-100 p-2">
                        <div class="sticky-container">
                            <div class="search-container">
                                <input type="text" class="form-control search-input" placeholder="Rechercher un marque">
                            </div>
                            <div class="badge-container">
                                <!-- Selected models will appear here as badges -->
                            </div>
                        </div>
                        <div id="marques" class="model-list">
                            <!-- Model items will be dynamically inserted here -->
                        </div>
                    </ul>
                </div>
                {{-- Modele --}}
                <div class="SearchandCheck SearchandCheck-models input-container mb-3">
                    <input type="text" data-array="modele" name="modele" class="form-control" placeholder="Modèle"
                        readonly>
                    <ul class="dropdown-menu w-100 p-2">
                        <div class="sticky-container">
                            <div class="search-container">
                                <input type="text" class="form-control search-input" placeholder="Rechercher un modèle">
                            </div>
                            <div class="badge-container">
                                <!-- Selected models will appear here as badges -->
                            </div>
                        </div>
                        <div class="model-list">
                            <!-- Model items will be dynamically inserted here -->
                        </div>
                    </ul>
                </div>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
            </div>
            <div class="form-step">
                <h2>Détails</h2>
                <div class="mb-3">
                    <label for="price" class="form-label">Prix *</label>
                    <input type="number" class="form-control" id="price" name="price" required
                        placeholder="Écrivez ici le prix de votre voiture">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description *</label>
                    <textarea class="form-control" id="description" rows="6" name="description" required
                        placeholder="Écrivez une description détaillée."></textarea>
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Précédent</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
            </div>
            <div class="form-step">
                <h2>Critères</h2>
                <div class="row">
                    <div class="col-md-6 pe-0 pe-md-2">
                        <div class="mb-3">
                            <label for="anneeModel" class="form-label">Année Modèle</label>
                            <input type="number" class="form-control" id="anneeModel" name="anneeModel"
                                placeholder="Année de modèle">
                        </div>
                        <div class="mb-3">
                            <label for="datePremiereMise" class="form-label">Date de première mise en circulation</label>
                            <input type="date" class="form-control" id="datePremiereMise" name="datePremiereMise"
                                placeholder="Date de première mise en circulation">
                        </div>
                        <div class="mb-3">
                            <label for="carburant" class="form-label">Carburant *</label>
                            <select id="carburant" name="carburant" class="form-select" required>
                                {{-- <option value="" disabled selected>Select Carburant</option>
                                <option value="">Essence</option>
                                <option value="">Diesel</option>
                                <option value="">Électrique</option>
                                <option value="">Hybride</option> --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="boite_vitesse" class="form-label">Boîte de vitesses *</label>
                            <select id="boite_vitesse" name="boite_vitesse" class="form-select" required>
                                <option value="" disabled selected>Select Boîte de vitesses</option>
                                <option value="">Manuelle</option>
                                <option value="">Automatique</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="km" class="form-label">KM</label>
                            <input type="number" class="form-control" id="km" name="km" required
                                placeholder="Veuillez indiquer le kilométrage actuel de votre voiture.">
                        </div>
                        <div class="mb-3">
                            <label for="permis" class="form-label">Permis</label>
                            <select id="permis" name="permis" class="form-select">
                                {{-- <option value="" disabled selected>Select Permis</option>
                                <option value="">Avec permis</option>
                                <option value="">Sans permis</option> --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="etat_du_vehicule" class="form-label">État du véhicule</label>
                            <select id="etat_du_vehicule" name="etat_du_vehicule" class="form-select">
                                <option value="" disabled selected>Select État du véhicule</option>
                                <option value="">Non endommagé</option>
                                <option value="">Endommagé</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nombre_place" class="form-label">Nombre de place(s)</label>
                            <select id="nombre_place" name="nombre_place" class="form-select">
                                {{-- <option value="" disabled selected>Select Nombre de places</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7 ou plus</option> --}}
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="couleur" class="form-label">Couleur</label>
                            <select id="couleur" name="couleur" class="form-select">
                                {{-- <option value="" disabled selected>Select Nombre de places</option>
                                <option>Blanc</option>
                                <option>Noir</option>
                                <option>Rouge</option>
                                <option>Bleu</option>
                                <option>Vert</option>
                                <option>Gris</option>
                                <option>Jaune</option>
                                <option>Marron</option>
                                <option>Orange</option>
                                <option>Violet</option>
                                <option>Autre</option> --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nombre_porte" class="form-label">Nombre de porte(s)</label>
                            <select id="nombre_porte" name="nombre_porte" class="form-select">
                                {{-- <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6 ou plus</option> --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="puissanceFiscal" class="form-label">Puissance fiscale</label>
                            <input type="number" class="form-control" id="puissanceFiscal" name="puissanceFiscal"
                                placeholder="Indiquez la puissance fiscale de votre voiture.">
                        </div>
                        <div class="mb-3">
                            <label for="puissanceDin" class="form-label">Puissance DIN</label>
                            <input type="number" class="form-control" id="puissanceDin" name="puissanceDin"
                                placeholder="Indiquez la puissance DIN de votre voiture.">
                        </div>
                        <div class="mb-3">
                            <label for="matricule" class="form-label">Matricule</label>
                            <input type="text" class="form-control" id="matricule" name="matricule"
                                placeholder="Veuillez indiquer le numéro de matricule de votre voiture.">
                        </div>
                        <div class="mb-3">
                            <label for="crit_air" class="form-label">Crit’Air</label>
                            <select id="crit_air" name="crit_air" class="form-select">
                                {{-- <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option> --}}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="type_vehicule" class="form-label">Type de véhicule</label>
                            <select id="type_vehicule" name="type_vehicule" class="form-select">
                                {{-- <option>4x4</option>
                                <option>SUV</option>
                                <option>Berline</option>
                                <option>Break</option>
                                <option>Cabriolet</option>
                                <option>Citadine</option>
                                <option>Coupé</option>
                                <option>Monospace</option>
                                <option>Voiture société, commerciale</option>
                                <option>Autre</option> --}}
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Précédent</button>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
            </div>
            <div class="form-step">
                <h2>Contact</h2>
                <!-- location -->
                <div class="autocompleteInput input-container mb-3">
                    <input type="text" data-array="location" name="location" class="form-control"
                        placeholder="Location" readonly value="{{ request()->input('location') }}">
                    <ul class="dropdown-menu w-100 p-2">
                        <div class="search-container">
                            <input type="text" class="form-control search-input" placeholder="Rechercher un lieu">
                        </div>
                        <div class="model-list">
                            <!-- Location items will be dynamically inserted here -->
                        </div>
                    </ul>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" required
                        placeholder="Email pour vous contacter">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Numéro de téléphone *</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required
                        placeholder="Numéro de téléphone où vous pouvez être contacté">
                </div>
                <button type="button" class="btn btn-secondary" onclick="prevStep()">Précédent</button>
                <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </form>
    </div>
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
@endpush
@php
    $active = 'AddAnnounce'; // or any other section that should be active
@endphp
