@extends('frontend.layout')
@section('content')

   
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start Slider Area  -->
    <div class="slider-area yetibg bannerfit rbt-banner-9 bg-gradient-2 header-transperent-spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="inner text-center ptb--80">
                        <div class="section-title">
                            <span class="subtitle bg-primary-opacity">Are you ready to be a</span>
                        </div>
                        <h2 class="title theme-gradient rbt-display-1">YETI</h2>

                        <p class="description">Youth Electoral Trained Instructor?</p>

                        <div class="rbt-single-course-meta text-center mt--20">
                            @guest
                            <div class="enroll-btn mt--15">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{url('register')}}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Register Now</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            @else
                            <div class="enroll-btn mt--15">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{url('profile')}}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">View Dashboard</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            @endguest
                            
                        </div>

                        <div class="rbt-course-block mt--50 rbt-course-block rbt-shadow-box position-relative bg-primary-opacity">
                            <div class="row align-items-center g-2 g-lg-5">
                                <div class="col-lg-4 col-md-4 col-sm-6 text-start">

                                    <ul class="rbt-meta">
                                        <li class="color-primary"><i class="feather-book"></i>10 Lessons</li>
                                        <li class="color-primary"><i class="feather-users"></i>500+ YETI's</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                                    <div class="rbt-price large-size justify-content-start justify-content-lg-center">
                                        <span class="current-price">Free of Cost!</span>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 text-end">
                                    <div class="rbt-course-review">
                                        <div class="rbt-review justify-content-start justify-content-lg-end">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count"> (105+ Reviews)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-circle-shape"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area  -->

    <!-- Start Course Feature Box  -->
    <div class="rbt-feature-area rbt-single-course-features rbt-section-gapBottom rbt-feature-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row row--30 gy-5 align-items-center">
                        <div class="col-lg-6 col-xl-5">
                            <div class="thumbnail rbt-shadow-box">
                                <img class="w-100 radius-10" src="assets/images/course/yeticourse.jpg" alt="Card image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-7">
                            <div class="section-title">
                                <h2 class="title">What you'll learn</h2>
                                <p class="b3 mt--15">You are a learning module away from making a difference in India’s youth vote. By becoming a certified electoral instructor, you stand the chance to not only learn the precise way to register voters on the ECI’s platform, but also gain knowledge of the youth rights movement in India, its importance in the 21st century and learn to speak confidently of these to your peers!
                                
                                <br><br>

Make a difference in India’s youth vote
Young India Foundation welcomes you to its first one of kind free course to becoming training facilitators on Youth Rights & Electoral Democracy. We believe that young people have the ability to play a larger role through civic participation and bringing forth change through their actions.

</p>
                            </div>

                            <div class="b3 section-title subtitle">
                                <h6 class="title">This online course named is offered solely online by Young India Foundation's Centre for Youth Policy, but is not equivalent to an on-campus course. 
It does not confer a University grade, course credits or a degree, and does not hold and/or guarantee affiliation of the recipient with the Election Commission of India</h6>
                            </div>

                           

                            <div class="read-more-btn mt--40">
                                <a class="rbt-moderbt-btn" href="#">
                                    <span class="moderbt-btn-text">Register Now</span>
                                   
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Feature Box  -->

    <!-- Start Course Banner Area  -->
    <div class="rbt-course-banner-area rbt-section-gap bg-color-darker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner">
                        <div class="section-title text-center mb--60">
                            <h2 class="title color-white">Reimagining Facilitation in Youth Rights & Electoral Democracy
