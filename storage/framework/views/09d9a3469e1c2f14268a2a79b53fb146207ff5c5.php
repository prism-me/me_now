
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="container">
            <div class="global-heading">
                <h2><?php echo e(__('messages.Doctor List')); ?> </h2>
                <p><?php echo e(__("messages.The best doctor is the one you run to and can't find")); ?></p>
            </div>

            <div class="doctorpg-tab-mainbox">
                <section class="customer-logos slider tab">
                    <div class="slide tablinks" id="defaultOpen" onclick="openCity(event, 'all')">
                        <?php echo e(__('messages.All')); ?>

                    </div>

                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="slide tablinks" onclick="openCity(event, '<?php echo e($d->id); ?>')">
                            <?php echo e($d->name); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </section>
            </div>

            <div class="doctorpg-part-main-box">
                <div id="all" class="tabcontent">
                    <div class="row">
                        <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 " data-aos="fade-up">
                                <a href="<?php echo e(url('workshop/') . '/' . $d->user_id); ?>" class="denone">
                                    <div class="d-detail-collapse-doctor">
                                        <div class="doctorl-part-box">
                                            <?php
                                            $image = asset('upload/doctor') . '/' . $d->image;
                                            
                                            ?>
                                            <div class="doctorl-dp-img doctorl-dp-img-1"
                                                style="background-image: url('<?= $image ?>')"></div>

                                            <div class="doctorl-part-detail">
                                                <h4><?php echo e(ucwords(strtolower($d->name))); ?></h4>
                                                <p>Event Date:<?php echo e($d->created_at->diffForHumans()); ?></p>
                                                <div class="book_appointment_doctor">
                                                    <button>Book Event</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/workshop.blade.php ENDPATH**/ ?>