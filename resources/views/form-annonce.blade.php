<form action="{{ isset($annonce) ? route('annonce.update', $annonce->id) : route('store-annonce') }}" id="multi-step-form" method="POST">
    @csrf
    @if(isset($annonce))
        @method('PUT')
    @endif
    <div class="form-step form-step-active">
        <h2 class="font20 fontw600 primarycolor primaryfont mb-3">Annonce</h2>
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('input.title') }} <span
                    class="text-danger">*</span></label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                name="title" placeholder="{{ __('input.placeholder_title') }}" required
                value="{{ old('title', $annonce->title ?? '') }}">
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
                placeholder="{{ __('input.placeholder_brand') }}" readonly value="{{ old('marque', $categoryDetails['parent_category_name'] ?? '') }}">
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
                placeholder="{{ __('input.placeholder_model') }}" readonly value="{{ old('modele', $categoryDetails['category_name'] ?? '') }}">
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
        <div class="py-2"></div>
        <button type="button" class="primarybtn minibtn me-0 me-md-2 my-1" onclick="nextStep()">{{ __('input.next') }}</button>
    </div>
    <div class="form-step">
        <h2 class="font20 fontw600 primarycolor primaryfont mb-3">{{ __('input.details') }}</h2>
        <div class="mb-3">
            <label for="price" class="form-label">{{ __('input.price') }} <span
                    class="text-danger">*</span></label>
            <input type="number" class="form-control @error('price') is-invalid @enderror"
                id="price" name="price" required placeholder="{{ __('input.placeholder_price') }}"
                value="{{ old('price', $annonce->price ?? '') }}">
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
                name="description" required placeholder="{{ __('input.placeholder_description') }}">{{ old('description', $annonce->description ?? '') }}</textarea>
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="py-2"></div>

        <button type="button" class="darkbtn minibtn me-0 me-md-2 my-1"
            onclick="prevStep()">{{ __('input.prev') }}</button>
        <button type="button" class="primarybtn minibtn me-0 me-md-2 my-1"
            onclick="nextStep()">{{ __('input.next') }}</button>
    </div>
    <div class="form-step">
        <h2 class="font20 fontw600 primarycolor primaryfont mb-3">{{ __('input.criteres') }}</h2>
        <div class="row">
            <div class="col-md-6 pe-0 pe-md-2">
                <div class="mb-3">
                    <label for="annee_modele" class="form-label">{{ __('input.annee_model') }} <span
                            class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('annee_modele') is-invalid @enderror"
                        id="annee_modele" name="annee_modele"
                        placeholder="{{ __('input.annee_model_placeholder') }} "
                        value="{{ old('annee_modele', $attributesData['annee_modele']['value'] ?? '') }}">
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
                        value="{{ old('date_premiere_mise_en_circulation', $attributesData['date_premiere_mise_en_circulation']['value'] ?? '') }}">
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
                        class="form-select @error('carburant') is-invalid @enderror" required >
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
                        placeholder="{{ __('input.km_placeholder') }}"
                        value="{{ old('kilometrage', $attributesData['kilometrage']['value'] ?? '') }}">
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
                        class="form-select @error('permis') is-invalid @enderror">
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
                        placeholder="Indiquez la puissance fiscale de votre voiture." value="{{ old('puissance_fiscale', $attributesData['puissance_fiscale']['value'] ?? '') }}">
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
                        placeholder="Indiquez la puissance DIN de votre voiture." value="{{ old('puissance_DIN', $attributesData['puissance_DIN']['value'] ?? '') }}">
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
                        placeholder="{{ __('input.matricule_placeholder') }}" value="{{ old('matricule_placeholder', $attributesData['matricule']['value'] ?? '') }}">
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
        <div class="py-2"></div>

        <button type="button" class="darkbtn minibtn me-0 me-md-2 my-1"
            onclick="prevStep()">{{ __('input.prev') }}</button>
        <button type="button" class="primarybtn minibtn me-0 me-md-2 my-1"
            onclick="nextStep()">{{ __('input.next') }}</button>
    </div>
    <div class="form-step">
        <h2 class="font20 fontw600 primarycolor primaryfont mb-3">{{ __('input.contact') }}</h2>
        <!-- location -->
        <div class="autocompleteInput input-container mb-3">
            <label for="matricule" class="form-label">{{ __('input.location') }} <span
                    class="text-danger">*</span></label>
            <input type="text" data-array="location" name="location"
                class="form-control @error('location') is-invalid @enderror"
                placeholder="{{ __('input.location_placeholder') }}" readonly
                value="{{ old('location', $annonce->localization->localization ?? '') }}">
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
                placeholder="{{ __('input.email_placeholder') }}" value="{{ old('email', $annonce->email ?? '') }}">
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
                placeholder="{{ __('input.phone_placeholder') }}" value="{{ old('phone', $annonce->phone ?? '') }}">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="py-2"></div>


        <button type="button" class="darkbtn minibtn me-0 me-md-2 my-1"
            onclick="prevStep()">{{ __('input.prev') }}</button>
        <button type="submit" class="successbtn minibtn me-0 me-md-2 my-1">{{ isset($annonce) ? __('Mise à jour') : __('input.next') }}</button>
        {{-- <button type="submit" class="btn btn-primary">{{ __('input.next') }}</button> --}}
    </div>
</form>