</h2>
                            <div class="rbt-button-group mt--30">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#expcourse">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Explore Course</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>

                                <a class="rbt-btn hover-icon-reverse btn-border color-white-off" href="#reviews">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Read Reviews</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-5">

                            <!-- Start Single Feature Box  -->
                            <div class="col-lg-12">
                                <div class="modern-course-features-box h-100">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <img src="assets/images/yetione.jpeg" alt="Image">
                                        </div>
                                        <div class="content">
                                            <span class="rbt-badge-6 bg-secondary-opacity">Excited to become a YETI?</span>
                                            <h2 class="title mt--10">Make a difference in India’s youth vote</h2>
                                            <p>Young India Foundation welcomes you to its first one of kind free course to becoming training facilitators on Youth Rights & Electoral Democracy. We believe that young people have the ability to play a larger role through civic participation and bringing forth change through their actions. </p>
                                            <ul class="course-feature-list">
                                                <li>
                                                    <div class="icon">
                                                        <img src="assets/images/icons/card-icon-1.png" alt="Image Icon">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4 class="featute-title">300+ <span>YETI Members</span></h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="assets/images/icons/card-icon-4.png" alt="Image Icon">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4 class="featute-title">10K+ <span>Enrolled</span></h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="assets/images/icons/card-icon-2.png" alt="Image Icon">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4 class="featute-title">30+ <span>Events Hosted</span></h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Feature Box  -->

                            <!-- Start Single Feature Box  -->
                            <div class="col-lg-6">
                                <div class="modern-course-features-box one-colume-grid h-100">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <img src="assets/images/course/yeticertificate.svg" alt="Image">
                                        </div>
                                        <div class="content">
                                            <h2 class="title">Get a Certificate</h2>
                                            <p>Course Duration: 1 week to 1 month, dependent on your personal pace of learning and availability.<br>Course registration starts: 12 August 2023, 1 p.m.</p>
                                            <ul class="course-feature-list">
                                                <li>
                                                    <div class="icon">
                                                        <img src="assets/images/icons/card-icon-11.png" alt="Image Icon">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4 class="featute-title">5000+ <span>Get Award</span></h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <img src="assets/images/icons/card-icon-12.png" alt="Image Icon">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4 class="featute-title">10K+ <span>Zero to career </span></h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Feature Box  -->

                            <!-- Start Single Feature Box  -->
                            <div class="col-lg-6">
                                <div class="modern-course-features-box grid-content-reverse h-100">
                                    <div class="inner">
                                        <div class="rbt-image-gallery-wrapper">
                                            <div class="swiper modern-course-carousel-activation rbt-arrow-between">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="thumbnail mt--0">
                                                            <img src="assets/images/yeti4.jpg" alt="Image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="thumbnail mt--0">
                                                            <img src="assets/images/yeti3.jpg" alt="Image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="thumbnail mt--0">
                                                            <img src="assets/images/yeti2.jpg" alt="Image">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="rbt-swiper-arrow rbt-arrow-left">
                                                    <div class="custom-overfolow">
                                                        <i class="rbt-icon feather-arrow-left"></i>
                                                        <i class="rbt-icon-top feather-arrow-left"></i>
                                                    </div>
                                                </div>

                                                <div class="rbt-swiper-arrow rbt-arrow-right">
                                                    <div class="custom-overfolow">
                                                        <i class="rbt-icon feather-arrow-right"></i>
                                                        <i class="rbt-icon-top feather-arrow-right"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="content">
                                            <h2 class="title">On your journey to be a YETI you will learn:</h2>
                                            
                                            <ul class="rbt-list-style-2 flex-wrap">
                                                <li><i class="feather-check"></i>A crash course on Youth Rights in India that will showcase the modern and current scenario of the youth in the nation as well as the lack of representation.</li>
                                                <li><i class="feather-check"></i>The process of how to register yourself and your peers to vote and updates on all the changes around the electoral process</li>
                                                <li><i class="feather-check"></i>How to hold engaging conversations on the participation of youth and ways that young people can hold such spaces around them which are inclusive and diverse</li>
                                                <li><i class="feather-check"></i>What civic engagement means for young India, how we can create platforms for engagement</li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Feature Box  -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Banner Area  -->


    <!-- Start Course Content  -->
    <div id="expcourse" class="rbt-course-content rbt-section-gap bg-color-extra2">
        <div class="container">
            <div class="row align-items-end mb--60">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title text-start">
                        <h2 class="title">Here’s how the course works - </h2>
                        <p class="description has-small-font-size mt--10">
                            <ul>
                                <li>Watch our videos taught by young people like yourself who are passionate about civic engagement and youth rights</li>
                                <li>Take 3 quizzes based on what you learn</li>
                                <li>Post the quizzes, you will then interact with our team and become a certified YETI instructor</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row gy-5 row--30">
                <div class="col-lg-6">
                    <div class="feature-course-thumbnail">
                        <div class="video-popup-wrapper rbt-shadow-box">
                            <img class="w-100 radius-10" src="assets/images/course/course-elegant-01.jpg" alt="Card image">
                            <a class="rbt-btn rounded-player-2 popup-video position-to-top with-animation btn-white-color" href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                <span class="play-icon"></span>
                            </a>
                        </div>
                        <div class="enroll-btn mt--15">
                            <a class="rbt-btn btn-gradient hover-icon-reverse w-100 radius-round" href="#">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Continue Course</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rbt-scroll-max-height rbt-scroll">
                    <div class="course-content">
                        <div class="rbt-accordion-style rbt-accordion-02 right-no-padding accordion">
                            <div class="accordion" id="accordionExampleb2">
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo1">
                                            Being Young in India
                                        </button>
                                    </h2>
                                    <div id="collapseTwo1" class="accordion-collapse collapse show" aria-labelledby="headingTwo1" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">An introduction to YIF and why we started</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                        
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">A brief overview of the current state of the youth in India</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                        
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">What is YETI?</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                        
                                                    </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                            The Demographic Dividend
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">A brief overview</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                                            State of the Youth
                                        </button>
                                    </h2>
                                    <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">How the Indian youth is doing</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                            Gerontocracy and Ageism
                                        </button>
                                    </h2>
                                    <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Terminology and definitions</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                 <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Applications in the Indian Polity</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                             
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                                            India’s Crisis of Political Representation
                                        </button>
                                    </h2>
                                    <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Lok Sabha/Rajya Sabha</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Youngest electorate – oldest parliament + LS have only been getting older</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Comparison of average ages of India v/s the LS</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo6">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                                           #Why25
                                        </button>
                                    </h2>
                                    <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo6" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">The Age of Candidacy (with world comparisons)</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Age and Experience</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                

                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo7">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo7" aria-expanded="false" aria-controls="collapseTwo7">
                                           Voting and Civic Engagement
                                        </button>
                                    </h2>
                                    <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo7" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">India’s youth urban voter apathy</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Probable causes (moving as students, lack of info, etc.)</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                 <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">International Comparison</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                 <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">2019 v/s the 90 million gap</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                    
                                                

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo8">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo8" aria-expanded="false" aria-controls="collapseTwo8">
                                            The Student Vote
                                        </button>
                                    </h2>
                                    <div id="collapseTwo8" class="accordion-collapse collapse" aria-labelledby="headingTwo8" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Example of DU + Darsh’s video</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Polling booths in colleges and universities</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo9">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo9" aria-expanded="false" aria-controls="collapseTwo9">
                                            The First Step - #GetInked 
                                        </button>
                                    </h2>
                                    <div id="collapseTwo9" class="accordion-collapse collapse" aria-labelledby="headingTwo9" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">An EPIC</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Voter Portal + Voter registration</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Follow-ups + checking your BLO/next election</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Are you a student/young professional? Re-registration form</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                               


                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo10">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo10" aria-expanded="false" aria-controls="collapseTwo10">
                                            Getting out there!
                                        </button>
                                    </h2>
                                    <div id="collapseTwo10" class="accordion-collapse collapse" aria-labelledby="headingTwo10" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">How to: have that conversation - Do’s and Don'ts</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Community engagement + ideas to implement locally</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Joining YIF events</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                               


                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Content  -->


    <!-- Start Testimonial Area  -->
    <div id="reviews" class="rbt-testimonial-area bg-color-white rbt-section-gap overflow-hidden">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-primary-opacity">EDUCATION FOR EVERYONE</span>
                            <h2 class="title">People like histudy education. <br /> No joking - here’s the proof!</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-animation-wrapper no-overlay mt--50">
            <div class="scroll-animation scroll-right-left">

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/facebook.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-01.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Martha Maldonado, <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/google.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-02.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Michael D., <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/yelp.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-03.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Valerie J., <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/facebook.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">People says about, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-04.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Hannah R., <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/bing.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Like this histudy, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-05.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Pearl B. Hill, <span>Marketing</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/facebook.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Educational template, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-01.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Mandy F. Wood, <span>SR Designer</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/hubs.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Online leaning, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-07.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Mildred W. Diaz, <span>Executive</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/bing.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Remote learning, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-08.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Christopher, <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-odd">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/yelp.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">University managemnet, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-06.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Fatima, <span>Child</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
            </div>
        </div>

        <div class="scroll-animation-wrapper no-overlay mt--30">
            <div class="scroll-animation scroll-left-right">

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-even">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/facebook.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">After the launch, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-01.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Martha Maldonado, <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-even">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/google.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Histudy education, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-02.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Michael D., <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-even">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/yelp.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Our educational, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-03.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Valerie J., <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-even">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/bing.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">People says about, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-04.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Hannah R., <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-even">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/hubs.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Like this histudy, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-05.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Pearl B. Hill, <span>Marketing</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-even">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/yelp.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Educational template, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-01.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Mandy F. Wood, <span>SR Designer</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-even">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/bing.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Online leaning, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-07.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Mildred W. Diaz, <span>Executive</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-even">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/facebook.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">Remote learning, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-08.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Christopher, <span>CEO</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->

                <!-- Start Single Testimonial  -->
                <div class="single-column-20 bg-theme-gradient-even">
                    <div class="rbt-testimonial-box style-2">
                        <div class="inner">
                            <div class="icons">
                                <img src="assets/images/icons/yelp.png" alt="Clint Images">
                            </div>
                            <div class="description">
                                <p class="subtitle-3">University managemnet, vulputate at sapien sit amet,
                                    auctor iaculis lorem. In vel hend rerit nisi. Vestibulum eget risus velit.</p>
                                <div class="clint-info-wrapper">
                                    <div class="thumb">
                                        <img src="assets/images/testimonial/client-06.png" alt="Clint Images">
                                    </div>
                                    <div class="client-info">
                                        <h5 class="title">Fatima, <span>Child</span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Testimonial  -->
            </div>
        </div>
    </div>
    <!-- End Testimonial Area  -->

    

    

    <!-- Start Newsletter Area  -->
    <div class="rbt-newsletter-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">Want to get Course updates?</h2>
                        <form action="#" class="newsletter-form-1 mt--50 radius-round">
                            <input class="rbt-border" type="email" placeholder="Enter Your E-Email">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse radius-round">
                                <span class="icon-reverse-wrapper">
                <span class="btn-text">Subscribe</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Area  -->

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
@endsection