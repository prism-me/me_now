@extends('front.layout')
@section('title')
    {{ __('messages.FAQ') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="blogpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2>{{ __('messages.Frequently Asked Questions') }}</h2>
                <p>{{ __('messages.Talent wins games, but teamwork and intelligence win championships') }}</p>
            </div>
            <div class="faq my-5">
                <div class="accordion" id="accordionExample">

                    @foreach ($faqs as $faq)
                        <div class="card">
                            <div class="card-header collapsed " data-toggle="collapse" data-target="#{{ $faq->slug }}"
                                aria-expanded="true">
                                <span class="title">{{ $faq->title }}</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="{{ $faq->slug }}" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    {!! $faq->description !!}
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

@push('scripts')
    <script>
        $('#collapseThree').on('hidden.bs.collapse', function() {
            // do something...lo

            console.log('sdf');
        })
    </script>
@endpush