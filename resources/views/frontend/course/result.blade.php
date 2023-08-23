@extends('frontend.course.layout')
@section('rightSideContent')
    <div class="rbt-lesson-rightsidebar overflow-hidden">
        <div class="lesson-top-bar">
            <div class="lesson-top-left">
                <div class="rbt-lesson-toggle">
                    <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i
                            class="feather-arrow-left"></i></button>
                </div>
                <h5>Result</h5>
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
                    <p class="mb--10">Quiz</p>
                    <h5>Test {{ $test->meta_value }}</h5>

                </div>
                <?php $mark = 0; ?>
                <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                    <table class="rbt-table table table-borderless">
                        <thead>
                            <tr>
                                <th>Question</th>
                                <th>Answered</th>
                                <th>CA</th>
                                <th>Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                                @php
                                    $result = App\Models\UserResult::where('user_id', Auth::id())
                                        ->where('question_id', $question->id)
                                        ->first();
                                    $answer = $question->{$question->answer};
                                    $res = $question->{$result->answered};
                                @endphp
                                <tr>
                                    <th>
                                        <p class="b3 mb--5">
                                            {{ $question->question }}
                                        </p>
                                    </th>
                                    <td>
                                        <p class="b3">
                                            {{ $res }}
                                        </p>
                                    </td>
                                    <td>
                                        <p class="b3">
                                            {{ $answer }}
                                        </p>
                                    </td>
                                    <td>
                                        @if ($result->answered === $question->answer)
                                            <?php $mark += 1; ?>
                                            <span class="rbt-badge-5 bg-color-success-opacity color-success">Correct</span>
                                        @else
                                            <span class="rbt-badge-5 bg-color-danger-opacity color-danger">Incorrect</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <p>Result: {{ $mark }} out of 10</p>
                </div>
            </div>
        </div>

        <div class="bg-color-extra2 ptb--15 overflow-hidden">
            <div class="rbt-button-group">

                @if ($mark < 10)
                    <a class="rbt-btn icon-hover icon-hover-left btn-md" href="{{ url('quiz') }}">
                        <span class="btn-icon"><i class="feather-arrow-left"></i></span>
                        <span class="btn-text">Quiz</span>
                    </a>
                @else
                    <?php
                    $update = App\Models\UserMeta::where('user_id', Auth::id())->where('meta_key', 'current_test');
                    
                    $newTest = (int) $test->meta_value + 1;
                    $update->update([
                        'meta_value' => $newTest,
                    ]);
                    $newId = App\Models\Video::where('test', $newTest)
                        ->where('serial', 1)
                        ->first()->id;
                    $videoId = App\Models\UserMeta::where('user_id', Auth::id())
                        ->where('meta_key', 'last_video')
                        ->update(['meta_value' => $newId]);
                    $videoTime = App\Models\UserMeta::where('user_id', Auth::id())
                        ->where('meta_key', 'last_video_time')
                        ->update(['meta_value' => 0]);
                    $resultTime = App\Models\UserMeta::where('user_id', Auth::id())
                        ->updateOrCreate(['meta_key' => 'result_date'],['meta_value' => \Carbon\Carbon::now()->toDateTimeString()]);
                    ?>
                    @if ($newTest == 4)
                        <?php
                        $user = App\Models\User::where('id', Auth::id());
                        $user->update([
                            'course_status' => 'completed',
                        ]);
                        
                        ?>
                        <a class="rbt-btn icon-hover btn-md" href="{{ url('course') }}">
                        @else
                            <a class="rbt-btn icon-hover btn-md" href="{{ url('course') }}">
                    @endif
                    <span class="btn-text">Next</span>
                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                    </a>
                @endif

            </div>
        </div>

    </div>
@endsection
