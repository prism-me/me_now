
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="global-heading" data-aos="fade-up">
            <h2><?php echo e(__('messages.About_Me_Now')); ?> </h2>
            
            </p>
        </div>
        <div class="who_we_are" data-aos="fade-up">
            <div class="row">
                <div class="col-md-5">
                    <div class="side_img_about_wrapper">
                        <img src="<?php echo e(asset('front/img/about-us.jpg')); ?>" alt="" class="img-fluid side_img_about">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="who_we_are_cotent">
                        <h2 data-aos="fade-up">WHO WE ARE</h2>
                        
                        <p>
                            Me Now is a premier mental health center in Dubai working with a mission to de-stigmatize mental
                            healthcare. The center boasts internationally certified practitioners having expertise in
                            different therapeutic interventions, ready to help you improve your mental health. At Me Now,
                            our experts guide you to discover yourself and your psychological conditttion. We work
                            relentlessly to ensure that ‘a different you’ walk out the door after working with us.



                        </p>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2 text-center">
                            <img src="<?php echo e(asset('front/img/icons/who-we-1.png')); ?>" alt="">

                        </div>
                        <div class="col-md-10">
                            <p>
                                Our highly regarded treatment programs are supervised by internationally recognized mental
                                health specialists that collaborate seamlessly to ensure that our clients receive the finest
                                possible care and are empowered to take steps toward a complete and long-term recovery.




                            </p>
                        </div>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2 text-center">
                            <img src="<?php echo e(asset('front/img/icons/who-we.png')); ?>" alt="">

                        </div>
                        <div class="col-md-10">
                            <p>
                                At Me Now, we provide a safe environment where you can express yourself and let go of past
                                and present traumas so that we can work together to get you back to the lively person you
                                were, if not better.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_tiles text-center">
            <div class="global-heading">
                <h2> What we stand for</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-tile">
                        <div class="inner-single-title" data-aos="zoom-in">
                            <img src="<?php echo e(asset('front/img/icons/vision.png')); ?>" alt="">
                            <h4>
                                Our Vision
                            </h4>
                            <p>
                                Our Vision is to assist people who have been in and out of treatment to find a way back to
                                health and recovery. We want to be the source of the change that people need in their lives
                                to be healthy, both mentally and physically. Me Now aims to provide you with a place where
                                everyone can discover their inner self and reach their full potential



                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile middle" data-aos="zoom-in">
                        <div class="inner-single-title">
                            <img src="<?php echo e(asset('front/img/icons/mission.png')); ?>" alt="">
                            <h4>
                                Our mission
                            </h4>
                            <p>
                                To inspire, create and provide you with the opportunity to uncover what lies within you and
                                explore your inner strengths. To make mental health less stigmatizing and equip you with the
                                resources you need to improve your personal and professional life.




                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile" data-aos="zoom-in">
                        <div class="inner-single-title">
                            <img src="<?php echo e(asset('front/img/icons/value.png')); ?>" alt="">
                            <h4>
                                Our Approach
                            </h4>
                            <p>
                                A thorough service of exceptional quality that provides personalized treatment and a path to
                                recovery that is fully responsive to individual needs in a secluded and beautifully designed
                                environment, but with all the opportunities, resources, and safety of a medical clinic,
                                fully licensed, with multilingual staff and Arabic and English as the primary languages.




                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-content-widget">
            <div class="row">
                <div class="col-md-5 col-sm-12" data-aos="zoom-in">
                    <img src="<?php echo e(asset('front/img/about-us.png')); ?>" class="img-fluid collageg_about_img" alt="">
                </div>
                <div class="col-md-7 col-sm-12 ">
                    <p class="text-margin">
                        We Treat a wide range of mental health issues, including burnout, depression, anxiety, and PTSD and
                        these are just the tip of the Iceberg. Our practitioners are committed to providing outstanding
                        therapeutic services and professional coaching Sessions in Dubai. Me Now is rooted in delivering
                        quality treatment plans and be with our clients every step of the way.




                    </p>
                    <div class="row text-section-about">
                        <div class="col-md-6 col-sm-12" data-aos="zoom-in">
                            <p>Our therapies take place in a setting that fosters wellness, relaxation, and safety. We
                                encourage our patients to express their frustrations and put their trust in us so that our
                                practitioners can find the best treatment and assistance for them.



                            </p>
                        </div>
                        <div class="col-md-6" data-aos="zoom-in">
                            <p>We have wellness options for everyone, whether you're dealing with anxiety or depression, or
                                simply need a safe place to vent and let off steam, we have therapies that address
                                challenges related to both your body and mind.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doctor-wrapper" style="margin-bottom: 65px">
            <?php echo $__env->make('front.doctor_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/about.blade.php ENDPATH**/ ?>