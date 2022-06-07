@extends('front.layout')
@section('title')
    {{ __('messages.Workshops') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="workshop_wrapper">
        <div class="banner-img">
            <img src="{{ @$workshop->banner_img }}" alt="" class="img-fluid">
        </div>
        <div class="meta_content">
            <div class="meta1"> <b>Date:</b>&nbsp;{{ $workshop->event_date }}</div>
            {{-- <div class="meta1"> <b>Time</b> : 6:00 pm to 7:00 pm </div> --}}
            <div class="meta1"> <b>Event Type:</b>&nbsp;{{ ucfirst($workshop->event_type) }}</div>
        </div>
        <div class="form-group">
            <div class="col-md-7">
        
                <h3>{{ $workshop->title }}</h3>
                <p>
                    {!! $workshop->short_description !!}
                </p>
                <p>
                    {{ $workshop->description }}
                </p>
                <div class="facilitated">
                    {{-- <h4>Facilitated by</h4> --}}
                    <div class="content">
                        <img src="https://menow.b-cdn.net/images/d1-1-165390457334.jpg" class="img-circle"
                            alt="profile">
                        <h4>Dr. Aleksandra Shumar</h4>
                        <p><span>Life Coaching Expert</span></p>
                    </div>
                </div>

                <span class="workshop-share"><b>Share:</b></span>
                {!! $social !!}


                {{-- <a
                    href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8080/{{$workshop->slug }}&picture={{ $workshop->featured_img }}&title={{ $workshop->title }}&quote={!! $workshop->short_description !!}">Fb</a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fstackoverflow.com%2Fq%2F20956229%2F1101509&picture=http%3A%2F%2Fwww.applezein.net%2Fwordpress%2Fwp-content%2Fuploads%2F2015%2F03%2Ffacebook-logo.jpg&title=A+nice+question+about+Facebook&quote=Does+anyone+know+if+there+have+been+recent+changes+which+could+have+suddenly+stopped+this+from+working%3F&description=Apparently%2C+the+accepted+answer+is+not+correct.">Stack</a> --}}
            </div>
        </div>

        <div class="container-fluid">

            {{-- <div class="banner-img"></div> --}}

            {{-- <div class="meta_content">
                <div class="meta1"> <b>Date: </b>&nbsp;{{ $workshop->event_date }}</div>
                <div class="meta1"> <b>Event Type: </b>&nbsp;{{ ucfirst($workshop->event_type) }}</div>
            </div> --}}
            <div class="row workshop-inner-wrapper global-heading">
                <div class="col-md-7">

                    <h2 class="text-left">{{ $workshop->title }}</h2>
                    <div class="text-justify">
                        {!! $workshop->description !!}
                    </div>

                </div>
                <div class="col-md-5">

                    <div class="header-appo-main-box ">
                        <h1>{{ __('messages.Book Now!') }}</h1>
                        @if (Session::get('message'))
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                        <span id="loginerrorreview"></span>
                        <form action="{{ url('workshop-booking') }}" method="post">
                            {{ csrf_field() }}
                            <div class="appo-input-main-box">
                                <input type="hidden" name="price" value="{{ $workshop->price }}">
                                <input type="hidden" name="name" value="{{ $workshop->title }}">
                                {{-- <label class="text-sm text-gray-500">Number of attendees? <span
                                        class="text-red-500">*</span></label>
                                <input type="number" name="attendees" min="1" max="5" required value="1"><br><br> --}}
                                <input type="text" required name="first_name" id="name" placeholder="First Name">
                                <input type="text" required name="last_name" id="name" placeholder="Last Name">
                                <input type="text" required name="email" id="email" placeholder="Email"
                                    class="appo-right-input">
                                <input type="text" required name="phone_number" id="phone_no" placeholder="Phone Number">
                                <select name="dob" id="">
                                    <option value="0">Select Date</option>
                                    <option value="12-01-2022">30 May 2022</option>
                                    <option value="11-01-2022">03 September 2022</option>
                                </select>
                                <select name="time" id="">
                                    <option value="0">Select Time</option>
                                    <option value="4:00">4:00 PM</option>
                                    <option value="6:00">6:00 PM</option>
                                </select>

                                <textarea type="text" required name="message" id="message_workshop" placeholder="Your Message"></textarea>
                            </div>
                            <div class="appo-btn-main-box">
                                @if (Auth::id())
                                    <button type="submit">{{ __('messages.Book Now') }}</button>
                                @else
                                    <button type="button" onclick="changehiddenstatus()" data-toggle="modal"
                                        data-target="#myModal">{{ __('messages.Book Now') }}</button>
                                @endif

                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

@stop
@section('footer')
    <script>
        // $(document).ready(function() {

        //     $(".workshop-banner").hover(function() {

        //         $('.workshop_inner_overlay').css({'display' : 'block'});
        //         // $('.workshop_inner_overlay').attr("data-aos", "fade-left");

        //     }, function() {

        //         $('.workshop_inner_overlay').css({'display' : 'none'});
        //         $(this).attr("data-aos", "");

        //     });
        // });

        AOS.init();
    </script>
@stop
