@extends('layouts.auth')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    <br>
    <br>
    <div class="container d-flex justify-content-center align-items-center pt-5 mt-5 pb-5">
        <div class="col-md-8 col-lg-8 col-xl-6 col-sm-12">
            <div class="card p-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-center fontwbold darkcolor">Bienvenue</h5>
                    <p class="card-text text-center">connectez-vous pour profiter de toutes nos fonctionnalités</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password1" required
                                    autocomplete="current-password">
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
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-end pt-1 fontw600 font16 text-right d-block">{{ __('Forgot Your Password?') }}</a>
                        @endif
                        <div class="d-grid">
                            <button type="submit" class="primarybtn mt-3 d-block mx-auto">{{ __('Login') }}</button>
                        </div>
                        <div class="text-center mt-3">
                            <p>Vous n'avez pas de compte ? <a href="{{ route('register') }}"
                                    class="fontw600">Inscription</a>
                            </p>
                            <p><a href="#" class="fontw600">Je n'ai pas de mot de passe</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{--
        <div class="container d-flex justify-content-center align-items-center pt-5 mt-5 pb-5">
    <div class="col-md-8 col-lg-8 col-xl-6 col-sm-12">
      <div class="card p-4 shadow-sm">
        <div class="card-body">
          <h5 class="card-title text-center fontwbold darkcolor">Bienvenue</h5>
          <p class="card-text text-center">connectez-vous pour profiter de toutes nos fonctionnalités</p>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="">
              <label for="password" class="form-label">{{ __('Password') }}</label>
              <div class="input-group">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password1" required autocomplete="current-password">
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
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-end pt-1 fontw600 font16 text-right d-block">{{ __('Forgot Your Password?') }}</a>
            @endif
            <div class="d-grid">
              <button type="button" class="primarybtn mt-3 d-block mx-auto">{{ __('Login') }}</button>
            </div>
            <div class="text-center mt-3">
              <p>Vous n'avez pas de compte ? <a href="/register.html" class="fontw600">Inscription</a></p>
              <p><a href="#" class="fontw600">Je n'ai pas de mot de passe</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    --}}
@endsection
