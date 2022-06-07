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
            <h2>{{ $room->title }}</h2>
            <div class="exerpt">
            </div>
            </p>
        </div>

        <div class="rooms_first_section">
            <div class="row">
                <div class="col-md-6">
                    <div class="who_we_are_cotent">
                        <div class="room_description">
                            {!! $room->description !!}
                            <a href="https://wa.me/+971565553483" class="btn-hover color-9 ">Contact Us</a>
                        </div>

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="room_main_img">
                        <img src="{{ $room->featured_img }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rooms_second_section">
        <div class="row" style="margin-left: 0px;margin-right: 0px;">
            <div class="col-md-6">
                <img src="{{ $room->featured_img2 }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="room_long_description">
                    {!! $room->description2 !!}
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
