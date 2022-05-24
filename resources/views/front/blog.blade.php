@extends('front.layout')
@section('title')
    {{ __('messages.Doctor List') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="container">
        <div class="global-heading">
            <h2>{{ __('messages.Blog') }} </h2>
        </div>
        <div class="row">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-md-4">
                    <div class="blog-single">
                        <div class="img_wrapper">
                            <a href=""><img src="http://127.0.0.1:8000/upload/doctor/doctor_899606.jpg" alt="blog"></a>
                        </div>
                        <div class="content_wrapper">
                            <div class="date_time">
                                <div class="time"><i class="fa fa-clock"></i> Time</div>
                                <div class="topic"><i class="fa fa-user"></i> Author</div>
                            </div>
                            <div class="text_wrapper">
                                <h4><a href="">Blog Heading</a></h4>
                                <p>
                                    Lorem ipsum dolor sit amet lorem impossible
                                    Lorem ipsum dolor sit amet lorem impossible
                                    Lorem ipsum dolor sit amet lorem impossible
                                </p>
                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>

@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
