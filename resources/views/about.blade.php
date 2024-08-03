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

    <section class="MiniHeader  container-fluid row justify-content-center" style="background-image:url(https://a-propos.lacentrale.fr/wp-content/uploads/sites/3/2024/03/Capture-decran-2024-03-14-a-12.42.52-1-scaled.jpg)">
        <div class="MiniHeaderLayer w100 py-5  text-center">

            <br>
            <br>
            <br>
            <h1 class="text-center font30 whitecolor my-4">
                Qui sommes-nous ? 
            </h1>


            <br>
            <br>
            <br>
        </div>
    </section>

    <!-- ################  END MiniHeader ################ -->




    <!-- ################  END about ################ -->

    <section class="ADS px-4 px-xl-0 pt-4 mt-4 container-fluid row justify-content-center" style="width: 98%;margin: 0 auto;">

        <div class="col-lg-12 col-xl-11 col-xxl-9  py-4 bgLight rounded row px-5 text-center">

        <h2 class="primarycolor font35 fontw900  pt-4 mb-4">Bienvenue chez AutoPrix !</h2>
        <p class="darkcolor font18 fontw600  mb-4">
            Nous sommes une équipe passionnée d'experts en technologie et en automobiles, déterminés à simplifier et optimiser vos transactions automobiles. Chez AutoPrix, notre mission est claire : vous fournir un outil innovant et fiable pour évaluer la valeur de votre véhicule avec précision.
        </p>
        <div>

        </div>


        </div>
    </section>
    <!-- ################  END about ################ -->






    <section class="SectionsVision py-5 my-5 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">
    
                <div class="row">
                    <div class="col-lg-6 pe-4 mb-lg-2 mb-4">
                            <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&amp;w=2671&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <div class="col-lg-6">

                        <h2 class="darkcolor fontwbold font30 mb-4 mt-4 CustomleftBorder">Notre Vision</h2>

                        <p class="darkcolor font18 fontw600 lh-lg mb-4">
                            Chez AutoPrix, nous croyons que chaque transaction automobile devrait être transparente et équitable. Que vous soyez vendeur ou acheteur, vous méritez une estimation précise et actualisée pour prendre des décisions éclairées. Nous avons créé AutoPrix pour vous offrir cette clarté, en utilisant les dernières technologies d'analyse de données de sites d’annonces les plus connus en France pour vous fournir les informations les plus pertinentes.
                        </p>
                        

                    </div>

                </div>





            </div>

    </section>





    
    <section class="WhatWeDO w-00  mb-5">

        <div class="row rounded">
        
          
        
          <div class="col-md-6   innerbg4" style="background-image: url(https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&amp;w=2671&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);background-position: center;background-repeat: no-repeat;background-size: cover;">
          
          <div class="bgdarkcolorTransparent h-100 w-100 px-5 py-5">
        <div class="my-5"></div>
        
          </div>
          
          </div>
        
        
          <div class="col-md-6 px-2 py-2 bgprimary">
        
        
            <h2 class="fontwbold font30 mx-4 mb-4 mt-5 whitecolor"> Ce que nous faisons ?</h2>
        
        
            <p class="whitecolor py-3 mx-4 lh-lg font18 fontw600 lh-lg mb-4">
                Notre solution analyse des milliers d'annonces dans toute la France pour vous donner une évaluation instantanée du prix moyen de vente de votre véhicule ou de votre prochain achat. En entrant simplement les détails de votre véhicule - marque, modèle, année, kilométrage – vous accédez à une estimation fiable qui vous aide à vendre au meilleur prix ou à acheter en toute confiance.

        
            </p>

            
          </div>
        
        
        
        
        
        </div>
        
     
  </section>




    <section class="SectionsTeam py-5 my-5 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">
    
                <div class="row">
  
                    <div class="col-lg-6  pe-4">

                

                        <h2 class="darkcolor fontwbold font30 mb-4 mt-4 CustomleftBorder">Pourquoi choisir AutoPrix ?</h2>

                        <ul class="darkcolor fontw600 font18 list-unstyled">
                            <li> <b class="primarycolor fontwbold">Précision</b> : Des données réelles pour des évaluations exactes.</li>
                            <li> <b class="primarycolor fontwbold">Simplicité</b> : Une interface facile à utiliser pour des résultats rapides.</li>
                            <li> <b class="primarycolor fontwbold">Confiance</b> : Des informations transparentes pour des décisions informées.</li>
                          </ul>

                        <p class="darkcolor font18 fontw600 lh-lg mb-4">
                            Nous sommes là pour vous accompagner à chaque étape de votre transaction automobile. Essayez AutoPrix aujourd'hui et découvrez la différence que fait une évaluation fiable et précise!
                        </p>
                        

                    </div>

                    <div class="col-lg-6 pe-4 mb-lg-2 mb-4">
                        <img class="img-fluid rounded" src="https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&amp;w=2671&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                </div>


                </div>





            </div>

    </section>





    <section class="SectionsTeam py-4 my-4 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">
    
                <div class="row">
  
                    <div class="col-lg-6 pe-4">

                        <h2 class="darkcolor fontwbold font30 mb-4 mt-4 CustomleftBorder">Notre Équipe</h2>

                        <p class="darkcolor font18 fontw600 lh-lg mb-4">
                            Nous sommes une équipe dévouée de développeurs, de data scientists et d'experts automobiles. Nous travaillons sans relâche pour vous offrir une expérience utilisateur fluide et intuitive. 
                        </p>
                        

                    </div>

                    <div class="col-lg-6">

                        <h2 class="darkcolor fontwbold font30 mb-4 mt-4 CustomleftBorder">Contactez-nous</h2>

                        <p class="darkcolor font18 fontw600 lh-lg mb-4">
                            Vous avez des questions ou des suggestions ? N'hésitez pas à nous contacter. Nous sommes toujours ravis d'échanger avec nos utilisateurs et de vous aider à tirer le meilleur parti de votre expérience avec AutoPrix.
                        </p>
                        
                        <div>
            <a href="/" class="primarybtn  my-3 minibtn">Contactez-nous</a>

                        </div>

                    </div>

                </div>





            </div>

    </section>







  
  
  
  
  
  </section>









<br><br>


@endsection



@push('third_party_scripts')

@endpush
