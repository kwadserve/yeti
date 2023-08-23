@extends('admin.layout')
@section('title')
    YIF | Youth Electoral Trained Instructor
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-12">

                <div class="card info-card customers-card">

                    <div class="card-body">
                        <h5 class="card-title">Users <span>| All</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{App\Models\User::count()}}</h6>

                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End Customers Card -->

            <div class="col-xxl-3 col-xl-12">

                <div class="card info-card customers-card">

                    <div class="card-body">
                        <h5 class="card-title">Interview <span>| Pending</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{App\Models\UserMeta::where('meta_key', 'interview_status')->where('meta_value', 'pending')->count()}}</h6>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-xxl-3 col-xl-12">

                <div class="card info-card customers-card">

                    <div class="card-body">
                        <h5 class="card-title">Interview <span>| Approved</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{App\Models\UserMeta::where('meta_key', 'interview_status')->where('meta_value', 'approved')->count()}}</h6>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
