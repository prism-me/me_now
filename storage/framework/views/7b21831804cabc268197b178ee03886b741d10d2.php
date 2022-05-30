
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Home')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div><span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <style>

    </style>
    <div class="appointment-section">
        <div class="header-img">
        </div>
        <?php echo $__env->make('front.banner_slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="services-main-box">
        <div class="container">
            <div class="services-left-part">
                <div class="left-part-detail">
                    <h2><?php echo e(__('messages.Personal care & healthy living')); ?></h2>
                    <p><?php echo e(__('messages.facilitydetails')); ?></p>
                    <div class="services-btn-main-box">
                        <a href="<?php echo e(url('allfacilites')); ?>"><?php echo e(__('messages.Learn More')); ?></a>
                    </div>
                    <div class="left-triangle">
                    </div>
                </div>
            </div>
            <div class="services-right-part">
                <div class="row">
                    <?php if(count($department) > 0): ?>
                        <?php $i = 0; ?>
                        <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($i < 6): ?>
                                <div class="col-md-4 col-sm-6">
                                    <?php if($i % 2 == 0): ?>
                                        <div class="services-part-box services-part1-box">
                                        <?php else: ?>
                                            <div class="services-part-box services-part2-box">
                                    <?php endif; ?>
                                    <img src="<?php echo e($s->image); ?>">
                                    <div class="text-detail-box">

                                        <h4><a href="<?php echo e(url('services') . '/' . $s->slug); ?>"><?php echo e($s->name); ?></a></h4>
                                        <p><?php echo e($s->short_description); ?></p>
                                    </div>
                                </div>
                </div>
                <?php endif; ?>

                <?php $i++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="services-left-part services-2nd-box">
            <div class="left-part-detail">
                <h2><?php echo e(__('messages.Services')); ?></h2>
                <p><?php echo e(__('messages.facilitydetails')); ?></p>
                <div class="services-btn-main-box">
                    <a href="<?php echo e(url('allfacilites')); ?>"><?php echo e(__('messages.Learn More')); ?></a>
                </div>
                
            </div>
        </div>
        <div class="services-right-part">
            <div class="row">
                <?php if(count($department) > 0): ?>
                    <?php $i = 0; ?>
                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($i > 5): ?>
                            <div class="col-md-4 col-sm-6">
                                <?php if($i % 2 == 0): ?>
                                    <div class="services-part-box services-part1-box">
                                    <?php else: ?>
                                        <div class="services-part-box services-part2-box">
                                <?php endif; ?>
                                <img src="<?php echo e($s->image); ?>">
                                <div class="text-detail-box">
                                    <h4><?php echo e($s->name); ?></h4>
                                    <p><?php echo e(substr($s->short_description, 0, 70)); ?></p>
                                </div>
                            </div>
            </div>
            <?php endif; ?>

            <?php $i++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="services-part-box services-part2-box">
                <img src="https://menow.b-cdn.net/images/icon-165363374975.png" class="img-fluid">
                <div class="text-detail-box">
                    <h4><a href="<?php echo e(url('/rooms')); ?>">Rooms</a></h4>
                    <p>Rooms descriptions</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="video-section">
        
        <video controls>
            <source src="https://menow.b-cdn.net/video/Me-Now-Ads-Final-Without-Audio-small.mp4" type="video/mp4">
            <source src="https://menow.b-cdn.net/video/Me-Now-Ads-Final-Without-Audio-small.mp4" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </div>


    </div>
    </div>

    <div class="numbers-counter-main-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="<?php echo e(asset('front/img/n1.png')); ?>">
                            <div class="counter-value" data-count="10200">
                                <?php echo e($setting->happy_client); ?>

                            </div>
                            <div class="counter-name">
                                <p><?php echo e(__('messages.Happy people')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="<?php echo e(asset('front/img/n2.png')); ?>">
                            <div class="counter-value" data-count="700">
                                <?php echo e($setting->surgery_complete); ?>

                            </div>
                            <div class="counter-name">
                                <p><?php echo e(__('messages.SURGERY COMPLETED')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="<?php echo e(asset('front/img/n3.png')); ?>">
                            <div class="counter-value" data-count="189">
                                <?php echo e($setting->expert_doctor); ?>

                            </div>
                            <div class="counter-name">
                                <p><?php echo e(__('messages.Expert doctors')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="<?php echo e(asset('front/img/n4.png')); ?>">
                            <div class="counter-value" data-count="11">
                                <?php echo e($setting->worldwide_branch); ?>

                            </div>
                            <div class="counter-name">
                                <p><?php echo e(__('messages.World wide branch')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="doctorl-main-box">
        <div class="container">
            <div class="global-heading">
                <h2><?php echo e(__('messages.Meet Our Doctors')); ?></h2>
                <p><?php echo e(__('messages.Talent wins games, but teamwork and intelligence win championships')); ?></p>
            </div>
            <div class="row">
                <?php if(count($doctor) > 0): ?>
                    <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="doctorl-part-box">
                                <?php
                                if ($d->image) {
                                    $image = $d->image;
                                } else {
                                    $image = asset('upload/profile/profile.png');
                                }
                                ?>
                                <a href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>" class="img-fluid">
                                    <div class="doctorl-dp-img doctorl-dp-img-1"
                                        style="background-image: url('<?= $image ?>')"></div>
                                </a>
                                <div class="doctorl-part-detail text-center">
                                    <h4><?php echo e(ucwords($d->name)); ?></h4>
                                    <p><?php echo e(substr(trim($d->about_us), 0, 135)); ?> ... <a
                                            href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>">Read More</a></p>
                                    <div class="book_appointment_doctor">
                                        <button>Make an Appointment</button>
                                    </div>
                                </div>
                                <div class="icons-images">
                                    
                                    
                                </div>
                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="testimonial-main-box">
        <div class="container" style="padding-left: 0px ; padding-right: 0px;">
            <div class="global-heading">
                <h2><?php echo e(__('messages.Patient Reviews')); ?></h2>
                <p><?php echo e(__('messages.reviewline')); ?></p>
            </div>
            <div class="testimonial-part-main-box">
                <div class="owl-carousel testimonial-carousel patient-reviews-slider">
                    <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($r->users)): ?>
                            <div class="single-testimonial">
                                <div class="testimonial-part-box">
                                    <div class="testimonial-inner-images">
                                        <div class="col-md-3 testimage">
                                            <?php
                                            if ($r->users->profile_pic != '') {
                                                $image = asset('upload/profile') . '/' . $r->users->profile_pic;
                                            } elseif (isset($r->doctors) && isset($r->doctors->$image)) {
                                                $image = asset('upload/doctor') . '/' . $r->doctors->image;
                                            } else {
                                                $image = asset('upload/profile/profile.png');
                                            }
                                            ?>
                                            <img src="<?php echo e($image); ?>" class="testimonial-profile-img img-fluid">
                                        </div>
                                        <div class="col-md-9 testtext">
                                            <p class="testip"><?php echo e($r->review); ?></p>
                                            <span class="testimonialspan"></span>
                                            <?php if(isset($r->users->name)): ?>
                                                <h3 class="testimonialh">- <?php echo e($r->users->name); ?></h3>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>
    <script>
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 2,
                    nav: true,
                }
            }
        })

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            items: 1,
            dots: false,
        })

        // $('.patient-reviews-slider .owl-nav').removeClass('disabled');
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/home.blade.php ENDPATH**/ ?>