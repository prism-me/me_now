
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.About_Me_Now')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="global-heading" data-aos="fade-up">
            <h2><?php echo e(__('messages.About Me Now')); ?> </h2>
            
            </p>
        </div>
    
       

            
            <div class="who_we_are" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-12">
                        <div class="side_img_about_wrapper">
                            <img src=<?php echo e($about[0]['featured_img']); ?> alt="" class="img-fluid side_img_about">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12">
                        <div class="who_we_are_cotent">
                            <h2 data-aos="fade-up"><?php echo e($about[0]['title']); ?></h2>
                            <p>
                               <?php echo e($about[0]['description']); ?>




                            </p>
                        </div>
                        <div class="row who_we_are_sub_section">
                            <div class="col-md-2 text-center">
                                <img src="<?php echo e($about[0]['icon1']); ?>" alt="">

                            </div>
                            <div class="col-md-10">
                                <p>
                                    <?php echo e($about[0]['description1']); ?>





                                </p>
                            </div>
                        </div>
                        <div class="row who_we_are_sub_section">
                            <div class="col-md-2 text-center">
                                <img src="<?php echo e($about[0]['icon2']); ?>" alt="">

                            </div>
                            <div class="col-md-10">
                                <p>
                                    <?php echo e($about[0]['description2']); ?>



                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about_tiles text-center">
                <div class="global-heading">
                    <h2><?php echo e(__('messages.What we stand for')); ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="single-tile">
                            <div class="inner-single-title" data-aos="zoom-in">
                                <img src="<?php echo e($about[1]['icon1']); ?>" alt="">
                                <h4>
                                    <?php echo e($about[1]['title']); ?>

                                </h4>
                                <p>
                                   <?php echo e($about[1]['description1']); ?>


                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="single-tile middle" data-aos="zoom-in">
                            <div class="inner-single-title">
                                <img src="<?php echo e($about[2]['icon1']); ?>" alt="">
                                <h4>
                                  <?php echo e($about[2]['title']); ?>

                                </h4>
                                <p>
                                   <?php echo e($about[2]['description1']); ?>





                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="single-tile" data-aos="zoom-in">
                            <div class="inner-single-title">
                                 <img src="<?php echo e($about[3]['icon1']); ?>" alt="">
                                <h4>
                                  <?php echo e($about[3]['title']); ?>

                                </h4>
                                <p>
                                   <?php echo e($about[3]['description1']); ?>





                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-content-widget">
                <div class="row">
                    <div class="col-md-5 col-sm-12" data-aos="zoom-in">
                        <img src="<?php echo e($about[4]['featured_img']); ?>" class="img-fluid collageg_about_img" alt="">
                    </div>
                    <div class="col-md-7 col-sm-12 ">
                        <p class="text-margin"><?php echo e($about[4]['description']); ?> </p>
                        <div class="row text-section-about">
                            <div class="col-md-6 col-sm-12" data-aos="zoom-in">
                               <p class="text-margin"> <?php echo e($about[4]['description1']); ?></p>
                            </div>
                            <div class="col-md-6" data-aos="zoom-in">
                                <p class="text-margin"><?php echo e($about[4]['description2']); ?></p>
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\me_now\resources\views/front/about.blade.php ENDPATH**/ ?>