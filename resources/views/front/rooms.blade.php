@extends('front.layout')
@section('title')
    {{ __('messages.Workshops') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="container-fluid">
        <div class="global-heading">
            <h2>{{ $rooms->title }}</h2>
            <div class="exerpt">
            </div>
            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-7">
                    <div class="who_we_are_cotent">
                        <div class="room_description">
                            {!! $rooms->description !!}
                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <img src="{{ $rooms->featured_img }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="about-content-widget">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $rooms->featured_img2 }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <div class="room_long_description">
                        {!! $rooms->description2 !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="promo_section_rooms">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ $rooms->more_img1 }}" alt="" class="img-fluid">
                    <div class="room_title">
                        <h2>{{ $rooms->more_img_title1 }}</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room_title">
                        <h2>{{ $rooms->more_img_title2 }}</h2>
                    </div>
                    <img src="{{ $rooms->more_img2 }}" alt="" class="img-fluid">

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
