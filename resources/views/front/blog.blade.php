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
            
            @foreach ($blog as  $data)
                <div class="col-md-4">
                    <div class="blog-single">
                        <div class="img_wrapper">
                            <a href=""><img src="{{ asset('upload/blog').'/'. $data->featured_img}}" alt="blog" style="height:54px;width:61px;"></a>
                        </div>
                        <div class="content_wrapper">
                            <div class="date_time">
                                <div class="time"><i class="fa fa-clock"></i>{{ date('d-m-Y',strtotime($data->created_at)) }}</div>
                                <div class="topic"><i class="fa fa-user"></i> {{ $data->posted_by }}</div>
                            </div>
                            <div class="text_wrapper">
                                <h4><a href="">{{ $data->title }}</a></h4>
                                <p>
                                    {{ substr($data->description, 0,  80) }}....
                               
                                <a href="{{ url('blog-detail/').$data->id }}" stle="color:#49B7C6;">Read More</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
