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
                {{-- <p>{{ __("messages.The best doctor is the one you run to and can't find") }}</p> --}}
            </div>
{{-- 
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
            </div> --}}
            
            <div class="doctorpg-part-main-box mb-5">
                <div id="all" class="tabcontent">
                    <div class="row">
                        @foreach ($workshop as $d)
                        <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-up">
                            <div class="d-detail-collapse-doctor">
                                <div class="doctorl-part-box workshops-wrapper">
                                    <a href="{{ url('workshop') . '/' . $d->slug }}" class="denone box-container">
                                    <img src="{{ $d->featured_img }}" class="img-fluid">
                                    </a>    

                                            <div class="doctorl-part-detail">
                                                <h4><a href="{{ url('workshop') . '/' . $d->slug }}">{{ ucwords($d->title) }}</a></h4>
                                                <p>Event Date:{{ $d->event_date }}</p>
                                                <p style="color:rgb(108, 108, 108)">
                                                    {!! substr($d->short_description, 0,  90) !!}... <a href="{{ url('workshop') . '/' . $d->slug }}"> Read More</a> </p>
                                            
                                                <div class="book_appointment_doctor">
                                                    {{-- <button>Book Event</button> --}}
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


    </div>

@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
