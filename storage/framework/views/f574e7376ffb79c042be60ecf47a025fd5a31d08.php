
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
            <h2><?php echo e($room->title); ?></h2>
            <div class="exerpt">
            </div>
            </p>
        </div>

        <div class="rooms_first_section">
            <div class="row">
                <div class="col-md-6">
                    <div class="who_we_are_cotent">
                        <div class="room_description">
                            <?php echo $room->description; ?>

                            <a href="https://wa.me/+971565553483" class="btn-hover color-9 ">Contact Us</a>
                        </div>

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="room_main_img">
                        <img src="<?php echo e($room->featured_img); ?>" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="rooms_second_section">
        <div class="row" style="margin-left: 0px;margin-right: 0px;">
            <div class="col-md-6">
                <img src="<?php echo e($room->featured_img2); ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
                <div class="room_long_description">
                    <?php echo $room->description2; ?>

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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views\front\rooms.blade.php ENDPATH**/ ?>