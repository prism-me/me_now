@extends('front.layout')
@section('title')
    {{ __('messages.Department') }}
@stop
@section('content')
    <div class="departmentpg-main-box_main" style="background-image : linear-gradient(#fceeee8a, #22202087) ,url({{ $current->banner_image }}) ">


        <div class="service_caption">
            <h2>{{ $current->name }}</h2>
            <br />
            <button type="submit" class="btn-hover color-9" data-toggle="modal" data-target="#appointmentModal">Consult with
                Us</button>
        </div>
    </div>
    <div class="container-fluid">
        <div class="global-heading">
            {{-- @dd($department) --}}
            <h2>{{ $current->name }}</h2>
        </div>
        <div class="services-content">{!! $current->description !!}</div>
        <div class="department-part-main-box">
            <div class="row">
                @if (count($departmentService) > 0)


                    @foreach ($departmentService as $service)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="department-part-box">
                                <div class="department-part-img">
                                    <img src="{{ $service->img }}">
                                </div>
                                <div class="text-detail-box sub-services-list">
                                    <h4>{{ $service->name }}</h4>

                                    <p>{{ $service->excerpt }}</p>

                                    <a class="btn-hover color-9"
                                        href="{{ url('services') . '/' . $serviceSlug . '/' . $service->slug }}">Read
                                        More</a>
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
