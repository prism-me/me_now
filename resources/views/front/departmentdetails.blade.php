@extends('front.layout')
@section('title')
    {{ __('messages.Department Details') }}
@stop
@section('content')
    <?php $res_curr = explode('-', $setting->currency); ?>
    <div class="d-detailpg-main-box">
        <div class="department_background" style="background-image : url({{ $current->banner_image }}) ">

        </div>
        <div class="service_caption">
            <h2>{{ $current->name }}</h2>
            <br />
            <button type="submit" class="btn-hover color-9" data-toggle="modal" data-target="#appointmentModal">Consult with
                Us</button>
        </div>
        <div class="container-fluid">
            <div class="d-detailpg-part-main-box">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="d-detail-main-box">

                            <div class="global-part-heading global-heading">
                                <p>{{ $current->short_description }}</p>
                                {{-- <br /> --}}
                                <div class="services-inner-content">{!! $current->description !!}</div>
                            </div>
                        </div>

                        <div class="services-cta mb-5">
                            <p>Learn more about our approach to treating mental health.</p>
                            <button type="submit" class="btn-hover color-9" data-toggle="modal"
                                data-target="#appointmentModal">Consult with
                                Us</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        {{-- <div class="d-detail-emergency-mainbox">
							<img src="{{ $departmentdetails->image}}">
							<p>{{__('messages.Emergency Number')}}</p>
							<h4>{{$departmentdetails->emergency_no}}</h4>
						</div> --}}
                        {{-- @dd($subServices) --}}
                        @if ($subServices)
                            <div class="department_wrappers">
                                <ul>
                                    @php $i=1 @endphp
                                    @foreach ($subServices as $dp)
                                        <li @php
                                            echo $current->slug === $dp->slug ? "class='active-subservice'" : '';
                                            echo count($subServices) === $i ? "style='border-bottom:0px'" : ' ';
                                            
                                        @endphp><a class="dropdown-item"
                                                href="{{ url('services') . '/' . $service_slug . '/' . $dp->slug }}">{{ $dp->name }}</a>
                                        </li>
                                        @php $i++ @endphp
                                    @endforeach

                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@stop
