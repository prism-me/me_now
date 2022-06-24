
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Services')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="departmentpg-main-box_main"
        style="background-image : linear-gradient(#fceeee8a, #22202087) ,url(<?php echo e($current->banner_image); ?>) ">


        <div class="service_caption">
            <h2><?php echo e($current->name); ?></h2>
            <br />
            <button type="submit" class="btn-hover color-9" data-toggle="modal" data-target="#appointmentModal"><?php echo e(__('messages.Consult with Us')); ?></button>
        </div>
    </div>
    <div class="container-fluid">
        <div class="global-heading" data-aos="fade-right">
         
            <h2><?php echo e($current->name); ?></h2>
        </div>
        <div class="services-content" data-aos="fade-up"><?php echo $current->description; ?></div>
        <div class="department-part-main-box">
            <div class="row">
              
                <?php if(count($departmentService) > 0): ?>

                    <?php $__currentLoopData = $departmentService; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in">
                            <div class="department-part-box hover-services">
                                <div class="department-part-img">
                                    <img src="<?php echo e($service->img); ?>">
                                </div>
                                <div class="text-detail-box sub-services-list">
                                    <h4><?php echo e($service->name); ?></h4>

                                    <div class="services_overlay">
                                        <div class="services_content">
                                            <h4><?php echo e($service->name); ?></h4>

                                            <p><?php echo e($service->excerpt); ?></p>
                                            <a class="btn-hover color-9"
                                                href="<?php echo e(url('services') . '/' . $serviceSlug . '/' . $service->slug); ?>">Read
                                                More</a>
                                        </div>
                                    </div>

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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\me_now\resources\views/front/department.blade.php ENDPATH**/ ?>