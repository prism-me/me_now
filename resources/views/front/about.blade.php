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
            <h2>{{ __('messages.About_Me_Now') }} </h2>
            <p>{{ __("messages.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                                                                                                                                                                    
                                                                                                                                                                                                                        ") }}
            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-5">
                    <img src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg"
                        alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="who_we_are_cotent">
                        <h2>WHO WE ARE</h2>
                        <h2>We Help To Get Solutions</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                        </p>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2">
                            <img src="{{ asset('front/img/about-icon-1.png') }}" alt="">

                        </div>
                        <div class="col-md-10">
                            <h4 class="">Lorem Ipsum</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                            </p>
                        </div>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2">
                            <img src="{{ asset('front/img/about-icon-2.png') }}" alt="">

                        </div>
                        <div class="col-md-10">
                            <h4 class="">Simply Dummy</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_tiles">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-tile">
                        <div class="inner-single-title">
                            <img src="{{ asset('front/img/about-icon-1.png') }}" alt="">
                            <h4>
                                Lorem Ipsum simply
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile middle">
                        <div class="inner-single-title">
                            <img src="{{ asset('front/img/about-icon-2.png') }}" alt="">
                            <h4>
                                Lorem Ipsum simply
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile">
                        <div class="inner-single-title">
                            <img src="{{ asset('front/img/about-title-1.png') }}" alt="">
                            <h4>
                                Lorem Ipsum simply
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-content-widget">
            <div class="row">
                <div class="col-md-5">
                    <img src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg"
                        class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                    <div class="row text-section-about">
                        <div class="col-md-6">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type
                                and scrambled it to make a type specimen book. </p>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type
                                and scrambled it to make a type specimen book. </p>
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
                                <a href="{{ url('doctordetails/') . '/' . $d->user_id }}" class="anchor-doctor-image">
                                    <div class="doctorl-part-box">
                                        <?php
                                        if ($d->image) {
                                            $image = $d->image;
                                        } else {
                                            $image = asset('upload/profile/profile.png');
                                        }
                                        ?>
                                        <div class="doctorl-dp-img doctorl-dp-img-1"
                                            style="background-image: url('<?= $image ?>')"></div>
                                        <div class="doctorl-part-detail">
                                            <h4>{{ ucwords(strtolower($d->name)) }}</h4>
                                            <p>{{ substr(trim($d->about_us), 0, 135) }}</p>
                                            <div class="book_appointment_doctor text-center">
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
                                </a>
                            </div>
                        @endforeach
                    @endif
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
