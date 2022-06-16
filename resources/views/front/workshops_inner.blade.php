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
            <div class="row no-gutters">
                <div class="col-md-9">
                    <img src="{{ @$workshop->banner_img }}" alt="" class="img-fluid banner workshop-banner">

                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="workshop_inner_overlay" data-aos="fade-left">
                <div class="meta_content">
                    <div class="meta1"><span class="fa fa-chevron-right"></span> <b>Date & Time:
                        </b>&nbsp;
                        @php $event_date = $workshop->event_date; @endphp
                        <select name="date_time" id="" class="form-control" style="color:#000;width:80%;font-size: 13px;
                                padding-left: 7px;">
                            <option value="0">Select Date and Time</option>
                            @foreach ($event_date as $date)
                                <option value="{{ $date }}">{{ date('m/d/Y H:i:s', strtotime($date)) }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="meta1"><span class="fa fa-chevron-right"></span> <b>Time: </b>&nbsp;10:00 AM to
                        11:00 AM </div> --}}
                    <div class="meta1"><span class="fa fa-chevron-right"></span> <b>Workshop Type:
                        </b>&nbsp;{{ ucfirst($workshop->event_type) }}</div>
                    <div class="meta1"><span class="fa fa-chevron-right"></span> <b>Age: </b>&nbsp; Adults (18
                        Yrs+) </div>
                    <div class="meta1"><span class="fa fa-chevron-right"></span> <b>Facilitated by: </b></div>

                </div>
                <div class="facilitated">
                    {{-- <h4>Facilitated by</h4> --}}
                    <div class="content">
                        <img src="{{ $workshop->doctor->image }}" class="img-circle" alt="profile">
                        <h4>{{ $workshop->doctor->name }}</h4>
                        <p><span>{{ $workshop->doctor->designation }}</span></p>
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
            <div class="row workshop-inner-wrapper global-heading" data-aos="zoom-in">
                <div class="col-md-7 col-sm-12 col-12">

                    <h2 class="text-left">{{ $workshop->title }}</h2>
                    <div class="text-justify">
                        {!! $workshop->description !!}
                    </div>

                </div>
                <div class="col-md-5 col-sm-12 col-12">

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
                                @php $event_date = $workshop->event_date; @endphp
                                <select name="date" id="" class="form-control" style="color:#000;width:100%;">
                                    <option value="0">Select Date and Time</option>
                                    @foreach ($event_date as $date)
                                        <option value="{{ $date }}">{{ date('m/d/Y H:i:s', strtotime($date)) }}
                                        </option>
                                    @endforeach
                                </select>
                                <textarea type="text" required name="message" id="message_workshop" placeholder="Your Message"></textarea>
                            </div>
                            <div class="appo-btn-main-box">

                                <button type="submit" >{{ __('messages.Book Now') }}</button>


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
