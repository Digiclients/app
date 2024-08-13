@include('Dashboard.inc.DashBoardNavbars')






<section class="mx-0 mx-sm-3 my-4 px-2 py-4  ">
    <h1 class="darkcolor font20 mx-2 ">Users List</h1>

    {{-- =========== START OF Users Statistics  List section =================  --}}

    <section id="statistics-section" class="row pt-4">
        {{-- START OF statistics item 1  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgprimaryopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Nombre total d'utilisateurs</p>
                        <h2 class="darkcolor mb-1"> {{ $UsersCount }}+ </h2>
                    </div>
                    <div class="col-4">
                        <div class="rounded right-icon float-end text-center p-3">
                            {{-- <i class="font30 fa-solid primarycolor fa-arrow-trend-up"></i> --}}
                            <i class="iconify primarycolor font40" data-icon="tabler:user"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END OF statistics item 1  --}}

        {{-- START OF statistics item 2  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgsecondaryopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1"> Vendeurs particuliers</p>
                        <h2 class="darkcolor mb-1"> {{ $PrivateUsersCount }} </h2>
                        {{-- <div class="mt-1">
                            <span class="successcolor">
                                <span class="iconify successcolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="270deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>
                                <strong>25.36%</strong></span>
                            <small class=""> Since last month </small>
                        </div> --}}
                    </div>
                    <div class="col-4">
                        <div class="rounded right-icon float-end text-center p-3">
                            <i class="iconify seccolor font40" data-icon="tabler:user-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END OF statistics item 2  --}}

        {{-- START OF statistics item 3  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgthirdopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Vendeurs professionnels</p>
                        <h2 class="darkcolor mb-1"> {{ $ProUsersCount }} </h2>
                        {{-- <div class="mt-1">
                            <span class="dangercolor">
                                <span class="iconify dangercolor font20"
                                    data-icon="material-symbols:arrow-right-alt-rounded" data-rotate="90deg"
                                    style='margin-right: -5px;margin-top: -3px;'></span>
                                <strong>25.36%</strong></span>
                            <small class=""> Since last month </small>
                        </div> --}}
                    </div>
                    <div class="col-4">
                        <div class="rounded right-icon float-end text-center p-3">
                            <i class="iconify thirdcolor font40" data-icon="tabler:user-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END OF statistics item 3  --}}
        {{-- START OF statistics item 4  --}}
        <div class="col-xl-3 col-md-6 my-2 my-xl-0">
            <div class="BlocksBackground dark-box-shadow rounded  p-4 mx-2 bgwhite">
                <div id="right-circle" class="bgfourthopacity"></div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-8">
                        <p class="graycolor mb-1">Managers</p>
                        <h2 class="darkcolor mb-1"> {{ $ManagerUsersCount }} </h2>
                    </div>
                    <div class="col-4">
                        <div class="rounded right-icon float-end text-center p-3">
                            <i class="iconify fourthcolor font40" data-icon="tabler:user"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END OF statistics item 4  --}}

    </section>
    {{-- =========== END OF UsersStatistics section =================  --}}


    {{-- =========== START OF Users List section =================  --}}

    <section id="UsersListSection" class="row pt-2">

        <div class="BlocksBackground dark-box-shadow rounded  p-4 mt-md-3 mb-md-0 m-2 bgwhite">
            <h3 class="darkcolor font18 text-capitalize"> Filtre de recherche :</h3>

            <form action="">
                <div class="row py-3">
                    <div class="col-md-4 px-3">
                        <label for="SelectStatus" class="textcolor font14 pb-2">Nom d'utilisateur :</label>
                        <input type="text" class="form-control bgwhiteopacity py-2" placeholder="Nom d'utilisateur">
                    </div>
                    <div class="col-md-4  px-3">
                        <label for="" class="textcolor font14 pb-2">Choisir un rôle</label>
                        <select class="form-select customSelect py-2">
                            <option hidden disabled selected value></option>
                            <option value="admin">admin</option>
                            <option value="manager">manager</option>
                            <option value="particulier">particulier</option>
                            <option value="professionnel">professionnel</option>
                        </select>
                    </div>
                    <div class="col-md-4 px-3">
                        <label for="Recherche" class="textcolor font14 pb-2">Recherche :</label>
                        <button class="primarybtn minibtn d-block w-100 mx-auto text-center">
                            Recherche
                        </button>
                    </div>
                </div>
            </form>

            <hr class="textcolor my-2">

            {{-- START OF : show / Search / add --}}
            <div class="row py-3 flex-column-reverse flex-xl-row">
                <div class="col-xl-2 my-xl-0 my-2">
                    <button class="primarybtn minibtn  px-5 px-xl-3 d-block mx-auto" data-bs-toggle="modal"
                        data-bs-target="#AddNewUserModal">
                        <span class="iconify font20" data-icon="tabler:user-plus"></span>
                        Ajouter un utilisateur
                    </button>
                    {{-- =========== START OF ADD NEW USER   MODAL =================  --}}
                    <div class="modal fade" id="AddNewUserModal" tabindex="-1" aria-labelledby="AddNewUserModal"
                        aria-hidden="true">
                        <div class="modal-dialog   modal-lg">
                            <div class="modal-content bgbodycolor">
                                <div class="modal-header  border-0 bgprimary">
                                    <h5 class="modal-title whitecolor h6">Ajouter un utilisateur</h5>
                                    <a class="bgprimary" data-bs-dismiss="modal" aria-label="Close"><span
                                            class="iconify font24 whitecolor" data-icon="ic:round-close"></span></a>
                                </div>
                                <div class="modal-body p-4  BlocksBackground">
                                    {{-- ------ START ADD NEW USER   form  ------- --}}
                                    <form id="AddNewUserForm" action="{{ route('admin.user.store') }}" method="POST">
                                        @csrf
                                        <div class="mb-2">
                                            <label for="FullName" class="darkcolor col-form-label font14">Nom
                                                complet</label>
                                            <input type="text" name="name" id="FullName"
                                                class="form-control bgwhiteopacity  @error('name') is-invalid @enderror"
                                                placeholder="">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="Email" class="darkcolor col-form-label font14">Adresse
                                                e-mail</label>
                                            <input type="email" name="email" id="Email"
                                                class="form-control bgwhiteopacity @error('email') is-invalid @enderror"
                                                placeholder="">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-2">
                                            <label for="Contact" class="darkcolor col-form-label font14">Numéro de
                                                téléphone</label>
                                            <input type="tel" name="phone" id="Contact"
                                                class="form-control bgwhiteopacity @error('phone') is-invalid @enderror"
                                                placeholder="">
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>


                                        <div class="mb-2">
                                            <label for="SelectRole" class="darkcolor font14 pb-2">Choisir un
                                                rôle</label>
                                            <select name="role"
                                                class="form-select customSelect py-2 @error('role') is-invalid @enderror"
                                                id="SelectRole">
                                                <option hidden disabled selected value></option>
                                                <!-- Dynamic roles will be appended here by JS -->
                                            </select>
                                            @error('role')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-2">
                                            <label for="Password" class="darkcolor col-form-label font14">Mot de
                                                passe</label>
                                            <input type="password" name="password" id="Password"
                                                class="form-control bgwhiteopacity @error('password') is-invalid @enderror"
                                                placeholder="">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-2">
                                            <label for="rePassword" class="darkcolor col-form-label font14">Confirmer
                                                le mot de passe</label>
                                            <input type="password" name="password_confirmation" id="rePassword"
                                                class="form-control bgwhiteopacity" placeholder="">
                                        </div>
                                    </form>
                                    {{-- ------ END add user  form  ------- --}}
                                </div>
                                <div class="modal-footer px-4  BlocksBackground  border-0">
                                    <button type="submit" form="AddNewUserForm" class="primarybtn  minibtn"> Ajouter
                                    </button>
                                    <button type="button" data-bs-dismiss="modal" class="secbtn  minibtn"> Cancel
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- =========== END OF ADD NEW USER  MODAL =================  --}}
                </div>
            </div>

            {{-- END OF : show / Search / add --}}

            <div class="table-responsive pt-2">
                <table class="table CustomTable m-0">
                    <thead>
                        <tr>
                            <th class="text-capitalize "> User
                                <div class="sortby ms-auto d-flex float-end">
                                    <a href="#" class="">
                                        <span class="iconify textcolor font22 me-1" data-rotate="270deg"
                                            data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                    </a>
                                    <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                            data-rotate="90deg" data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                                </div>
                            </th>
                            {{-- <th class="text-start text-capitalize">id
                                <div class="sortby ms-auto d-flex float-end">
                                    <a href="#" class="">
                                        <span class="iconify textcolor font22 me-1" data-rotate="270deg"
                                            data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                    </a>
                                    <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                            data-rotate="90deg" data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                                </div>
                            </th> --}}
                            <th class="text-start text-capitalize">Role
                                <div class="sortby ms-auto d-flex float-end">
                                    <a href="#" class="">
                                        <span class="iconify textcolor font22 me-1" data-rotate="270deg"
                                            data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                    </a>
                                    <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                            data-rotate="90deg" data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                                </div>
                            </th>
                            <th class="text-start text-capitalize">phone
                                <div class="sortby ms-auto d-flex float-end">
                                    <a href="#" class="">
                                        <span class="iconify textcolor font22 me-1" data-rotate="270deg"
                                            data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span>
                                    </a>
                                    <a href="#" class=""><span class="iconify textcolor font22 me-1"
                                            data-rotate="90deg" data-flip="horizontal"
                                            data-icon="material-symbols:arrow-right-alt-rounded"></span></a>
                                </div>
                            </th>

                            <th class="text-start text-capitalize">Actions


                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>
                                    <div class="d-flex my-auto">
                                        <div class="my-auto">
                                            <img src="{{ $user->avatar ? asset('storage/' . $user->avatar) : asset('assets/images/default-avatar.png') }}"
                                                class="d-flex  mx-auto rounded-circle " alt="receiver profile"
                                                width="40">
                                        </div>
                                        <div class="px-2">
                                            <p class="my-0 fontw600 graycolor">{{ $user->name }}</p>
                                            <p class="font12 my-0 textcolor">{{ $user->email }}</p>
                                        </div>
                                    </div>
                                </td>
                                {{-- <td class="text-start">1453</td> --}}
                                <td class="text-start">{{ $user->sellerType }}</td>
                                <td class="text-start">{{ $user->phone }}</td>
                                <td class="text-start">
                                    <div class="my-auto d-flex">
                                        <a href="#" class=""><span class="iconify graycolor font22 me-2"
                                                data-icon="tabler:user-x"></span></a>
                                        <a href="{{ route('dashboard.Users.View') }}" class=""><span
                                                class="iconify graycolor font22 mx-2"
                                                data-icon="tabler:user-edit"></span></a>

                                        <div class="dropdown">
                                            <a href="" id="DropDownMoreOptionsFor" data-bs-toggle="dropdown"
                                                aria-expanded="false" class="">
                                                <span class="iconify graycolor font22 mx-2"
                                                    data-icon="material-symbols:more-vert"></span>
                                            </a>
                                            <ul class="dropdown-menu mt-2 FloatingBlocksBackground dark-box-shadow border-0"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item graycolor"
                                                        href="{{ route('dashboard.Users.View') }}">View</a></li>
                                                <li><a class="dropdown-item graycolor"
                                                        href="{{ route('dashboard.Users.View') }}">Edit</a></li>
                                                <li><a class="dropdown-item graycolor" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td>Empty</td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>

            <div class="row  py-3">
                {{-- <div class="col-lg-6 my-auto">
                    <p class="textcolor font14 text-center text-lg-start my-2 my-lg-auto">Showing 21 to 30 of 50
                        entries</p>
                </div> --}}
                <div class="col-lg-6">
                    <nav>
                        <ul
                            class="pagination CustomPagination   my-2 my-lg-auto justify-content-center justify-content-lg-end">
                            {{ $users->appends(request()->query())->onEachSide(2)->links() }}
                        </ul>
                    </nav>
                </div>
            </div>

        </div>

    </section>


    {{-- ===================================================================== --}}
    {{-- =========== END OF UsersList section =================  --}}
    {{-- ===================================================================== --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Event listener for when the modal is shown
            $('#AddNewUserModal').on('show.bs.modal', function() {
                // Clear any existing options except the placeholder
                $('#SelectRole').find('option:not([hidden])').remove();

                // Fetch roles using AJAX
                fetch('{{ route('admin.roles.get') }}')
                    .then(response => response.json())
                    .then(data => {
                        // Loop through the roles and append them to the select dropdown
                        data.forEach(role => {
                            $('#SelectRole').append(
                                `<option value="${role.name}">${role.name}</option>`);
                        });
                    })
                    .catch(error => console.error('Error fetching roles:', error));
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('AddNewUserForm').addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                // Get form data
                let formData = new FormData(this);

                // Make AJAX request
                fetch('{{ route('admin.user.store') }}', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        }
                    })
                    .then(response => response.json()) // Parse the response as JSON
                    .then(data => {
                        if (data.errors) {
                            // Handle validation errors
                            document.querySelectorAll('.invalid-feedback').forEach(el => el.remove());

                            for (let [field, errors] of Object.entries(data.errors)) {
                                let input = document.querySelector(`[name="${field}"]`);
                                if (input) {
                                    input.classList.add('is-invalid');
                                    let error = document.createElement('span');
                                    error.className = 'invalid-feedback';
                                    error.role = 'alert';
                                    error.innerHTML = `<strong>${errors.join(', ')}</strong>`;
                                    input.parentElement.appendChild(error);
                                }
                            }
                        } else if (data.success) {
                            // Handle success
                            // alert(data.success);
                            $('#AddNewUserModal').modal('hide');
                            window.location.reload(); // Reload the page
                        }
                    })
                    .catch(error => {
                        console.error('Fetch error:', error);
                    });
            });
        });
    </script>





    @include('dashboard.inc.DashBoardFooter')
