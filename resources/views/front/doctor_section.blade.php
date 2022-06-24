<div class="doctorl-main-box " data-aos="zoom-in">
    <div class="container-fluid">
        <div class="global-heading">
            <h2>{{ __('messages.Me Now Team') }}</h2>

            <p>{{ __('messages.Our team is rooted in the belief that all people deserve high-quality mental health care. We take pride in offering the most comprehensive and holistic approach to mental health and our Practitioners include licensed therapists, psychologists, and psychiatrists with expertise in their respective domains. They are eager to help you in your battles against mental health and to assist you in achieving mental wellbeing.') }}

</p>
        </div>
        <div class="row">
       
            @if (count($doctor) > 0)
                @foreach ($doctor as $d)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="doctorl-part-box hover-doctor-portal">
                            <?php
                            if ($d->image) {
                                $image = $d->image;
                            } else {
                                $image = asset('upload/profile/profile.png');
                            }
                            ?>
                            <a href="{{ route('doctor.details',[Session::get('locale'),$d->slug]) }}" class="box-container">
                                <img class="doctorl-dp-img doctorl-dp-img-1 doctor_img_hover" src="<?= $image ?>" />
                            </a>
                            <div class="doctorl-part-detail text-center">
                                <h4>{{ ucwords($d->name) }}</h4>
                                <div class="overlay_doctors">
                                    <div class="inner_overlay_doctor">
                                        <h4>{{ ucwords($d->name) }}</h4>
                                        <p>{{ $d->excerpt }} </p>
                                        
                                        <a href="{{ route('doctor.details',[Session::get('locale'),$d->slug]) }}"
                                            class="btn-hover color-9 mt-3">{{ __('messages.Read More') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
