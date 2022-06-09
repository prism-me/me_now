<div class="doctorl-main-box " data-aos="zoom-in">
    <div class="container-fluid">
        <div class="global-heading">
            <h2>Me Now Team</h2>

            <p>Me Now Center is rooted in the belief that all people deserve high-quality mental
                health care. We take pride in offering the most comprehensive and holistic
                approach to mental health and our team includes licensed therapists,
                psychologists, and psychiatrists with expertise in their respective domains. Our
                practitioners are eager to help you in your battles against mental health and
                to assist you in achieving mental wellbeing. </p>
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
                            <a href="{{ url('doctordetails/') . '/' . $d->slug }}" class="box-container">
                                <img class="doctorl-dp-img doctorl-dp-img-1 doctor_img_hover" src="<?= $image ?>" />
                            </a>
                            <div class="doctorl-part-detail text-center">
                                <h4>{{ ucwords($d->name) }}</h4>
                                <div class="overlay_doctors">
                                    <div class="inner_overlay_doctor">
                                        <h4>{{ ucwords($d->name) }}</h4>
                                        <p>{{ $d->excerpt }} </p>
                                        <a href="{{ url('doctordetails/') . '/' . $d->slug }}"
                                            class="btn-hover color-9 mt-3">Read More</a>
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
