<div class="services-main-box" data-aos="fade-up" data-aos-duration="3000">
    <div class="container-fluid">
        <div class="services_home_container text-center global-heading">
            <h2 class="">Our Services</h2>
            <p class="pb-5">We provide expert guidance and treatment for addictions and mental health concerns
                using both innovative and classic approaches.

            </p>
        </div>
        <div class="services-left-part">
            <div class="left-part-detail">
                <h2>Even when you're at your worst, you deserve the best. </h2>
                <p>We provide effective and evidence-based therapy for a variety of mental health conditions in a safe
                    and pleasant environment at Me Now.</p>
                <div class="services-btn-main-box">
                    <a href="{{ url('allfacilites') }}"
                        class="btn-hover color-9">{{ __('messages.Learn More') }}</a>
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
                                <div class="services-part-box services-part1-box">
                                @else
                                    <div class="services-part-box services-part2-box">
                            @endif
                            <img src="{{ $s->image }}">
                            <div class="text-detail-box">
                                <h4><a href="{{ url('services') . '/' . $s->slug }}">{{ $s->name }}</a>
                                </h4>
                                <p>{{ substr($s->short_description, 0, 70) }}... <a
                                        href="{{ url('services') . '/' . $s->slug }}">Read More</a>
                                </p>
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
                            <div class="services-part-box services-part1-box">
                            @else
                                <div class="services-part-box services-part2-box">
                        @endif
                        <img src="{{ $room->icons }}">
                        <div class="text-detail-box">
                            <h4><a href="{{ url('rooms/') . '/' . $room->slug }}">{{ $room->title }}</a>
                            </h4>
                            <p>{{ substr($room->excerpt, 0, 70) }}... <a
                                    href="{{ url('rooms/') . '/' . $room->slug }}">Explore More</a>
                            </p>
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