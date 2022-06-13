
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Blog Detail')); ?>

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
                        <div class="col-md-9">
                            <div class="img_wrapper">
                                <img src="<?php echo e($blogdetails->featured_img); ?>" alt=""  style="width:100%;">
                                <div class="meta_data">
                                   <div> Posted at: 24, May 2014</div>
                                   <div>Author: Admin</div>
                                </div>
                                <h4></h4>
                            </div>
                            <div class="content_area">
                                <h1><?php echo e($blogdetails->title); ?></h1>
                                <p> <?php echo e($blogdetails->description); ?>

                                </p>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="popular_posts">
                                <h4> Popular Posts </h4>
                                <ul>
                                    <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <div class="img">
                                                <img src="<?php echo e($blogData->featured_img); ?>" alt="" class="img-fluid">
                                            </div>
                                            <div class="content">
                                                <h6><a href="<?php echo e(url('blogdetails'). '/' .$blogData->slug); ?>">Lorem Ipsum.</a></h6>
                                                <p>Date : <?php echo e($blogData->created_at); ?></p>
                                            </div>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
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
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views\front\blog_inner.blade.php ENDPATH**/ ?>