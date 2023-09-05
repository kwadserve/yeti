@extends('frontend.dashboard.layout')
@section('dashboardContent')
    <!-- Start Events  -->
    <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
        <div class="content">
            <div class="section-title">
                <h4 class="rbt-title-style-3">Events</h4>
            </div>
            <div class="rbt-dashboard-table table-responsive mobile-table-750">
                <table class="rbt-table table table-borderless">
                    <thead>
                        <tr>
                            <th>Event</th>
                            <th>Date</th>
                            <th>Venue</th>
                            <th>Volunteer</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <th>{{$event->name}}</th>
                            <td><?=date_format(date_create($event->start_date), "d")?>
                                -
                                <?=date_format(date_create($event->end_date), "d")?><br>
                                <span class="end-month text-uppercase">
                                    <?=date_format(date_create($event->end_date), "F")?>
                                </span></td>
                            <td>{{$event->venue}}<br>{{$event->city}}, {{$event->state}}</td>
                            <td>
                                <a class="rbt-btn btn-md hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Volunteer</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Events  -->
@endsection