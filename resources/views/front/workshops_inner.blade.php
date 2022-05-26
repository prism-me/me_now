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
        <div class="banner-img">
            <img src="{{ $workshop->featured_img }}"
                alt="" class="img-fluid" style="width:50%; height:50%">
        </div>
        <div class="meta_content">
            <div class="meta1"> <b>Date:</b>&nbsp;{{ $workshop->event_date }}</div>
            {{-- <div class="meta1"> <b>Time</b> : 6:00 pm to 7:00 pm </div> --}}
            <div class="meta1"> <b>Event Type:</b>&nbsp;{{ $workshop->event_type }}</div> </div>
        </div>
        <div class="event_content">
            <h3>{{ $workshop->title }}</h3>
            <p>
                {{ $workshop->short_description }}
            </p>
            <p>
                {{ $workshop->description }}
            </p>
        </div>

    </div>


@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
