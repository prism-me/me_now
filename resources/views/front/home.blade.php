@extends('front.layout')
@section('title')
    {{ __('messages.Home') }}
@stop
@section('loader')
    <div id="overlayer"></div><span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')

    <div class="appointment-section">
        @include('front.banner_static')
        {{-- @include('front.banner_slider') --}}
    </div>

    <div class="about_container">
        @include('front.about_section')
    </div>

    <div class="service_section_container">
        @include('front.services_section')
    </div>



    {{-- </div>
    </div> --}}

    @include('front.doctor_section')
<div class="outer_container_women_wrapper">
    <div class="container-fluid">
        <div class="women_wrapper " data-aos="fade-up">
            <div class="row">
                <div class="col-md-5 text-center women_img_section">
                    <div class="women_img_wrapper"><img src={{ @$home[2]['featured_img']}} class="img-fluid" alt="about us section">
                    </div>
                </div>
                
                <div class="col-md-7">
                    <div class="about_content text-center">
                        {{-- <img src={{ @$home[2]['fatured_img']}} alt="logo" class="about-section-logo"> --}}
                        <div class="services_home_container global-heading ">
                            <h2 class="animated fadeInDown delay-2s ">{{ @$home[2]['title']}}</h2>
                        </div>
                        <p class="animated fadeInDown mb-5">{!! @$home[2]['description'] !!}
    
                        </p>
                        <a href="{{ url('women-empowerment') }}" class="btn-hover color-9">{{ __('messages.Read More') }}</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

    
    {{-- <div class="home_promo_banner" data-aos="fade-up">
        <div class="container-fluid">
            <div class="home_promo_banner_inner">
                <h2>Women, We See You, You’re at The Heart of Me Now</h2>
                <p>Me Now is no less than a family dedicated to supporting each other and building a community of
                    like-minded, empowered women. The center has special memberships for women that come with unlimited
                    benefits including discounts on facilities, free workshops, and much more.
                </p>
                <div class="services-btn-main-box">
                    <a href="{{ url('women-empowerment') }}" class="btn-hover color-9">Read More</a>
                </div>
    
            </div>

        </div>
    </div> --}}

    <div class="testimonial-main-box">
        <div class="container-fluid" style="padding-left: 0px ; padding-right: 0px;">
            <div class="global-heading">
                <h2>{{ __('messages.Client’s Reviews') }}</h2>
                <p>{{ __('messages.See what our clients have to say about the Me Now Center and our mental health services') }}</p>
            </div>
            <div class="testimonial-part-main-box">
                <div class="owl-carousel testimonial-carousel patient-reviews-slider">
                    @foreach ($review as $r)
                        @if (isset($r->users))
                            <div class="single-testimonial">
                                <div class="testimonial-part-box">
                                    <div class="testimonial-inner-images">
                                        <div class="col-md-3 testimage">
                                            
                                            <img src="{{ $r->img }}" class="testimonial-profile-img img-fluid">
                                        </div>
                                        <div class="col-md-9 testtext">
                                            <p class="testip">{{ $r->review }}</p>
                                            <span class="testimonialspan"></span>
                                            @if (isset($r->name))
                                                <h3 class="testimonialh">- {{ $r->name }}</h3>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop


@push('scripts')
    <script>
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 2,
                    nav: true,
                }
            }
        })

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            items: 1,
            dots: true,
        })


        // $('.patient-reviews-slider .owl-nav').removeClass('disabled');
    </script>
    <script>
        AOS.init();
    </script>

    <script>
        // $(document).ready(function() {

        //     $(".hover-doctor-portal").hover(function() {

        //         $(this).().attr("data-aos", "flip-left");
        //         $(this).next().css({'display' : 'block'});


        //     }, function() {

        //         $(this).attr("data-aos", " ");

        //     });
        // });
    </script>
@endpush


{{-- @section('footer') --}}
