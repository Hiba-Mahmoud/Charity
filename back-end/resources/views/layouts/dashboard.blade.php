<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('cp/img/apple-icon.png')}}">
        <title>{{env('APP_NAME')}}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset('cp/img/favicon/favicon.ico')}}" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

        <!-- Icons. Uncomment required icon fonts -->
        <link rel="stylesheet" href="{{asset('cp/vendor/fonts/boxicons.css')}}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{asset('cp/vendor/css/core.css')}}" class="template-customizer-core-css')}}" />
        <link rel="stylesheet" href="{{asset('cp/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
        
        <!-- Fontawesme -->
        <link rel="stylesheet" href="{{asset('cp/vendor/libs/fontawesome/css/all.min.css')}}" />

        <!-- Datatables -->
        <link rel="stylesheet" href="{{asset('cp/vendor/libs/datatables/css/dataTables.bootstrap5.min.css')}}" />
        
        <link rel="stylesheet" href="{{asset('cp/css/demo.css')}}" />
        

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{asset('cp/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

        <link rel="stylesheet" href="{{asset('cp/vendor/libs/apex-charts/apex-charts.css')}}" />

        <!-- Page CSS -->

        <!-- Helpers -->
        <script src="{{asset('cp/vendor/js/helpers.js')}}"></script>

        <script src="{{asset('cp/js/config.js')}}"></script>
    </head>

    <body>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

                    <div class="app-brand demo">
                        <a href="/dashboard" class="app-brand-link">
                            <span class="app-brand-logo demo"></span>
                            <span class="app-brand-text demo menu-text fw-bolder ms-2">{{env('APP_NAME')}}</span>
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                            <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>

                    <hr>

                    <ul class="menu-inner py-1">
                        <li class="menu-item menu-tab" id="dashboard-tab">
                            <a href="/dashboard" class="menu-link">
                                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                <div data-i18n="Analytics">Dashboard</div>
                            </a>
                        </li>
                        <li class="menu-item menu-tab" id="category-tab">
                            <a href="{{route('category.index')}}" class="menu-link">
                                <i class="menu-icon fa-solid fa-tags"></i>
                                <div data-i18n="Analytics">Categories</div>
                            </a>
                        </li>
                        <li class="menu-item menu-tab" id="event-tab">
                            <a href="{{route('event.index')}}" class="menu-link">
                                <i class="menu-icon fa-solid fa-calendar-days"></i>
                                <div data-i18n="Analytics">Events</div>
                            </a>
                        </li>
                        <li class="menu-item menu-tab" id="case-tab">
                            <a href="{{route('case.index')}}" class="menu-link">
                                <i class="menu-icon fa-solid fa-users"></i>
                                <div data-i18n="Analytics">Cases</div>
                            </a>
                        </li>
                        <li class="menu-item menu-tab" id="training-tab">
                            <a href="{{route('training.index')}}" class="menu-link">
                                <i class="menu-icon fa-solid fa-graduation-cap"></i>
                                <div data-i18n="Analytics">Trainings</div>
                            </a>
                        </li>
                        <li class="menu-item menu-tab" id="medical-tab">
                            <a href="{{route('medical.index')}}" class="menu-link">
                                <i class="menu-icon fa-solid fa-pills"></i>
                                <div data-i18n="Analytics">Medical Services</div>
                            </a>
                        </li>
                    </ul>
                </aside>
                <div class="layout-page">
                    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                <i class="bx bx-menu bx-sm"></i>
                            </a>
                        </div>
                        <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                            <ul class="navbar-nav flex-row align-items-center ms-auto">

                                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                        <div class="avatar avatar-online">
                                            <img src="{{asset('cp/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar avatar-online">
                                                            <img src="{{asset('cp/img/avatars/1.png')}}" alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <span class="fw-semibold d-block">John Doe</span>
                                                        <small class="text-muted">Admin</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="auth-login-basic.html">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    @yield('content')

                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©<script>document.write(new Date().getFullYear());</script>, made with ❤️ by
                                <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
                            </div>
                        </div>
                    </footer>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{asset('cp/vendor/libs/jquery/jquery.js')}}"></script>
        <script src="{{asset('cp/vendor/libs/popper/popper.js')}}"></script>
        <script src="{{asset('cp/vendor/js/bootstrap.js')}}"></script>
        <script src="{{asset('cp/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

        <!-- Fontawesme -->
        <script src="{{asset('cp/vendor/libs/fontawesome/js/all.min.js')}}"></script>

        <!-- Datatables -->
        <script src="{{asset('cp/vendor/libs/datatables/js/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('cp/vendor/libs/datatables/js/jquery.dataTables.min.js')}}"></script>

        <script src="{{asset('cp/vendor/js/menu.js')}}"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{asset('cp/vendor/libs/apex-charts/apexcharts.js')}}"></script>

        <!-- Summernote -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.26.0/ui/trumbowyg.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.26.0/trumbowyg.min.js"></script>
        

        <!-- Main JS -->
        <script src="{{asset('cp/js/main.js')}}"></script>

        <!-- Page JS -->
        <script src="{{asset('cp/js/dashboards-analytics.js')}}"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

    </body>
</html>
