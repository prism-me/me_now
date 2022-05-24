
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Doctor List')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="global-heading">
            <h2><?php echo e(__('messages.Blog')); ?> </h2>
        </div>
        <div class="row">
            <?php for($i = 0; $i < 8; $i++): ?>
                <div class="col-md-4">
                    <div class="blog-single">
                        <div class="img_wrapper">
                            <a href=""><img src="http://127.0.0.1:8000/upload/doctor/doctor_899606.jpg" alt="blog"></a>
                        </div>
                        <div class="content_wrapper">
                            <div class="date_time">
                                <div class="time"><i class="fa fa-clock"></i> Time</div>
                                <div class="topic"><i class="fa fa-user"></i> Author</div>
                            </div>
                            <div class="text_wrapper">
                                <h4><a href="">Blog Heading</a></h4>
                                <p>
                                    Lorem ipsum dolor sit amet lorem impossible
                                    Lorem ipsum dolor sit amet lorem impossible
                                    Lorem ipsum dolor sit amet lorem impossible
                                </p>
                                <a href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/blog.blade.php ENDPATH**/ ?>