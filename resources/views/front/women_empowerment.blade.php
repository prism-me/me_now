@extends('front.layout')
@section('title')
    {{ __('messages.Workshops') }}
@stop
@section('loader')
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
@stop
@section('content')
    <div class="container">
        <div class="global-heading">
            <h2>Me Now Empowers Women</h2>
            <p>At Me Now Center, we're doing our bit to support women and help them achieve their full potential. It is a
                place where women can feel confident and fulfilled, physically, mentally, and emotionally. We are no less
                than a family dedicated to supporting each other and building a community of like-minded, empowered women.
                Me Now has special memberships for women that come with unlimited benefits including discounts on
                facilities, free workshops, and much more.

            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('front/img/woman-empowerment.jpg') }}" alt="" class="img-fluid">

                </div>
                <div class="col-md-7">
                    <div class="who_we_are_cotent">
                        <h2>What Our Membership Holders Get</h2>
                        {{-- <h2>We Help To Get Solutions</h2> --}}
                        <div class="women-empowerment-">
                            <p>We utilize a custom-made strategy known as the '5 P Model’ that stands for five novel
                                approaches
                                to empower women:</p>
                            <ul>
                                <li>Proud to be a woman with dignity, strength, and courage.</li>
                                <li>Powerful to stand up for and with yourself and then stand up for your families.</li>
                                <li>Preciousness that comes from the face you see in the mirror.</li>
                                <li>Peace which comes with your smile.</li>
                                <li>Potential which ss endless, do what you were created to do.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="about_tiles">
            <div class="global-heading mb-4">
                <h2>Our Membership Plans</h2>
                <p>Me Now has three different membership plans that come with different and distinct benefits. You can opt
                    for a 1-month membership or go for a tri-monthly or 6-month membership. Each membership plan comes with
                    its own advantages. Explore the plans to know more.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-tile packages_women">
                        <div class="inner-single-title">
                            {{-- <img src="{{ asset('front/img/about-icon-1.png') }}" alt=""> --}}
                            <h4 class="text-center">
                                1 Month Membership
                            </h4>
                            <ul>



                                <li><span class="fa fa-check"></span> Free access to all Me Now workshops</li>
                                <li><span class="fa fa-check"></span> 15% off on all private sessions</li>
                                <li><span class="fa fa-check"></span> Access to anger release room</li>
                                <li><span class="fa fa-check"></span> Free beverages from the coffee corner</li>
                                <li><span class="fa fa-check"></span> Access to the center’s liberary</li>
                                <li><span class="fa fa-check"></span> Participation in all the Me Now events</li>
                                <li><span class="fa fa-check"></span> Unlimited networking & socializing opportunities
                                </li>
                                <li><span class="fa fa-check"></span> Be a part of an exclusive group, always ready to
                                    help and be there for each other.</li>


                            </ul>
                            <button class="btn btn-primary get-in-touch-button" data-toggle="modal"
                                data-target="#appointmentModal">{{ __('Book Now') }}</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile middle packages_women">
                        <div class="inner-single-title">
                            {{-- <img src="{{ asset('front/img/about-icon-2.png') }}" alt=""> --}}
                            <h4 class="text-center">
                                3 Months Membership
                            </h4>
                            <ul>

                                <li><span class="fa fa-check"></span> 10% discount on all the center’s facilities</li>
                                <li><span class="fa fa-check"></span> Free access to all Me Now workshopsM</li>
                                <li><span class="fa fa-check"></span> Access to anger release room</li>
                                <li><span class="fa fa-check"></span> Free beverages from the coffee corner</li>
                                <li><span class="fa fa-check"></span> Access to the center’s liberary</li>
                                <li><span class="fa fa-check"></span> Participation in all the Me Now events</li>
                                <li><span class="fa fa-check"></span> Unlimited networking & socializing opportunities
                                </li>
                                <li><span class="fa fa-check"></span> Be a part of an exclusive group, always ready to
                                    help and be there for each other.</li>



                            </ul>
                            <button class="btn btn-primary get-in-touch-button" data-toggle="modal"
                                data-target="#appointmentModal">{{ __('Book Now') }}</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile packages_women">
                        <div class="inner-single-title">
                            {{-- <img src="{{ asset('front/img/about-title-1.png') }}" alt=""> --}}
                            <h4 class="text-center">
                                6 Months Membership
                            </h4>
                            <ul>
                                <li><span class="fa fa-check"></span> Get 1 month free</li>
                                <li><span class="fa fa-check"></span> Get 5 free sessions of Holistinc Therapy or hypnosis
                                    therapy sessions</li>
                                <li><span class="fa fa-check"></span> 10% discount on all the center’s facilities</li>
                                <li><span class="fa fa-check"></span> Free access to all Me Now workshops</li>
                                <li><span class="fa fa-check"></span>  Access to anger release room</li>
                                <li><span class="fa fa-check"></span> Free beverages from the coffee corner</li>
                                <li><span class="fa fa-check"></span> Access to the center’s liberary</li>
                                <li><span class="fa fa-check"></span> Participation in all the Me Now events</li>
                                <li><span class="fa fa-check"></span> Unlimited networking & socializing opportunities
                                </li>


                            </ul>
                            <button class="btn btn-primary get-in-touch-button" data-toggle="modal"
                                data-target="#appointmentModal">{{ __('Book Now') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="about-content-widget">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <img src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg"
                        class="img-fluid" alt="">
                </div>
                <div class="col-md-7 col-sm-12">
                    <p class="text-margin">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                    <div class="row text-section-about">
                        <div class="col-md-6 col-sm-12">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type
                                and scrambled it to make a type specimen book. </p>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type
                                and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>

    <div class="container">
        <div class="global-heading">
            <h2>{{ __('messages.Frequently Asked Questions') }}</h2>
            <p>{{ __('messages.Talent wins games, but teamwork and intelligence win championships') }}</p>
        </div>
        <div class="faq my-5">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true">
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









@stop
@section('footer')
    <script>
        AOS.init();
    </script>
@stop
