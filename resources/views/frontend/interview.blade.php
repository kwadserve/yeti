@extends('frontend.layout')
@section('content')
    @php
        $date = \Carbon\Carbon::parse($interview->meta_value)->format('d M');
    @endphp
    <a class="close_side_menu" href="javascript:void(0);"></a>
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <!-- Interview Date Selected! Waiting for admin approval... -->
                    @if ($status === 'pending')
                        <h3 class="title">Interview Booked!</h3>
                        <p>Thank you <strong>{{ Auth::user()->name }}</strong> for booking an interview on
                            {{ $date }} at 12:00 noon. We will email you regarding your status..</p>
                    <!-- Interview Date accepted by admin... -->
                    @elseif($status === 'booked')
                        <h3 class="title">Interview Accepted!</h3>
                        <p><strong>{{ Auth::user()->name }}</strong> your interview on
                            {{ $date }} at 12:00 noon has been accepted. We have send you an email with the link to
                            the meeting..</p>
                    <!-- Interview Date rejected by admin... -->
                    @elseif($status === 'declined')
                        <h3 class="title">Interview Declined!</h3>
                        <p><strong>{{ Auth::user()->name }}</strong> your interview on
                            {{ $date }} at 12:00 noon has been rejected. An email has been sent stating the rejection reason.</p>
                    <!-- User rejected as YETI by admin... -->
                    @elseif($status === 'rejected')
                        <h3 class="title">Sorry <strong>{{ Auth::user()->name }}</strong>!</h3>
                        <p>You are not accepted as an YETI.</p>
                    <!-- User accepted as YETI by admin... -->
                    @elseif($status === 'accepted')
                        <h3 class="title">Congratulation! <strong>{{ Auth::user()->name }}</strong></h3>
                        <p>Your interview on
                            {{ $date }} was successful. You have been accepted as an YETI. Please click here to <a
                                href="{{ url('certificate') }}" target="_blank">download certificate</a> or go to your
                            dashboard to download it.</p>
                    @endif
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
@endsection
