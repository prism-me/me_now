<div class="about_tiles" >
    <div class="global-heading mb-4">
        <h2>{{$women[3]['title']}}</h2>
        <p>{!! ($women[3]['description']) !!}
        </p>
    </div>
    <div class="row">

        <div class="col-md-4" data-aos="zoom-in">
            <div class="single-tile packages_women">
                <div class="inner-single-title">
                    {{-- <img src="{{ asset('front/img/about-icon-1.png') }}" alt=""> --}}
                    <h4 class="text-center">
                        {{$women[4]['title']}}
                    </h4>
                    {!!$women[4]['description']!!}
               
                    <a  href="https://api.whatsapp.com/send/?phone=00971565553483" class="btn btn-primary get-in-touch-button"
                        >{{ __('Book Now') }}</a>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in">
            <div class="single-tile middle packages_women">
                <div class="inner-single-title">
                    {{-- <img src="{{ asset('front/img/about-icon-2.png') }}" alt=""> --}}
                    <h4 class="text-center">
                       {{$women[5]['title']}}
                    </h4>
                    {!!$women[5]['description']!!}
                 
                    <a  href="https://api.whatsapp.com/send/?phone=00971565553483" class="btn btn-primary get-in-touch-button"
                        >{{ __('Book Now') }}</a>
                </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in">
            <div class="single-tile packages_women">
                <div class="inner-single-title">
                    {{-- <img src="{{ asset('front/img/about-title-1.png') }}" alt=""> --}}
                    <h4 class="text-center">
                      {{$women[6]['title']}}

                    </h4>
                    {!! $women[6]['description'] !!}
                    
                    <a  href="https://api.whatsapp.com/send/?phone=00971565553483" class="btn btn-primary get-in-touch-button"
                        >{{ __('Book Now') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>