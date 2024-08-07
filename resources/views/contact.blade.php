@extends('layouts.app')
@push('third_party_stylesheets')
    <style>
        .MiniHeader {
            /* background-position: center; */
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
            margin-top: 56px;
        }

        .MiniHeader .MiniHeaderLayer {
            background-color: var(--darkcolorTransparent);

        }
    </style>
@endpush

@section('content')
    <!-- ################  START MiniHeader ################ -->

    <section class="MiniHeader  container-fluid row justify-content-center"
        style="background-image:url(https://a-propos.lacentrale.fr/wp-content/uploads/sites/3/2024/03/Capture-decran-2024-03-14-a-12.42.52-1-scaled.jpg)">
        <div class="MiniHeaderLayer w100 py-5  text-center">

            <br>
            <br>
            <br>
            <h1 class="text-center font30 whitecolor my-4">
                Contactez-nous
            </h1>


            <br>
            <br>
            <br>
        </div>
    </section>

    <!-- ################  END MiniHeader ################ -->





    <br><br>

    <section class="contactus container mt-3 py-5">

        <div class="row">

            <div class="col-md-6 pe-3">

                <h2 class="primarycolor font35 fontwbold ">Envoyez-nous un message .</h2>

                <p class="pt-3 darkcolor font18 fontw600 lh-lg mb-4">

                    Vous avez des questions ou des suggestions ? N'hésitez pas à nous contacter. Nous sommes toujours ravis
                    d'échanger avec nos utilisateurs et de vous aider à tirer le meilleur parti de votre expérience avec
                    AutoPrix.

                </p>


                <div class="d-flex py-1 gap-2">
                    <iconify-icon icon="ph:phone-bold" width="30" style="width: 30px;height:30px"
                        class="darkcolor"></iconify-icon>

                    <div class="">
                        <h4 class="darkcolor font18 mt-1  fontw600">0651530277</h4>
                    </div>
                </div>

                <div class="d-flex py-1 gap-2">
                    <iconify-icon icon="ic:outline-email" width="30" style="width: 30px;height:30px"
                        class="darkcolor"></iconify-icon>

                    <div class="">
                        <h4 class="darkcolor font18 mt-1 fontw600">contact@lautoprix.fr</h4>
                    </div>
                </div>


                <div class="d-flex pt-3 pb-4 gap-4">
                    <a href="">
                        <iconify-icon icon="pajamas:twitter" class="darkcolor HoverColorToPrimary"
                            height="30px"></iconify-icon>
                    </a>
                    <a href="">
                        <iconify-icon icon="mdi:instagram" class="darkcolor HoverColorToPrimary"
                            height="30px"></iconify-icon>
                    </a>
                    <a href="">
                        <iconify-icon icon="mdi:youtube" class="darkcolor HoverColorToPrimary"
                            height="30px"></iconify-icon>
                    </a>
                    <a href="">
                        <iconify-icon icon="mdi:linkedin" class="darkcolor HoverColorToPrimary"
                            height="30px"></iconify-icon>
                    </a>
                </div>






            </div>


            <div class="col-md-6 pb-5">
                @if (session('success'))
                    <div role="alert" class="alert alert-success col-12 text-center">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div role="alert" class="alert alert-danger col-12 text-center">
                        {{ session('error') }}
                    </div>
                @endif








                <form action="{{ route('contact.send') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 px-1">
                            <input name="name" type="text"
                                class="form-control py-3 mb-2 @error('name') is-invalid @enderror" placeholder="Votre nom"
                                aria-label="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mx-auto px-1">
                            <input name="email" type="email"
                                class="form-control py-3 mb-2 @error('email') is-invalid @enderror"
                                placeholder="Votre adresse e-mail" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <textarea name="message" cols="40" rows="10"
                        class=" mt-2 mb-2  form-control @error('message') is-invalid @enderror" aria-invalid="false"
                        placeholder="Écrivez un message">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <br>

                    <button class="primarybtn mt-2 mx-auto" type="submit">Envoyer le message</button>
                </form>


            </div>



        </div>





    </section>




























    {{-- 

    <!-- ################  Start about ################ -->

    <section class="ADS px-4 px-xl-0 pt-4 mt-4 container-fluid row justify-content-center" style="width: 98%;margin: 0 auto;">

        <div class="col-lg-12 col-xl-11 col-xxl-9  py-4 bgLight rounded row px-5 text-center">

        <h2 class="primarycolor font35 fontw900  pt-4 mb-4">Bienvenue chez LautoPrix !</h2>
        <p class="darkcolor font18 fontw600  mb-4">
            Nous sommes une équipe passionnée d'experts en technologie et en automobiles, déterminés à simplifier et optimiser vos transactions automobiles. Chez LautoPrix, notre mission est claire : vous fournir un outil innovant et fiable pour évaluer la valeur de votre véhicule avec précision.
        </p>
        <div>

        </div>


        </div>
    </section>
    <!-- ################  END about ################ -->

 --}}
























    <br><br>
@endsection



@push('third_party_scripts')
@endpush
