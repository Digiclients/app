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
                    <label for="location" class="form-label">Localisation <span class="text-danger">*</span></label>
                    <input type="text" value="" class="form-control" id="location" name="location">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nom <span class="text-danger">*</span></label>
                    <input type="text" value="" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description <span
                            class="text-danger">*</span></label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" id="description" rows="6"
                        name="description" required placeholder=""></textarea>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                    <input type="text" value="" class="form-control" id="slug" name="slug">
                </div>

                <div class="mb-3">
                    <label for="website" class="form-label">Website </label>
                    <input type="url" value="" class="form-control" id="website" name="website">
                </div>

                <div class="mb-3">
                    <label for="street_address" class="form-label">Adresse <span class="text-danger">*</span></label>
                    <input type="url" value="" class="form-control" id="street_address" name="street_address">
                </div>

                <div class="mb-3">
                    <label for="siren" class="form-label">Siren </label>
                    <input type="url" value="" class="form-control" id="siren" name="siren">
                </div>

                <div class="mb-3">
                    <label for="couverture" class="form-label">Couverture </label>
                    <input type="file" value="" class="form-control" id="couverture" name="couverture">
                </div>


                <div class="d-grid">
                    <button type="submit" class="primarybtn mt-3 d-block mx-auto">Sauvegarder</button>
                </div>
            </form>
        </div>
    </div>
@endsection
