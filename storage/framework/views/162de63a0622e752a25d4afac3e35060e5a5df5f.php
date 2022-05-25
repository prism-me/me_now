
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="global-heading">
            <h2><?php echo e(__('messages.About Me Now')); ?> </h2>
            <p><?php echo e(__("messages.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                                                                                                            
                                                                                                                                                ")); ?>

            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg"
                        alt="" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <div class="who_we_are_cotent">
                        <h2>WHO WE ARE</h2>
                        <h2>We Help To Get Solution</h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                        </p>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2">
                            <img src="<?php echo e(asset('front/img/about-icon-1.png')); ?>" alt="">

                        </div>
                        <div class="col-md-10">
                            <h4 class="">Lorem Ipsum</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                            </p>
                        </div>
                    </div>
                    <div class="row who_we_are_sub_section">
                        <div class="col-md-2">
                            <img src="<?php echo e(asset('front/img/about-icon-2.png')); ?>" alt="">

                        </div>
                        <div class="col-md-10">
                            <h4 class="">Simply Dummy</h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about_tiles">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-tile">
                        <img src="<?php echo e(asset('front/img/about-icon-1.png')); ?>" alt="">
                        <h4>
                            Lorem Ipsum simply
                        </h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu

                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile">
                        <img src="<?php echo e(asset('front/img/about-icon-2.png')); ?>" alt="">
                        <h4>
                            Lorem Ipsum simply
                        </h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu

                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile">
                        <img src="<?php echo e(asset('front/img/about-title-1.png')); ?>" alt="">
                        <h4>
                            Lorem Ipsum simply
                        </h4>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu

                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-content-widget">
            <div class="row">
                <div class="col-md-4">
                    <img src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg"
                        class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                    </p>
                    <div class="row text-section-about">
                        <div class="col-md-6">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type
                                and scrambled it to make a type specimen book. </p>
                        </div>
                        <div class="col-md-6">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the
                                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type
                                and scrambled it to make a type specimen book. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>









    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/about.blade.php ENDPATH**/ ?>