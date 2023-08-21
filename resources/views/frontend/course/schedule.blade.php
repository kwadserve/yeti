@extends('frontend.layout')
@section('content')
    <a class="close_side_menu" href="javascript:void(0);"></a>
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <?php echo(App\Http\Controllers\CourseController::calendar('2023-08-14 09:41:22')); ?>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
@endsection
