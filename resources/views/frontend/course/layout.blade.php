<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <title>Lesson - Online Courses & Education Bootstrap5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/images/favicon.png')}}">

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
    <style>
        video::-webkit-media-controls-timeline {
            display: none;
        }
    </style>
</head>
<?php
$user =  Auth::user();
$currentTest = App\Models\UserMeta::where('user_id', $user->id)->where('meta_key', 'current_test')->first();
$test = $currentTest->meta_value;
$videoList = App\Models\Video::where('test', (int)$currentTest->meta_value)->orderBy('serial', 'ASC')->get();
$currentUrl = basename(request()->path());
$currentVideoID = App\Models\UserMeta::where('user_id', $user->id)->where('meta_key', 'last_video')->first();
$currentVideo = App\Models\Video::where('id', (int)$currentVideoID->meta_value)->first();
?>
<body class="rbt-header-sticky">

    <div class="rbt-lesson-area bg-color-white">
        <div class="rbt-lesson-content-wrapper">
            <div class="rbt-lesson-leftsidebar">
                <div class="rbt-course-feature-inner rbt-search-activation">
                    <div class="section-title">
                        <h4 class="rbt-title-style-3">Course Content</h4>
                    </div>

                    <div class="rbt-accordion-style rbt-accordion-02 for-right-content accordion">
                        <div class="accordion" id="accordionExampleb2">
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo4">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#collapseTwo4" aria-controls="collapseTwo4">
                                        Test <span class="rbt-badge-5 ml--10">{{$currentTest->meta_value}}/3</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo4" class="accordion-collapse collapse {{$currentUrl === 'course' ? 'show' : ''}}" aria-labelledby="headingTwo4">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            @if((int)$currentTest->meta_value = 1)
                                            <li>
                                                <a href="#">
                                                    <div class="course-content-left">
                                                        <i class="feather-file-text"></i> <span class="text">Introduction</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="rbt-check"><i class="feather-check"></i></span>
                                                    </div>
                                                </a>
                                            </li>
                                            @endif
                                            @foreach($videoList as $video)
                                            @php
                                                $min = floor($video->duration/60);
                                                $sec = $video->duration - $min*60;
                                            @endphp
                                            <li>
                                                <a href="#">
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> 
                                                        <span class="text">{{$video->video}}</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="min-lable">{{$min}}:{{$sec < 10 ? '0'.$sec : $sec}}</span>
                                                        @if($video->serial < $currentVideo->serial)
                                                        <span class="rbt-check"><i class="feather-check"></i></span>
                                                        @elseif($currentUrl != 'course')
                                                        <span class="rbt-check"><i class="feather-check"></i></span>
                                                        @else
                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                        @endif
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo2">
                                    <button class="accordion-button collapsed {{$currentUrl === 'quiz' ? 'show' : ''}} {{$currentUrl === 'result' ? 'show' : ''}}" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#collapseTwo2" aria-controls="collapseTwo2">
                                        Quiz <span class="rbt-badge-5 ml--10">{{$test}}/3</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            <li>
                                                <a href="#">
                                                    <div class="course-content-left">
                                                        <i class="feather-help-circle"></i> <span class="text">Questions</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="rbt-check {{$currentUrl === 'result' ? '' : 'unread'}}">
                                                            <i class="feather-{{$currentUrl === 'result' ? 'check' : 'circle'}}"></i>
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="course-content-left">
                                                        <i class="feather-help-circle"></i> <span class="text">Result</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('rightSideContent')
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
    <!-- Cuastom JS -->
    <script src="{{url('assets/js/custom.js')}}"></script>    
</body>

</html>