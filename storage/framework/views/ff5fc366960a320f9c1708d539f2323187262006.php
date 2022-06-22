
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.FAQ')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="blogpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2><?php echo e(__('messages.Frequently Asked Questions')); ?></h2>
                <p><?php echo e(__('messages.Talent wins games, but teamwork and intelligence win championships')); ?></p>
            </div>
            <div class="faq my-5">
                <div class="accordion" id="accordionExample">

                    <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <div class="card-header collapsed " data-toggle="collapse" data-target="#<?php echo e($faq->slug); ?>"
                                aria-expanded="true">
                                <span class="title"><?php echo e($faq->title); ?></span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="<?php echo e($faq->slug); ?>" class="collapse" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo $faq->description; ?>

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

<?php $__env->startPush('scripts'); ?>
    <script>
        $('#collapseThree').on('hidden.bs.collapse', function() {
            // do something...lo

            console.log('sdf');
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\me_now\resources\views/front/faqs.blade.php ENDPATH**/ ?>