@extends('front.layout')
@section('title')
    {{ __('messages.Home') }}
@stop
@section('loader')
    <div id="overlayer"></div><span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <style>

    </style>
    <div class="appointment-section">
        <div class="header-img">
        </div>
        @include('front.banner_slider')
    </div>

    <div class="services-main-box">
        <div class="container">
            <div class="services-left-part">
                <div class="left-part-detail">
                    <h2>{{ __('messages.Personal care & healthy living') }}</h2>
                    <p>{{ __('messages.facilitydetails') }}</p>
                    <div class="services-btn-main-box">
                        <a href="{{ url('allfacilites') }}">{{ __('messages.Learn More') }}</a>
                    </div>
                    <div class="left-triangle">
                    </div>
                </div>
            </div>
            <div class="services-right-part">
                <div class="row">
                    @if (count($department) > 0)
                        <?php $i = 0; ?>
                        @foreach ($department as $s)
                            @if ($i < 6)
                                <div class="col-md-4 col-sm-6">
                                    @if ($i % 2 == 0)
                                        <div class="services-part-box services-part1-box">
                                        @else
                                            <div class="services-part-box services-part2-box">
                                    @endif
                                    <img src="{{ $s->image }}">
                                    <div class="text-detail-box">

                                        <h4><a href="{{ url('services') . '/' . $s->slug }}">{{ $s->name }}</a></h4>
                                        <p>{{ $s->short_description }}</p>
                                    </div>
                                </div>
                </div>
                @endif

                <?php $i++; ?>
                @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="services-left-part services-2nd-box">
            <div class="left-part-detail">
                <h2>{{ __('messages.Services') }}</h2>
                <p>{{ __('messages.facilitydetails') }}</p>
                <div class="services-btn-main-box">
                    <a href="{{ url('allfacilites') }}">{{ __('messages.Learn More') }}</a>
                </div>
                {{-- <div class="left-triangle">
					</div> --}}
            </div>
        </div>
        <div class="services-right-part">
            <div class="row">
                @if (count($department) > 0)
                    <?php $i = 0; ?>
                    @foreach ($department as $s)
                        @if ($i > 5)
                            <div class="col-md-4 col-sm-6">
                                @if ($i % 2 == 0)
                                    <div class="services-part-box services-part1-box">
                                    @else
                                        <div class="services-part-box services-part2-box">
                                @endif
                                <img src="{{ $s->image }}">
                                <div class="text-detail-box">
                                    <h4>{{ $s->name }}</h4>
                                    <p>{{ substr($s->short_description, 0, 70) }}</p>
                                </div>
                            </div>
            </div>
            @endif

            <?php $i++; ?>
            @endforeach
            @endif
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="services-part-box services-part2-box">
                <img src="https://menow.b-cdn.net/images/icon-165363374975.png" class="img-fluid">
                <div class="text-detail-box">
                    <h4><a href="{{ url('/rooms') }}">Rooms</a></h4>
                    <p>Rooms descriptions</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="video-section">
        {{-- <iframe width="100%" height="600" src="https://www.youtube.com/embed/8sqaLSpp33w" title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe> --}}
        <video controls>
            <source src="https://menow.b-cdn.net/video/Me-Now-Ads-Final-Without-Audio-small.mp4" type="video/mp4">
            <source src="https://menow.b-cdn.net/video/Me-Now-Ads-Final-Without-Audio-small.mp4" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </div>


    </div>
    </div>

    <div class="numbers-counter-main-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
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
                <div class="col-md-3 col-sm-6 col-6">
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
                <div class="col-md-3 col-sm-6 col-6">
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
                <div class="col-md-3 col-sm-6 col-6">
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

    <div class="doctorl-main-box">
        <div class="container">
            <div class="global-heading">
                <h2>{{ __('messages.Meet Our Doctors') }}</h2>
                <p>{{ __('messages.Talent wins games, but teamwork and intelligence win championships') }}</p>
            </div>
            <div class="row">
                @if (count($doctor) > 0)
                    @foreach ($doctor as $d)
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="doctorl-part-box">
                                <?php
                                if ($d->image) {
                                    $image = $d->image;
                                } else {
                                    $image = asset('upload/profile/profile.png');
                                }
                                ?>
                                <a href="{{ url('doctordetails/') . '/' . $d->slug }}" class="img-fluid">
                                    <div class="doctorl-dp-img doctorl-dp-img-1"
                                        style="background-image: url('<?= $image ?>')"></div>
                                </a>
                                <div class="doctorl-part-detail text-center">
                                    <h4>{{ ucwords($d->name) }}</h4>
                                    <p>{{ substr(trim($d->about_us), 0, 135) }} ... <a
                                            href="{{ url('doctordetails/') . '/' . $d->slug }}">Read More</a></p>
                                    <div class="book_appointment_doctor">
                                        <button>Make an Appointment</button>
                                    </div>
                                </div>
                                <div class="icons-images">
                                    {{-- <div class="book_appointment_doctor">
                                            <button>Make an Appointment</button>
                                        </div> --}}
                                    {{-- <span class="facebook-doctorl">
                                            <a href="{{ isset($d->facebook_id) ? $d->facebook_id : '' }}" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </span>
                                        <span class="twitter-doctorl">
                                            <a href="{{ isset($d->twitter_id) ? $d->twitter_id : '' }}" target="_blank"><i
                                                    class="fab fa-twitter"></i></a>
                                        </span>
                                        <span class="gp-doctorl">
                                            <a href="{{ isset($d->google_id) ? $d->google_id : '' }}" target="_blank"><i
                                                    class="fab fa-google-plus-g"></i></a>
                                        </span>
                                        <span class="instagram-doctorl">
                                            <a href="{{ isset($d->instagram_id) ? $d->instagram_id : '' }}"
                                                target="_blank"><img
                                                    src="{{ asset('front/img/instagram.png') }}"></a>
                                        </span> --}}
                                </div>
                            </div>

                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="testimonial-main-box">
        <div class="container" style="padding-left: 0px ; padding-right: 0px;">
            <div class="global-heading">
                <h2>{{ __('messages.Patient Reviews') }}</h2>
                <p>{{ __('messages.reviewline') }}</p>
            </div>
            <div class="testimonial-part-main-box">
                <div class="owl-carousel testimonial-carousel patient-reviews-slider">
                    @foreach ($review as $r)
                        @if (isset($r->users))
                            <div class="single-testimonial">
                                <div class="testimonial-part-box">
                                    <div class="testimonial-inner-images">
                                        <div class="col-md-3 testimage">
                                            <?php
                                            if ($r->users->profile_pic != '') {
                                                $image = asset('upload/profile') . '/' . $r->users->profile_pic;
                                            } elseif (isset($r->doctors) && isset($r->doctors->$image)) {
                                                $image = asset('upload/doctor') . '/' . $r->doctors->image;
                                            } else {
                                                $image = asset('upload/profile/profile.png');
                                            }
                                            ?>
                                            <img src="{{ $image }}" class="testimonial-profile-img img-fluid">
                                        </div>
                                        <div class="col-md-9 testtext">
                                            <p class="testip">{{ $r->review }}</p>
                                            <span class="testimonialspan"></span>
                                            @if (isset($r->users->name))
                                                <h3 class="testimonialh">- {{ $r->users->name }}</h3>
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
            nav: true,
            items: 1,
            dots: false,
        })

        // $('.patient-reviews-slider .owl-nav').removeClass('disabled');
    </script>
@endpush
