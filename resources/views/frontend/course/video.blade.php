@extends('frontend.course.layout')
@section('rightSideContent')
    @if((int)$test->meta_value == 1 && $video->serial == 1)
    <div class="rbt-lesson-rightsidebar overflow-hidden" id="course-introduction">
        <div class="lesson-top-bar">
            <div class="lesson-top-left">
                <div class="rbt-lesson-toggle">
                    <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i class="feather-arrow-left"></i></button>
                </div>
                <h5>Introduction</h5>
            </div>
            <div class="lesson-top-right">
                <div class="rbt-btn-close">
                    <a href="course-details.html" title="Go Back to Course" class="rbt-round-btn"><i class="feather-x"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="content">
                <div class="section-title">
                    <h4>Introduction to Our Histudy</h4>
                    <p>Welcome to our online course for beginners JavaScript! This course is designed to give you a solid foundation in the basics of JavaScript programming. Whether you're looking to pursue a career in web development, or just interested in learning a valuable new skill, this course is the perfect place to start.</p>

                    <p>Throughout this course, you'll learn the fundamental concepts of programming such as variables, data types, functions, and control structures. You'll also learn how to use these concepts to create simple programs and web applications.</p>

                    <p>Our course is structured in a way that makes learning easy and fun. We use a combination of video lectures, hands-on exercises, and quizzes to help you reinforce your understanding of the material. Additionally, we provide detailed explanations and examples to help you overcome any challenges you may encounter along the way.</p>

                    <p>By the end of this course, you'll be able to write basic JavaScript code, understand the fundamental concepts of programming, and be able to build simple web applications. So let's get started and begin your journey to becoming a proficient JavaScript programmer!</p>
                </div>
            </div>
        </div>

        <div class="bg-color-extra2 ptb--15 overflow-hidden">
            <div class="rbt-button-group">
                <a class="rbt-btn icon-hover btn-md" href="#" onclick="hideIntro()">
                    <span class="btn-text">Next</span>
                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                </a>
            </div>
        </div>

    </div>
    @endif
    <div class="rbt-lesson-rightsidebar overflow-hidden lesson-video {{(int)$test->meta_value == 1 && $video->serial == 1 ? 'd-none' : ''}}" id="course-video">
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
            <div class="plyr__video-embed rbtplayer" id="player">
                {{-- <video id="course_video" width="100%" controls controlsList="nodownload">
                    <source src="{{URL::asset('/'.$video->location.'#t='.$videoTime->meta_value)}}" type="video/mp4">
                    Your browser does not support HTML video.
                </video> --}}
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
    <script>
        function hideIntro(){
            document.getElementById('course-introduction').classList.add('d-none');
            document.getElementById('course-video').classList.remove('d-none');
        }
    </script>
    <script src="https://www.youtube.com/iframe_api"></script>
@endsection

            