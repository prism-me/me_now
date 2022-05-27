@extends('front.layout')
@section('title')
    {{ __('messages.Blog List') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="blogpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2>{{ __('messages.Blog') }} </h2>
            </div>
            <div class="blogpg-part-main-box">
                <div id="all" class="tabcontent">
                    <div class="row">
                
                        @foreach ($blog as  $data)
                            <div class="col-md-4">
                                <div class="blog-single">
                                    <div class="img_wrapper">
                                        <a href="{{ url('blog-detail'). '/'.$data->id }}"><img src="{{ $data->featured_img}}" alt="blog" class="img-fluid"></a>
                                    </div>
                                    <div class="content_wrapper">
                                        <div class="date_time">
                                            <div class="time"><i class="fa fa-clock"></i>{{ date('d-m-Y',strtotime($data->created_at)) }}&nbsp;&nbsp;
                                                <i class="fa fa-user"></i> {{ $data->posted_by }}
                                            </div>
                                        </div>
                                        <div class="text_wrapper">
                                            <h4><a href="{{ url('blog-detail'). '/'.$data->id }}">{{ $data->title }}</a></h4>
                                            <p style="color:rgb(108, 108, 108)">
                                                {{ substr($data->description, 0,  150) }}....
                                        
                                            <a href="{{ url('blog-detail'). '/'.$data->id }}" stle="color:#49B7C6;">Read More</a> </p>
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
