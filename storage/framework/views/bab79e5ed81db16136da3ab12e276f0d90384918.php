
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Home')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div><span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="appointment-section">
        <?php echo $__env->make('front.banner_slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="about_container">
        <?php echo $__env->make('front.about_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="service_section_container">
        <?php echo $__env->make('front.services_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>



    

    <?php echo $__env->make('front.doctor_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="home_promo_banner" data-aos="fade-up">
        <div class="container-fluid">
            <div class="home_promo_banner_inner">
                <h2>Women, We See You, You’re at The Heart of Me Now</h2>
                <p>Me Now is no less than a family dedicated to supporting each other and building a community of
                    like-minded, empowered women. The center has special memberships for women that come with unlimited
                    benefits including discounts on facilities, free workshops, and much more.
                </p>
                <div class="services-btn-main-box">
                    <a href="<?php echo e(url('women-empowerment')); ?>" class="btn-hover color-9">Read More</a>
                </div>
                
            </div>

        </div>
    </div>

    <div class="testimonial-main-box">
        <div class="container-fluid" style="padding-left: 0px ; padding-right: 0px;">
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
            nav: false,
            items: 1,
            dots: true,
        })


        // $('.patient-reviews-slider .owl-nav').removeClass('disabled');
    </script>
    <script>
        AOS.init();
    </script>

    <script>
        // $(document).ready(function() {

        //     $(".hover-doctor-portal").hover(function() {

        //         $(this).().attr("data-aos", "flip-left");
        //         $(this).next().css({'display' : 'block'});


        //     }, function() {

        //         $(this).attr("data-aos", " ");

        //     });
        // });
    </script>
<?php $__env->stopPush(); ?>




<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/front/home.blade.php ENDPATH**/ ?>