@extends('front.layout')
@section('title')
    {{ __('messages.Doctor Details') }}
@stop
@section('content')
    <div class="d-detailpg-main-box">
        <div class="container-fluid">
            <div class="d-detailpg-part-main-box">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        @if (Session::get('message'))
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-5">
                                <?php if ($doctor->image) {
                                    $image = $doctor->image;
                                } else {
                                    $image = asset('upload/profile/profile.png');
                                }
                                ?>
                                <div class="doctor-detail-img-box" style="background-image: url('<?= $image ?>')">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="doctor-detail-main-box">
                                    <h4>{{ $doctor->name }}</h4>
                                    <h6>{{ $doctor->designation }}</h6>
                                    <span>
                                        <?php
                           $arr = explode(".", $doctor->ratting);
                           
                           if (!empty($arr[0])) {
                               $i = 0;
                               if (isset($arr[0])) {
                                   for ($i = 0; $i < $arr[0]; $i++) {
                                       echo '<i class="fas fa-star"></i>';
                                   }
                               }
                               if (isset($arr[1])) {
                                   $remaing = 5 - $i;
                                   for ($j = 0; $j < $remaing; $j++) {
                                       echo '<i class="fas fa-star doctor-review-s-color"></i>';
                                   }
                               } else {
                                   $remaing = 5 - $i;
                                   for ($j = 0; $j < $remaing; $j++) {
                                       echo '<i class="fas fa-star doctor-review-s-color"></i>';
                                   }
                               }
                               if ($i == 0) { ?>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <?php }
                           } else {
                                ?>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <?php
                           }
                           ?>
                                        <h3>( {{ $doctor->total_ratting }} {{ __('messages.Rating') }} )</h3>
                                    </span>
                                    <p>{{ $doctor->about_us }}</p>

                                    <div class="appo-btn-main-box">

                                        <button data-toggle="modal"
                                            data-target="#appointmentModal">{{ __('messages.Make an appointment') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doctorpg-tab-mainbox doctorpg-tab-mainbox">
                            <section class="customer-logos slider tab">
                                <div class="slide tablinks" id="defaultOpen" onclick="openCity(event, 'aboutdoctor')">
                                    {{ __('messages.Experience') }}
                                </div>
                                <div class="slide tablinks" onclick="openCity(event, 'services')">
                                    {{ __('messages.Service') }}
                                </div>
                                <div class="slide tablinks" onclick="openCity(event, 'addreview')">
                                    {{ __('messages.Add review') }}
                                </div>
                            </section>
                        </div>
                        <div id="aboutdoctor" class="tabcontent">
                            <div class="dd-tab-part-mbox">
                                <div class="global-part-heading global-heading">
                                    {{-- <h2>Experience</h2> --}}
                                    <div>{!! $doctor->description !!}</div>
                                </div>
                            </div>
                        </div>
                        <div id="services" class="tabcontent">
                            <div class="dd-tab-part-mbox">
                                <div class="global-part-heading global-heading">
                                    {{-- <h2>{{ __('messages.Service') }}</h2> --}}
                                    <?php $data = explode(',', $doctor->service); ?>
                                    <ul class="service-doctor">
                                        @foreach ($data as $value)
                                            <li>{{ $value }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="addreview" class="tabcontent">

                            <div class="dd-tab-part-mbox">
                                <div class="global-part-heading global-heading dcotors-heading-effect">
                                    {{-- <h2>{{ __('messages.Add review') }}</h2> --}}
                                    <span id="loginerrorreview"></span>
                                    <form action="/{{ Session::get('locale') }}/addreview" method="post">
                                        {{ csrf_field() }}

                                        <input type="hidden" name="doctor_id" value="{{ $doctor->slug }}">
                                        <div class="yourrating-main-box">
                                            <h5>{{ __('messages.Your rating') }}</h5>
                                            <span class="star-rating">
                                                <input type="radio" id="5-stars" name="ratting" value="5" />
                                                <label for="5-stars" class="star"><i class="fas fa-star"></i></label>
                                                <input type="radio" id="4-stars" name="ratting" value="4" />
                                                <label for="4-stars" class="star"><i class="fas fa-star"></i></label>
                                                <input type="radio" id="3-stars" name="ratting" value="3" />
                                                <label for="3-stars" class="star"><i class="fas fa-star"></i></label>
                                                <input type="radio" id="2-stars" name="ratting" value="2" />
                                                <label for="2-stars" class="star"><i class="fas fa-star"></i></label>
                                                <input type="radio" id="1-star" name="ratting" value="1" />
                                                <label for="1-star" class="star"><i class="fas fa-star"></i></label>
                                            </span>
                                        </div>
                                        <div class="yourrating-main-box">
                                            <h5>{{ __('messages.Name') }}</h5>

                                            <input name="name" class="form-control review" required /><br>

                                            <h5>{{ __('messages.E-Mail') }}</h5>

                                            <input name="email" class="form-control review" required /><br>
                                            <h5>{{ __('messages.Review') }}</h5>

                                            <textarea id="messages" name="review" required=""></textarea>
                                            <div class="appo-btn-main-box">
                                                <button type="submit">{{ __('messages.Submit') }}</button>

                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>

                        </p>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="d-detail-emergency-mainbox">
                            <img src="{{ asset('front/img/emergency.png') }}">
                            <p>{{ __('messages.Contact Me Now') }}</p>
                            <h4><a href="tel:+971 4 239 8448"> {{ $doctor->phone_no }}</a></h4>
                        </div>
                        <div class="d-detail-emergency-mainbox">
                            <img src="{{ asset('front/img/mailoutline.png') }}">
                            <p>{{ __('messages.Email address') }}</p>
                            <h4><a href="mailto:{{ $doctor->email }}">{{ $doctor->email }}</a></h4>
                        </div>
    
                    </div>

                </div>
            </div>
        </div>
        @if (count($review) > 0)
            <div class="testimonial-main-box">
                <div class="container-fluid">
                    <div class="global-heading">
                        <h2>Client’s Reviews</h2>
                        <p>See what our clients have to say about the Me Now Center and our
                            mental health services</p>
                    </div>
                    <div class="testimonial-part-main-box">
                        <div class="owl-carousel testimonial-carousel">
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
                                                    <img src="{{ $r->img }}" class="testimonial-profile-img">
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
        @endif
    </div>
    @stop

    @section('footer')

        <script type="text/javascript" src="{{ asset('js/front.js') }}"></script>

    @endsection
