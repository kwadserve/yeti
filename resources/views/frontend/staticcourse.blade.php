<!DOCTYPE html>
<html lang="en">

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
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/faviconyif.png') }}">


    <!-- CSS
 ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/sal.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/euclid-circulara.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/magnify.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/odometer.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/animation.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/magnigy-popup.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/plugins/plyr.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css') }}">
    <style>
        .rbt-accordion-style .card+.card {
            margin-top: 0;
        }
    </style>
</head>

<body class="rbt-header-sticky">

    <div class="rbt-lesson-area bg-color-white">
        <div class="rbt-lesson-content-wrapper">
            @include('frontend.course-sidebar')

            @include('frontend.course-main-content')
        </div>
    </div>


    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/swiper.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/odometer.js"></script>
    <script src="assets/js/vendor/backtotop.js"></script>
    <script src="assets/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>

    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/magnify-popup.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <script src="assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>
