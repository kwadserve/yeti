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
        <link rel="shortcut icon" type="image/x-icon" href="{{url('assets/images/faviconyif.png')}}">


    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{URL::asset('/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/sal.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/feather.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/euclid-circulara.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/swiper.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/magnify.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/odometer.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/magnigy-popup.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/plugins/plyr.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/css/style.css')}}">
    <style>
        .rbt-accordion-style .card + .card {
            margin-top: 0;
        }
        .rbt-scroll-max-height {
            max-height: 100vh !important;
            overflow-y: scroll;
        }
        audio::-webkit-media-controls-timeline,
        video::-webkit-media-controls-timeline {
            display: none;
        }
    </style>
</head>
<?php
$user =  Auth::user();
$currentTest = App\Models\UserMeta::where('user_id', $user->id)->where('meta_key', 'current_test')->first();
$test = $currentTest->meta_value;
$videoList = App\Models\Video::orderBy('test', 'ASC')->orderBy('serial', 'ASC')->get();
$currentUrl = basename(request()->path());
$currentVideoID = App\Models\UserMeta::where('user_id', $user->id)->where('meta_key', 'last_video')->first();
$currentVideo = App\Models\Video::where('id', (int)$currentVideoID->meta_value)->first();
?>
<body class="rbt-header-sticky">

    <div class="rbt-lesson-area bg-color-white">
        <div class="rbt-lesson-content-wrapper">
            <div class="rbt-lesson-leftsidebar">
                <div class="rbt-course-feature-inner rbt-search-activation rbt-scroll-max-height rbt-scroll">
                    <div class="section-title">
                        <h4 class="rbt-title-style-3">Course Content</h4>
                    </div>

                    <div class="rbt-accordion-style rbt-accordion-02 for-right-content accordion">
                        <div class="accordion" id="accordionExampleb2">
                            <div class="rbt-course-main-content liststyle">
                                <h2 class="rbt-title-style-3">
                                    <a>
                                        <div class="course-content-left">
                                            <i class="feather-file-text"></i> <span class="text">Introduction</span>
                                        </div>
                                    </a>
                                </h2>
                            </div>
                            @foreach($videoList as $video)
                            @php
                                $timeline = (array)json_decode($video->timeline);
                            @endphp
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="heading{{$video->id}}">
                                    <button class="accordion-button {{$currentUrl === 'course' && $currentVideo->id === $video->id ? '' : 'collapsed'}}" type="button" data-bs-toggle="collapse" aria-expanded="{{$currentUrl === 'course' && $currentVideo->id === $video->id ? 'true' : 'false'}}" data-bs-target="#collapse{{$video->id}}" aria-controls="collapse{{$video->id}}">
                                        {{$video->video}}
                                    </button>
                                </h2>
                                <div id="collapse{{$video->id}}" class="accordion-collapse collapse {{$currentUrl === 'course' && $currentVideo->id === $video->id ? 'show' : ''}}" aria-labelledby="heading{{$video->id}}">
                                    <div class="accordion-body card-body">
                                        <ul class="rbt-course-main-content liststyle">
                                            @foreach($timeline as $tl)
                                            @php
                                                $min = floor($tl->time/60);
                                                $sec = $tl->time - $min*60;
                                            @endphp
                                            <li>
                                                <a>
                                                    <div class="course-content-left">
                                                        <i class="feather-play-circle"></i> 
                                                        <span class="text">{{$tl->info}}</span>
                                                    </div>
                                                    <div class="course-content-right">
                                                        <span class="min-lable">{{$min}}:{{$sec < 10 ? '0'.$sec : $sec}}</span>
                                                        @if($video->id === $currentVideo->id)
                                                            @if($currentUrl != 'quiz')
                                                            <span class="rbt-check unread"><i class="feather-cirlce"></i></span>
                                                            @else
                                                            <span class="rbt-check"><i class="feather-check"></i></span>
                                                            @endif
                                                        @else
                                                        @switch(true)
                                                            @case($video->test < $currentVideo->test)
                                                                <span class="rbt-check"><i class="feather-check"></i></span>
                                                                @break
                                                            @case($video->test >= $currentVideo->test)
                                                                <span class="rbt-check unread"><i class="feather-lock"></i></span>
                                                                @break
                                                            @default
                                                                <span class="rbt-check unread"><i class="feather-lock"></i></span>
                                                        @endswitch
                                                        @endif
                                                    </div>
                                                </a>
                                            </li>

                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            @switch(true)
                                @case($video->serial === 3 && (int)$video->test === 1)
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="heading{{$video->test}}qq">
                                            <button class="accordion-button collapsed {{$currentUrl === 'quiz' ? 'show' : ''}} {{$currentUrl === 'result' ? 'show' : ''}}" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#collapse{{$video->test}}qq" aria-controls="collapse{{$video->test}}qq">
                                                Statistics quiz
                                            </button>
                                        </h2>
                                        <div id="collapse{{$video->test}}qq" class="accordion-collapse collapse" aria-labelledby="heading{{$video->test}}qq">
                                            <div class="accordion-body card-body">
                                                <ul class="rbt-course-main-content liststyle">
                                                    <li>
                                                        <a>
                                                            <div class="course-content-left">
                                                                <i class="feather-help-circle"></i> <span class="text">Questions</span>
                                                            </div>
                                                            {{-- <div class="course-content-right">
                                                                @if($test === 1 && )
                                                                <span class="rbt-check {{$currentUrl === 'result' ? '' : 'unread'}}">
                                                                    <i class="feather-{{$currentUrl === 'result' ? 'check' : 'circle'}}"></i>
                                                                </span>
                                                            </div> --}}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a>
                                                            <div class="course-content-left">
                                                                <i class="feather-help-circle"></i> <span class="text">Result</span>
                                                            </div>
                                                            {{-- <div class="course-content-right">
                                                                <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                            </div> --}}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @case($video->serial === 3 && (int)$video->test === 2)
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="heading{{$video->test}}qq">
                                            <button class="accordion-button collapsed {{$currentUrl === 'quiz' ? 'show' : ''}} {{$currentUrl === 'result' ? 'show' : ''}}" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#collapse{{$video->test}}qq" aria-controls="collapse{{$video->test}}qq">
                                                Mid-course quiz
                                            </button>
                                        </h2>
                                        <div id="collapse{{$video->test}}qq" class="accordion-collapse collapse" aria-labelledby="heading{{$video->test}}qq">
                                            <div class="accordion-body card-body">
                                                <ul class="rbt-course-main-content liststyle">
                                                    <li>
                                                        <a href="#">
                                                            <div class="course-content-left">
                                                                <i class="feather-help-circle"></i> <span class="text">Questions</span>
                                                            </div>
                                                            {{-- <div class="course-content-right">
                                                                @switch(true)
                                                                    @case($video->test < (int)$test)
                                                                        <span class="rbt-check"><i class="feather-check"></i></span>
                                                                        @break
                                                                    @case($video->test > (int)$test)
                                                                        <span class="rbt-check unread"><i class="feather-lock"></i></span>
                                                                        @break
                                                                    @default
                                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                                @endswitch
                                                                <span class="rbt-check {{$currentUrl === 'result' ? '' : 'unread'}}">
                                                                    <i class="feather-{{$currentUrl === 'result' ? 'check' : 'circle'}}"></i>
                                                                </span>
                                                            </div> --}}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="course-content-left">
                                                                <i class="feather-help-circle"></i> <span class="text">Result</span>
                                                            </div>
                                                            {{-- <div class="course-content-right">
                                                                @switch(true)
                                                                    @case($video->test < (int)$test)
                                                                        <span class="rbt-check"><i class="feather-check"></i></span>
                                                                        @break
                                                                    @case($video->test > (int)$test)
                                                                        <span class="rbt-check unread"><i class="feather-lock"></i></span>
                                                                        @break
                                                                    @default
                                                                        <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                                @endswitch
                                                            </div> --}}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @case($video->serial === 4 && (int)$video->test === 3)
                                    <div class="accordion-item card">
                                        <h2 class="accordion-header card-header" id="heading{{$video->test}}qq">
                                            <button class="accordion-button collapsed {{$currentUrl === 'quiz' ? 'show' : ''}} {{$currentUrl === 'result' ? 'show' : ''}}" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#collapse{{$video->test}}qq" aria-controls="collapse{{$video->test}}qq">
                                                End-course quiz
                                            </button>
                                        </h2>
                                        <div id="collapse{{$video->test}}qq" class="accordion-collapse collapse" aria-labelledby="heading{{$video->test}}qq">
                                            <div class="accordion-body card-body">
                                                <ul class="rbt-course-main-content liststyle">
                                                    <li>
                                                        <a href="#">
                                                            <div class="course-content-left">
                                                                <i class="feather-help-circle"></i> <span class="text">Questions</span>
                                                            </div>
                                                            {{-- <div class="course-content-right">
                                                                <span class="rbt-check {{$currentUrl === 'result' ? '' : 'unread'}}">
                                                                    <i class="feather-{{$currentUrl === 'result' ? 'check' : 'circle'}}"></i>
                                                                </span>
                                                            </div> --}}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <div class="course-content-left">
                                                                <i class="feather-help-circle"></i> <span class="text">Result</span>
                                                            </div>
                                                            {{-- <div class="course-content-right">
                                                                <span class="rbt-check unread"><i class="feather-circle"></i></span>
                                                            </div> --}}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @default
                                    
                            @endswitch
                            @endforeach

                            
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
    <script src="{{URL::asset('/assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{URL::asset('/assets/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{URL::asset('/assets/js/vendor/bootstrap.min.js')}}"></script>
    <!-- sal.js -->
    <script src="{{URL::asset('/assets/js/vendor/sal.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/swiper.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/magnify.min.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/jquery-appear.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/odometer.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/backtotop.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/isotop.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/imageloaded.js')}}"></script>

    <script src="{{URL::asset('/assets/js/vendor/wow.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/waypoint.min.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/easypie.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/text-type.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/jquery-one-page-nav.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/bootstrap-select.min.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/jquery-ui.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/magnify-popup.min.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/paralax-scroll.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/paralax.min.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/countdown.js')}}"></script>
    <script src="{{URL::asset('/assets/js/vendor/plyr.js')}}"></script>
    <!-- Main JS -->
    <script src="{{URL::asset('/assets/js/main.js')}}"></script>
    <!-- Cuastom JS -->
    <script src="{{URL::asset('/assets/js/custom.js')}}"></script>    
</body>

</html>