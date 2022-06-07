<div class="services-main-box" data-aos="fade-up" data-aos-duration="3000">
    <div class="container-fluid">
        <div class="services_home_container text-center global-heading">
            <h2 class="">Our Services</h2>
            <p class="pb-5">We at Me Now are
                passionate about helping all those suffering from mental illnesses. Our
                certified and highly trained experts provide a variety of therapeutic interventions
                including Holistic therapies, Tomatis Listening Programs & other programs
                that help you achieve mental stability. Talk to our experts and ensure that
                your mind receives the treatment it deserves.

            </p>
        </div>
        <div class="services-left-part">
            <div class="left-part-detail">
                <h2>Even when you're at your worst, you deserve the best. </h2>
                <p>We provide effective and evidence-based therapy for a variety of mental health conditions in a safe
                    and pleasant environment at Me Now.</p>
                <div class="services-btn-main-box">
                    <a href="<?php echo e(url('allfacilites')); ?>" class="btn-hover color-9"><?php echo e(__('messages.Learn More')); ?></a>
                </div>
                <div class="left-triangle">
                </div>
            </div>
        </div>
        <div class="services-right-part">

            <div class="row">

                <?php if(count($department) > 0): ?>
                    <?php $i = 0; ?>
                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <div class="col-md-4 col-sm-6" data-aos="zoom-in">
                            <?php if($i % 2 == 0): ?>
                                <div class="services-part-box services-part1-box hover-services">
                                <?php else: ?>
                                    <div class="services-part-box services-part2-box hover-services">
                            <?php endif; ?>
                            <img src="<?php echo e($s->image); ?>">
                            <div class="text-detail-box">
                                <h4><a href="<?php echo e(url('services') . '/' . $s->slug); ?>"><?php echo e($s->name); ?></a>
                                </h4>
                                <div class="services_overlay">
                                    <a href="<?php echo e(url('services') . '/' . $s->slug); ?>">
                                        <div class="services_content">
                                            <h4><a
                                                    href="<?php echo e(url('services') . '/' . $s->slug); ?>"><?php echo e($s->name); ?></a>
                                            </h4>
                                            <p><?php echo e($s->short_description); ?></p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
            </div>
            

            <?php $i++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            
            <?php if(count($rooms) > 0): ?>
                <?php $cc = 0; ?>
                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6" data-aos="zoom-in">
                        <?php if($cc % 2 == 0): ?>
                            <div class="services-part-box services-part1-box hover-services">
                            <?php else: ?>
                                <div class="services-part-box services-part2-box hover-services">
                        <?php endif; ?>
                        <img src="<?php echo e($room->icons); ?>">
                        <div class="text-detail-box">
                            <h4><a href="<?php echo e(url('rooms/') . '/' . $room->slug); ?>"><?php echo e($room->title); ?></a>
                            </h4>
                            <div class="services_overlay">
                                <div class="services_content">
                                    <h4><a href="<?php echo e(url('rooms/') . '/' . $room->slug); ?>"><?php echo e($room->title); ?></a>
                                    </h4>
                                    <p><?php echo e($room->excerpt); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <?php $cc++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div> 
</div>

</div>
</div> 
<?php /**PATH D:\Projects\Menow\me_now\resources\views\front\services_section.blade.php ENDPATH**/ ?>