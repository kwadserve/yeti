@extends('frontend.course.layout')
@section('rightSideContent')
    <div class="rbt-lesson-rightsidebar overflow-hidden">
        <div class="lesson-top-bar">
            <div class="lesson-top-left">
                <div class="rbt-lesson-toggle">
                    <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i
                            class="feather-arrow-left"></i></button>
                </div>
                <h5>Quiz {{ $test->meta_value }}</h5>
            </div>
            <div class="lesson-top-right">
                <div class="rbt-btn-close">
                    <a href="{{ url('profile') }}" title="Go Back to Dashboard" class="rbt-round-btn"><i
                            class="feather-x"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="content">
                <form id="quiz-form" class="quiz-form-wrapper" action="{{ url('submit_quiz') }}" method="POST">
                    @csrf
                    <!-- Start Single Quiz  -->
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($questions as $question)
                        <div id="question-{{ $count }}" class="question">
                            <div class="quize-top-meta">
                                <div class="quize-top-left">
                                    <span>Questions No: <strong>{{ $count }}/10</strong></span>
                                </div>
                                <div class="quize-top-right">
                                    <span>Time remaining: <strong>No Limit</strong></span>
                                </div>
                            </div>
                            <hr>
                            <div class="rbt-single-quiz">
                                <h4>{{ $count }}. {{ $question->question }}</h4>
                                <div class="row g-3 mt--10">
                                    <div class="col-lg-6">
                                        <div class="rbt-form-check">
                                            <input class="form-check-input" value="option_a" type="radio"
                                                name="{{ $question->id }}" id="rbt-radio-{{ $question->id }}-1">
                                            <label class="form-check-label" for="rbt-radio-{{ $question->id }}-1">
                                                {{ $question->option_a }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="rbt-form-check">
                                            <input class="form-check-input" value="option_b" type="radio"
                                                name="{{ $question->id }}" id="rbt-radio-{{ $question->id }}-2">
                                            <label class="form-check-label" for="rbt-radio-{{ $question->id }}-2">
                                                {{ $question->option_b }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="rbt-form-check">
                                            <input class="form-check-input" value="option_c" type="radio"
                                                name="{{ $question->id }}" id="rbt-radio-{{ $question->id }}-3">
                                            <label class="form-check-label" for="rbt-radio-{{ $question->id }}-3">
                                                {{ $question->option_c }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="rbt-form-check">
                                            <input class="form-check-input" value="option_d" type="radio"
                                                name="{{ $question->id }}" id="rbt-radio-{{ $question->id }}-4">
                                            <label class="form-check-label" for="rbt-radio-{{ $question->id }}-4">
                                                {{ $question->option_d }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                    @endforeach
                    <!-- End Single Quiz  -->

                    <div class="rbt-quiz-btn-wrapper mt--30">
                        <button class="rbt-btn bg-primary-opacity btn-sm" id="prev-btn" type="button">Previous</button>
                        <button class="rbt-btn bg-primary-opacity btn-sm" id="next-btn" type="button">Next</button>
                        <button type="submit" class="rbt-btn btn-gradient btn-sm" id="submit-btn">Submit</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
