@extends('frontend.layout')
@section('content')
    <a class="close_side_menu" href="javascript:void(0);"></a>
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3 class="title">Interview</h3>
                    <p>Please click on the date colored green to schedule an interview.</p>
                    <?php echo App\Http\Controllers\CourseController::calendar('2023-08-14 09:41:22'); ?>
                    <form class="max-width-auto" style="display: none" id="interview-booking-form" action="{{ url('book_interview') }}" method="POST">
                        @csrf
                        <input type="hidden" name="interview" id="interview">
                        <div class="form-group">
                            <p id="interview-content"></p>
                        </div>
                        <div class="form-submit-group">
                            <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Book Now</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
@endsection
