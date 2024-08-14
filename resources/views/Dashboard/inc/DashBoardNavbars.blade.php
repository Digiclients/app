<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'LautoPrix') }}</title>
    <link rel="stylesheet" id="stylecolors" href="{{ asset('assets/DashBoard/css/colors.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/DashBoard/css/adminbar.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> --}}

    <!-- JavaScript Bundle with Popper -->


    <script src="https://kit.fontawesome.com/08d153aafb.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>

    <script src="{{ asset('assets/DashBoard/js/jquery.jsscroll.min.js') }}"></script>
    <script src="{{ asset('assets/DashBoard/js/style.js') }}"></script>
    {{-- <script src="{{asset("assets/DashBoard/js/styleDark.js")}}"></script> --}}


</head>

<body class="bgbodycolor">























    <div class="">
        <div class="row">

            {{-- vertical bar start here --}}
            <div class="leftside col-2 bgwhite">


                <div class="fixed-top leftsidefixed">

                    <div class="text-center leftsidelogoside bgprimary ">

                        {{-- <img width="160" src="{{ asset('assets/DashBoard/images/joyboylogo.png') }}"
                            class=" thelogo mx-auto pt-2 img-fluid  ">
                        <img width="60" src="{{ asset('assets/DashBoard/images/joyboyicon.png') }}"
                            class=" theicona mx-auto pt-2 img-fluid  "> --}}
                            {{-- <p class="whitecolor  font30 fontw600 d-md-block d-none pt-3">LAUTOPRIX</p> --}}
                    </div>





                    <nav class='leftsidefixedbar animated bounceInDown bgprimary'>
                        <ul>




                            <li class='sub-menu'>
                                <a class="sub-menu-container" href='{{ route('admin.home') }}'>
                                    <div class="insideacontainer  {{ Request::is('admin/dashboard') ? 'sub-menu-active' : '' }}">
                                        <i class="iconify iconaside"
                                            data-icon="material-symbols:home-outline-rounded"></i>
                                        <div class="navitem">
                                            <div class="navlink">analytics</div>
                                        </div>
                                    </div>
                                </a>
                            </li>



                            <li class='sub-menu'>
                                <a class="sub-menu-container" href='{{ route('admin.users') }}'>
                                    <div class="insideacontainer {{ Request::is('admin/manage/users') ? 'sub-menu-active' : '' }}">
                                        <i class="iconify iconaside" data-icon="uil:users-alt"></i>
                                        <div class="navitem">
                                            <div class="navlink">utilisateurs</div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class='sub-menu'>
                                <a class="sub-menu-container" href='{{ route('dashboard.AverageData') }}'>
                                    <div class="insideacontainer">
                                        <i class="iconify iconaside" data-icon="material-symbols:add-chart-rounded"></i>
                                        <div class="navitem">
                                            <div class="navlink">donnée moyenne</div>
                                        </div>
                                    </div>
                                </a>
                            </li>



                            <li class='sub-menu'>
                                <a class="sub-menu-container" href='{{ route('admin.range') }}'>
                                    <div class="insideacontainer {{ Request::is('admin/price_range') ? 'sub-menu-active' : '' }}">
                                        <i class="iconify iconaside"
                                            data-icon="material-symbols:arrow-range-rounded"></i>
                                        <div class="navitem">
                                            <div class="navlink">data range</div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class='sub-menu'>
                                <a class="sub-menu-container" href='{{ route('admin.options') }}'>
                                    <div class="insideacontainer {{ Request::is('admin/options') ? 'sub-menu-active' : '' }}">
                                        <i class="iconify iconaside" data-icon="iwwa:option"></i>
                                        <div class="navitem">
                                            <div class="navlink">options</div>
                                        </div>
                                    </div>
                                </a>
                            </li>





                            <li class='sub-menu'>
                                <a class="sub-menu-container" href='{{ route('dashboard.importAnounces') }}'>
                                    <div class="insideacontainer">
                                        <i class="iconify iconaside" data-icon="uil:import"></i>
                                        <div class="navitem">
                                            <div class="navlink">Importer data</div>
                                        </div>
                                    </div>
                                </a>
                            </li>


                            <li class='sub-menu'>
                                <a class="sub-menu-container" href='{{ route('dashboard.publicite') }}'>
                                    <div class="insideacontainer">
                                        <i class="iconify iconaside" data-icon="tabler:ad"></i>
                                        <div class="navitem">
                                            <div class="navlink">publicité</div>
                                        </div>
                                    </div>
                                </a>
                            </li>



                            <li class='sub-menu'>

                                <a class="sub-menu-container" href='{{ route('dashboard.leads') }}'>


                                    <div class="insideacontainer">
                                        <i class="iconify iconaside" data-icon="mdi:leads-outline"></i>
                                        <div class="navitem">
                                            <div class="navlink">leads</div>
                                        </div>

                                    </div>


                                </a>

                            </li>



                            {{-- <li class='sub-menu Dropdown-menu'>
                                <a class="sub-menu-container">


                                    <div class="insideacontainer">



                                        <i class="iconify iconaside"
                                            data-icon="material-symbols:home-outline-rounded"></i>

                                        <div class="navitem">
                                            <div class="navlink"> Dashboard </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar  lilistarrow">
                                            </div>
                                        </div>












                                    </div>


                                </a>




                                <ul class="submenuitemul">
                                    <li class="submenuliitem"><a href='{{ route('dashboard.analytics') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> analytics
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.analyticsv2') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> analytics v2
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.analyticsv3') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> analytics v3
                                        </a></li>
                                </ul>
                            </li> --}}

                            {{-- <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">



                                    <div class="insideacontainer sub-menu-active">

                                        <span class="iconify iconaside" data-icon="tabler:mail"></span>
                                        <div class="navitem">
                                            <div class="navlink">Mailbox </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>




                                    </div>

                                </a>


                                <ul class="submenuitemul">

                                    <li class="submenuliitem"><a href='{{ route('dashboard.Mail.MailInbox') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div>Mail Inbox
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Mail.ReadMail') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div>Read mail
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Mail.MailCompose') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Mail Compose
                                        </a></li>
                                </ul>
                            </li> --}}

                            {{--
                            <li class='sub-menu'>

                                <a class="sub-menu-container" href='{{ route('dashboard.Chat') }}'>


                                    <div class="insideacontainer">

                                        <i class="iconify iconaside" data-icon="tabler:message"></i>
                                        <div class="navitem">
                                            <div class="navlink">Chat</div>
                                        </div>



                                    </div>


                                </a>

                            </li>
 --}}

                            {{-- <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">


                                    <div class="insideacontainer sub-menu-active">



                                        <i class="iconify  iconaside" data-icon="uil:users-alt"></i>

                                        <div class="navitem">
                                            <div class="navlink">Users</div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>






                                    </div>



                                </a>


                                <ul class="submenuitemul">



                                    <li class="submenuliitem"><a href='{{ route('dashboard.Users.List') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> List
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Users.View') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> View
                                        </a></li>


                                </ul>
                            </li>
 --}}

















                            {{-- ============================================================== --}}
                            {{--  START nav link li --}}
                            {{-- ============================================================== --}}

                            {{-- <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">



                                    <div class="insideacontainer">



                                        <i class="iconify iconaside" data-icon="ph:article-medium"></i>
                                        <div class="navitem">
                                            <div class="navlink"> Blog </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>



                                    </div>



                                </a>


                                <ul class="submenuitemul">
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Blog.BlogList') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Blog List
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Blog.BlogGrid') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Blog Grid
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Blog.BlogDetails') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Blog Details
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Blog.AddBlog') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Add Blog
                                        </a></li>
                                </ul>
                            </li> --}}



                            {{-- ============================================================== --}}
                            {{--  END nav link li --}}
                            {{-- ============================================================== --}}






























                            {{-- ============================================================== --}}
                            {{--  START nav link li --}}
                            {{-- ============================================================== --}}

                            {{-- <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">



                                    <div class="insideacontainer">



                                        <i class="iconify iconaside" data-icon="ic:outline-shopping-cart"></i>
                                        <div class="navitem">
                                            <div class="navlink"> Ecommerce </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>



                                    </div>



                                </a>


                                <ul class="submenuitemul">
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Maintenance Mode
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> FAQ's
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Submit a Ticket
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Network Status
                                        </a></li>
                                </ul>
                            </li>
 --}}


                            {{-- ============================================================== --}}
                            {{--  END nav link li --}}
                            {{-- ============================================================== --}}



















                            {{-- ============================================================== --}}
                            {{--  START nav link li --}}
                            {{-- ============================================================== --}}
                            {{--
                            <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">



                                    <div class="insideacontainer">



                                        <i class="iconify iconaside"
                                            data-icon="material-symbols:display-settings-outline"></i>
                                        <div class="navitem">
                                            <div class="navlink"> Settings </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>



                                    </div>



                                </a>


                                <ul class="submenuitemul">
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Maintenance Mode
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> FAQ's
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Submit a Ticket
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Network Status
                                        </a></li>
                                </ul>
                            </li>
 --}}


                            {{-- ============================================================== --}}
                            {{--  END nav link li --}}
                            {{-- ============================================================== --}}







                            {{-- ============================================================== --}}
                            {{--  START nav link li --}}
                            {{-- ============================================================== --}}

                            {{-- <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">



                                    <div class="insideacontainer">



                                        <i class="iconify iconaside" data-icon="iconoir:multiple-pages-add"></i>
                                        <div class="navitem">
                                            <div class="navlink"> Pages </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>



                                    </div>



                                </a>


                                <ul class="submenuitemul">
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Pages.BlankPage') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Blank Page
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Contact Form
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Pricing
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Gallery
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Pages.Blog') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Blog
                                        </a></li>

                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Privacy Policy
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Term & Conditions
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Coming Soon
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Maintenance
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Error 404
                                        </a></li>
                                    <li class="submenuliitem"><a href=' ' class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Error 500
                                        </a></li>
                                </ul>
                            </li> --}}



                            {{-- ============================================================== --}}
                            {{--  END nav link li --}}
                            {{-- ============================================================== --}}










                            {{-- ============================================================== --}}
                            {{--  START nav link li --}}
                            {{-- ============================================================== --}}

                            {{-- <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">



                                    <div class="insideacontainer">



                                        <i class="iconify iconaside" data-icon="ph:paint-brush-household"></i>
                                        <div class="navitem">
                                            <div class="navlink"> Ui Elements </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>



                                    </div>



                                </a>


                                <ul class="submenuitemul">
                                    <li class="submenuliitem"><a href='{{ route('dashboard.UiElements.Buttons') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Buttons
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.UiElements.Modals') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Modals
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.UiElements.Alerts') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Alerts
                                        </a></li>
                                    <li class="submenuliitem"><a
                                            href='{{ route('dashboard.UiElements.Tooltip&Popover') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Tooltip & Popover
                                        </a></li>
                                    <li class="submenuliitem"><a
                                            href='{{ route('dashboard.UiElements.Progressbar') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Progressbar
                                        </a></li>
                                    <li class="submenuliitem"><a
                                            href='{{ route('dashboard.UiElements.Typography') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Typography
                                        </a></li>
                                    <li class="submenuliitem"><a
                                            href='{{ route('dashboard.UiElements.Breadcrumbs') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Breadcrumbs
                                        </a></li>
                                    <li class="submenuliitem"><a
                                            href='{{ route('dashboard.UiElements.Pagination') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Pagination
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.UiElements.Carousel') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Carousel
                                        </a></li>

                                    <li class="submenuliitem"><a href='{{ route('dashboard.UiElements.Toasts') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Toasts
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.UiElements.Spinner') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Spinner
                                        </a></li>
                                </ul>
                            </li> --}}



                            {{-- ============================================================== --}}
                            {{--  END nav link li --}}
                            {{-- ============================================================== --}}








                            {{-- ============================================================== --}}
                            {{--  START nav link li --}}
                            {{-- ============================================================== --}}

                            {{-- <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">



                                    <div class="insideacontainer">



                                        <i class="iconify iconaside"
                                            data-icon="material-symbols:add-chart-rounded"></i>
                                        <div class="navitem">
                                            <div class="navlink"> Charts </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>



                                    </div>



                                </a>


                                <ul class="submenuitemul">
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Charts.Chartjs') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Chart.js
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Charts.ApexChartsjs') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> ApexCharts.js
                                        </a></li>
                                </ul>
                            </li> --}}



                            {{-- ============================================================== --}}
                            {{--  END nav link li --}}
                            {{-- ============================================================== --}}












                            {{-- ============================================================== --}}
                            {{--  START nav link li --}}
                            {{-- ============================================================== --}}

                            {{-- <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">



                                    <div class="insideacontainer">



                                        <i class="iconify iconaside" data-icon="mdi:form-outline"></i>
                                        <div class="navitem">
                                            <div class="navlink"> Forms </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>



                                    </div>



                                </a>


                                <ul class="submenuitemul">
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Forms.FormElements') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Form Elements
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Forms.FormLayouts') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Form Layouts
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Forms.FormValidation') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Form Validation
                                        </a></li>
                                </ul>
                            </li>
 --}}


                            {{-- ============================================================== --}}
                            {{--  END nav link li --}}
                            {{-- ============================================================== --}}










                            {{-- ============================================================== --}}
                            {{--  START nav link li --}}
                            {{-- ============================================================== --}}

                            {{-- <li class='sub-menu Dropdown-menu'>

                                <a class="sub-menu-container">



                                    <div class="insideacontainer">



                                        <i class="iconify iconaside"
                                            data-icon="material-symbols:table-chart-outline"></i>
                                        <div class="navitem">
                                            <div class="navlink"> Tables </div>
                                            <div
                                                class="fa-solid fa-angle-right rightarrow rightarrowinthebar lilistarrow">
                                            </div>
                                        </div>



                                    </div>



                                </a>


                                <ul class="submenuitemul">
                                    <li class="submenuliitem"><a
                                            href='{{ route('dashboard.Tables.BootstrapTables') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> Bootstrap Tables
                                        </a></li>
                                    <li class="submenuliitem"><a href='{{ route('dashboard.Tables.DataTables') }}'
                                            class="submenuitem">
                                            <div class="fa-solid mx-2 fa-angles-right"></div> DataTables
                                        </a></li>
                                </ul>
                            </li> --}}



                            {{-- ============================================================== --}}
                            {{--  END nav link li --}}
                            {{-- ============================================================== --}}























































                        </ul>
                        {{--
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br> --}}


                    </nav>


                    {{--
      <br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br>
<br> --}}







                </div>



            </div>


            {{-- vertical bar end  here --}}



            {{-- horizontal side start here --}}

            <div class=" col-10 rightside bgbodycolor ">

                {{-- navbar  start here --}}





                <nav
                    class=" rightsidenavbar  navbar sticky-top rightsidenavbar navbar-expand-sm navbar-light bgprimary">
                    <div class="container-fluid">
                        <a class="    navbar-brand togglesidebarplease mx-2">
                            <span class="iconify font30" data-icon="material-symbols:menu-rounded"></span>

                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                                {{--
                                <div class="input-group mb-3 mt-3   mx-0 mx-sm-4  ">
                                    <input type="text" class="form-control *" placeholder="Search for anything..."
                                        aria-describedby="button-addon2">
                                    <button class="  primarybtn topsearchbtn " type="button" id="button-addon2">
                                        <span class="iconify whitecolor font20 "
                                            data-icon="material-symbols:search-rounded"></span>
                                    </button>
                                </div> --}}



                            </ul>
                            <div class="d-flex align-items-center">







                                {{-- =================================================================== --}}
                                {{-- START Languages DropDown navbar --}}
                                {{-- =================================================================== --}}
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">


                                        <img class="mx-3" src="{{ asset('assets/DashBoard/images/uk.png') }}" width="24px"
                                            alt="">


                                    </a>
                                    <ul class="dropdown-menu FloatingBlocksBackground  dropmenuflags border-0"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <img class="mx-1" src="{{ asset('assets/DashBoard/images/uk.png') }}"
                                                    width="24px" alt="">
                                                English
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <img class="mx-1" src="{{ asset('assets/DashBoard/images/ar.png') }}"
                                                    width="24px" alt="">
                                                Arabic
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <img class="mx-1" src="{{ asset('assets/DashBoard/images/germany.png') }}"
                                                    width="24px" alt="">
                                                Germany
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <img class="mx-1" src="{{ asset('assets/DashBoard/images/italy.png') }}"
                                                    width="24px" alt="">
                                                Italy
                                            </a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <img class="mx-1" src="{{ asset('assets/DashBoard/images/spain.png') }}"
                                                    width="24px" alt="">
                                                Spain
                                            </a>
                                        </li>




                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <img class="mx-1" src="{{ asset('assets/DashBoard/images/fr.png') }}"
                                                    width="24px" alt="">
                                                french
                                            </a>
                                        </li>




                                    </ul>
                                </li>
 --}}

                                {{-- =================================================================== --}}
                                {{-- END Languages DropDown navbar --}}
                                {{-- =================================================================== --}}
                                {{--
                                </ul>
                                </li> --}}





                                {{-- =================================================================== --}}
                                {{-- START OF theme Settings Offcanvas button  --}}
                                {{-- =================================================================== --}}

                                {{-- <li class="mx-3">
                                    <i class="iconify font30" data-icon="ph:gear-light" data-bs-toggle="offcanvas"
                                        data-bs-target="#themeSettingsOffcanvas"
                                        aria-controls="themeSettingsOffcanvas"></i>
                                </li> --}}

                                {{-- =================================================================== --}}
                                {{-- END OF theme Settings Offcanvas button  --}}
                                {{-- =================================================================== --}}




















                                {{-- <li class="mx-3" onclick="toggleFullScreen(document.body);">

                                    <span class="iconify font30 fullscreenicon"
                                        data-icon="fluent:full-screen-maximize-24-filled"></span>

                                </li> --}}


                                {{-- =================================================================== --}}
                                {{-- START messages DropDown navbar --}}
                                {{-- =================================================================== --}}

                                {{-- <li class="nav-item dropdown mx-3">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">





                                        <div class="position-relative">



                                            <i class="iconify font30"
                                                data-icon="material-symbols:chat-bubble-outline"></i>

                                            <span
                                                class="position-absolute CustomBadge top-0 start-100 translate-middle badge  rounded-pill bg-success ">
                                                9
                                                <span class="visually-hidden">unread messages</span>
                                            </span>

                                        </div>

                                    </a>
                                    <div class="dropdown-menu FloatingBlocksBackground dropmenumessages Custom-Dropdown-Menu"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        <div
                                            class="dropdown-menu-header bgprimary p-3 d-flex justify-content-between  align-items-center">
                                            <h6 class="whitecolor my-auto"> 5 New Messages </h6>
                                            <a href="#"><span class="badge rounded-pill bg-success">Mark All
                                                    Read</span></a>
                                        </div>


                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-3 d-flex align-items-center">
                                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                                class="img-fluid rounded-circle mx-2" width="40" alt="">

                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <p class="darkcolor my-0">Ahaija Neru</p>
                                                    <p class="my-0 float-end font14 darkcolor"> 20 min ago </p>
                                                </div>
                                                <p class="my-0 font12">Are you ready to pickup your Delivery...</p>
                                            </div>

                                        </a>

                                        <hr class="mx-4 graycolor my-0">


                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-3 d-flex align-items-center">
                                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                                class="img-fluid rounded-circle mx-2" width="40" alt="">

                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <p class="darkcolor my-0">Petey Cruiser</p>
                                                    <p class="my-0 float-end font14 darkcolor"> 30 min ago </p>
                                                </div>
                                                <p class="my-0 font12">I'm sorry but i'm not sure how...</p>
                                            </div>

                                        </a>

                                        <hr class="mx-4 graycolor my-0">



                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-3 d-flex align-items-center">
                                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                                class="img-fluid rounded-circle mx-2" width="40" alt="">

                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <p class="darkcolor my-0">Barney Cull</p>
                                                    <p class="my-0 float-end font14 darkcolor"> 40 min ago </p>
                                                </div>
                                                <p class="my-0 font12">Here are some products ...</p>
                                            </div>

                                        </a>

                                        <hr class="mx-4 graycolor my-0">




                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-3 d-flex align-items-center">
                                            <img src="https://angular.spruko.com/adminor/preview/assets/img/users/9.jpg"
                                                class="img-fluid rounded-circle mx-2" width="40" alt="">

                                            <div class="w-100">
                                                <div class="d-flex justify-content-between">
                                                    <p class="darkcolor my-0"> Sahar Dary</p>
                                                    <p class="my-0 float-end font14 darkcolor"> 55 min ago </p>
                                                </div>
                                                <p class="my-0 font12">All set ! Now, time to get to you now......</p>
                                            </div>

                                        </a>





                                        <div class="dropdown-menu-footer bgprimaryopacity p-3">
                                            <button class="primarybtn minibtn d-block  mx-auto">view all <span
                                                    class="iconify font20"
                                                    data-icon="material-symbols:arrow-right-alt-rounded"></span></button>
                                        </div>



                                    </div>
                                </li> --}}

                                {{-- =================================================================== --}}
                                {{-- END messages DropDown navbar --}}
                                {{-- =================================================================== --}}



                                {{-- =================================================================== --}}
                                {{-- START Notification DropDown navbar --}}
                                {{-- =================================================================== --}}
                                {{-- <li class="nav-item dropdown  mx-3">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">

                                        <div class="position-relative">
                                          <i class="iconify font30" data-icon="mdi:bell-outline"></i>
                                            <span
                                                class="position-absolute CustomBadge top-0 start-100 translate-middle badge rounded-pill bg-danger  ">
                                                4
                                                <span class="visually-hidden">unread notifications</span>
                                            </span>

                                        </div>
                                    </a>


                                    <div class="dropdown-menu FloatingBlocksBackground dropdownnotification Custom-Dropdown-Menu"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        <div
                                            class="dropdown-menu-header bgprimary p-3 d-flex justify-content-between  align-items-center">
                                            <h6 class="whitecolor my-auto"> 4 New Notifications </h6>
                                            <a href="#"><span class="badge rounded-pill bg-success">Mark All
                                                    Read</span></a>
                                        </div>

                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-3 d-flex align-items-center">
                                            <div class="mx-auto">
                                                <div class="rounded-circle  text-center p-2 mx-2  bgprimaryopacity">
                                                    <span class="iconify primarycolor font30"
                                                        data-icon="material-symbols:check-circle-outline"></span>
                                                </div>
                                            </div>
                                            <div class="w-100 mx-2">
                                                <p class="darkcolor my-0">Project approved</p>
                                                <p class="my-0 font12">4 hour ago</p>
                                            </div>
                                        </a>

                                        <hr class="mx-4 graycolor my-0">






                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-3 d-flex align-items-center">
                                            <div class="mx-auto">
                                                <div class="rounded-circle  text-center p-2 mx-2  bgsecondaryopacity">
                                                    <span class="iconify seccolor  font30"
                                                        data-icon="material-symbols:rate-review-outline"></span>
                                                </div>
                                            </div>
                                            <div class="w-100 mx-2">
                                                <p class="darkcolor my-0">New review received</p>
                                                <p class="my-0 font12">10 hour ago</p>
                                            </div>
                                        </a>

                                        <hr class="mx-4 graycolor my-0">








                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-3 d-flex align-items-center">
                                            <div class="mx-auto">
                                                <div class="rounded-circle  text-center p-2 mx-2  bgfourthopacity">
                                                    <span class="iconify fourthcolor font30"
                                                        data-icon="ri:money-dollar-circle-line"></span>
                                                </div>
                                            </div>
                                            <div class="w-100 mx-2">
                                                <p class="darkcolor my-0">Payment Received</p>
                                                <p class="my-0 font12">1 day ago</p>
                                            </div>
                                        </a>

                                        <hr class="mx-4 graycolor my-0">









                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-3 d-flex align-items-center">
                                            <div class="mx-auto">
                                                <div class="rounded-circle  text-center p-2 mx-2  bgthirdopacity">
                                                    <span class="iconify thirdcolor font30"
                                                        data-icon="codicon:cloud-upload"></span>
                                                </div>
                                            </div>
                                            <div class="w-100 mx-2">
                                                <p class="darkcolor my-0">Updates Available</p>
                                                <p class="my-0 font12">2 days ago</p>
                                            </div>
                                        </a>




                                        <div class="dropdown-menu-footer bgprimaryopacity p-3">
                                            <button class="primarybtn minibtn d-block mx-auto">view all <span
                                                    class="iconify font20"
                                                    data-icon="material-symbols:arrow-right-alt-rounded"></span></button>
                                        </div>



                                    </div>





                                </li> --}}
                                {{-- =================================================================== --}}
                                {{-- END Notification DropDown navbar --}}
                                {{-- =================================================================== --}}




                                {{-- =================================================================== --}}
                                {{-- START Shortcuts DropDown navbar --}}
                                {{-- =================================================================== --}}

                                {{-- <li class="nav-item dropdown mx-3">
                                    <a class="nav-link dropdown-toggle" href="#" id="ShortcutsDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">


                                        <div class="Frame">
                                            <i class="iconify font30"
                                                data-icon="material-symbols:grid-view-outline"></i>
                                        </div>


                                    </a>

                                    <div class="dropdown-menu ShortcutsDropDown FloatingBlocksBackground Custom-Dropdown-Menu"
                                        aria-labelledby="ShortcutsDropdownMenuLink">
                                        <div
                                            class="dropdown-menu-header d-flex justify-content-between align-items-center bgprimary p-3">

                                            <h6 class="whitecolor my-auto text-center mt-1"> Shortcuts </h6>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="#"><span class="iconify font20 mx-2"
                                                        data-icon="material-symbols:edit-square-outline-rounded"></span></a>
                                                <a href="#"><span class="iconify font20 mx-2 mt-1"
                                                        data-icon="material-symbols:add-circle-outline-rounded"></span></a>
                                            </div>
                                        </div>

                                        <div class="row py-2 px-3">


                                            <a href="#" class="col-4 p-2">

                                                <div
                                                    class="rounded text-center mx-auto p-2 mx-2 my-1 w-75 bgprimaryopacity">
                                                    <span class="iconify primarycolor font26"
                                                        data-icon="material-symbols:mail-outline-rounded"></span>
                                                </div>

                                                <p class="darkcolor text-center my-2">E-mail</p>


                                            </a>





                                            <a href="#" class="col-4 p-2">

                                                <div
                                                    class="rounded text-center mx-auto p-2 mx-2 my-1 w-75 bgsecondaryopacity">
                                                    <span class="iconify seccolor    font26"
                                                        data-icon="material-symbols:location-on"></span>
                                                </div>

                                                <p class="darkcolor text-center my-2">Map</p>


                                            </a>






                                            <a href="#" class="col-4 p-2">

                                                <div
                                                    class="rounded text-center mx-auto p-2 mx-2 my-1 w-75 bgthirdopacity">
                                                    <span class="iconify thirdcolor font26"
                                                        data-icon="material-symbols:chat-outline"></span>
                                                </div>

                                                <p class="darkcolor text-center my-2">Chat</p>


                                            </a>






                                            <a href="#" class="col-4 p-2">

                                                <div
                                                    class="rounded text-center mx-auto p-2 mx-2 my-1 w-75 bgprimaryopacity">
                                                    <span class="iconify primarycolor font26"
                                                        data-icon="ph:article-medium"></span>
                                                </div>

                                                <p class="darkcolor text-center my-2">Blog</p>


                                            </a>






                                            <a href="#" class="col-4 p-2">

                                                <div
                                                    class="rounded text-center mx-auto p-2 mx-2 my-1 w-75 bgsecondaryopacity">
                                                    <span class="iconify seccolor font26"
                                                        data-icon="material-symbols:calendar-month-outline-rounded"></span>
                                                </div>

                                                <p class="darkcolor text-center my-2">calendar</p>


                                            </a>






                                            <a href="#" class="col-4 p-2">

                                                <div
                                                    class="rounded text-center mx-auto p-2 mx-2 my-1  w-75 bgthirdopacity">
                                                    <span class="iconify thirdcolor font26"
                                                        data-icon="material-symbols:display-settings-outline"></span>
                                                </div>

                                                <p class="darkcolor text-center my-2"> settings </p>


                                            </a>



                                        </div>





                                    </div>
                                </li> --}}

                                {{-- =================================================================== --}}
                                {{-- END Shortcuts DropDown navbar --}}
                                {{-- =================================================================== --}}






                                {{-- =================================================================== --}}
                                {{-- START Profile DropDown navbar --}}
                                {{-- =================================================================== --}}

                                <li class="nav-item dropdown mx-3">
                                    <a class="nav-link dropdown-toggle" href="#"
                                        id="avatarframeDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">


                                        <div class="avatarframe">
                                            <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('assets/images/default-avatar.png') }}"
                                                class="img-fluid" alt="">

                                        </div>

                                    </a>

                                    <div class="dropdown-menu FloatingBlocksBackground avatarframedropdown Custom-Dropdown-Menu"
                                        aria-labelledby="avatarframeDropdownMenuLink">
                                        <div class="dropdown-menu-header bgprimary px-3 py-4">
                                            <h5 class="whitecolor my-auto text-center">
                                                <h5 class="whitecolor my-auto text-center"> {{ Auth::user()->name }}
                                                </h5>
                                            </h5>
                                        </div>

                                        {{-- START profile dropDown item --}}
                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-2 d-flex align-items-center">
                                            <span class="iconify darkcolor font30"
                                                data-icon="mdi:user-circle-outline"></span>

                                            <div class="w-100 mx-2">
                                                <p class="darkcolor my-0"> My Profile</p>
                                            </div>

                                        </a>
                                        {{-- END profile dropDown item --}}

                                        <hr class="graycolor my-0">


                                        {{-- START profile dropDown item --}}

                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-2 d-flex align-items-center">
                                            <span class="iconify darkcolor font30"
                                                data-icon="material-symbols:edit-square-outline-rounded"></span>

                                            <div class="w-100 mx-2">
                                                <p class="darkcolor my-0"> Edit Profile </p>
                                            </div>

                                        </a>
                                        {{-- END profile dropDown item --}}

                                        <hr class="graycolor my-0">





                                        {{-- START profile dropDown item --}}

                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-2 d-flex align-items-center">
                                            <span class="iconify darkcolor font30"
                                                data-icon="fluent:shifts-activity-20-filled"></span>

                                            <div class="w-100 mx-2">
                                                <p class="darkcolor my-0"> Activity Logs </p>
                                            </div>

                                        </a>
                                        {{-- END profile dropDown item --}}

                                        <hr class="graycolor my-0">



                                        {{-- START profile dropDown item --}}

                                        <a href="#"
                                            class="dropdown-menu-item  px-3 py-2 d-flex align-items-center">
                                            <span class="iconify darkcolor font30" data-icon="ph:gear-light"></span>

                                            <div class="w-100 mx-2">
                                                <p class="darkcolor my-0"> Account Settings </p>
                                            </div>

                                        </a>
                                        {{-- END profile dropDown item --}}

                                        <hr class="graycolor my-0">




                                        {{-- START profile dropDown item --}}

                                        <a href="{{ route('logout') }}"
                                            class="dropdown-menu-item  px-3 py-2 d-flex align-items-center"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span class="iconify darkcolor font30"
                                                data-icon="bytesize:sign-out"></span>

                                            <div class="w-100 mx-2">
                                                <p class="darkcolor my-0"> Sign Out </p>
                                            </div>

                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                        {{-- END profile dropDown item --}}








                                    </div>
                                </li>

                                {{-- =================================================================== --}}
                                {{-- END Profile DropDown navbar --}}
                                {{-- =================================================================== --}}


                            </div>
                        </div>
                    </div>
                </nav>





                {{-- navbar  end here --}}




















                {{-- START OF theme Settings Offcanvas  --}}




                <div class="offcanvas themeSettingsOffcanvas bgbodycolor offcanvas-end" data-bs-scroll="true"
                    tabindex="-1" id="themeSettingsOffcanvas" aria-labelledby="themeSettingsOffcanvas">
                    <div class="offcanvas-header BlocksBackground">


                        <div>

                            <h5 class="darkcolor offcanvas-title" id="offcanvasWithBothOptionsLabel">Theme Customizer
                            </h5>
                            <p class="graycolor">Customize & Preview in Real Time</p>

                        </div>
                        <a type="button" class="" data-bs-dismiss="offcanvas" aria-label="Close"> <span
                                class="iconify font24 darkcolor" data-icon="ic:round-close"></span> </a>
                    </div>




                    <div class="offcanvas-body  BlocksBackground  pt-0">






                        <hr class="mt-0">
                        <div class="Theme-Customizer-Theming">
                            <h6 class="font14 text-uppercase textcolor">Theming</h6>




                            <div class="Theme-Customizer-Theming-Skin">

                                <p class="font18 text-capitalize graycolor mt-3 mb-2">Skin</p>

                                <div class="d-flex gap-3">

                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="Skin"
                                            value="Default" id="Theme-Customizer-Theming-Skin-default" checked>
                                        <label class="form-check-label textcolor text-capitalize"
                                            for="Theme-Customizer-Theming-Skin-default">
                                            Default
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="Skin"
                                            value="Bordered" id="Theme-Customizer-Theming-Skin-bordered">
                                        <label class="form-check-label textcolor text-capitalize"
                                            for="Theme-Customizer-Theming-Skin-bordered">
                                            Bordered
                                        </label>
                                    </div>

                                </div>
                            </div>




                            <div class="Theme-Customizer-Theming-Mode">

                                <p class="font18 text-capitalize graycolor mt-3 mb-2">Mode</p>

                                <div class="d-flex gap-3">

                                    <div class="form-check">
                                        <input class="form-check-input " type="radio"
                                            styledata="/assets/DashBoard/css/colors.css" name="Mode"
                                            value="ligth" id="Theme-Customizer-Theming-Mode-light" checked>
                                        <label class="form-check-label textcolor text-capitalize"
                                            for="Theme-Customizer-Theming-Mode-light">
                                            Light
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input "
                                            type="radio"styledata="/assets/DashBoard/css/colorsDark.css"
                                            name="Mode" value="dark" id="Theme-Customizer-Theming-Mode-dark">
                                        <label class="form-check-label textcolor text-capitalize"
                                            for="Theme-Customizer-Theming-Mode-dark">
                                            Dark
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio"
                                            styledata="/assets/DashBoard/css/colorsDarkBlue.css" name="Mode"
                                            value="darkblue" id="Theme-Customizer-Theming-Mode-darkblue">
                                        <label class="form-check-label textcolor text-capitalize"
                                            for="Theme-Customizer-Theming-Mode-darkblue">
                                            DarkBlue
                                        </label>
                                    </div>

                                </div>
                            </div>















                            <div class="Theme-Customizer-Theming-primarycolor">

                                <p class="font18 text-capitalize graycolor mt-3 mb-2">primary color</p>

                                <div class="d-flex pt-1 gap-2">

                                    <div>
                                        <input type="radio" class="btn-check" name="primarycolor" id="bgprimary"
                                            autocomplete="off" checked>
                                        <label class="btn btn-sm  p-3 bgprimary" for="bgprimary"></label>
                                    </div>

                                    <div>
                                        <input type="radio" class="btn-check" name="primarycolor" id="bgsec"
                                            autocomplete="off">
                                        <label class='btn btn-sm p-3 bgsec' for="bgsec"></label>
                                    </div>



                                    <div>
                                        <input type="radio" class="btn-check" name="primarycolor" id="tomatocolor"
                                            autocomplete="off">
                                        <label class='btn btn-sm p-3 tomatocolor' for="tomatocolor"></label>
                                    </div>




                                    <div>
                                        <input type="radio" class="btn-check" name="primarycolor" id="lightblue"
                                            autocomplete="off">
                                        <label class='btn btn-sm p-3 lightblue' for="lightblue"></label>
                                    </div>




                                    <div>
                                        <input type="radio" class="btn-check" name="primarycolor" id="lightgreen"
                                            autocomplete="off">
                                        <label class='btn btn-sm p-3 lightgreen' for="lightgreen"></label>
                                    </div>


                                </div>
                            </div>










                            <div class="Theme-Customizer-Theming-primarycolor">

                                <p class="font18 text-capitalize graycolor mt-3 mb-2">secondary color</p>

                                <div class="d-flex pt-1 gap-2">

                                    <div>
                                        <input type="radio" class="btn-check" name="secondarycolor"
                                            id="secondarybgprimary" autocomplete="off">
                                        <label class="btn btn-sm  p-3 bgprimary" for="secondarybgprimary"></label>
                                    </div>

                                    <div>
                                        <input type="radio" class="btn-check" name="secondarycolor"
                                            id="secondarybgsec" autocomplete="off" checked>
                                        <label class='btn btn-sm p-3 bgsec' for="secondarybgsec"></label>
                                    </div>



                                    <div>
                                        <input type="radio" class="btn-check" name="secondarycolor"
                                            id="secondarytomatocolor" autocomplete="off">
                                        <label class='btn btn-sm p-3 tomatocolor' for="secondarytomatocolor"></label>
                                    </div>




                                    <div>
                                        <input type="radio" class="btn-check" name="secondarycolor"
                                            id="secondarylightblue" autocomplete="off">
                                        <label class='btn btn-sm p-3 lightblue' for="secondarylightblue"></label>
                                    </div>




                                    <div>
                                        <input type="radio" class="btn-check" name="secondarycolor"
                                            id="secondarylightgreen" autocomplete="off">
                                        <label class='btn btn-sm p-3 lightgreen' for="secondarylightgreen"></label>
                                    </div>


                                </div>
                            </div>






                        </div>













                        <hr class="mt-5 pt-2">
                        <div class="Theme-Customizer-Layout">
                            <h6 class="font14 text-uppercase textcolor ">Layout</h6>


                            <div class="d-flex  pt-2">
                                <label class="form-check-label font18 graycolor " for="RTL">RTL</label>
                                <input class="form-check-input mx-auto" type="checkbox" id="RTL">



                            </div>

                        </div>












                    </div>

                </div>













                {{-- END OF theme Settings Offcanvas  --}}
