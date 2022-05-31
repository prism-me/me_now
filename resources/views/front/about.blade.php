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
            <p>We are not only competent but EMPATHETIC, our Practitioners have committed their lives, studied for years,
                and are aware of the "mind & body" challenges we face each day. </p>
            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('front/img/about-us.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="who_we_are_cotent">
                        <h2>WHO WE ARE</h2>
                        <h2>You have the power within YOU, we believe in YOU</h2>
                        <p>
                            Me Now is a "haven" for well-being and mental health. We provide professional services to
                            Families, children, teenagers, couples, employers, and entrepreneurs. We are here to help
                            everyone because each of us somewhere and somehow falls in the mentioned categories.

                        </p>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2">
                            <img src="{{ asset('front/img/about-icon-1.png') }}" alt="">

                        </div>
                        <div class="col-md-10">
                            <p>
                                We want everyone to know that they have everything they need within themselves, and we help
                                them feel loved and supported regardless of their situation, state, or addiction.

                            </p>
                        </div>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2">
                            <img src="{{ asset('front/img/about-icon-2.png') }}" alt="">

                        </div>
                        <div class="col-md-10">
                            <p>
                                At Me Now, we provide a safe environment where you can express yourself and let go of past
                                and present traumas so that we can work together to get you back to the lively person you
                                were, if not better.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_tiles mb-5 text-center">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-tile">
                        <div class="inner-single-title">
                            <img src="{{ asset('front/img/about-icon-1.png') }}" alt="">
                            <h4>
                                Our Vision
                            </h4>
                            <p>
                                To unveil your inner strengths to become a better version of yourself ‘Now’.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile middle">
                        <div class="inner-single-title">
                            <img src="{{ asset('front/img/about-icon-2.png') }}" alt="">
                            <h4>
                                Our mission
                            </h4>
                            <p>
                                To inspire, create and provide you with the opportunity to uncover what lies within you-your
                                strengths. To make mental health less stigmatizing and equip you with the resources you need
                                to improve your personal and professional life.


                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile">
                        <div class="inner-single-title">
                            <img src="{{ asset('front/img/about-title-1.png') }}" alt="">
                            <h4>
                                Our Values
                            </h4>
                            <p>
                                The foundations upon which our services are built are empathy, confidentiality, and
                                dedication.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-content-widget">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <img src="{{ asset('front/img/about-us.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 col-sm-12">
                    <p class="text-margin">
                        Me Now is a place where you can make your own path through life. According to Me Now, success is
                        centered on two principles: doing what you love and doing what you know. Invest every atom of your
                        being, every ounce of your energy, and every talent you have into your work.


                    </p>
                    <div class="row text-section-about">
                        <div class="col-md-6 col-sm-12">
                            <p>Our therapies take place in a setting that fosters wellness, relaxation, and safety. We
                                encourage our patients to express their frustrations and put their trust in us so that our
                                practitioners can find the best treatment and assistance for them.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>We have a wellness option for everyone, whether you're dealing with anxiety or depression, or
                                simply need a safe place to vent and let off steam, we have therapies that address
                                challenges of both your body and mind.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doctorl-main-box">
            <div class="container">
                <div class="global-heading">
                    <h2>Me Now Team</h2>
                    {{-- <p>{{ __('messages.Talent wins games, but teamwork and intelligence win championships') }}</p> --}}
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
                                    <a href="{{ url('doctordetails/') . '/' . $d->slug }}" class="anchor-doctor-image">
                                        <div class="doctorl-dp-img doctorl-dp-img-1"
                                            style="background-image: url('<?= $image ?>')"></div>
                                    </a>
                                    <div class="doctorl-part-detail">
                                        <h4><a href="{{ url('doctordetails/') . '/' . $d->slug }}"
                                                class="anchor-doctor-image">{{ ucwords(strtolower($d->name)) }}</a></h4>
                                        <p>{{ substr(trim($d->about_us), 0, 135) }}</p>
                                        <div class="book_appointment_doctor">
                                            <button data-toggle="modal" data-target="#appointmentModal">Make an
                                                Appointment</button>
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
        <div class="faq my-5">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true">
                        <span class="title">Collapsible Group Item #1 </span>
                        <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        <span class="title">Collapsible Group Item #2</span>
                        <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="false">
                        <span class="title">Collapsible Group Item #3</span>
                        <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
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
