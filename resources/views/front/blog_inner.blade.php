@extends('front.layout')
@section('title')
    {{ __('messages.Blog Detail') }}
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
                        <div class="col-md-9">
                            <div class="img_wrapper">
                                <img src="{{ $blogdetails->featured_img }}" alt=""  style="width:100%;">
                                <div class="meta_data">
                                   <div> Posted at: 24, May 2014</div>
                                   <div>Author: Admin</div>
                                </div>
                                <h4></h4>
                            </div>
                            <div class="content_area">
                                <h1>{{$blogdetails->title}}</h1>
                                <p> {{$blogdetails->description}}
                                </p>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="popular_posts">
                                <h4> Popular Posts </h4>
                                <ul>
                                    @foreach($blog as $blogData)
                                        <li>
                                            <div class="img">
                                                <img src="{{ $blogData->featured_img }}" alt="" class="img-fluid">
                                            </div>
                                            <div class="content">
                                                <h6><a href="{{ url('blogdetails'). '/' .$blogData->slug }}">Lorem Ipsum.</a></h6>
                                                <p>Date : {{$blogData->created_at}}</p>
                                            </div>
                                        </li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
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