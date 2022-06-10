@extends('front.layout')
@section('title')
    {{ __('messages.Become a Member') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="container-fluid">
        {{-- <div class="global-heading">
            <h2>Become A Member</h2>
        </div> --}}

        @include('front.packages')

    </div>






@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
