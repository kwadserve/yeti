<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>YIF | Youth Electoral Trained Instructor</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/images/faviconyif.png')}}">

        <!-- CSS
        ============================================ -->
        <link rel="stylesheet" href="{{url('assets/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/vendor/slick.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/vendor/slick-theme.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/sal.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/feather.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/euclid-circulara.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/swiper.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/magnify.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/odometer.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/animation.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/magnigy-popup.min.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/plugins/plyr.css')}}">
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    </head>
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
                                    <a href="index.html">
                                        <img src="assets/images/yiflogodark.png" alt="YIF Logo">
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
                                        <a href="{{url('login')}}">
                                            Log In
                                        </a>
                                    </li>
                                    <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                        <a href="{{url('register')}}">Register</a>
                                    </li>
                                @else
                                <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                    <a href="#"><i class="feather-user"></i>Admin</a>
                                    <div class="rbt-user-menu-list-wrapper">
                                        <div class="inner">
                                            <div class="rbt-admin-profile">
                                                <div class="admin-thumbnail">
                                                    <img src="assets/images/team/avatar.jpg" alt="User Images">
                                                </div>
                                                <div class="admin-info">
                                                    <span class="name">Nipa Bali</span>
                                                    <a class="rbt-btn-link color-primary" href="profile.html">View Profile</a>
                                                </div>
                                            </div>
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="instructor-dashboard.html">
                                                        <i class="feather-home"></i>
                                                        <span>My Dashboard</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <hr class="mt--10 mb--10">
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="{{url('logout')}}">
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
                                                    <img src="assets/images/team/avatar.jpg" alt="User Images">
                                                </div>
                                                <div class="admin-info">
                                                    <span class="name">Nipa Bali</span>
                                                    <a class="rbt-btn-link color-primary" href="profile.html">View Profile</a>
                                                </div>
                                            </div>
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="instructor-dashboard.html">
                                                        <i class="feather-home"></i>
                                                        <span>My Dashboard</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <hr class="mt--10 mb--10">
                                            <ul class="user-list-wrapper">
                                                <li>
                                                    <a href="#">
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
                                <img src="assets/images/logo/logo.png" alt="Education Logo Images">
                            </a>
                        </div>
                        <div class="rbt-btn-close">
                            <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </div>
                    <p class="description">Histudy is a education website template. You can customize all.</p>
                    <ul class="navbar-top-left rbt-information-list justify-content-start">
                        <li>
                            <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                        </li>
                        <li>
                            <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                        </li>
                    </ul>
                </div>
    
                <nav class="mainmenu-nav">
                    <ul class="mainmenu"></ul>
                </nav>
    
                <div class="mobile-menu-bottom">
                    <div class="social-share-wrapper">
                        <span class="rbt-short-title d-block">Find With Us</span>
                        <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                            <li><a href="https://www.facebook.com/">
                                    <i class="feather-facebook"></i>
                                </a>
                            </li>
                            <li><a href="https://www.twitter.com/">
                                    <i class="feather-twitter"></i>
                                </a>
                            </li>
                            <li><a href="https://www.instagram.com/">
                                    <i class="feather-instagram"></i>
                                </a>
                            </li>
                            <li><a href="https://www.linkdin.com/">
                                    <i class="feather-linkedin"></i>
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

                                <p class="description mt--20">We’re always in search for talented
                                    and motivated people. Don’t be shy introduce yourself!
                                </p>

                                <div class="contact-btn mt--30">
                                    <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="#">
                                        <div class="icon-reverse-wrapper">
                                            <span class="btn-text">Contact With Us</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <h5 class="ft-title">Useful Links</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="12-marketplace.html">FAQ's</a>
                                    </li>
                                    <li>
                                        <a href="04-kindergarten.html">Events</a>
                                    </li>
                                    <li>
                                        <a href="13-university-classic.html">YIF News</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <h5 class="ft-title">Legal</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="contact.html">Terms</a>
                                    </li>
                                    <li>
                                        <a href="become-a-teacher.html">Privacy Policy</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                            <div class="footer-widget">
                                <h5 class="ft-title">Get Contact</h5>
                                <ul class="ft-link">
                                    <li><span>Phone:</span> <a href="#">(406) 555-0120</a></li>
                                    <li><span>E-mail:</span> <a href="mailto:hr@example.com">rainbow@example.com</a></li>
                                    <li><span>Location:</span> North America, USA</li>
                                </ul>
                                <ul class="social-icon social-default icon-naked justify-content-start mt--20">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com/">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.linkdin.com/">
                                            <i class="feather-linkedin"></i>
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
                        <p class="rbt-link-hover text-center text-lg-start">Copyright © 2023 <a href="https://youngindia.foundation">Young India Foundation</a> All Rights Reserved | Designed by <a href="http://kwad.in">Kwad</a></p>
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
        <script src="{{url('assets/js/vendor/modernizr.min.js')}}"></script>
        <!-- jQuery JS -->
        <script src="{{url('assets/js/vendor/jquery.js')}}"></script>
        <!-- Bootstrap JS -->
        <script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>
        <!-- sal.js -->
        <script src="{{url('assets/js/vendor/sal.js')}}"></script>
        <script src="{{url('assets/js/vendor/swiper.js')}}"></script>
        <script src="{{url('assets/js/vendor/magnify.min.js')}}"></script>
        <script src="{{url('assets/js/vendor/jquery-appear.js')}}"></script>
        <script src="{{url('assets/js/vendor/odometer.js')}}"></script>
        <script src="{{url('assets/js/vendor/backtotop.js')}}"></script>
        <script src="{{url('assets/js/vendor/isotop.js')}}"></script>
        <script src="{{url('assets/js/vendor/imageloaded.js')}}"></script>

        <script src="{{url('assets/js/vendor/wow.js')}}"></script>
        <script src="{{url('assets/js/vendor/waypoint.min.js')}}"></script>
        <script src="{{url('assets/js/vendor/easypie.js')}}"></script>
        <script src="{{url('assets/js/vendor/text-type.js')}}"></script>
        <script src="{{url('assets/js/vendor/jquery-one-page-nav.js')}}"></script>
        <script src="{{url('assets/js/vendor/bootstrap-select.min.js')}}"></script>
        <script src="{{url('assets/js/vendor/jquery-ui.js')}}"></script>
        <script src="{{url('assets/js/vendor/magnify-popup.min.js')}}"></script>
        <script src="{{url('assets/js/vendor/paralax-scroll.js')}}"></script>
        <script src="{{url('assets/js/vendor/paralax.min.js')}}"></script>
        <script src="{{url('assets/js/vendor/countdown.js')}}"></script>
        <script src="{{url('assets/js/vendor/plyr.js')}}"></script>
        <!-- Main JS -->
        <script src="{{url('assets/js/main.js')}}"></script>
    </body>
</html>