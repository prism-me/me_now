
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
                <h2>Me Now Team</h2>
                <p>Me Now Center is rooted in the belief that all people deserve high-quality mental health care. We take
                    pride in offering the most comprehensive and holistic approach to mental health care and our team
                    includes licensed therapists, psychologists, and psychiatrists with expertise in ADHD, PTSD, and other
                    mental health-related problems. Our mental health practitioners are eager to help you in your battles
                    against mental health and to assist you in achieving mental wellbeing.</p>
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
                                        <div class="doctorl-part-detail text-center">
                                            <h4><a href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>"
                                                    class="denone"><?php echo e(ucwords($d->name)); ?></a></h4>
                                            <p style="color:rgb(108, 108, 108)">
                                                <?php echo e(substr($d->about_us, 0, 100)); ?>... <a
                                                    href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>">Read More</a>

                                            
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
                            Start Your Journey Towards Better Mental Health Now
                        </p>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary get-in-touch-button" data-toggle="modal"
                            data-target="#appointmentModal">Consult with us</button>
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/doctorlist.blade.php ENDPATH**/ ?>