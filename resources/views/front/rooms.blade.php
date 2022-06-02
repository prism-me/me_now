@extends('front.layout')
@section('title')
    {{ __('messages.Workshops') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="container">
        <div class="global-heading">
            <h2>{{ $rooms->title }}</h2>
            <div class="exerpt">
                {{ $rooms->short_description }}
            </div>
            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-5">
                    <img src={{ $rooms->featured_img }} alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="who_we_are_cotent">
                        {{-- <h2>{{ $rooms->title }}</h2> --}}
                        <div class="room_description">
                            {!! $rooms->description !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="rooms_slider">
            <div class="owl-carousel owl-theme">
                @foreach ($rooms->slider_images as $slider)
                    {{-- <img src="" lt="hello" /> --}}

                    <div class="item">
                        <img src="{{ $slider }}" alt="slider image" />
                    </div>
                @endforeach
                <div class="item">
                    <img
                        src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg" />
                </div>
                <div class="item">
                    <img
                        src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg" />
                </div>
            </div>
        </div>
        <div class="about-content-widget">
            <div class="row">
                <div class="col-md-5">
                    {{-- <img src="{{ $rooms->additional_images }}" class="img-fluid" alt=""> --}}
                </div>
                <div class="col-md-7">
                    <div class="room_long_description">
                        {!! $rooms->additional_content !!}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="numbers-counter-main-box">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="{{ asset('front/img/n1.png') }}">
                            <div class="counter-value" data-count="10200">
                                {{ $setting->happy_client }}
                            </div>
                            <div class="counter-name">
                                <p>{{ __('messages.Happy people') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="{{ asset('front/img/n2.png') }}">
                            <div class="counter-value" data-count="700">
                                {{ $setting->surgery_complete }}
                            </div>
                            <div class="counter-name">
                                <p>{{ __('messages.SURGERY COMPLETED') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="{{ asset('front/img/n3.png') }}">
                            <div class="counter-value" data-count="189">
                                {{ $setting->expert_doctor }}
                            </div>
                            <div class="counter-name">
                                <p>{{ __('messages.Expert doctors') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="{{ asset('front/img/n4.png') }}">
                            <div class="counter-value" data-count="11">
                                {{ $setting->worldwide_branch }}
                            </div>
                            <div class="counter-name">
                                <p>{{ __('messages.World wide branch') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="global-heading">
            <h2>{{ __('messages.Frequently Asked Questions') }}</h2>
            <p>{{ __('messages.Talent wins games, but teamwork and intelligence win championships') }}</p>
        </div>
        <div class="faq">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS.
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


@push('scripts')
    <script>
        $('.rooms_slider .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            items: 1,
            dots: true,
        })
        // $('.patient-reviews-slider .owl-nav').removeClass('disabled');
    </script>
@endpush
