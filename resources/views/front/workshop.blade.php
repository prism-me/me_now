@extends('front.layout')
@section('title')
    {{ __('messages.Workshops') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="container">

        <div class="container">
            <div class="global-heading">
                <h2>{{ __('messages.Workshop List') }} </h2>
                <p>{{ __("messages.The best doctor is the one you run to and can't find") }}</p>
            </div>

            <div class="doctorpg-tab-mainbox">
                <section class="customer-logos slider tab">
                    <div class="slide tablinks" id="defaultOpen" onclick="openCity(event, 'all')">
                        {{ __('messages.All') }}
                    </div>

                    @foreach ($workshop as $d)
                        <div class="slide tablinks" onclick="openCity(event, '{{ $d->id }}')">
                            {{ $d->title }}
                        </div>
                    @endforeach
                </section>
            </div>

            <div class="doctorpg-part-main-box">
                <div id="all" class="tabcontent">
                    <div class="row">
                        @foreach ($workshop as $d)
                            <div class="col-lg-4 col-md-4 col-sm-6 " data-aos="fade-up">
                                <a href="{{ url('workshop/') . '/' . $d->id }}" class="denone">
                                    <div class="d-detail-collapse-doctor">
                                        <div class="doctorl-part-box">
                                            <img src="{{ $d->image }}">
                                            <div class="doctorl-dp-img doctorl-dp-img-1"
                                                style="background-image: url({{'<?= $d->image ?>'}})"></div>

                                            <div class="doctorl-part-detail">
                                                <h4>{{ ucwords(strtolower($d->title)) }}</h4>
                                                <p>Event Date:{{ $d->event_date }}</p>
                                                <p style="color:rgb(108, 108, 108)">
                                                    {{ substr($d->short_description, 0,  150) }}....
                                            
                                                <a href="{{ url('#'). '/'.$d->id }}" stle="color:#49B7C6;">Read More</a> </p>
                                                <div class="book_appointment_doctor">
                                                    <button>Book Event</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
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
