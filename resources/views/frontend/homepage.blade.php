@extends('frontend.layout')
@section('content')
    <!-- Start Side Vav -->
    <div class="rbt-cart-side-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="title">
                        <h4 class="title mb--0">Your shopping cart</h4>
                    </div>
                    <div class="rbt-btn-close" id="btn_sideNavClose">
                        <button class="minicart-close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
            </div>
            <nav class="side-nav w-100">
                <ul class="rbt-minicart-wrapper">
                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/images/product/1.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Miracle Morning</a></h6>

                            <span class="quantity">1 * <span class="price">$22</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/images/product/7.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Happy Strong</a></h6>

                            <span class="quantity">1 * <span class="price">$30</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/images/product/3.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Rich Dad Poor Dad</a></h6>

                            <span class="quantity">1 * <span class="price">$50</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>

                    <li class="minicart-item">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="assets/images/product/4.jpg" alt="Product Images">
                            </a>
                        </div>
                        <div class="product-content">
                            <h6 class="title"><a href="single-product.html">Momentum Theorem</a></h6>

                            <span class="quantity">1 * <span class="price">$50</span></span>
                        </div>
                        <div class="close-btn">
                            <button class="rbt-round-btn"><i class="feather-x"></i></button>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="rbt-minicart-footer">
                <hr class="mb--0">
                <div class="rbt-cart-subttotal">
                    <p class="subtotal"><strong>Subtotal:</strong></p>
                    <p class="price">$121</p>
                </div>
                <hr class="mb--0">
                <div class="rbt-minicart-bottom mt--20">
                    <div class="view-cart-btn">
                        <a class="rbt-btn btn-border icon-hover w-100 text-center" href="#">
                            <span class="btn-text">View Cart</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                    <div class="checkout-btn mt--20">
                        <a class="rbt-btn btn-gradient icon-hover w-100 text-center" href="#">
                            <span class="btn-text">Checkout</span>
                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start Slider Area  -->
    <div class="slider-area rbt-banner-9 bg-gradient-2 header-transperent-spacer">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="inner text-center ptb--80">
                        <div class="section-title">
                            <span class="subtitle bg-primary-opacity">Hello! Web Development Course</span>
                        </div>
                        <h2 class="title theme-gradient rbt-display-1">A Complete Guide to Web Development.</h2>

                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. perferendis, maiores?</p>

                        <div class="rbt-single-course-meta text-center mt--20">
                            <div class="enroll-btn mt--15">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Enrol Course Now</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="rbt-course-block mt--50 rbt-course-block rbt-shadow-box position-relative bg-primary-opacity">
                            <div class="row align-items-center g-2 g-lg-5">
                                <div class="col-lg-4 col-md-4 col-sm-6 text-start">

                                    <ul class="rbt-meta">
                                        <li class="color-primary"><i class="feather-book"></i>12 Lessons</li>
                                        <li class="color-primary"><i class="feather-users"></i>50 Students</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                                    <div class="rbt-price large-size justify-content-start justify-content-lg-center">
                                        <span class="current-price">$750.00</span>
                                        <span class="off-price">$1500.00</span>
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
                                <img class="w-100 radius-10" src="assets/images/course/course-single-01.jpg" alt="Card image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-7">
                            <div class="section-title">
                                <h2 class="title">What you'll learn</h2>
                                <p class="b1 mt--15">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia.</p>
                            </div>

                            <div class="section-title subtitle">
                                <h5 class="title">Whats Material Includes?</h5>
                            </div>

                            <div class="row g-5">
                                <!-- Start Feture Box  -->
                                <div class="col-lg-6">
                                    <ul class="rbt-list-style-1">
                                        <li><i class="feather-check"></i>Become an advanced, confident.</li>
                                        <li><i class="feather-check"></i>Have an intermediate skill.</li>
                                        <li><i class="feather-check"></i>Have a portfolio of various.</li>
                                        <li><i class="feather-check"></i>Have a portfolio of various.</li>
                                        <li><i class="feather-check"></i>Use the numpy library to create.</li>
                                    </ul>
                                </div>
                                <!-- End Feture Box  -->
                                <!-- Start Feture Box  -->
                                <div class="col-lg-6">
                                    <ul class="rbt-list-style-1">
                                        <li><i class="feather-check"></i>Use the Jupyter Notebook.</li>
                                        <li><i class="feather-check"></i>Use the pandas module with.</li>
                                        <li><i class="feather-check"></i>Have a portfolio of various.</li>
                                        <li><i class="feather-check"></i>Have a portfolio of various.</li>
                                        <li><i class="feather-check"></i>Create data visualizations.</li>
                                    </ul>
                                </div>
                                <!-- End Feture Box  -->
                            </div>

                            <div class="read-more-btn mt--40">
                                <a class="rbt-moderbt-btn" href="#">
                                    <span class="moderbt-btn-text">Learn More About Us</span>
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
                            <h2 class="title color-white"><span class="theme-gradient">Complete guideline</span> from absolute <br /> beginners to getting hired.</h2>
                            <div class="rbt-button-group mt--30">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Explore Course</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>

                                <a class="rbt-btn hover-icon-reverse btn-border color-white-off" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Hired List</span>
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
                                            <img src="assets/images/course/single-course-02.jpg" alt="Image">
                                        </div>
                                        <div class="content">
                                            <span class="rbt-badge-6 bg-secondary-opacity">Hello! Web Development Course</span>
                                            <h2 class="title mt--10">Complete app development course with HiStudy</h2>
                                            <p>The idea of establishing a private university to provide quality education at an affordable cost in Uk London.</p>
                                            <ul class="course-feature-list">
                                                <li>
                                                    <div class="icon">
                                                        <img src="assets/images/icons/card-icon-1.png" alt="Image Icon">
                                                    </div>
                                                    <div class="feature-content">
                                                        <h4 class="featute-title">300K+ <span>Got Hired</span></h4>
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
                                                        <h4 class="featute-title">300K+ <span>Month Required</span></h4>
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
                                            <img src="assets/images/course/single-course-06.jpg" alt="Image">
                                        </div>
                                        <div class="content">
                                            <h2 class="title">Get a Certificate</h2>
                                            <p>Apply for Admission in Post Graduate Diploma. Application Deadline: 26th September year Undergraduate.</p>
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
                                                            <img src="assets/images/course/single-course-07.jpg" alt="Image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="thumbnail mt--0">
                                                            <img src="assets/images/course/single-course-08.jpg" alt="Image">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="thumbnail mt--0">
                                                            <img src="assets/images/course/single-course-09.jpg" alt="Image">
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
                                            <h2 class="title">Projects You Will Build</h2>
                                            <p>Apply for Admission in Post Graduate Diploma. Application Deadline: 26th September year Undergraduate.</p>
                                            <ul class="rbt-list-style-2 flex-wrap">
                                                <li><i class="feather-check"></i>Ecommerce Website</li>
                                                <li><i class="feather-check"></i>Travel Agency</li>
                                                <li><i class="feather-check"></i>Shopping Cart</li>
                                                <li><i class="feather-check"></i>News Portal</li>
                                                <li><i class="feather-check"></i>Education Management</li>
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
    <div class="rbt-course-content rbt-section-gap bg-color-extra2">
        <div class="container">
            <div class="row align-items-end mb--60">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title text-start">
                        <h2 class="title">Course Content</h2>
                        <p class="description has-small-font-size mt--10">32 sections • 376 lectures • 27h 8m total
                            length</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="expend-button text-start text-md-end">
                        <a class="rbt-btn-link w-700" href="#">Expand all sections<i
                                class="feather-arrow-right"></i></a>
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
                                            Intro to Course and Histudy
                                        </button>
                                    </h2>
                                    <div id="collapseTwo1" class="accordion-collapse collapse show" aria-labelledby="headingTwo1" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right">
                                                            <span class="rbt-badge bg-pink-opacity">30 min</span>
                                                            <span class="rbt-badge bg-primary-opacity">Preview</span>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Watch
                                                                Before
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right">
                                                            <span class="rbt-badge bg-pink-opacity">0.5 min</span>
                                                            <span class="rbt-badge bg-primary-opacity">Preview</span>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right">
                                                            <span class="rbt-badge bg-pink-opacity">0.5 min</span>
                                                            <span class="rbt-badge bg-primary-opacity">Preview</span>
                                                        </div>
                                                    </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                            Course Fundamentals
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Why
                                                                You Should Not Go To Education.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Ten
                                                                Factors That
                                                                Affect Education's
                                                                Longevity.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
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
                                            You can develop skill and setup
                                        </button>
                                    </h2>
                                    <div id="collapseTwo3" class="accordion-collapse collapse" aria-labelledby="headingTwo3" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Why
                                                                You Should Not Go
                                                                To
                                                                Education.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>


                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Ten
                                                                Factors That
                                                                Affect Education's
                                                                Longevity.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
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
                                            15 Things To Know About Education?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Why
                                                                You Should Not Go
                                                                To
                                                                Education.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>


                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Ten
                                                                Factors That
                                                                Affect Education's
                                                                Longevity.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
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
                                            Course Description
                                        </button>
                                    </h2>
                                    <div id="collapseTwo5" class="accordion-collapse collapse" aria-labelledby="headingTwo5" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Why
                                                                You Should Not Go
                                                                To
                                                                Education.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>


                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Ten
                                                                Factors That
                                                                Affect Education's
                                                                Longevity.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
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
                                            Route 53
                                        </button>
                                    </h2>
                                    <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo6" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Why
                                                                You Should Not Go
                                                                To
                                                                Education.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>


                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Ten
                                                                Factors That
                                                                Affect Education's
                                                                Longevity.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
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
                                            EC2 Instance Storage
                                        </button>
                                    </h2>
                                    <div id="collapseTwo7" class="accordion-collapse collapse" aria-labelledby="headingTwo7" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Why
                                                                You Should Not Go
                                                                To
                                                                Education.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>


                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Ten
                                                                Factors That
                                                                Affect Education's
                                                                Longevity.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
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
                                            IAM & AWS CLI
                                        </button>
                                    </h2>
                                    <div id="collapseTwo8" class="accordion-collapse collapse" aria-labelledby="headingTwo8" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Why
                                                                You Should Not Go
                                                                To
                                                                Education.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>


                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Ten
                                                                Factors That
                                                                Affect Education's
                                                                Longevity.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
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
                                            Getting started with AWS
                                        </button>
                                    </h2>
                                    <div id="collapseTwo9" class="accordion-collapse collapse" aria-labelledby="headingTwo9" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Why
                                                                You Should Not Go
                                                                To
                                                                Education.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>


                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Ten
                                                                Factors That
                                                                Affect Education's
                                                                Longevity.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
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
                                            EC2 Fundamentals
                                        </button>
                                    </h2>
                                    <div id="collapseTwo10" class="accordion-collapse collapse" aria-labelledby="headingTwo10" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            <ul class="rbt-course-main-content liststyle">
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span
                                                                class="text">Course Intro</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Why
                                                                You Should Not Go
                                                                To
                                                                Education.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>


                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-play-circle"></i> <span class="text">Ten
                                                                Factors That
                                                                Affect Education's
                                                                Longevity.</span>
                                                        </div>
                                                        <div class="course-content-right only-lock">
                                                            <i class="feather-lock"></i>
                                                        </div>
                                                    </a></li>

                                                <li><a href="#">
                                                        <div class="course-content-left">
                                                            <i class="feather-file-text"></i> <span class="text">Read
                                                                Before You
                                                                Start</span>
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
    <div class="rbt-testimonial-area bg-color-white rbt-section-gap overflow-hidden">
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

    <!-- Start Pricing Area  -->
    <div class="rbt-pricing-area bg-color-white rbt-section-gapBottom">
        <div class="container">
            <div class="row g-5 mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">Plans For This Course</h2>
                        <p class="description mt--20">See this our three main plans for our histudy courses. It starts
                            from here! You can teach yourself what you really like.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <div class="advance-pricing">
                    <div class="inner">
                        <div class="row row--0">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="pricing-left">
                                    <h3 class="main-title">Active Plan Mode.</h3>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Nemo, quisquam.</p>
                                    <div class="price-wrapper">
                                        <span class="price-amount">$129<sup>/mo</sup></span>
                                    </div>
                                    <div class="pricing-btn-group">
                                        <button class="rbt-btn btn-gradient w-100">Purchase Now</button>
                                        <button class="rbt-btn btn-border w-100">Upgrade</button>
                                    </div>
                                    <div class="rating">
                                        <a href="#rating">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                        </a>
                                        <a href="#rating">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                        </a>
                                        <a href="#rating">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                        </a>
                                        <a href="#rating">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                        </a>
                                        <a href="#rating">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <small class="subtitle">rated 4.5/5 Stars in 1000+ reviews.</small>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="pricing-right position-relative">
                                    <div class="pricing-offer">
                                        <div class="single-list">
                                            <h4 class="price-title">Advance Plans You can Get.</h4>
                                            <ul class="plan-offer-list">
                                                <li>
                                                    <i class="feather-check"></i> 5 PPC Campaigns
                                                </li>
                                                <li>
                                                    <i class="feather-check"></i> Digital Marketing
                                                </li>
                                                <li>
                                                    <i class="feather-check"></i> Marketing Agency
                                                </li>
                                                <li>
                                                    <i class="feather-check"></i> Seo Friendly
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single-list mt--40">
                                            <h4 class="price-title">Basic Plans You can Get.</h4>
                                            <ul class="plan-offer-list">
                                                <li>
                                                    <i class="feather-check"></i> 5 PPC Campaigns
                                                </li>
                                                <li>
                                                    <i class="feather-check"></i> Digital Marketing
                                                </li>
                                                <li>
                                                    <i class="feather-check"></i> Marketing Agency
                                                </li>
                                                <li>
                                                    <i class="feather-check"></i> Seo Friendly
                                                </li>
                                                <li>
                                                    <i class="feather-check"></i> App Development
                                                </li>
                                                <li class="off">
                                                    <i class="feather-x"></i> 24/7 Dedicated Support
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pricing-badge"><span>Popular</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Area  -->

    <!-- Start Author Area  -->
    <div class="rbt-author-area bg-gradient-8 rbt-section-gap">
        <div class="container">
            <div class="rbt-instructor">
                <div class="single-course-author">
                    <div class="media row align-items-center g-5">
                        <div class="col-lg-3 col-xl-3 offset-xl-2">
                            <div class="thumbnail">
                                <a href="#">
                                    <img class="radius-10 w-100" src="assets/images/team/team-08.jpg" alt="Author Images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="media-body ml--15">
                                <div class="author-info text-left">
                                    <h2 class="title color-white mb--0">John Due</h2>
                                    <span class="b3 color-white">Advanced Educator</span>
                                </div>
                                <div class="content mt--20">
                                    <p class="description color-white">John is a brilliant educator, whose life was
                                        spent
                                        for computer science and love of nature. Being a female, she encountered
                                        a lot of obstacles and was forbidden to work in this field by her
                                        family. With a true spirit and talented gift, she was able to succeed
                                        and set an example for others.</p>
                                    <ul class="social-icon color-white social-default transparent-with-border justify-content-start mt--15">
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
            </div>
        </div>
    </div>
    <!-- End Author Area  -->

    <!-- Start Newsletter Area  -->
    <div class="rbt-newsletter-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">Want to get special offers <br /> and Course updates?</h2>
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