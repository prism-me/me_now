
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Blog List')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="blogpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2><?php echo e(__('messages.Blog')); ?> </h2>
            </div>
            <div class="blogpg-part-main-box">
                <div id="all" class="tabcontent">
                    <div class="row">
                
                        <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="blog-single">
                                    <div class="img_wrapper">
                                        <a href="<?php echo e(url('blog-detail'). '/'.$data->slug); ?>"><img src="<?php echo e($data->featured_img); ?>" alt="blog" class="img-fluid"></a>
                                    </div>
                                    <div class="content_wrapper">
                                        <div class="date_time">
                                            <div class="time"><i class="fa fa-clock"></i><?php echo e(date('d-m-Y',strtotime($data->created_at))); ?>&nbsp;&nbsp;
                                                <i class="fa fa-user"></i> <?php echo e($data->posted_by); ?>

                                            </div>
                                        </div>
                                        <div class="text_wrapper">
                                            <h4><a href="<?php echo e(url('blog-detail'). '/'.$data->slug); ?>"><?php echo e($data->title); ?></a></h4>
                                            <p style="color:rgb(108, 108, 108)">
                                                <?php echo e(substr($data->description, 0,  150)); ?>....
                                        
                                            <a href="<?php echo e(url('blog-detail'). '/'.$data->slug); ?>" stle="color:#49B7C6;">Read More</a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/blog.blade.php ENDPATH**/ ?>