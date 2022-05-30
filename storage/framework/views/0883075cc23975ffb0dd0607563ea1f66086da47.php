
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Doctor List')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="doctorpg-main-box">
        <div class="container">
            <div class="global-heading">
                <h2><?php echo e(__('messages.Doctor List')); ?> </h2>
                <p><?php echo e(__("messages.The best doctor is the one you run to and can't find")); ?></p>
            </div>

            

            <div class="doctorpg-part-main-box">
                <div id="all" class="tabcontent">
                    <div class="row">
                        <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 " data-aos="fade-up">

                                <div class="d-detail-collapse-doctor">
                                    <div class="doctorl-part-box">
                                        <a href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>" class="denone">
                                            <img src="<?php echo e($d->image); ?>" class="img-fluid">
                                        </a>
                                        <div class="doctorl-part-detail">
                                            <h4><a href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>"
                                                    class="denone"><?php echo e(ucwords($d->name)); ?></a></h4>
                                            <p style="color:rgb(108, 108, 108)">
                                                <?php echo e(substr($d->about_us, 0, 100)); ?>...
                                                
                                            <div class="book_appointment_doctor">
                                                <button>Make an Appointment</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="promo_section">
            <div class="container">
                <div class="row" style="align-items: center;">
                    <div class="col-md-3">
                        <img src="<?php echo e(asset('front/img/logo.png')); ?>" alt="logo">
                    </div>
                    <div class="col-md-6">
                        <p>
                            Menow offers quality mental health Menow offers quality mental health Menow offers quality
                            mental health
                        </p>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary get-in-touch-button">Get In Touch</button>
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/front/doctorlist.blade.php ENDPATH**/ ?>