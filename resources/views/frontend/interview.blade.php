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
                    <h3 class="title">Interview Booked!</h3>
                    <p>Thank you <strong>{{Auth::user()->name}}</strong> for booking an interview on {{$date}} at 12:00 noon. We will email you regarding your status..</p>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
@endsection