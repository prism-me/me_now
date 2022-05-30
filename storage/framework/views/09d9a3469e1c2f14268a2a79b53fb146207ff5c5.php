
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
                <h2><?php echo e(__('messages.Workshop List')); ?> </h2>
                <p><?php echo e(__("messages.The best doctor is the one you run to and can't find")); ?></p>
            </div>

            <div class="doctorpg-tab-mainbox">
                <section class="customer-logos slider tab">
                    <div class="slide tablinks" id="defaultOpen" onclick="openCity(event, 'all')">
                        <?php echo e(__('messages.All')); ?>

                    </div>

                    <?php $__currentLoopData = $workshop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="slide tablinks" onclick="openCity(event, '<?php echo e($d->id); ?>')">
                            <?php echo e($d->title); ?>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </section>
            </div>
            
            <div class="doctorpg-part-main-box">
                <div id="all" class="tabcontent">
                    <div class="row">
                        <?php $__currentLoopData = $workshop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 " data-aos="fade-up">
                                <a href="<?php echo e(url('workshop') . '/' . $d->slug); ?>" class="denone">
                                    <div class="d-detail-collapse-doctor">
                                        <div class="doctorl-part-box">
                                            <img src="<?php echo e($d->featured_img); ?>" class="img-fluid">
                                          

                                            <div class="doctorl-part-detail">
                                                <h4><?php echo e(ucwords(strtolower($d->title))); ?></h4>
                                                <p>Event Date:<?php echo e($d->event_date); ?></p>
                                                <p style="color:rgb(108, 108, 108)">
                                                    <?php echo e(substr($d->short_description, 0,  150)); ?>....
                                            
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