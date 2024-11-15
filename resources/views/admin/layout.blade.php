<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>@yield('title')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/faviconyif.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ url('extra/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ url('extra/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ url('extra/vendor/simple-datatables/style.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ url('extra/css/style.css') }}" rel="stylesheet" />
</head>
<?php $avatar = App\Http\Controllers\UserController::get_meta(Auth::id(), 'avatar'); ?>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <img src="{{ url('assets/images/yiflogodark.png') }}" alt="YIF Logo" />
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        @if ($avatar)
                            <img src="{{ url('avatar/' . $avatar) }}" alt="Instructor" class="rounded-circle">
                        @else
                            <img src="{{ url('https://cdn-icons-png.flaticon.com/512/6596/6596121.png') }}"
                                alt="Instructor" class="rounded-circle">
                        @endif
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>Administrator</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ url('logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('admin') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i>
                    <span>Users</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="users-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('admin/users') }}">
                            <i class="bi bi-circle"></i><span>All</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/users/pending_interview')}}">
                            <i class="bi bi-circle"></i><span>Pending</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/users/booked_interview')}}">
                            <i class="bi bi-circle"></i><span>Booked</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/users/yeti_accepted')}}">
                            <i class="bi bi-circle"></i><span>Accepted</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('admin/users/yeti_rejected')}}">
                            <i class="bi bi-circle"></i><span>Rejected</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Users Page Nav -->
        </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>KWAD</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by
            <a href="https://kwad.in/">KWAD</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('extra/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('extra/vendor/simple-datatables/simple-datatables.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('extra/js/main.js') }}"></script>
</body>

</html>
