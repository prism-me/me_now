
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="global-heading">
            <h2><?php echo e($rooms->title); ?></h2>
            <div class="exerpt">
            </div>
            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-7">
                    <div class="who_we_are_cotent">
                        <div class="room_description">
                            <?php echo $rooms->description; ?>

                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <img src="<?php echo e($rooms->featured_img); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="about-content-widget">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo e($rooms->featured_img2); ?>" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <div class="room_long_description">
                        <?php echo $rooms->description2; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="promo_section_rooms">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo e($rooms->more_img1); ?>" alt="" class="img-fluid">
                    <div class="room_title">
                        <h2><?php echo e($rooms->more_img_title1); ?></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room_title">
                        <h2><?php echo e($rooms->more_img_title2); ?></h2>
                    </div>
                    <img src="<?php echo e($rooms->more_img2); ?>" alt="" class="img-fluid">

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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/rooms.blade.php ENDPATH**/ ?>