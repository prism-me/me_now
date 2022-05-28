@extends('front.layout')
@section('title')
    {{ __('messages.Blog List') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="blogpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2>{{ __('messages.Frequently Asked Questions') }}</h2>
                <p>{{ __('messages.Talent wins games, but teamwork and intelligence win championships') }}</p>
            </div>
            <div class="faq my-5">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header collapsed " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                            <span class="title">Collapsible Group Item #1 </span>
                            <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            <span class="title">Collapsible Group Item #2</span>
                            <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false">
                            <span class="title">Collapsible Group Item #3</span>
                            <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
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

@push('scripts')
    <script>
        $('#collapseThree').on('hidden.bs.collapse', function() {
            // do something...lo

            console.log('sdf');
        })
    </script>
@endpush
