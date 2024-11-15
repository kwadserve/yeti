<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>YIF | Youth Electoral Trained Instructor</title>
    <meta name="robots" content="follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/faviconyif.png') }}">

    <!-- CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/magnify.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <style>
        .calendar {
            display: flex;
            position: relative;
            padding: 16px;
            margin: 0 auto;
            max-width: 320px;
            background: white;
            border-radius: 4px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .month-year {
            position: absolute;
            bottom: 62px;
            right: -27px;
            font-size: 2rem;
            line-height: 1;
            font-weight: 300;
            color: #94A3B8;
            transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
        }

        .year {
            margin-left: 4px;
            color: #CBD5E1;
        }

        .days {
            display: flex;
            flex-wrap: wrap;
            flex-grow: 1;
            margin-right: 46px;
        }

        .day-label {
            position: relative;
            flex-basis: calc(14.286% - 2px);
            margin: 1px 1px 12px 1px;
            font-weight: 700;
            font-size: 0.65rem;
            text-transform: uppercase;
            color: #1E293B;
        }

        .day {
            position: relative;
            flex-basis: calc(14.286% - 2px);
            margin: 1px;
            border-radius: 999px;
            font-weight: 300;
        }

        .day.dull {
            color: #94A3B8;
        }

        .day.active {
            color: #067910;
            font-weight: 600;
            cursor: pointer;
        }

        .day.today {
            color: #0EA5E9;
            font-weight: 600;
        }

        .day::before {
            content: '';
            display: block;
            padding-top: 100%;
        }

        .day:hover {
            background: #E0F2FE;
        }

        .day .content {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<?php $avatar = App\Http\Controllers\UserController::get_meta(Auth::id(), 'avatar'); ?>

<body class="rbt-header-sticky">
    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-10 rbt-transparent-header">
        <div class="rbt-sticky-placeholder"></div>
        <div class="rbt-header-wrapper pt-4 pb-4 header-not-transparent header-sticky">
            <div class="container">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left rbt-header-content">
                        <div class="header-info">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ url('assets/images/yiflogodark.png') }}" alt="YIF Logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="rbt-main-navigation d-none d-xl-block">
                        <nav class="mainmenu-nav">
                            <ul class="mainmenu"></ul>
                        </nav>
                    </div>

                    <div class="header-right">
                        <!-- Navbar Icons -->
                        <ul class="quick-access">
                            @guest
                                <li class="rbt-user-wrapper d-none d-xl-block">
                                    <a href="{{ url('login') }}">
                                        Log In
                                    </a>
                                </li>
                                <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                    <a href="{{ url('register') }}">Register</a>
                                </li>
                            @else
                                <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                    <a href="#">
                                        @if ($avatar)
                                            <img src="{{ url('avatar/' . $avatar) }}" width="35" alt="Instructor">
                                        @else
                                            <img width="35"
                                                src="{{ url('https://cdn-icons-png.flaticon.com/512/6596/6596121.png') }}"
                                                alt="Instructor">
                                        @endif
                                        {{ strtok(Auth::user()->name, ' ') }}
                                    </a>
                                    <div class="rbt-user-menu-list-wrapper">
                                        <div class="inner">
                                            <div class="rbt-admin-profile">
                                                <div class="admin-thumbnail">
                                                    @if ($avatar)
                                                        <img src="{{ url('avatar/' . $avatar) }}" alt="Instructor">
                                                    @else
                                                        <img src="{{ url('https://cdn-icons-png.flaticon.com/512/6596/6596121.png') }}"
                                                            alt="Instructor">
                                                    @endif
                                                </div>
                                                <div class="admin-info">
                                                    <span class="name">{{ Auth::user()->name }}</span>
                                                    <a class="rbt-btn-link color-primary" href="{{ url('profile') }}">View
                                                        Profile</a>
                                                </div>
                                            </div>
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="{{ url('dashboard') }}">
                                                        <i class="feather-home"></i>
                                                        <span>My Dashboard</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('settings') }}">
                                                        <i class="feather-settings"></i>
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <hr class="mt--10 mb--10">
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="{{ url('logout') }}">
                                                        <i class="feather-log-out"></i>
                                                        <span>Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>

                                <li class="access-icon rbt-user-wrapper d-block d-xl-none">
                                    <a class="rbt-round-btn" href="#"><i class="feather-user"></i></a>
                                    <div class="rbt-user-menu-list-wrapper">
                                        <div class="inner">
                                            <div class="rbt-admin-profile">
                                                <div class="admin-thumbnail">
                                                    @if ($avatar)
                                                        <img src="{{ url('avatar/' . $avatar) }}" alt="Instructor">
                                                    @else
                                                        <img src="{{ url('https://cdn-icons-png.flaticon.com/512/6596/6596121.png') }}"
                                                            alt="Instructor">
                                                    @endif
                                                </div>
                                                <div class="admin-info">
                                                    <span class="name">{{ Auth::user()->name }}</span>
                                                    <a class="rbt-btn-link color-primary"
                                                        href="{{ url('profile') }}">View Profile</a>
                                                </div>
                                            </div>
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="{{ url('dashboard') }}">
                                                        <i class="feather-home"></i>
                                                        <span>My Dashboard</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('settings') }}">
                                                        <i class="feather-settings"></i>
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <hr class="mt--10 mb--10">
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="{{ url('logout') }}">
                                                        <i class="feather-log-out"></i>
                                                        <span>Logout</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endguest
                        </ul>

                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/yiflogodark.png" alt="YIF logo">
                        </a>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
                @guest
                    <p class="description">ARE YOU READY TO BE A YETI?<br></p>
                    <ul class="navbar-top-left rbt-information-list justify-content-start">
                        <li>
                            <a href="{{ url('login') }}"><i class="feather-user"></i>Login</a>
                        </li>
                        <li>
                            <a href="{{ url('register') }}"><i class="feather-book"></i>Register</a>
                        </li>
                    </ul>
                @else
                    <p class="description">
                        <i class="feather-user"></i>{{ Auth::user()->name }}<br>
                    </p>
                    <ul class="navbar-top-left rbt-information-list justify-content-start">
                        <li>
                            <a href="{{ url('course') }}">Course</a>
                        </li>
                    </ul>
                @endguest
            </div>

            <nav class="mainmenu-nav">
                <ul class="mainmenu"></ul>
            </nav>

            <div class="mobile-menu-bottom">
                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Connect with us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                        <li><a href="https://www.facebook.com/youngindiafdn">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://twitter.com/YoungIndiaFDN">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/youngindiafdn/">
                                <i class="feather-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    @yield('content')

    <!-- Start Footer aera -->
    <footer class="rbt-footer footer-style-1">
        <div class="footer-top">
            <div class="container">
                <div class="row row--15 mt_dec--30">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/images/yiflogodark.png" alt="yif logo">
                                </a>
                            </div>

                            <p class="description mt--20">Young India Foundation is a public trust registered u/s 12A
                                of the Income Tax Act, 1961, and with the Director of Income Tax (Exemptions) u/s 80G.
                            </p>


                        </div>
                    </div>

                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="footer-widget">
                            <h5 class="ft-title">Useful Links</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="#">FAQ's</a>
                                </li>
                                <li>
                                    <a href="https://youngindians.vote/#scevents">Events</a>
                                </li>
                                <li>
                                    <a href="https://news.youngindia.foundation/">YIF News</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="footer-widget">
                            <h5 class="ft-title">Legal</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="https://youngindia.foundation/terms.php">Terms</a>
                                </li>
                                <li>
                                    <a href="https://youngindia.foundation/privacy_policy.php">Privacy Policy</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                        <div class="footer-widget">
                            <h5 class="ft-title">Get Contact</h5>
                            <ul class="ft-link">
                                <li><span>Phone:</span> <a href="#">+91-9833824000</a></li>
                                <li><span>E-mail:</span> <a
                                        href="mailto:hr@example.com">contact@youngindiafoundation.org</a></li>
                                <li><span>Location:</span> 2132, Near PWD Rest House, Fatehpur, Karnal Road
                                    Pundri, Kaithal (Haryana) - 136042</li>
                            </ul>
                            <ul class="social-icon social-default icon-naked justify-content-start mt--20">
                                <li><a href="https://www.facebook.com/youngindiafdn">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="https://twitter.com/YoungIndiaFDN">
                                        <i class="feather-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.instagram.com/youngindiafdn/">
                                        <i class="feather-instagram"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer aera -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-style-1 ptb--20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <p class="rbt-link-hover text-center text-lg-start">Copyright © 2023 <a
                            href="https://youngindia.foundation">Young India Foundation</a> All Rights Reserved |
                        Designed by <a href="http://kwad.in">Kwad</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ url('assets/js/vendor/modernizr.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ url('assets/js/vendor/jquery.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ url('assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- sal.js -->
    <script src="{{ url('assets/js/vendor/sal.js') }}"></script>
    <script src="{{ url('assets/js/vendor/swiper.js') }}"></script>
    <script src="{{ url('assets/js/vendor/magnify.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ url('assets/js/vendor/odometer.js') }}"></script>
    <script src="{{ url('assets/js/vendor/backtotop.js') }}"></script>
    <script src="{{ url('assets/js/vendor/isotop.js') }}"></script>
    <script src="{{ url('assets/js/vendor/imageloaded.js') }}"></script>

    <script src="{{ url('assets/js/vendor/wow.js') }}"></script>
    <script src="{{ url('assets/js/vendor/waypoint.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/easypie.js') }}"></script>
    <script src="{{ url('assets/js/vendor/text-type.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery-one-page-nav.js') }}"></script>
    <script src="{{ url('assets/js/vendor/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ url('assets/js/vendor/magnify-popup.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/paralax-scroll.js') }}"></script>
    <script src="{{ url('assets/js/vendor/paralax.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/countdown.js') }}"></script>
    <script src="{{ url('assets/js/vendor/plyr.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ url('assets/js/main.js') }}"></script>
    <script src="{{ url('assets/js/custom.js') }}"></script>
</body>

</html>
