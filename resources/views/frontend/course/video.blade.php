@extends('frontend.course.layout')
@section('rightSideContent')
    @if ((int) $test->meta_value == 1 && $video->serial == 1)
        <div class="rbt-lesson-rightsidebar overflow-hidden" id="course-introduction">
            <div class="lesson-top-bar">
                <div class="lesson-top-left">
                    <div class="rbt-lesson-toggle">
                        <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i
                                class="feather-arrow-left"></i></button>
                    </div>
                    <h5>Introduction</h5>
                </div>
                <div class="lesson-top-right">
                    <div class="rbt-btn-close">
                        <a href="course-details.html" title="Go Back to Course" class="rbt-round-btn"><i
                                class="feather-x"></i></a>
                    </div>
                </div>
            </div>
            <div class="inner">
                <div class="content">
                    <div class="section-title">
                        <h4>What you'll learn</h4>
                        <p>You are a learning module away from making a difference in India’s youth vote. By becoming a
                            certified electoral instructor, you stand the chance to not only learn the precise way to
                            register voters on the ECI’s platform, but also gain knowledge of the youth rights movement in
                            India, its importance in the 21st century and learn to speak confidently of these to your peers!
                        </p>

                        <p>Make a difference in India’s youth vote Young India Foundation welcomes you to its first one of
                            kind free course to becoming training facilitators on Youth Rights & Electoral Democracy. We
                            believe that young people have the ability to play a larger role through civic participation and
                            bringing forth change through their actions.</p>

                        <p>This online course named is offered solely online by Young India Foundation's Centre for Youth
                            Policy, but is not equivalent to an on-campus course. It does not confer a University grade,
                            course credits or a degree, and does not hold and/or guarantee affiliation of the recipient with
                            the Election Commission of India</p>


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
    <div class="rbt-lesson-rightsidebar overflow-hidden lesson-video {{ (int) $test->meta_value == 1 && $video->serial == 1 ? 'd-none' : '' }}"
        id="course-video">
        <div class="lesson-top-bar">
            <div class="lesson-top-left">
                <div class="rbt-lesson-toggle">
                    <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i
                            class="feather-arrow-left"></i></button>
                </div>
                <h5>{{ $video->video }}</h5>
            </div>
            <div class="lesson-top-right">
                <div class="rbt-btn-close">
                    <a href="course-details.html" title="Go Back to Course" class="rbt-round-btn"><i
                            class="feather-x"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="plyr__video-embed rbtplayer">
                <video id="course_video" width="100%" preload="true" controls="play" controlsList="nodownload">
                    <source src="{{ URL::asset('/' . $video->location . '#t=' . $videoTime->meta_value) }}" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
            <div class="content">
                <div class="section-title">
                    <h4>About</h4>
                    <p>{{ $video->description }}</p>
                </div>
            </div>
        </div>

        <div class="bg-color-extra2 ptb--15 overflow-hidden">
            <div class="rbt-button-group">
                @if ($video->serial === 3 || $video->serial === 4)
                    <a class="rbt-btn icon-hover btn-md d-none" href="{{ url('quiz') }}" id="quiz-link">
                        <span class="btn-text">Quiz</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                @else
                    <a class="rbt-btn icon-hover btn-md d-none" href="{{ url('course') }}" id="next-video">
                        <span class="btn-text">Next</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                @endif
            </div>
        </div>
    </div>
    <script>
        function hideIntro() {
            document.getElementById('course-introduction').classList.add('d-none');
            document.getElementById('course-video').classList.remove('d-none');
        }
    </script>
@endsection
