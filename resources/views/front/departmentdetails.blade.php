@extends('front.layout')
@section('title')
    {{ __('messages.Department Details') }}
@stop
@section('content')
    <?php $res_curr = explode('-', $setting->currency); ?>
    <div class="d-detailpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2>{{ $current->name }}</h2>
                <p>{{ __('messages.The life so short, the craft so long to learn') }}</p>
            </div>
            <div class="d-detailpg-part-main-box">
                <div class="row">
                    <div class="col-lg-9 col-md-12">

                        <div class="d-detail-main-box">
                            <div class="global-part-heading global-heading">
                                {{-- <h3>{{ __('messages.About Department') }}</h3> --}}
                                {{-- <p>{{ strip_tags($departmentdetails->description) }}</p> --}}
                                <p>{!! $current->description !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        {{-- <div class="d-detail-emergency-mainbox">
							<img src="{{ $departmentdetails->image}}">
							<p>{{__('messages.Emergency Number')}}</p>
							<h4>{{$departmentdetails->emergency_no}}</h4>
						</div> --}}
                        @if (count($subServices) > 1)
                            <div class="department_wrappers">
                                <ul>
                                    @php $i=1 @endphp
                                    @foreach ($subServices as $dp)
                                        <li @php
                                            echo $current->slug === $dp->slug ? "class='active-subservice'" : '';
                                            echo count($subServices) === $i ? "style='border-bottom:0px'" : ' ';
                                            
                                        @endphp><a class="dropdown-item"
                                                href="{{ url('services') . '/' . $departmentdetails[0]->slug . '/' . $dp->slug }}">{{ $dp->name }}</a>
                                        </li>
                                        @php $i++ @endphp
                                    @endforeach

                                </ul>
                            </div>
                        @endif
                        <div class="d-detail-collapse-doctor">
                            <div class="accordion indicator-plus-before round-indicator" id="accordionH"
                                aria-multiselectable="true">
                                <div class="card m-b-0">
                                    {{-- @dd($departmentdetails[0]->dcotor); --}}
                                    @if (count($doctors) > 0)
                                        <?php $i = 0; ?>

                                        @foreach ($doctors as $doc)
                                            <div class="card-header collapsed" role="tab" id="heading{{ $i }}"
                                                href="#collapse{{ $i }}"
                                                data-parent="#accordion{{ $i }}" aria-expanded="false"
                                                aria-controls="collapse{{ $i }}"
                                                onclick="changedoctorblog('{{ $i }}')">
                                                <a class="card-title">
                                                    {{ ucwords(strtolower($doc->name)) }}
                                                </a>
                                            </div>
                                            @if ($i == 0)
                                                <div class="collapse in" id="collapse{{ $i }}"
                                                    role="tabpanel" aria-labelledby="heading{{ $i }}"
                                                    aria-expanded="true">
                                                @else
                                                    <div class="collapse" id="collapse{{ $i }}"
                                                        role="tabpanel" aria-labelledby="heading{{ $i }}"
                                                        aria-expanded="false">
                                            @endif

                                            <div class="card-body">
                                                <div class="doctorl-part-box">
                                                    <?php
                                                    if ($doc->image) {
                                                        $image = $doc->image;
                                                    } else {
                                                        $image = asset('public/upload/profile/profile.png');
                                                    }
                                                    ?>
                                                    <div class="doctorl-dp-img doctorl-dp-img-1"
                                                        style="background-image: url('<?= $image ?>')"></div>
                                                    <div class="doctor-detail-part1">
                                                        <div class="doctorl-part-detail">
                                                            <h4>{{ $doc->name }}</h4>
                                                            <p class="departdoc">{{ substr($doc->about_us, 0, 50) }}
                                                            </p>
                                                        </div>
                                                        {{-- <div class="icons-images">
                                                            <span class="facebook-doctorl">
                                                                <a
                                                                    href="{{ isset($doc->facebook_id) ? $doc->facebook_id : '' }}"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </span>
                                                            <span class="twitter-doctorl">
                                                                <a
                                                                    href="{{ isset($doc->twitter_id) ? $doc->twitter_id : '' }}"><i
                                                                        class="fab fa-twitter"></i></a>
                                                            </span>
                                                            <span class="gp-doctorl">
                                                                <a
                                                                    href="{{ isset($doc->google_id) ? $doc->google_id : '' }}"><i
                                                                        class="fab fa-google-plus-g"></i></a>
                                                            </span>
                                                            <span class="instagram-doctorl">
                                                                <a
                                                                    href="{{ isset($doc->instagram_id) ? $doc->instagram_id : '' }}"><img
                                                                        src="{{ asset('front/img/instagram.png') }}"></a>
                                                            </span>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                <?php $i++; ?>
                                @endforeach
                                @endif
                                <input type="hidden" id="avilabledoctor" value="{{ $i }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@stop
