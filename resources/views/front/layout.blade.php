<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <title id="changeunreadcount">@yield('title')</title>
    @yield('meta_title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="shortcut icon" href="{{ asset('App_icon.png') }}">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:title" content="{{ __('messages.site name') }}" />
    <meta property="og:image" content="{{ asset('App_icon.png') }}" />
    <meta property="og:image:width" content="250px" />
    <meta property="og:image:height" content="250px" />
    <meta property="og:site_name" content="{{ __('messages.site name') }}" />
    <meta property="og:description" content="{{ __('messages.meta_description_admin') }}" />
    <meta property="og:keyword" content="{{ __('messages.meta_keyword') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/custom-style.css') }}">

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    @if (isset($setting->is_rtl) && $setting->is_rtl == '0')
        <link rel="stylesheet" type="text/css" href="{{ asset('front/css/rtl-style.css?v=5r12') }}">
    @else
        <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css?v=45d') }}">
    @endif
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://rawgit.com/OwlCarousel2/OwlCarousel2/develop/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/responsive.css?v=ftgyert4') }}">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <input type="hidden" id="authid" value="{{ Auth::id() }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> --}}
    {{-- <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
  /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
</head>

<body onload="gettimezone()" class="animated fadeIn">
    {{-- @include('front.firebase_config'); --}}
    {{-- @include('front.cssclass'); --}}
    {{-- @yield('loader') --}}


    <div class="header-pinned fixed-top" id="header">
        {{-- <div class="top-header">
            <div class="container-fluid">
                <div class="top-left-text">
                    <p>{{ isset($setting->working_day) ? $setting->working_day : Session::get('working_day') }}</p>
                </div>
                <div class="top-right-text">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Language</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>English</option>
                                <option>Arabic</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
        <div class="container-fluid">
            <div class="navigation-custom-single">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{-- @if (isset($setting->logo)) --}}
                        {{-- <img src="{{ asset('upload/images') . '/' . $setting->logo }}" class="logo-img"> --}}
                        <img src="{{ asset('front/img/logo.png') }}" class="logo-img">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#CollapsingNavbar"
                        aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                        &#9776;
                    </button>
                    <div class="collapse navbar-collapse navbar-toggleable-sm" id="CollapsingNavbar">
                        <ul class="nav navbar-nav ml-auto">
                            {{-- <li class="nav-item">
			        			<a class="nav-link" href="{{url('/')}}">{{ __('messages.Home' )}}</a>
			  				</li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('about-us') }}">{{ __('messages.About') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Services </a>
                                <ul class="dropdown-menu services-dropdown">


                                    @foreach ($department as $departments)
                                        <li><a class="dropdown-item"
                                                href="{{ url('services') . '/' . $departments->slug }}">
                                                {{ $departments->name }} </a>

                                            @if (!blank($departments->service))
                                                <ul class="submenu dropdown-menu">
                                                    @foreach ($departments->service as $subdepartment)
                                                        <li><a class="dropdown-item"
                                                                href="{{ url('services') . '/' . $departments->slug . '/' . $subdepartment->slug }}">
                                                                {{ $subdepartment->name }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                    @foreach ($rooms as $room)
                                        <li><a class="dropdown-item" href="{{ url('rooms') . '/' . $room->slug }}">
                                                {{ $room->title }} </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('doctorlist') }}">Our Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('workshop') }}">{{ trans('messages.Workshops') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('events') }}">{{ __('messages.Events') }}</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#">{{ __('messages.Blog') }}</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('women-empowerment') }}">{{ __('messages.Women Empowerment') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url('special-membership-for-women') }}">{{ __('messages.Become a Member') }}</a>
                            </li>
                            <li class="nav-item book-now-nav">
                                <a class="nav-link btn-hover color-9"
                                    style="color:white !important; width: 132px;padding: 0.5rem !important;"
                                    href="#" data-toggle="modal"
                                    data-target="#appointmentModal">{{ __('Book Now') }}</a>
                            </li>
                            <ul class="navbar-nav ml-auto">
                                @php $locale = session()->get('locale'); @endphp
                                <li class="nav-item dropdown">
                                    {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        Language <span class="caret"></span>
                                    </a> --}}
                                    <a class="dropdown-item" href="{{ url('lang/change?lang=en') }}">English</a>
                                    <a class="dropdown-item" href="{{ url('lang/change?lang=ar') }}">Arabic</a>

                                </li>
                            </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <div class="spacefor-global">
    </div>

    <div class="sticky_buttons">
        <a href="https://wa.me/+971565553483" target="_blank"><img src="{{ asset('front/img/whatsapp.png') }}"
                alt="Whatsapp Action"></a>
        <a href="tel:+97142398448"><img src="{{ asset('front/img/call_now.png') }}" alt="Call Action"></a>
    </div>
    <div class="sticky_bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn-hover color-9" data-toggle="modal"
                        data-target="#appointmentModal">Book Now</button>
                </div>
                <div class="col-3">
                    <a href="tel:+97142398448"><img src="{{ asset('front/img/call_now.png') }}"
                            alt=""></a>
                </div>
                <div class="col-3">
                    <a href="https://wa.me/+971565553483" target="_blank"><img
                            src="{{ asset('front/img/whatsapp.png') }}" alt="Whatsapp Action"
                            class="static_whatsapp_icon"></a>
                </div>
            </div>
        </div>
    </div>
    @yield('content')

    <div class="modal" id="appointmentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="loginmodel">
                        <h2>{{ __('messages.Appointment Now!') }}</h2>
                        <div class="part-form-main-box">
                            <form action="{{ url('bookappoinment') }}" method="post">
                                {{ csrf_field() }}
                                <div class="appo-select-main-box">
                                    <div class="appo-select-box">
                                        <select id="department" required class="dropdown" name="department_id"
                                            onchange="getserviceanddoctor(this.value)">
                                            <option value="" disabled="disabled" selected="selected">-
                                                Select Service</option>
                                            @if (isset($department))
                                                @foreach ($department as $d)
                                                    <option value="{{ $d->id }}">{{ $d->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="appo-select-box11">
                                        <select id="service" class="dropdown appo-select-box" name="service_id">
                                            <option value="" disabled="disabled" selected="selected">-
                                                Select Sub Service</option>

                                            @if (isset($department))
                                                @foreach ($department as $d)
                                                    @if (!empty($d))
                                                        <option value="{{ $d->id }}">{{ $d->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    {{-- <div class="appo-select-box">
                                        <select id="doctors"  class="dropdown" name="doctors">

                                                {{ __('messages.Select Doctors') }}</option>
                                                 @foreach ($doctor as $d)
                                                        <option value="{{ $d->name }}" disabled="disabled" selected="selected">{{ $d->name }}</option>
                                                    @endforeach
                                        </select>
                                    </div> --}}
                                </div>
                                <div class="appo-input-main-box">
                                    <input type="text" required name="name" id="name"
                                        placeholder="{{ __('messages.Enter Your Full Name') }}" value="">
                                    <input type="text" required name="phone_no" id="phone_no"
                                        placeholder="{{ __('messages.Enter Phone number') }}"
                                        class="appo-right-input" value="">
                                    <input type="date" required name="date" id="app_date"
                                        min="<?= date('Y-m-d') ?>" placeholder="dd/mm/yyyy">
                                    <input type="time" required name="time" placeholder="Time"
                                        class="appo-right-input">
                                    <textarea rows="3" required name="messages" placeholder="{{ __('messages.Enter Your Messages') }}"></textarea>
                                </div>
                                <div class="appo-btn-main-box">
                                    <button type="submit"> {{ __('messages.Book Appointment') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('front.instagram_feeds')

    <div class="footer-main-box">
        <div class="container-fluid">
            <div class="footer-part-main-box">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-r1-box">
                            <div class="footer-logo-box">
                                @if (isset($setting->logo))
                                    <img src="{{ asset('front/img/logo.png') }}" class="logo-img">
                                    {{-- <img src="{{ asset('upload/images') . '/' . $setting->logo }}"> --}}
                                @else
                                    <img src="{{ Session::get('logo') }}">
                                @endif

                            </div>
                            <div class="footer-r1-detail">
                                <div class="footer-d1-box">
                                    {{-- <h3>{{ __('messages.About us') }}</h3> --}}
                                    {{-- <p>{{ __('messages.front_about') }}</p> --}}
                                    <p>
                                        With the goal of de-stigmatizing mental illness and providing patients with a
                                        variety of treatment options, we're a group of compassionate, dedicated, and
                                        experienced practitioners who want nothing more than to see "a different you"
                                        walk out the door after working with us.
                                    </p>
                                </div>
                                <div class="footer-d1-box">
                                    <h3>{{ __('messages.Contact Us') }}</h3>
                                    <p><span class="fa fa-phone phone-icon"></span><a
                                            href="tel:+97142398448">{{ isset($setting->phone_no) ? $setting->phone_no : Session::get('phone_no') }}</a>
                                    </p>
                                    <p><span class="fa fa-envelope mail-icon"></span><a
                                            href="mailto:info@menow.me">{{ isset($setting->email) ? $setting->email : Session::get('email') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-r1-box">
                            <div class="footer-r1-detail">
                                <div class="footer-d1-box">
                                    <h3>{{ __('messages.Our Services') }}</h3>
                                    <?php $i = 0; ?>
                                    @if (isset($department))
                                        @foreach ($department as $d)
                                            @if ($i < 5)
                                                <a href="{{ url('services') . '/' . $d->slug }}">{{ $d->name }}
                                                    {{ __('messages.Department') }}</a>
                                                <?php $i++; ?>
                                            @endif
                                        @endforeach
                                    @else
                                        @if (Session::get('departmentlist'))
                                            @foreach (Session::get('departmentlist') as $d)
                                                @if ($i < 5)
                                                    <a href="{{ url('services') . '/' . $d->slug }}">{{ $d->name }}
                                                        {{ __('messages.Department') }}</a>
                                                    <?php $i++; ?>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-r1-box">
                            <div class="footer-r1-detail">
                                <div class="footer-d1-box">
                                    <h3>{{ __('messages.Helpful links') }}</h3>

                                    <a href="{{ url('about-us') }}">{{ __('messages.About') }}</a>
                                    <a href="{{ url('events') }}">{{ __('messages.Events') }}</a>
                                    <a href="{{ url('workshop') }}">{{ trans('messages.Workshops') }}</a>
                                    {{-- <a href="{{ url('blog') }}">{{ __('messages.Blog') }}</a> --}}
                                    <a href="{{ url('faqs') }}">{{ __('messages.FAQs') }}</a>
                                    <a href="{{ url('contact-us') }}">{{ __('messages.Contact Us') }}</a>
                                    <a
                                        href="{{ url('termcondition') }}">{{ __('messages.Terms & Condition') }}</a>
                                    <a
                                        href="{{ url('women-empowerment') }}">{{ __('messages.Women Empowerment') }}</a>
                                    <a href="{{ url('privacypolicy') }}">{{ __('messages.Privacy Policy') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="footer-r1-box">
                            <div class="footer-r1-detail">
                                <div class="footer-d1-box">
                                    <h3>{{ __('messages.Address') }}</h3>
                                    <p><a href="https://maps.app.goo.gl/4DJn6E47x4QUAW5S6">24-32 - 5 B St - Jumeirah -
                                            Jumeirah 1 - Dubai, UAE</a>
                                    </p>
                                </div>
                                <div class="footer-d1-box">
                                    <p>{{ __('messages.Subscribe More Info') }}</p>
                                    <form>
                                        <div class="inputWithIcon">
                                            <input type="text" name="subscribeemail" id="subscribeemail"
                                                placeholder="Email">
                                            <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                                        </div>
                                        <div class="subcribe-button-box">
                                            <button type="button"
                                                onclick="savesubscribe()">{{ __('messages.Subscribe') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-part2-main-box">
                <div class="footer-bottom-main-box">

                    <div class="row my-4">

                        <div class="col-md-9 footer-bottom-left">
                            {{ __('messages.Copyright') }} @ {{ date('Y') }}
                            {{ __('messages.Me Now') }} {{ __('messages.All Right Reserved') }}

                            <span class="privacy_pages">
                                <a href="termcondition">{{ __('messages.Terms of Service') }}</a>

                                <a href="privacypolicy">{{ __('messages.Privacy Policy') }}</a>

                                {{-- <a href="copy-rights">{{ __('messages.Shipping Policy') }}</a> --}}
                            </span>
                        </div>

                        <div class="col-md-3 footer-bottom-right">
                            <a
                                href="https://www.prism-me.com">{{ __('messages.Designed and Managed by Prism') }}</a>

                        </div>

                    </div>



                    {{-- <div class="footer-icon-box">
							<a href="{{isset($setting->facebook_id)?$setting->facebook_id:''}}">
								<i class="fab fa-facebook-f"></i>
							</a>
						</div>
						<div class="footer-icon-box">
							<a href="{{isset($setting->twitter_id)?$setting->twitter_id:''}}">
								<i class="fab fa-twitter"></i>
							</a>
						</div>
						<div class="footer-icon-box">
							<a href="{{isset($setting->google_id)?$setting->google_id:''}}">
								<i class="fab fa-google-plus-g"></i>
							</a>
						</div>
						<div class="footer-icon-box">
							<a href="{{isset($setting->instagram_id)?$setting->instagram_id:''}}">
								<i class="fab fa-instagram"></i>
							</a>
						</div> --}}
                    {{-- <p>{{ date('Y') }} @ {{ __('messages.Company private ltd') }}.</p> --}}
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="is_chat" value="0" />
    {{-- <div id="gdchat-fixed-bottom-right" class="gdchat-fixed-bottom-right ch1">
      	
		@if (isset($chatpage))
			<div class="chat-home-top-mbox ch2">
						@if (Auth::id() && Auth::user()->usertype == '1')
						  <a href="{{url('chatarea/1')}}" data-lp-event="click" class="cha">
						@else
					 	<a href="#" onclick="changehiddenstatus()" data-toggle="modal" data-target="#myModal" data-lp-event="click" class="cha">
						@endif
				<img src="{{asset('upload/doctor_876303.png')}}" class="chimg">
				<span>{{__("messages.Chat with Us")}}</span></a>
			</div>
			<div class="chat-home-bottom-mbox">
				<img src="{{asset('upload/chat.png')}}">
				<span>{{__("messages.We're online")}}</span>
			</div>
		@endif
</div> --}}

    <input type="hidden" id="siteurl" value="{{ url('/') }}">
    <input type="hidden" id="own_url" value="{{ url('/') }}" />
    <input type="hidden" id="soundnotify" value="{{ asset('sound/notification/beltekpar.mp3') }}">
    <input type="hidden" id="site_name_lang" value="{{ __('messages.site name') }}" />
    <input type="hidden" id="loginalert" value="{{ __('messages.Please Login Your Account') }}" />
    <input type="hidden" id="currentusername" value="{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}">
    <input type="hidden" id="mycurrentuser" value="{{ isset(Auth::user()->id) ? Auth::user()->id : '' }}">
    <input type="hidden" id="authprofile"
        value="/profile/{{ isset(Auth::user()->profile_pic) ? Auth::user()->profile_pic : 'profile.png' }}">
    <input type="hidden" id="newsletteralert"
        value="{{ __('messages.Thanks for subscribing we will inform you for Upcoming event') }}">
    <input type="hidden" id="emailreq" value="{{ __('messages.email_required') }}">
    <input type="hidden" id="vaildemail" value="{{ __('messages.vaild_email') }}">
    <input type="hidden" id="rtl" value="{{ isset($setting->is_rtl) ? $setting->is_rtl : '' }}" />
    <input type="hidden" id="pwdreq" value="{{ __('messages.pwdreq') }}">
    <input type="hidden" id="namereq" value="{{ __('messages.namereq') }}">
    <input type="hidden" id="incomming" value="0" />
    <input type="hidden" id="phonereq" value="{{ __('messages.phonereq') }}">
    <input type="hidden" id="confirmpwdreq" value="{{ __('messages.confirmpwdreq') }}">
    <input type="hidden" id="registersuccess" value="{{ __('messages.registersuccess') }}">
    <input type="hidden" id="alreadyemailexiste" value="{{ __('messages.alreadyemailexiste') }}">
    <input type="hidden" id="checkcpwd" value="{{ __('messages.Please Enter Correct Password') }}">
    <input type="hidden" id="mailsend" value="{{ __('messages.mailsend') }}">
    <input type="hidden" id="notfoundemail" value="{{ __('messages.notfoundemail') }}">
    <input type="hidden" id="bothpwdsame" value="{{ __('messages.bothpwdsame') }}">
    <input type="hidden" id="rightimg" value='{{ asset('front/img/left.png') }}' />
    <input type="hidden" id="leftimg" value='{{ asset('front/img/right.png') }}' />
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="https://rawgit.com/OwlCarousel2/OwlCarousel2/develop/dist/owl.carousel.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@iconfu/svg-inject@1.2.3/dist/svg-inject.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.23/moment-timezone-with-data-2012-2022.min.js">
    </script>


    <script src={{ asset('js/share.js') }}></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @yield('footer')
    @stack('scripts')
    <script>
        $(document).on('click', '.dropdown-menu', function(e) {
            e.stopPropagation();
        });

        // make it as accordion for smaller screens
        // if ($(window).width() < 992) {
        //     $('.dropdown-menu a').click(function(e) {
        //         e.preventDefault();
        //         if ($(this).next('.submenu').length) {
        //             $(this).next('.submenu').toggle();
        //         }
        //         $('.dropdown').on('hide.bs.dropdown', function() {
        //             $(this).find('.submenu').hide();
        //         })
        //     });
        // }
    </script>
    {{-- <script type="text/javascript">
  
        var url = "{{ route('changeLang') }}";
    
        $(".changeLang").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });
    
    </script> --}}

</body>

</html>
