@extends('frontend.course.layout')
@section('rightSideContent')
    <div class="rbt-lesson-rightsidebar overflow-hidden lesson-video">
        <div class="lesson-top-bar">
            <div class="lesson-top-left">
                <div class="rbt-lesson-toggle">
                    <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i class="feather-arrow-left"></i></button>
                </div>
                <h5>{{$video->video}}</h5>
            </div>
            <div class="lesson-top-right">
                <div class="rbt-btn-close">
                    <a href="course-details.html" title="Go Back to Course" class="rbt-round-btn"><i class="feather-x"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="plyr__video-embed rbtplayer">
                <video id="course_video" width="100%" autoplay controls controlsList="nodownload">
                    <source src="{{url($video->location.'#t='.$videoTime->meta_value)}}" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
            <div class="content">
                <div class="section-title">
                    <h4>About</h4>
                    <p>{{$video->description}}</p>
                </div>
            </div>
        </div>

        <div class="bg-color-extra2 ptb--15 overflow-hidden">
            <div class="rbt-button-group">
                @if($video->serial === 3 || $video->serial === 4)
                <a class="rbt-btn icon-hover btn-md d-none" href="{{url('quiz')}}" id="quiz-link">
                    <span class="btn-text">Quiz</span>
                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                </a>
                @else
                <a class="rbt-btn icon-hover btn-md d-none" href="#" id="next-video">
                    <span class="btn-text">Next</span>
                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                </a>
                @endif
            </div>
        </div>
    </div>
@endsection

            