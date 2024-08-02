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
        <h5 class="font-weight-700 float-start text-uppercase">Mon profil</h5>
        <a href="{{ redirect()->back() }}" class="site-button right-arrow button-sm float-end">Back</a>
    </div>

    <div class="InContainer">
        <div class="py-5">
            <form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <input type="hidden" name="form_type" value="profile_update">
                <div class="mb-3">
                    <label for="FullName" class="form-label">Nom complet <span class="text-danger">*</span></label>
                    <input type="text" value="{{ $user->name }}" class="form-control" id="FullName" name="name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email <span class="text-danger">*</span></label>
                    <input type="email" value="{{ $user->email }}" class="form-control" id="email" name="email">
                </div>

                <div class="mb-3">
                    <label for="phoneNumber" class="form-label">Numéro de téléphone <span
                            class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phoneNumber" value="{{ $user->phone }}" name="phone">
                </div>

                <div class="mb-3">
                    <label for="SellerType" class="form-label">Choisissez votre type <span
                            class="text-danger">*</span></label>
                    <select id="SellerType" class="form-select" name="sellerType">
                        <option value="particulier" {{ $user->sellerType == 'particulier' ? 'selected' : '' }}>Particulier
                        </option>
                        <option value="professionnel" {{ $user->sellerType == 'professionnel' ? 'selected' : '' }}>
                            Professionnel</option>
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="primarybtn mt-3 d-block mx-auto">Sauvegarder</button>
                </div>
            </form>
        </div>

        <hr class="LineHR">
        <div class="py-4">

            <h3 class="font18 darkcolor py-2">Mot de passe :</h3>
            <form action="{{ route('profile.store') }}" method="POST">
                @csrf
                <input type="hidden" name="form_type" value="password_update">
                <div class="mb-2">
                    <label for="password1" class="form-label">Ancien mot de passe <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password1" name="current_password"
                            placeholder="Mot de passe">
                        <span class="input-group-text bgtransparent" id="toggle-password1">
                            <iconify-icon id="show-icon1" icon="mdi:eye-outline"></iconify-icon>
                            <iconify-icon id="hide-icon1" class="d-none" icon="mdi:eye-off-outline"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="password2" class="form-label">Nouveau mot de passe <span
                            class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password2" name="password"
                            placeholder="Mot de passe">
                        <span class="input-group-text bgtransparent" id="toggle-password2">
                            <iconify-icon id="show-icon2" icon="mdi:eye-outline"></iconify-icon>
                            <iconify-icon id="hide-icon2" class="d-none" icon="mdi:eye-off-outline"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="">
                    <div class="input-group">
                        <input type="password" class="form-control" id="password3" name="password_confirmation"
                            placeholder="Confirmer le mot de passe">
                        <span class="input-group-text bgtransparent" id="toggle-password3">
                            <iconify-icon id="show-icon3" icon="mdi:eye-outline"></iconify-icon>
                            <iconify-icon id="hide-icon3" class="d-none" icon="mdi:eye-off-outline"></iconify-icon>
                        </span>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="primarybtn mt-3 d-block mx-auto">Sauvegarder</button>
                </div>
            </form>

        </div>

    </div>
@endsection
