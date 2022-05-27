
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Department')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="departmentpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2><?php echo e(__('messages.Department')); ?></h2>
                <p><?php echo e(__('messages.Goodness and hard work are rewarded with respect')); ?></p>
            </div>
            <div class="department-part-main-box">
                <div class="row">
                    <?php if(count($department  ) > 0): ?>
                        
                   
                            <?php $__currentLoopData = $departmentService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="department-part-box">
                                        <div class="department-part-img">
                                            <img src="<?php echo e($service->image); ?>">
                                        </div>
                                        <div class="text-detail-box">
<<<<<<< HEAD:storage/framework/views/35eea985c125cc5bca6987308f672d3197f13f85.php
										<h4><?php echo e($service->name); ?></h4>
                                            <p><?php echo e(substr($service->short_description, 0, 75)); ?></p>
=======
										<h4><?php echo e($d->name); ?></h4>
                                            <p><?php echo e(substr($d->short_description, 0, 75)); ?></p>
>>>>>>> 372f266afb15eada2578f7c41f1c527389cd10fb:storage/framework/views/7a197ed0d3a9cf6f928a8b9cc06b6d96454be52a.php
                                        </div>
                                        <div class="department-viewd-btn services-btn-main-box">
                                            <a
                                                href="<?php echo e(url('departmentdetail') . '/' . $service->id); ?>"><?php echo e(__('messages.View Detail')); ?></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/front/department.blade.php ENDPATH**/ ?>