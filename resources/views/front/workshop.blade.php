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

                                        <div class="workshop-part-detail">
                                            <h4><a
                                                    href="{{ url('workshop') . '/' . $d->slug }}">{{ ucwords($d->title) }}</a>
                                            </h4>
                                            <div class="workshop-schedule row">

                                                <div class="col-md-4 col-5" style="padding-left:0px;">
                                                    <span>Workshop Date:</span>
                                                </div>
                                                <div class="col-md-8 col-7" style="padding-right:0px;">
                                                    @php $event_date = $d->event_date; @endphp

                                                    <select name="dob" id="" class="form-control"
                                                        style="color:#000;width:90%;">
                                                        <option value="0">Select Date and Time</option>
                                                        @if (!is_null($event_date))
                                                            @foreach ($event_date as $date)
                                                                <option value="{{ $date }}">
                                                                    {{ date('m/d/Y H:i:s', strtotime($date)) }}</option>
                                                            @endforeach
                                                        @endif

                                                    </select>
                                                </div>

                                            </div>
                                            {{-- <p style="color:rgb(108, 108, 108)">
                                                    {!! substr($d->short_description, 0,  90) !!}... <a href="{{ url('workshop') . '/' . $d->slug }}"> Read More</a> </p> --}}
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
