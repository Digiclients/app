@extends('layouts.profile.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endforeach
    @endif
    <div>
        <h5 class="font-weight-700 float-start text-uppercase">Mon boutique</h5>
        <a href="{{ redirect()->back() }}" class="site-button right-arrow button-sm float-end">Back</a>
    </div>

    <div class="InContainer">
        <div class="py-5">
            {{-- <form action="{{ route('profile.boutique.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="location" class="form-label">Localisation <span class="text-danger">*</span></label>
                    <div class="autocompleteInput input-container col-sm position-relative">
                        <input type="text" data-array="location" name="location"
                            class="form-control @error('location') is-invalid @enderror" placeholder="localisation" readonly
                            value="{{ old('location') ?: ($boutique ? $boutique->localization->localization : '') }}">
                        <iconify-icon icon="material-symbols:close" width="24" height="24"
                            class="close-icon position-absolute"></iconify-icon>
                        <iconify-icon icon="mingcute:down-fill" width="24" height="24"
                            class="down-icon position-absolute"></iconify-icon>
                        <ul class="dropdown-menu w-100 " style="padding: 0;">
                            <div class="sticky-container">
                                <div class="search-container">
                                    <input id="searchCities" type="text" class="form-control search-input"
                                        placeholder="Rechercher un lieu">
                                </div>
                            </div>

                            <div id="searchResults" class="model-list" style="padding: 10px;">

                            </div>
                        </ul>
                        @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nom <span class="text-danger">*</span></label>
                    <input type="text" value="{{ old('name') ?: ($boutique ? $boutique->name : '') }}" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Saisissez nom de voter votre boutique">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" id="description" rows="6"
                        name="description" required placeholder="Saisissez description de voter votre boutique">value="{{ old('description') ?: ($boutique ? $boutique->description : '') }}"</textarea>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                    <input type="text" value="{{ old('slug') ?: ($boutique ? $boutique->slug : '') }}" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="Saisissez un identifiant unique pour l'URL de la boutique, par exemple « lauto-boutique»">
                </div>

                <div class="mb-3">
                    <label for="website" class="form-label">Website </label>
                    <input type="url" value="{{ old('website') ?: ($boutique ? $boutique->website : '') }}" class="form-control @error('website') is-invalid @enderror" id="website" name="website" placeholder="Saisissez website de voter votre boutique">
                </div>

                <div class="mb-3">
                    <label for="street_address" class="form-label">Adresse <span class="text-danger">*</span></label>
                    <input type="text" value="{{ old('street_address') ?: ($boutique ? $boutique->street_address : '') }}" class="form-control @error('street_address') is-invalid @enderror" id="street_address" name="street_address" placeholder="Saisissez adresse de voter votre boutique">
                </div>

                <div class="mb-3">
                    <label for="siren" class="form-label">Siren </label>
                    <input type="text" value="{{ old('siren') ?: ($boutique ? $boutique->siren : '') }}" class="form-control @error('siren') is-invalid @enderror" id="siren" name="siren" placeholder="Saisissez siren de voter votre entrepsise">
                </div>

                <div class="mb-3">
                    <label for="couverture" class="form-label">Couverture </label>
                    <input type="file" class="form-control @error('couverture') is-invalid @enderror" id="couverture" name="couverture" accept="image/png, image/gif, image/jpeg">
                </div>


                <div class="d-grid">
                    <button type="submit" class="primarybtn mt-3 d-block mx-auto">Sauvegarder</button>
                </div>
            </form> --}}
            <form action="{{ $boutique ? route('profile.boutique.update', $boutique->id) : route('profile.boutique.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @if ($boutique)
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="location" class="form-label">Localisation <span class="text-danger">*</span></label>
                    <div class="autocompleteInput input-container col-sm position-relative">
                        <input type="text" data-array="location" name="location"
                            class="form-control @error('location') is-invalid @enderror" placeholder="localisation" readonly
                            value="{{ old('location') ?: ($boutique ? $boutique->localization->localization : '') }}">
                        <iconify-icon icon="material-symbols:close" width="24" height="24"
                            class="close-icon position-absolute"></iconify-icon>
                        <iconify-icon icon="mingcute:down-fill" width="24" height="24"
                            class="down-icon position-absolute"></iconify-icon>
                        <ul class="dropdown-menu w-100 " style="padding: 0;">
                            <div class="sticky-container">
                                <div class="search-container">
                                    <input id="searchCities" type="text" class="form-control search-input"
                                        placeholder="Rechercher un lieu">
                                </div>
                            </div>

                            <div id="searchResults" class="model-list" style="padding: 10px;">
                                <!-- Location items will be dynamically inserted here -->
                            </div>
                        </ul>
                        @error('location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nom <span class="text-danger">*</span></label>
                    <input type="text" value="{{ old('name') ?: ($boutique ? $boutique->name : '') }}"
                        class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                        placeholder="Saisissez nom de votre boutique">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" id="description" rows="6"
                        name="description" placeholder="Saisissez description de votre boutique">{{ old('description') ?: ($boutique ? $boutique->description : '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                    <input type="text" value="{{ old('slug') ?: ($boutique ? $boutique->slug : '') }}"
                        class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                        placeholder="Saisissez un identifiant unique pour l'URL de la boutique, par exemple « lauto-boutique»">
                </div>

                <div class="mb-3">
                    <label for="website" class="form-label">Website </label>
                    <input type="url" value="{{ old('website') ?: ($boutique ? $boutique->website : '') }}"
                        class="form-control @error('website') is-invalid @enderror" id="website" name="website"
                        placeholder="Saisissez le site web de votre boutique">
                </div>

                <div class="mb-3">
                    <label for="street_address" class="form-label">Adresse <span class="text-danger">*</span></label>
                    <input type="text"
                        value="{{ old('street_address') ?: ($boutique ? $boutique->street_address : '') }}"
                        class="form-control @error('street_address') is-invalid @enderror" id="street_address"
                        name="street_address" placeholder="Saisissez l'adresse de votre boutique">
                </div>

                <div class="mb-3">
                    <label for="siren" class="form-label">Siren </label>
                    <input type="text" value="{{ old('siren') ?: ($boutique ? $boutique->siren : '') }}"
                        class="form-control @error('siren') is-invalid @enderror" id="siren" name="siren"
                        placeholder="Saisissez le siren de votre entreprise">
                </div>

                <div class="mb-3">
                    <label for="couverture" class="form-label">Couverture </label>
                    <input type="file" class="form-control @error('couverture') is-invalid @enderror" id="couverture"
                        name="couverture" accept="image/png, image/gif, image/jpeg">
                </div>

                <div class="d-grid">
                    <button type="submit"
                        class="primarybtn mt-3 d-block mx-auto">{{ $boutique ? 'Update Boutique' : 'Create Boutique' }}</button>
                </div>
            </form>

        </div>
    </div>


    <script>
        let autocompleteData = {
            location: [],
        };
        document.addEventListener("DOMContentLoaded", () => {
            axios
                .get('{{ route('getLocations') }}')
                .then((responselocalization) => {

                    autocompleteData = {
                        location: [...new Set(responselocalization.data.map((item) => item
                            .Localization))],
                    };

                    // AutocompleteInput initialization
                    document.querySelectorAll(".autocompleteInput").forEach((container) => {
                        CreateAutocompleteInput(container);
                    });

                }).catch((error) => {
                    console.error("Error fetching data:", error);
                });
        });




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
@endsection
