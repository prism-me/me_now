@extends('front.layout')
@section('title')
    {{ __('messages.Department') }}
@stop
@section('content')
    <div class="departmentpg-main-box">
        <div class="container">
            <div class="global-heading">
                {{-- @dd($department) --}}
                <h2>{{$current->name}}</h2>
                <div class="services-content">{!!$current->description !!}</div>
            </div>
            <div class="department-part-main-box">
                <div class="row">
                    @if (count($departmentService  ) > 0)
                        
                   
                            @foreach ($departmentService as $service)

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="department-part-box">
                                        <div class="department-part-img">
                                            <img src="{{ $service->img }}">
                                        </div>
                                        <div class="text-detail-box">
										<h4>{{ $service->name }}</h4>
                                            <p>{{ substr($service->short_description, 0, 75) }}</p>
                                        </div>
                                        <div class="department-viewd-btn services-btn-main-box">
                                            <a
                                                href="{{ url('services') . '/' . $serviceSlug .'/' . $service->slug }}">{{ __('messages.View Detail') }}</a>
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
