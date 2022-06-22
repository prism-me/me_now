
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Home')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div><span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="appointment-section">
        <?php echo $__env->make('front.banner_static', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
    </div>

    <div class="about_container">
        <?php echo $__env->make('front.about_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="service_section_container">
        <?php echo $__env->make('front.services_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>



    

    <?php echo $__env->make('front.doctor_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="outer_container_women_wrapper">
    <div class="container-fluid">
        <div class="women_wrapper " data-aos="fade-up">
            <div class="row">
                <div class="col-md-5 text-center women_img_section">
                    <div class="women_img_wrapper"><img src=<?php echo e(@$home[2]['featured_img']); ?> class="img-fluid" alt="about us section">
                    </div>
                </div>
                
                <div class="col-md-7">
                    <div class="about_content text-center">
                        
                        <div class="services_home_container global-heading ">
                            <h2 class="animated fadeInDown delay-2s "><?php echo e(@$home[2]['title']); ?></h2>
                        </div>
                        <p class="animated fadeInDown mb-5"><?php echo @$home[2]['description']; ?>

    
                        </p>
                        <a href="<?php echo e(url('women-empowerment')); ?>" class="btn-hover color-9"><?php echo e(__('messages.Read More')); ?></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

    
    

    <div class="testimonial-main-box">
        <div class="container-fluid" style="padding-left: 0px ; padding-right: 0px;">
            <div class="global-heading">
                <h2><?php echo e(__('messages.Client’s Reviews')); ?></h2>
                <p><?php echo e(__('messages.See what our clients have to say about the Me Now Center and our mental health services')); ?></p>
            </div>
            <div class="testimonial-part-main-box">
                <div class="owl-carousel testimonial-carousel patient-reviews-slider">
                    <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(isset($r->users)): ?>
                            <div class="single-testimonial">
                                <div class="testimonial-part-box">
                                    <div class="testimonial-inner-images">
                                        <div class="col-md-3 testimage">
                                            
                                            <img src="<?php echo e($r->img); ?>" class="testimonial-profile-img img-fluid">
                                        </div>
                                        <div class="col-md-9 testtext">
                                            <p class="testip"><?php echo e($r->review); ?></p>
                                            <span class="testimonialspan"></span>
                                            <?php if(isset($r->name)): ?>
                                                <h3 class="testimonialh">- <?php echo e($r->name); ?></h3>
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




<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/home.blade.php ENDPATH**/ ?>