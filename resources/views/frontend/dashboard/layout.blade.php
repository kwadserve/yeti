@extends('frontend.layout')
@section('content')
<a class="close_side_menu" href="javascript:void(0);"></a>
<div class="rbt-page-banner-wrapper">
    <!-- Start Banner BG Image  -->
    <div class="rbt-banner-image"></div>
    <!-- End Banner BG Image  -->
</div>
<!-- Start Card Style -->
<div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Start Dashboard Top  -->
                <div class="rbt-dashboard-content-wrapper">
                    <div class="tutor-bg-photo bg_image bg_image--23 height-350"></div>
                    <!-- Start Tutor Information  -->
                    <div class="rbt-tutor-information">
                        <div class="rbt-tutor-information-left">
                            <div class="thumbnail rbt-avatars size-lg">
                                <img src="{{url('assets/images/team/avatar-2.jpg')}}" alt="Instructor">
                            </div>
                            <div class="tutor-content">
                                <h5 class="title">{{$user->name}}</h5>
                                <ul class="rbt-meta rbt-meta-white mt--5">
                                    <li><i class="feather-book"></i>1 Course Enroled</li>
                                    <li><i class="feather-award"></i>0 Courses Completed</li>
                                </ul>
                            </div>
                        </div>
                        <div class="rbt-tutor-information-right">
                            <div class="tutor-btn">
                                <a class="rbt-btn btn-md hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Resume Course</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <!-- End Tutor Information  -->
                </div>
                <!-- End Dashboard Top  -->

                <div class="row g-5">
                    <div class="col-lg-3">
                        <!-- Start Dashboard Sidebar  -->
                        <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                            <div class="inner">
                                <div class="content-item-content">

                                    <div class="rbt-default-sidebar-wrapper">
                                        <div class="section-title mb--20">
                                            <h6 class="rbt-title-style-2">Welcome {{$user->name}},</h6>
                                        </div>
                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="{{url('dashboard')}}"><i class="feather-home"></i><span>Dashboard</span></a></li>
                                                <li><a href="{{url('profile')}}"><i class="feather-user"></i><span>My Profile</span></a></li>
                                                <li><a href="{{url('quiz-attempts')}}"><i class="feather-download"></i><span>Download Certificate</span></a></li>
                                            </ul>
                                        </nav>

                                        <div class="section-title mt--40 mb--20">
                                            <h6 class="rbt-title-style-2">User</h6>
                                        </div>

                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="{{url('settings')}}"><i class="feather-settings"></i><span>Settings</span></a></li>
                                                <li><a href="{{url('logout')}}"><i class="feather-log-out"></i><span>Logout</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Dashboard Sidebar  -->
                    </div>
                    <div class="col-lg-9">
                        @yield('dashboardContent')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Card Style -->
<div class="rbt-separator-mid">
    <div class="container">
        <hr class="rbt-separator m-0">
    </div>
</div>
@endsection