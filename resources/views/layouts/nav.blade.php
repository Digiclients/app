<nav class="navbar FrontNavbar navbar-expand-lg fixed-top navbar-light bg-light">

    <div class="container-fluid  col-lg-12 col-xl-11 col-xxl-9">

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto me-lg-3 NavBarLogo" href="{{ route('home') }}">LautoPrix</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a type="button" href="/#PrixMoyen" class="primarybtn  ms-4 me-2 me-lg-0  me-xxl-2">Obtenir le prix
                moyen</a>

            <ul class="navbar-nav ms-auto" id="navbarContent">
                <li class="nav-item NavBarlink {{ Request::is('/*') ? 'activeNavBarlink' : '' }} ">
                    <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                </li>
                <li class="nav-item d-none NavBarlink {{ Request::is('Estimation') ? 'activeNavBarlink' : '' }} ">
                    <a class="nav-link" href="{{ route('home') }}">Estimation</a>
                </li>
                <li class="nav-item NavBarlink {{ Request::is('à-propos') ? 'activeNavBarlink' : '' }} ">
                    <a class="nav-link" href="{{ route('about') }}">À propos</a>
                </li>
                <li class="nav-item NavBarlink {{ Request::is('voitures') ? 'activeNavBarlink' : '' }}">
                    <a class="nav-link" href="{{ route('listings') }}">Acheter</a>
                </li>
                <li class="nav-item  NavBarlink {{ Request::is('deposer-une-annonce*') ? 'activeNavBarlink' : '' }}">
                    <a class="nav-link" href="{{ route('create-annonce') }}">Vendre</a>
                </li>
                <li class="nav-item NavBarlink">
                    <a class="nav-link" href="https://blog.lautoprix.fr/">Actualités</a>
                </li>
                <li class="nav-item  NavBarlink {{ Request::is('Contactez-nous') ? 'activeNavBarlink' : '' }}">
                    <a class="nav-link" href="{{ route('contact') }}">Contactez-nous</a>
                </li>

                <li class="nav-item d-none  d-flex NavBarline">
                    <div class="miniLine">
                    </div>
                </li>
                <li class="nav-item d-none NavBarIcon">
                    <a class="nav-link" href="#">
                        <iconify-icon icon="tabler:search" height="24"></iconify-icon>
                    </a>
                </li>
                <li class="nav-item d-none  NavBarIcon">
                    <a class="nav-link" href="#">
                        <iconify-icon icon="tabler:heart" height="24"></iconify-icon>
                    </a>
                </li>
                @guest
                    <li class="nav-item  NavBarIcon">
                        <a class="nav-link" href="{{ route('login') }}" title="se connecter">
                            <iconify-icon icon="tabler:user-circle" height="24"></iconify-icon>
                        </a>
                    </li>
                @endguest

                {{-- START Profile DropDown navbar --}}
                @auth
                    <li class="nav-item dropdown ProDropDown mt-2 mt-lg-0  ms-0 ms-lg-3">
                        <a class="dropdown-toggle position-relative" href="#" id="avatarframeDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="avatarframe">
                                <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('assets/images/default-avatar.png') }}"
                                    class="img-fluid" alt="">
                            </div>
                        </a>

                        <div class="dropdown-menu FloatingBlocksBackground avatarframedropdown Custom-Dropdown-Menu"
                            aria-labelledby="avatarframeDropdownMenuLink">
                            <div class="dropdown-menu-header bgprimary px-3 py-4">
                                <h5 class="whitecolor my-auto text-center"> {{ Auth::user()->name }} </h5>
                            </div>
                            @role('admin')
                                <a href="{{ route('admin.home') }}"
                                    class="dropdown-menu-item  px-1 py-2 d-flex align-items-center">
                                    <div class="w-100 mx-2">
                                        <p class="darkcolor my-0 text-center">Dashboard</p>
                                    </div>
                                </a>
                            @else
                                @hasanyrole('professionnel')
                                    <a href="{{ route('profile.boutique') }}"
                                        class="dropdown-menu-item  px-1 py-2 d-flex align-items-center">
                                        <div class="w-100 mx-2">
                                            <p class="darkcolor my-0 text-center">Mon boutique</p>
                                        </div>
                                    </a>
                                    <hr class="graycolor my-0">
                                @endhasanyrole
                                <!-- {{-- START profile dropDown item --}} -->
                                <a href="{{ route('profile.home') }}"
                                    class="dropdown-menu-item  px-1 py-2 d-flex align-items-center">
                                    <div class="w-100 mx-2">
                                        <p class="darkcolor my-0 text-center">Mon profil</p>
                                    </div>
                                </a>
                                <!-- {{-- END profile dropDown item --}} -->

                                <hr class="graycolor my-0">

                                <!-- {{-- START profile dropDown item --}} -->
                                <a href="{{ route('profile.annonces') }}"
                                    class="dropdown-menu-item  px-1 py-2 d-flex align-items-center">
                                    <div class="w-100 mx-2">
                                        <p class="darkcolor my-0 text-center">Mes annonces</p>
                                    </div>
                                </a>
                                <!-- {{-- END profile dropDown item --}} -->

                                <hr class="graycolor my-0">


                                <hr class="graycolor my-0">

                                <!-- {{-- START profile dropDown item --}} -->
                                <a href="{{ route('profile.Notifications') }}"
                                    class="dropdown-menu-item  px-1 py-2 d-flex align-items-center">
                                    <div class="w-100 mx-2">
                                        <p class="darkcolor my-0 text-center">Notifications</p>
                                    </div>
                                </a>
                                <!-- {{-- END profile dropDown item --}} -->

                                <hr class="graycolor my-0">


                                <!-- {{-- START profile dropDown item --}} -->

                                {{-- <a href="{{ route('profile.favourites') }}"
                                    class="dropdown-menu-item  px-1 py-2 d-flex align-items-center">
                                    <div class="w-100 mx-2">
                                        <p class="darkcolor my-0 text-center">Mes favoris</p>
                                    </div>
                                </a> --}}
                                <!-- {{-- END profile dropDown item --}} -->

                                {{-- <hr class="graycolor my-0"> --}}

                                <!-- {{-- START profile dropDown item --}} -->

                                <a href="{{ route('create-annonce') }}"
                                    class="dropdown-menu-item  px-1 py-2 d-flex align-items-center">
                                    <div class="w-100 mx-2">
                                        <p class="darkcolor my-0 text-center">Déposer une annonce</p>
                                    </div>
                                </a>
                            @endrole
                            <!-- {{-- END profile dropDown item --}} -->
                            <hr class="graycolor my-0">
                            <!-- {{-- START profile dropDown item --}} -->
                            <a href="{{ route('logout') }}"
                                class="dropdown-menu-item  px-1 py-2 d-flex align-items-center"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <div class="w-100 mx-2">
                                    <p class="my-0 text-center dangercolor "> {{ __('Logout') }} </p>
                                </div>
                            </a>
                            <!-- {{-- END profile dropDown item --}} -->
                        </div>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
                {{-- END Profile DropDown navbar --}}
            </ul>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto" id="offcanvasNavbarContent">
                    <!-- Navbar content will be copied here by JavaScript -->
                </ul>
            </div>
        </div>



    </div>
</nav>
