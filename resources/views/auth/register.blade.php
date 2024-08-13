@extends('layouts.auth')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container d-flex justify-content-center align-items-center pt-5 mt-5 pb-5">
        <div class="col-md-8 col-lg-5 col-xl-4 col-sm-10">
            <div class="card p-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-center fontwbold darkcolor">Inscription</h5>
                    <p class="card-text text-center">Inscrivez-vous pour profiter de toutes nos fonctionnalités</p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="FullName" class="form-label">{{ __('Nom complet') }} *</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="FullName" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Adresse e-mail') }} *</label>
                            <input type="email" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Numéro de téléphone *</label>
                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                id="phoneNumber" placeholder="" required autocomplete="phone" autofocus
                                value="{{ old('phone') }}">
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="SellerType" class="form-label">Choisissez votre type *</label>
                            <select name="sellerType" id="SellerType"
                                class="form-select @error('sellerType') is-invalid @enderror" required autofocus>
                                <option selected value="particulier">Particulier</option>
                                <option value="professionnel">Professionnel</option>
                            </select>
                            @error('sellerType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="password" class="form-label">{{ __('Mot de passe') }} *</label>
                            <div class="input-group">
                                <input name="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password1"
                                    placeholder="Mot de passe">
                                <span class="input-group-text bgtransparent" id="toggle-password1">
                                    <iconify-icon id="show-icon1" icon="mdi:eye-outline"></iconify-icon>
                                    <iconify-icon id="hide-icon1" class="d-none" icon="mdi:eye-off-outline"></iconify-icon>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <div class="input-group">
                                <input name="password_confirmation" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror" id="password2"
                                    placeholder="Confirmer le mot de passe" required>
                                <span class="input-group-text bgtransparent" id="toggle-password2">
                                    <iconify-icon id="show-icon2" icon="mdi:eye-outline"></iconify-icon>
                                    <iconify-icon id="hide-icon2" class="d-none" icon="mdi:eye-off-outline"></iconify-icon>
                                </span>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="d-grid">
                            <button type="submit" class="primarybtn mt-3 d-block mx-auto">{{ __("S'inscrire") }}</button>
                        </div>
                        <div class="text-center mt-3">
                            <p>Vous avez déjà un compte ? <a href="{{ route('login') }}" class="fontw600">Connexion</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{--
         <br>
  <br>

  <div class="container d-flex justify-content-center align-items-center pt-5 mt-5 pb-5">
      <div class="col-md-8 col-lg-5 col-xl-4 col-sm-10">
          <div class="card p-4 shadow-sm">
              <div class="card-body">
                  <h5 class="card-title text-center fontwbold darkcolor">Inscription</h5>
                  <p class="card-text text-center">Inscrivez-vous pour profiter de toutes nos fonctionnalités</p>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="FullName" class="form-label">{{ __('Name') }} *</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="FullName" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                      <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email Address') }} *</label>
                          <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" required autocomplete="email" >
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                      </div>

                      <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Numéro de téléphone *</label>
                        <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phoneNumber" placeholder="" required autocomplete="phone" autofocus>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                      <div class="mb-3">
                        <label for="SellerType" class="form-label">Choisissez votre type *</label>
                        <select  name="sellerType" id="SellerType" class="form-select @error('sellerType') is-invalid @enderror" required  autofocus>
                          <option selected>Particulier</option>
                          <option>Professionnel</option>
                        </select>
                        @error('sellerType')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                      <div class="mb-2">
                          <label for="password" class="form-label">{{ __('Password') }} *</label>
                          <div class="input-group">
                              <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password1" placeholder="Mot de passe">
                              <span class="input-group-text bgtransparent" id="toggle-password1" >
                                  <iconify-icon id="show-icon1" icon="mdi:eye-outline"></iconify-icon>
                                  <iconify-icon  id="hide-icon1" class="d-none" icon="mdi:eye-off-outline"></iconify-icon>
                              </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                        </div>

                        <div class="">
                          <div class="input-group">
                              <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password2" placeholder="Confirmer le mot de passe" required>
                              <span class="input-group-text bgtransparent" id="toggle-password2">
                                  <iconify-icon id="show-icon2" icon="mdi:eye-outline"></iconify-icon>
                                  <iconify-icon  id="hide-icon2" class="d-none" icon="mdi:eye-off-outline"></iconify-icon>
                              </span>
                              @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                        </div>


                      <div class="d-grid">
                          <button type="submit" class="primarybtn mt-3 d-block mx-auto">{{ __('Register') }}</button>
                      </div>
                      <div class="text-center mt-3">
                          <p>Vous avez déjà un compte ? <a href="/login.html" class="fontw600"> Connexion</a></p>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
    --}}
@endsection
