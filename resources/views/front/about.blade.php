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
            <p>Our goal is to provide high-quality treatment to everyone who wants help from us so that they can enjoy a
                life free of addiction and mental illness.
            </p>
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
                        {{-- <h2>You have the power within YOU, we believe in YOU</h2> --}}
                        <p>
                            We are one of Dubai's premier private rehabilitation centers, providing world-class care for a
                            variety of addictions, mental health issues, physical ailments, and eating disorders. Our highly
                            qualified Practitioners are committed to helping our clients improve their mental health by
                            employing effective and clinically proven strategies.


                        </p>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2 text-center">
                            <img src="{{ asset('front/img/icons/who-we-1.png') }}" alt="">

                        </div>
                        <div class="col-md-10">
                            <p>
                                Our highly regarded treatment programs are supervised by internationally recognized mental
                                health specialists that collaborate seamlessly to ensure that our clients receive the finest
                                possible care and are empowered to take steps toward a complete and long-term recovery.


                            </p>
                        </div>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2 text-center">
                            <img src="{{ asset('front/img/icons/who-we.png') }}" alt="">

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
            <div class="global-heading">
                <h2> What we stand for</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-tile">
                        <div class="inner-single-title">
                            <img src="{{ asset('front/img/icons/vision.png') }}" alt="">
                            <h4>
                                Our Vision
                            </h4>
                            <p>
                                Our Vision is to assist people who have been in and out of treatment to find a way back to
                                health and recovery. We want to be the change by providing effective out-patient therapies
                                for underlying psychological trauma, and mental illnesses. Me Now would like to help you
                                love your best life.


                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile middle">
                        <div class="inner-single-title">
                            <img src="{{ asset('front/img/icons/mission.png') }}" alt="">
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
                            <img src="{{ asset('front/img/icons/value.png') }}" alt="">
                            <h4>
                                Our Approach
                            </h4>
                            <p>
                                A thorough service of exceptional quality that provides personalized treatment and a path to
                                recovery that is fully responsive to individual needs in a secluded and beautifully designed
                                environment, but with all the opportunities, resources, and safety of a medical clinic,
                                fully licensed, with multilingual staff and Arabic and English as the primary languages.



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
                        We Treat a wide range of mental health issues, including burnout, depression, anxiety, and PTSD and
                        these are just the tip of the Iceberg. Our practitioners have committed their lives to providing
                        outstanding therapeutical services and Professional Coaching Sessions in Dubai. Me Now is rooted in
                        delivering quality treatment in every element of service.



                    </p>
                    <div class="row text-section-about">
                        <div class="col-md-6 col-sm-12">
                            <p>Our therapies take place in a setting that fosters wellness, relaxation, and safety. We
                                encourage our patients to express their frustrations and put their trust in us so that our
                                practitioners can find the best treatment and assistance for them.

                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>We have wellness options for everyone, whether you're dealing with anxiety or depression, or
                                simply need a safe place to vent and let off steam, we have therapies that address
                                challenges related to your body and mind.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doctorl-main-box" style="margin-bottom: 40px">
            <div class="container">
                <div class="global-heading">
                    <h2>Me Now Team</h2>
                    <p>The treatment team is made up of medical and therapeutic practitioners who were chosen for their
                        recognized expertise as well as empathy and understanding.
                    </p>
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
                                        <p>{{ substr(trim($d->about_us), 0, 135) }} ... <a
                                                href="{{ url('doctordetails/') . '/' . $d->slug }}">Read More</a></p>
                                        <div class="book_appointment_doctor">
                                            {{-- <button data-toggle="modal" data-target="#appointmentModal">Make an
                                                Appointment</button> --}}
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

@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
