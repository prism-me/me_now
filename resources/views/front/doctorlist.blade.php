@extends('front.layout')
@section('title')
    {{ __('messages.Our Team') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="doctorpg-main-box">

        @include('front.doctor_section')

        {{-- <div class="promo_section">
            <div class="container">
                <div class="row" style="align-items: center;">
                    <div class="col-md-3">
                        <img src="{{ asset('front/img/logo.png') }}" alt="logo">
                    </div>
                    <div class="col-md-6">
                        <p>
                            Start Your Journey Towards Better Mental Health Now
                        </p>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary get-in-touch-button" data-toggle="modal"
                            data-target="#appointmentModal">Consult with us</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
