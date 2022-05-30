
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="banner-img">
            <img src="<?php echo e($workshop->featured_img); ?>"
                alt="" class="img-fluid" style="width:50%; height:50%">
        </div>
        <div class="meta_content">
            <div class="meta1"> <b>Date:</b>&nbsp;<?php echo e($workshop->event_date); ?></div>
            
            <div class="meta1"> <b>Event Type:</b>&nbsp;<?php echo e($workshop->event_type); ?></div> </div>
        </div>
        <div class="event_content">
            <h3><?php echo e($workshop->title); ?></h3>
            <p>
                <?php echo e($workshop->short_description); ?>

            </p>
            <p>
                <?php echo e($workshop->description); ?>

            </p>
        </div>

    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/workshops_inner.blade.php ENDPATH**/ ?>