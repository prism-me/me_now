<div class="services-main-box" data-aos="fade-up" data-aos-duration="3000">
    <div class="container-fluid">
        <div class="services_home_container text-center global-heading">
            <h2 class="">Our Services</h2>
            <p class="pb-5">At Me Now, we are passionate about helping all those suffering from mental illnesses. Our licensed and highly qualified practitioners provide a variety of therapeutic treatments, including holistic therapies, Tomatis Listening Programs, and body therapies to help with mental and physical wellness. To begin your journey to well-being, speak with one of our Practitioners.


            </p>
        </div>
        <div class="services-left-part">
            <div class="left-part-detail">
                <h2>{{ $home[1]['title'] }} </h2>
                <p class="serviceContent">{!! $home[1]['description'] !!}</p>
                <div class="services-btn-main-box">
                    <a href="{{ url('about') }}" class="btn-hover color-9">About Us</a>
                </div>
                <div class="left-triangle">
                </div>
            </div>
        </div>
        <div class="services-right-part">

            <div class="row">

                @if (count($department) > 0)
                    <?php $i = 0; ?>
                    @foreach ($department as $s)
                        {{-- @if ($i < 6) --}}
                        <div class="col-md-4 col-sm-6" data-aos="zoom-in">
                            @if ($i % 2 == 0)
                                <div class="services-part-box services-part1-box hover-services">
                                @else
                                    <div class="services-part-box services-part2-box hover-services">
                            @endif

                            <img src="{{ $s->image }}">
                            <div class="text-detail-box">
                                <h4><a href="{{ url('services') . '/' . $s->slug }}">{{ $s->name }}</a>
                                </h4>
                                <div class="services_overlay">
                                    <div class="services_content">
                                        <h4><a href="{{ url('services') . '/' . $s->slug }}">{{ $s->name }}</a>
                                        </h4>
                                        <p>{{ $s->short_description }}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
            </div>
            {{-- @endif --}}

            <?php $i++; ?>
            @endforeach
            @endif

            {{-- @dd($rooms) --}}
            @if (count($rooms) > 0)
                <?php $cc = 0; ?>
                @foreach ($rooms as $room)
                    <div class="col-md-4 col-sm-6" data-aos="zoom-in">
                        @if ($cc % 2 == 0)
                            <div class="services-part-box services-part1-box hover-services">
                            @else
                                <div class="services-part-box services-part2-box hover-services">
                        @endif
                        <img src="{{ $room->icons }}">
                        <div class="text-detail-box">
                            <h4><a href="{{ url('rooms/') . '/' . $room->slug }}">{{ $room->title }}</a>
                            </h4>
                            <div class="services_overlay">
                                <div class="services_content">
                                    <h4><a href="{{ url('rooms/') . '/' . $room->slug }}">{{ $room->title }}</a>
                                    </h4>
                                    <p>{{ $room->excerpt }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
        </div>
        <?php $cc++; ?>
        @endforeach
        @endif

    </div> {{-- end row --}}
</div>{{-- end services right part --}}

</div>{{-- end container fluid part --}}
</div> {{-- end services section part --}}
