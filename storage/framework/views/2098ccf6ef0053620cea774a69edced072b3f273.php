
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
            <img src="<?php echo e(@$workshop->featured_img); ?>" alt="" class="img-fluid">
        </div>
        <div class="meta_content">
            <div class="meta1"> <b>Date:</b>&nbsp;<?php echo e($workshop->event_date); ?></div>
            
            <div class="meta1"> <b>Event Type:</b>&nbsp;<?php echo e($workshop->event_type); ?></div>
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


        <div class="facilitated">
            <h4>Facilitated by</h4>
            <div class="content">
                <img src="https://menow.b-cdn.net/images/d1-1-165390457334.jpg" class="img-circle" alt="profile">
                <h4>Dr. Aleksandra Shumar</h4>
                <p><span>Life Coaching Expert</span></p>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/workshops_inner.blade.php ENDPATH**/ ?>