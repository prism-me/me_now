<div class="container-fluid">
    <div class="about_wrapper " data-aos="fade-up">
        <div class="row">
            <div class="col-md-7 col-sm-6 col-12">
                <div class="about_content">
                    {{-- <img src={{ $home[0]['featured_img']}} alt="logo" class="about-section-logo"> --}}
                    <div class="services_home_container global-heading text-center">
                        <h2 class="animated fadeInDown delay-2s ">{{ $home[0]['title']}}</h2>
                    </div>{!! $home[0]['description'] !!}

                    </p>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 col-12 text-center about_img_section">
                <div class="about_img_wrapper"><img src={{ $home[0]['featured_img']}} alt="about us section">
                </div>
            </div>
        </div>
    </div>
</div>
