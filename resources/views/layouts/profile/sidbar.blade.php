<br><br><br><br>


<div class="section-full bgwhite browse-job p-t50 p-b20">
    <div class="container">
        <div class="row profileRow">
            <div class="col-xl-3 col-lg-4 m-b30">
                <div class="sticky-top">
                    <div class="candidate-info">
                        <div class="candidate-detail text-center">
                            <div class="canditate-des">
                                <a href="javascript:void(0);">
                                    <img alt="User Avatar"
                                        src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/images/default-avatar.png') }}"
                                        style="height: 100%;">
                                </a>
                                <form action="{{ route('profile.avatar.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="upload-link" title="Update" data-bs-toggle="tooltip"
                                        data-placement="right" data-bs-original-title="Update">
                                        <input type="file" name="avatar" class="update-file"
                                            onchange="this.form.submit()">
                                        <i><iconify-icon icon="fluent:camera-16-filled" width="24"
                                                style="width: 22px;height: 20px;"></iconify-icon></i>
                                    </div>
                                </form>
                            </div>
                            <div class="candidate-title">
                                <div class="">
                                    <h4 class="m-b5"><a href="javascript:void(0);"> {{ Auth::user()->name }}</a></h4>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li><a href="{{ route('profile.home') }}"
                                    class="{{ Request::is('profile') ? 'active' : '' }}">
                                    <span>Mon profil</span></a></li>
                            <li><a href="{{ route('profile.annonces') }}"
                                    class="{{ Request::is('profile/annonces') ? 'active' : '' }}">
                                    <span>Mes annonces</span></a></li>
                            <li><a href="{{ route('profile.favourites') }}"
                                    class="{{ Request::is('profile/favoris') ? 'active' : '' }}">
                                    <span>Mes favoris</span></a></li>
                            <li><a href="{{ route('create-annonce') }}"
                                    class="{{ Request::is('deposer-une-annonce') ? 'active' : '' }}">
                                    <span>Déposer une annonce</span></a></li>
                            <li><a href="{{ route('logout') }}" class="dangercolor logOut">
                                    <span class="dangercolor">Se déconnecter</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 m-b30">
                <div class="profileContainer">
                    <div class="job-bx-title clearfix">
                        <!-- there will be content here -->

                        @yield('content')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>










<br><br><br><br>
