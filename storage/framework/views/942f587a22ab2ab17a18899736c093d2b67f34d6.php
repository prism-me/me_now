
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
            <h2><?php echo e($rooms->title); ?></h2>
            <div class="exerpt">
                <?php echo e($rooms->short_description); ?>

            </div>
            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-5">
                    <img src=<?php echo e($rooms->featured_img); ?> alt="" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="who_we_are_cotent">
                        <h2><?php echo e($rooms->title); ?></h2>
                        <div class="room_description">
                            <?php echo $rooms->description; ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="rooms_slider">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="<?php echo e(asset('front/img/banner/discussion-room.jpg')); ?>" />
                </div>
                <div class="item">
                    <img
                        src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg" />
                </div>
                <div class="item">
                    <img
                        src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg" />
                </div>
            </div>
        </div>
        <div class="about-content-widget">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo e($rooms->additional_images); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                    <div class="room_long_description">
                        <?php echo $rooms->additional_content; ?>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="numbers-counter-main-box">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
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
                <div class="col-md-3 col-sm-6">
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
                <div class="col-md-3 col-sm-6">
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
                <div class="col-md-3 col-sm-6">
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

    <div class="container">
        <div class="global-heading">
            <h2><?php echo e(__('messages.Frequently Asked Questions')); ?></h2>
            <p><?php echo e(__('messages.Talent wins games, but teamwork and intelligence win championships')); ?></p>
        </div>
        <div class="faq">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            3
                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                            laborum
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                            nulla
                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt
                            sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                            labore sustainable VHS.
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


<?php $__env->startPush('scripts'); ?>
    <script>
        $('.rooms_slider .owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            items: 1,
            dots: true,
        })
        // $('.patient-reviews-slider .owl-nav').removeClass('disabled');
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/rooms.blade.php ENDPATH**/ ?>