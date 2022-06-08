@extends('front.layout')
@section('title')
    {{ __('messages.Events') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="container-fluid">
        <div class="global-heading">
            <h2 style="display: block;">Events</h2>
            {{-- <p>{{ __("messages.The best doctor is the one you run to and can't find") }}</p> --}}
        </div>
        <div class="doctorpg-part-main-box mb-5">
            {{-- @dd($events); --}}
            @php $i=1; @endphp
            @foreach ($events as $d)
                <div class="row event_rows">
                    @php 
                    if ($i % 2 == 0){
                        $class = 'order-2';
                    }else{
                        $class = 'order';
                    }
                    
                    @endphp
                    <div class="col-lg-7 col-md-7 col-sm-6 {{$class}}" data-aos="fade-up">
                        <div class="events-detail">
                            <h2>{{ $d->name }}</h2>
                            <p>Event Date: {{ $d->created_at->diffForHumans() }}</p>
                            <div class="event-description">
                                {!! $d->description !!}
                            </div>
                            <div class="book_now_event">

                                <a href="https://api.whatsapp.com/send/?phone=00971565553483" class="btn-hover color-9">Book
                                    Now</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="event_pic">
                            <img src="{{ $d->thumbnail_img }}" class="img-fluid">
                        </div>
                    </div>
                </div>

                @php $i++ @endphp
            @endforeach
        </div>
    </div>



@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
