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

        <div class="container">
            <div class="global-heading">
                <h2>{{ __('messages.Doctor List') }} </h2>
                <p>{{ __("messages.The best doctor is the one you run to and can't find") }}</p>
            </div>

            <div class="doctorpg-tab-mainbox">
                <section class="customer-logos slider tab">
                    <div class="slide tablinks" id="defaultOpen" onclick="openCity(event, 'all')">
                        {{ __('messages.All') }}
                    </div>

                    @foreach ($department as $d)
                        <div class="slide tablinks" onclick="openCity(event, '{{ $d->id }}')">
                            {{ $d->name }}
                        </div>
                    @endforeach
                </section>
            </div>

            <div class="doctorpg-part-main-box">
                <div id="all" class="tabcontent">
                    <div class="row">
                        @foreach ($doctor as $d)
                            <div class="col-lg-4 col-md-4 col-sm-6 " data-aos="fade-up">
                                <a href="{{ url('workshop/') . '/' . $d->user_id }}" class="denone">
                                    <div class="d-detail-collapse-doctor">
                                        <div class="doctorl-part-box">
                                            <?php
                                            $image = asset('upload/doctor') . '/' . $d->image;
                                            
                                            ?>
                                            <div class="doctorl-dp-img doctorl-dp-img-1"
                                                style="background-image: url('<?= $image ?>')"></div>

                                            <div class="doctorl-part-detail">
                                                <h4>{{ ucwords(strtolower($d->name)) }}</h4>
                                                <p>Event Date:{{ $d->created_at->diffForHumans() }}</p>
                                                <div class="book_appointment_doctor">
                                                    <button>Book Event</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
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
