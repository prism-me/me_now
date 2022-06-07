
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Department Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $res_curr = explode('-', $setting->currency); ?>
    <div class="d-detailpg-main-box">
        <div class="department_background" style="background-image : url(<?php echo e($current->banner_image); ?>) ">

        </div>
        <div class="service_caption">
            <h2><?php echo e($current->name); ?></h2>
            <br />
            <button type="submit" class="btn-hover color-9" data-toggle="modal" data-target="#appointmentModal">Consult with
                Us</button>
        </div>
        <div class="container-fluid">
            <div class="d-detailpg-part-main-box">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="d-detail-main-box">

                            <div class="global-part-heading global-heading">
                                <p><?php echo e($current->short_description); ?></p>
                                
                                <div class="services-inner-content"><?php echo $current->description; ?></div>
                            </div>
                        </div>

                        <div class="services-cta mb-5">
                            <p>Learn more about our approach to treating mental health.</p>
                            <button type="submit" class="btn-hover color-9" data-toggle="modal"
                                data-target="#appointmentModal">Consult with
                                Us</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        
                        
                        <?php if($subServices): ?>
                            <div class="department_wrappers">
                                <ul>
                                    <?php $i=1 ?>
                                    <?php $__currentLoopData = $subServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li <?php
                                            echo $current->slug === $dp->slug ? "class='active-subservice'" : '';
                                            echo count($subServices) === $i ? "style='border-bottom:0px'" : ' ';
                                            
                                        ?>><a class="dropdown-item"
                                                href="<?php echo e(url('services') . '/' . $service_slug . '/' . $dp->slug); ?>"><?php echo e($dp->name); ?></a>
                                        </li>
                                        <?php $i++ ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </ul>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/front/departmentdetails.blade.php ENDPATH**/ ?>