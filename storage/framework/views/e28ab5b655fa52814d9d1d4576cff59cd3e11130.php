
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
                        <div class="col-md-9">
                            <div class="img_wrapper">
                                <img src="<?php echo e($blogdetails->featured_img); ?>" alt="" class="img-fluid">
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
                                    <?php for($i = 0; $i < 5; $i++): ?>
                                        <li>
                                            <div class="img">
                                                <img src="<?php echo e($blogdetails->featured_img); ?>" alt="" class="img-fluid">
                                            </div>
                                            <div class="content">
                                                <h6><a href="<?php echo e(url('blog'). '/1'); ?>">Lorem Ipsum.</a></h6>
                                                <p>date : date here</p>
                                            </div>
                                        </li>
                                    <?php endfor; ?>
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
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/front/blog_inner.blade.php ENDPATH**/ ?>