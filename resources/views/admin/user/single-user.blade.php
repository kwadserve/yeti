@extends('admin.layout')
@section('title')
    {{ strtok($user->name, ' ') }} | YIF | Youth Electoral Trained Instructor
@endsection
<?php $avatar = App\Http\Controllers\UserController::get_meta($user->id, 'avatar'); ?>
@section('content')
    <div class="pagetitle">
        <h1>Profile</h1>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        @if ($avatar)
                            <img src="{{ url('avatar/' . $avatar) }}" alt="Instructor" class="rounded-circle">
                        @else
                            <img src="{{ url('https://cdn-icons-png.flaticon.com/512/6596/6596121.png') }}" alt="Instructor"
                                class="rounded-circle">
                        @endif
                        <h2>{{ $user->name }}</h2>
                        <div class="social-links mt-2">
                            <a href="{{ App\Http\Controllers\UserController::get_meta($user->id, 'twitter') }}"
                                class="twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="{{ App\Http\Controllers\UserController::get_meta($user->id, 'facebook') }}"
                                class="facebook">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="{{ App\Http\Controllers\UserController::get_meta($user->id, 'instagram') }}"
                                class="instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="{{ App\Http\Controllers\UserController::get_meta($user->id, 'linkedin') }}"
                                class="linkedin">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Overview</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#course-status">Course</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">About</h5>
                                <p class="small fst-italic">{{ $user->bio }}</p>

                                <h5 class="card-title">Profile Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->name }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">City</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ App\Http\Controllers\UserController::get_meta($user->id, 'city') }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">State</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ App\Http\Controllers\UserController::get_meta($user->id, 'state') }}
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">PIN</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ App\Http\Controllers\UserController::get_meta($user->id, 'pin') }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Institute/Place of work</div>
                                    <div class="col-lg-9 col-md-8">
                                        {{ App\Http\Controllers\UserController::get_meta($user->id, 'institute') }}</div>
                                </div>
                            </div>
                            <div class="tab-pane fade course-status" id="course-status">
                                <h5 class="card-title">Course Details</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Status</div>
                                    <div class="col-lg-9 col-md-8">{{ $user->course_status }}</div>
                                </div>
                                @if ($user->course_status == 'completed')
                                    <h5 class="card-title">Interview Details</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Interview</div>
                                        <div class="col-lg-9 col-md-8">{{ App\Http\Controllers\UserController::get_meta($user->id, 'interview_booked') }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Status</div>
                                        <div class="col-lg-9 col-md-8">{{ App\Http\Controllers\UserController::get_meta($user->id, 'interview_status') }}</div>
                                    </div>
                                    @if (App\Http\Controllers\UserController::get_meta($user->id, 'interview_status') == 'pending')
                                        <div class="row text-center">
                                            <button type="button" style="width: auto;margin: auto"
                                                class="btn btn-sm btn-primary rounded-pill">Approve</button>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
