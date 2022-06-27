@extends('front.layout')
@section('title')
    {{ __('messages.Women Empowerment') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="container-fluid">
        <div class="global-heading">
            <h2>{{$women[0]['title']}}</h2>
            <p>{!!$women[0]['description'] !!} </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{$women[1]['featured_img']}}" alt="" class="img-fluid side_woment_emp_img">

                </div>
                <div class="col-md-7">
                    <div class="who_we_are_cotent" data-aos="fade-up">
                        <h2>{{$women[1]['title']}}</h2>
                        {{-- <h2>We Help To Get Solutions</h2> --}}
                        <div class="women-empowerment-" data-aos="zoom-in">
                          {!! $women[1]['description'] !!}.
                            <blockquote class="blockquote">
                                <span class="fa fa-quote-left"></span>
                                    {!! $women[2]['description'] !!}.
                                <span class="fa fa-quote-right"></span>
                                <footer class="blockquote-footer">CEO's Message</footer>
                            </blockquote>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('front.packages')

      

    </div>

    






@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
