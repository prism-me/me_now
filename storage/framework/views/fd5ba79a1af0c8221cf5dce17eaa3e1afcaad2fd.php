
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
            
            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="blog-single">
                        <div class="img_wrapper">
                            <a href=""><img src="<?php echo e(asset('upload/blog').'/'. $data->featured_img); ?>" alt="blog" style="height:54px;width:61px;"></a>
                        </div>
                        <div class="content_wrapper">
                            <div class="date_time">
                                <div class="time"><i class="fa fa-clock"></i><?php echo e(date('d-m-Y',strtotime($data->created_at))); ?></div>
                                <div class="topic"><i class="fa fa-user"></i> <?php echo e($data->posted_by); ?></div>
                            </div>
                            <div class="text_wrapper">
                                <h4><a href=""><?php echo e($data->title); ?></a></h4>
                                <p>
                                    <?php echo e(substr($data->description, 0,  80)); ?>....
                               
                                <a href="<?php echo e(url('blog-detail/').$data->id); ?>" stle="color:#49B7C6;">Read More</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/front/blog.blade.php ENDPATH**/ ?>