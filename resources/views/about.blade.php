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
                À propos de LautoPrix
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

            <h2 class="primarycolor font35 fontw900  pt-4 mb-4">Bienvenue chez LautoPrix !</h2>
            <p class="darkcolor font18 fontw600  mb-4">
                Nous sommes une équipe d'experts passionnés par la technologie et l'automobile, dédiés à rendre vos
                transactions de véhicules plus simples et efficaces.
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
                    <img class="img-fluid rounded"
                        src="{{ asset('assets/images/picture3.jpeg') }}"
                        alt="">
                </div>

                <div class="col-lg-6">

                    <h2 class="darkcolor fontwbold font30 mb-4 mt-4 CustomleftBorder">Notre Mission</h2>

                    <p class="darkcolor font18 fontw600 lh-lg mb-4">
                        Notre mission est de vous offrir un outil innovant pour évaluer précisément la valeur de votre
                        véhicule. Chez LautoPrix, nous valorisons la transparence et l'équité dans chaque transaction, que
                        vous soyez vendeur ou acheteur. Avec notre service, vous obtenez une estimation fiable et à jour qui
                        vous aide à prendre des décisions avisées.
                    </p>


                </div>

            </div>





        </div>

    </section>






    <section class="WhatWeDO w-00  mb-5">

        <div class="row rounded">



            <div class="col-md-6   innerbg4"
                style="background-image: url(https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&amp;w=2671&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);background-position: center;background-repeat: no-repeat;background-size: cover;">

                <div class="bgdarkcolorTransparent h-100 w-100 px-5 py-5">
                    <div class="my-5">
                        <div class="d-block d-md-none ">

                            <br><br><br><br><br>
                        </div>


                    </div>

                </div>

            </div>


            <div class="col-md-6 px-2 py-2 bgprimary">


                <h2 class="fontwbold font30 mx-4 mb-4 mt-5 whitecolor">Comment ça marche ?</h2>


                <p class="whitecolor py-3 mx-4 lh-lg font18 fontw600 lh-lg mb-4">
                    Notre technologie analyse des milliers d'annonces à travers la France pour vous fournir une estimation
                    instantanée du prix de vente moyen. Il vous suffit d'entrer quelques détails sur votre véhicule —
                    marque, modèle, année, kilométrage — pour recevoir une évaluation précise, facilitant ainsi la vente au
                    juste prix ou l'achat en toute confiance.

                </p>


            </div>





        </div>


    </section>




    <section class="SectionsTeam py-5 my-5 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">

            <div class="row">

                <div class="col-lg-6  pe-4">



                    <h2 class="darkcolor fontwbold font30 mb-4 mt-4 CustomleftBorder">Pourquoi choisir LautoPrix ? </h2>

                    <ul class="darkcolor fontw600 font18 list-unstyled">
                        <li> <b class="primarycolor fontw900">Précision</b> : Nous utilisons des données de marché réelles
                            pour garantir des évaluations exactes.</li>
                        <li> <b class="primarycolor fontw900">Simplicité</b> : Notre plateforme est conçue pour être
                            intuitive et facile à utiliser.
                        </li>
                        <li> <b class="primarycolor fontw900">Confiance</b> : Nous vous fournissons des informations claires
                            pour que vos décisions soient bien informées.
                        </li>
                    </ul>

                    {{-- <p class="darkcolor font18 fontw600 lh-lg mb-4">
                            Nous sommes là pour vous accompagner à chaque étape de votre transaction automobile. Essayez LautoPrix aujourd'hui et découvrez la différence que fait une évaluation fiable et précise!
                        </p>
                         --}}

                </div>

                <div class="col-lg-6 pe-4 mb-lg-2 mb-4">
                    <img class="img-fluid rounded"
                        src="{{ asset('assets/images/vrrr.webp') }}"
                        alt="">
                </div>


            </div>





        </div>

    </section>




    <section class="SectionsTeam pb-3 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">


            <div>
                <h2 class="darkcolor text-center fontwbold font30">Nos Utilisateurs</h2>

                <p class="darkcolor font18 fontw600 text-center mt-4  mb-4">
                    Que vous soyez un acheteur, un vendeur, un passionné d'automobile, un concessionnaire ou une assurance,
                    LautoPrix a été conçu pour répondre à vos besoins spécifiques.
                </p>

            </div>


            <div class="row">



                <div class="col-md-6 px-2">

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA1" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseA1">
                                    Pour les Acheteurs :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Vous cherchez une voiture d'occasion et vous voulez connaître le prix moyen sans passer
                                    des heures à parcourir toutes les annonces Leboncoin ? Entrez simplement les détails de
                                    la voiture que vous recherchez et obtenez une estimation fiable et rapide du prix du
                                    marché actuel. Achetez en toute confiance grâce à LautoPrix.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA2" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA2">
                                    Pour les Vendeurs :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Vous voulez vendre votre voiture rapidement et au meilleur prix ? Notre outil vous aide
                                    à obtenir une estimation précise de la valeur de votre véhicule en fonction des prix
                                    réels du marché, contrairement à l'argus qui peut ne pas refléter la réalité. Entrez les
                                    informations de votre voiture et vendez-la au juste prix.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA3" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA3">
                                    Pour les Passionnés d'Automobile :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Vous aimez rester informé des tendances du marché automobile et des prix des véhicules ?
                                    Notre site vous fournit des données actualisées et pertinentes pour suivre les
                                    évolutions du marché. Ne manquez jamais une tendance avec LautoPrix.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA4" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA4">
                                    Pour les Concessionnaires :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Évaluez rapidement et précisément la valeur des véhicules que vous achetez ou vendez.
                                    Obtenez des estimations précises pour fixer des prix compétitifs, optimisez votre stock
                                    et offrez à vos clients une transparence totale sur les prix.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA5" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA5">
                                    Pour les Assurances :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA5" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Évaluez la valeur des véhicules de vos clients de manière rapide et précise. Utilisez
                                    notre outil pour calculer les primes d'assurance, estimer les indemnisations en cas de
                                    sinistre et améliorer la satisfaction client avec des informations transparentes et
                                    justes.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA6" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA6">
                                    Pour les Comptables et Experts-comptables :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA6" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    LautoPrix fournit des estimations précises de la valeur des véhicules, ce qui est
                                    crucial pour l'évaluation des actifs et la comptabilité. Facilitez vos processus de
                                    bilan et d’audit avec des données actuelles et fiables sur le marché des véhicules
                                    d'occasion.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA7" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA7">
                                    Pour les Loueurs de Voitures :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA7" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Obtenez des informations précises sur la dépréciation et la valeur marchande de votre
                                    flotte de véhicules. Cela vous permet de fixer des prix de location compétitifs et de
                                    maximiser la rentabilité tout en offrant des tarifs justes à vos clients.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA8" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA8">
                                    Pour les Sites de Petites Annonces :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA8" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Intégrez les données de LautoPrix pour fournir des évaluations de prix précises à vos
                                    utilisateurs, améliorant ainsi leur expérience et augmentant leur confiance dans les
                                    transactions réalisées via votre plateforme.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA9" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA9">
                                    Pour les Sociétés de Crédit et de Leasing :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA9" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Utilisez les estimations précises de LautoPrix pour évaluer la valeur des véhicules en
                                    leasing et déterminer les conditions de crédit. Cela permet de proposer des offres plus
                                    justes et d'améliorer la satisfaction client.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA10" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA10">
                                    Pour les Flottes d'Entreprises :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA10" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les gestionnaires de flotte peuvent utiliser LautoPrix pour évaluer la valeur de leurs
                                    véhicules et planifier les rotations de flotte, maximisant ainsi la valeur de revente et
                                    minimisant les coûts d'exploitation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseA11" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseA11">
                                    Pour les Organismes de Formation en Automobile :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseA11" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les écoles de commerce automobile et les centres de formation peuvent utiliser LautoPrix
                                    comme outil pédagogique pour enseigner les réalités du marché des véhicules d'occasion
                                    et la dynamique des prix.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-md-6 px-2 mt-4 mt-md-0 ">

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB1" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseB1">
                                    Pour les Investisseurs et Analyses de Marché :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Les analystes financiers et les investisseurs dans le secteur automobile peuvent
                                    utiliser les données de LautoPrix pour mieux comprendre les tendances du marché et
                                    prendre des décisions d'investissement informées.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB2" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB2">
                                    Services de Police et Forces de l'Ordre :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les forces de l'ordre peuvent utiliser les évaluations précises des véhicules pour
                                    enquêter sur les fraudes automobiles et les vols de véhicules, en comparant les prix
                                    réels du marché avec les valeurs déclarées.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB3" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB3">
                                    Organisations de Protection des Consommateurs :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les associations de consommateurs peuvent utiliser les données de LautoPrix pour
                                    informer et protéger les consommateurs, en leur fournissant des évaluations justes et
                                    basées sur les prix réels du marché des véhicules d'occasion.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB4" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB4">
                                    Assureurs et Réassureurs :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    En plus des compagnies d'assurance, les réassureurs peuvent utiliser les évaluations
                                    précises pour mieux comprendre les risques associés aux véhicules assurés et pour
                                    déterminer les primes et indemnisations appropriées.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB5" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB5">
                                    Courtiers en Assurance :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB5" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les courtiers en assurance peuvent utiliser LautoPrix pour fournir à leurs clients des
                                    estimations précises de la valeur de leurs véhicules, leur permettant ainsi de proposer
                                    des couvertures d'assurance adaptées et compétitives.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB6" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB6">
                                    Banques et Institutions Financières :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB6" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les banques et institutions financières peuvent utiliser les données pour évaluer la
                                    valeur des véhicules utilisés comme garanties pour les prêts automobiles, réduisant
                                    ainsi les risques de crédit.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB7" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB7">
                                    Évaluateurs et Experts Judiciaires :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB7" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les évaluateurs et experts judiciaires peuvent utiliser les évaluations de LautoPrix
                                    pour déterminer la valeur des véhicules dans le cadre de litiges juridiques, de
                                    successions ou de divorces.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB8" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB8">
                                    Centrales d'Achats Automobiles :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB8" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les centrales d'achats automobiles peuvent utiliser les données pour négocier les prix
                                    des véhicules en gros et optimiser leurs marges bénéficiaires.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB9" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB9">
                                    Fournisseurs de Services de Gestion de Flotte :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB9" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les entreprises spécialisées dans la gestion de flottes peuvent utiliser les données de
                                    LautoPrix pour évaluer la valeur de leur flotte et optimiser la rotation des véhicules
                                    pour maximiser la rentabilité.
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB10" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB10">
                                    Sites de Comparaison de Prix :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB10" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les plateformes de comparaison de prix peuvent intégrer les évaluations de LautoPrix
                                    pour offrir à leurs utilisateurs des comparaisons précises et actualisées des prix des
                                    véhicules d'occasion.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item CustomAccordion">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseB11" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseB11">
                                    Revues et Médias Automobiles :
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseB11" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Les publications et sites web spécialisés dans l'automobile peuvent utiliser les données
                                    de LautoPrix pour enrichir leurs contenus éditoriaux et fournir à leurs lecteurs des
                                    informations précises sur les tendances du marché des véhicules d'occasion. </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>

    </section>
















    <section class="SectionsTeam py-4 my-4 container-fluid row justify-content-center">
        <div class="col-lg-12 col-xl-11 col-xxl-9 px-4 px-xl-0">

            <div class="row">

                <div class="col-lg-6 pe-4">

                    <h2 class="darkcolor fontwbold font30 mb-4 mt-4 CustomleftBorder">Notre Vision</h2>

                    <p class="darkcolor font18 fontw600 lh-lg mb-4">
                        Chez LautoPrix, nous œuvrons pour que chaque transaction soit juste et transparente. Notre objectif
                        n'est pas de remplacer les standards existants mais de vous montrer que souvent, ils ne reflètent
                        pas le véritable marché. Avec LautoPrix, vous accédez au vrai prix du marché des occasions.
                    </p>


                </div>



                <div class="col-lg-6 pe-4">

                    <h2 class="darkcolor fontwbold font30 mb-4 mt-4 CustomleftBorder">Rencontrez notre équipe</h2>

                    <p class="darkcolor font18 fontw600 lh-lg mb-4">
                        Notre équipe est composée de développeurs, de scientifiques de données et de spécialistes de
                        l'automobile, tous engagés à vous fournir une expérience utilisateur sans pareil.
                    </p>


                </div>


                {{-- <div class="col-lg-6">

                        <h2 class="darkcolor fontwbold font30 mb-4 mt-4 CustomleftBorder">Contactez-nous</h2>

                        <p class="darkcolor font18 fontw600 lh-lg mb-4">
                            Vous avez des questions ou des suggestions ? N'hésitez pas à nous contacter. Nous sommes toujours ravis d'échanger avec nos utilisateurs et de vous aider à tirer le meilleur parti de votre expérience avec LautoPrix.
                        </p>
                        
                        <div>
            <a href="{{ route('contact') }}" class="primarybtn  my-3 minibtn">Contactez-nous</a>

                        </div>

                    </div> --}}

            </div>





        </div>

    </section>














    <!-- ################  START CALL TO ACTION ################ -->

    <section class="ADS px-4 px-xl-0  mb-4 pt-4 mt-4 container-fluid row justify-content-center"
        style="width: 98%;margin: 0 auto;">

        <div class="col-lg-12 col-xl-11 col-xxl-9  py-4 bgLight rounded row px-5 text-center">

            <h4 class="primarycolor font30 fontw900  pt-4 mb-4">Testez notre outil dès aujourd'hui et voyez par vous-même
                comment une estimation précise peut transformer vos transactions de véhicules.</h4>

            <div>
                <a type="button" href="/#PrixMoyen" class="primarybtn my-4 mx-auto">Obtenir le prix moyen</a>
            </div>


        </div>
    </section>
    <!-- ################  START CALL TO ACTION ################ -->










    <br><br>
@endsection



@push('third_party_scripts')
@endpush
