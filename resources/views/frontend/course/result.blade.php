@extends('frontend.course.layout')
@section('rightSideContent')
<div class="rbt-lesson-rightsidebar overflow-hidden">
    <div class="lesson-top-bar">
        <div class="lesson-top-left">
            <div class="rbt-lesson-toggle">
                <button class="lesson-toggle-active btn-round-white-opacity" title="Toggle Sidebar"><i class="feather-arrow-left"></i></button>
            </div>
            <h5>The Complete Histudy 2023: From Zero to Expert!</h5>
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
                <p class="mb--10">Quiz</p>
                <h5>Musical Theory</h5>
            </div>

            <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                <table class="rbt-table table table-borderless">
                    <thead>
                        <tr>
                            <th>Quiz</th>
                            <th>Qus</th>
                            <th>TM</th>
                            <th>CA</th>
                            <th>Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <p class="b3 mb--5">December 26, 2023</p>
                            </th>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <p class="b3">8</p>
                            </td>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <span class="rbt-badge-5 bg-color-success-opacity color-success">Pass</span>
                            </td>

                        </tr>
                        <tr>
                            <th>
                                <p class="b3 mb--5">December 26, 2023</p>
                            </th>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <p class="b3">8</p>
                            </td>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <span class="rbt-badge-5 bg-color-danger-opacity color-danger">Fail</span>
                            </td>

                        </tr>
                        <tr>
                            <th>
                                <p class="b3 mb--5">December 26, 2023</p>
                            </th>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <p class="b3">8</p>
                            </td>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <span class="rbt-badge-5 bg-color-success-opacity color-success">Pass</span>
                            </td>

                        </tr>
                        <tr>
                            <th>
                                <p class="b3 mb--5">December 26, 2023</p>
                            </th>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <p class="b3">8</p>
                            </td>
                            <td>
                                <p class="b3">4</p>
                            </td>
                            <td>
                                <span class="rbt-badge-5 bg-color-danger-opacity color-danger">Fail</span>
                            </td>

                        </tr>


                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <div class="bg-color-extra2 ptb--15 overflow-hidden">
        <div class="rbt-button-group">

            <a class="rbt-btn icon-hover btn-md" href="#">
                <span class="btn-text">Next</span>
                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
            </a>

        </div>
    </div>

</div>
@endsection