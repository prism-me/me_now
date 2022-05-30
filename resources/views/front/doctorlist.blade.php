@extends('front.layout')
@section('title')
    {{ __('messages.Doctor List') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="doctorpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2>Me Now Team</h2>
                <p>Me Now Center is rooted in the belief that all people deserve high-quality mental health care. We take
                    pride in offering the most comprehensive and holistic approach to mental health care and our team
                    includes licensed therapists, psychologists, and psychiatrists with expertise in ADHD, PTSD, and other
                    mental health-related problems. Our mental health practitioners are eager to help you in your battles
                    against mental health and to assist you in achieving mental wellbeing.</p>
            </div>

            {{-- <div class="doctorpg-tab-mainbox">
                <section class="customer-logos slider tab">
                    <div class="slide tablinks" id="defaultOpen" onclick="openCity(event, 'all')">
                        {{ __('messages.All') }}
                    </div>

                    @foreach ($department as $d)
                        <div class="slide tablinks" onclick="openCity(event, '{{ $d->id }}')">
                            {{ $d->name }}
                        </div>
                    @endforeach
                </section>
            </div> --}}

            <div class="doctorpg-part-main-box">
                <div id="all" class="tabcontent">
                    <div class="row">
                        @foreach ($doctor as $d)
                            <div class="col-lg-3 col-md-4 col-sm-6 " data-aos="fade-up">

                                <div class="d-detail-collapse-doctor">
                                    <div class="doctorl-part-box">
                                        <a href="{{ url('doctordetails/') . '/' . $d->slug }}" class="denone">
                                            <img src="{{ $d->image }}" class="img-fluid">
                                        </a>
                                        <div class="doctorl-part-detail text-center">
                                            <h4><a href="{{ url('doctordetails/') . '/' . $d->slug }}"
                                                    class="denone">{{ ucwords($d->name) }}</a></h4>
                                            <p style="color:rgb(108, 108, 108)">
                                                {{ substr($d->about_us, 0, 100) }}... <a
                                                    href="{{ url('doctordetails/') . '/' . $d->slug }}">Read More</a>

                                            <div class="book_appointment_doctor">
                                                <button>Make an Appointment</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="promo_section">
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
        </div>
    </div>

@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
