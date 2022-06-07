
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Department Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $res_curr = explode('-', $setting->currency); ?>
    <div class="d-detailpg-main-box">
        <div class="department_background" style="background-image : url(<?php echo e(asset('front/img/banner/banner-1.jpg')); ?>) ">

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
                        <div class="d-detail-collapse-doctor">
                            <div class="accordion indicator-plus-before round-indicator" id="accordionH"
                                aria-multiselectable="true">
                                <div class="card m-b-0">
                                    
                                    <?php if(count($doctors) > 0): ?>
                                        <?php $i = 0; ?>

                                        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="card-header collapsed" role="tab" id="heading<?php echo e($i); ?>"
                                                href="#collapse<?php echo e($i); ?>"
                                                data-parent="#accordion<?php echo e($i); ?>" aria-expanded="false"
                                                aria-controls="collapse<?php echo e($i); ?>"
                                                onclick="changedoctorblog('<?php echo e($i); ?>')">
                                                <a class="card-title">
                                                    <?php echo e(ucwords(strtolower($doc->name))); ?>

                                                </a>
                                            </div>
                                            <?php if($i == 0): ?>
                                                <div class="collapse in" id="collapse<?php echo e($i); ?>"
                                                    role="tabpanel" aria-labelledby="heading<?php echo e($i); ?>"
                                                    aria-expanded="true">
                                                <?php else: ?>
                                                    <div class="collapse" id="collapse<?php echo e($i); ?>"
                                                        role="tabpanel" aria-labelledby="heading<?php echo e($i); ?>"
                                                        aria-expanded="false">
                                            <?php endif; ?>

                                            <div class="card-body">
                                                <div class="doctorl-part-box">
                                                    <?php
                                                    if ($doc->image) {
                                                        $image = $doc->image;
                                                    } else {
                                                        $image = asset('public/upload/profile/profile.png');
                                                    }
                                                    ?>
                                                    <div class="doctorl-dp-img doctorl-dp-img-1"
                                                        style="background-image: url('<?= $image ?>')"></div>
                                                    <div class="doctor-detail-part1">
                                                        <div class="doctorl-part-detail">
                                                            <h4><?php echo e($doc->name); ?></h4>
                                                            <p class="departdoc"><?php echo e(substr($doc->about_us, 0, 50)); ?>

                                                            </p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                <?php $i++; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <input type="hidden" id="avilabledoctor" value="<?php echo e($i); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/front/departmentdetails.blade.php ENDPATH**/ ?>