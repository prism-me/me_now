
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

            <div class="doctorpg-tab-mainbox">
                <section class="customer-logos slider tab">
                    <div class="slide tablinks" id="defaultOpen" onclick="openCity(event, 'all')">
                        <?php echo e(__('messages.All')); ?>

                    </div>

                    <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                            <div class="col-lg-3 col-md-4 col-sm-6 " data-aos="fade-up">
                                <a href="<?php echo e(url('doctordetails/') . '/' . $d->user_id); ?>" class="denone">
                                    <div class="d-detail-collapse-doctor">
                                        <div class="doctorl-part-box">
                                           <img src="<?php echo e($d->image); ?>" style="width:70px;height:70px;">
                                            

                                            <div class="doctorl-part-detail">
                                                <h4><?php echo e(ucwords(strtolower($d->name))); ?></h4>
                                                <p style="color:rgb(108, 108, 108)">
                                                <?php echo e(substr($d->about_us, 0,  100)); ?>....
                                        
                                                <a href="<?php echo e(url('doctordetails'). '/'.$d->id); ?>" stle="color:#49B7C6;">Read More</a> </p>
                                                <div class="book_appointment_doctor text-center">
                                                    <button>Make an Appointment</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php $__currentLoopData = $departmentdoctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $da): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div id="<?php echo e($da->id); ?>" class="tabcontent">
                        <div class="row">
                            <?php $__currentLoopData = $da->doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(url('doctordetails/') . '/' . $sa->user_id); ?>">
                                    <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up">
                                        <div class="d-detail-collapse-doctor">
                                            <div class="doctorl-part-box">
                                                <?php
                                                if ($sa->image) {
                                                    $image = asset('upload/doctor') . '/' . $sa->image;
                                                } else {
                                                    $image = asset('upload/profile/profile.png');
                                                }
                                                ?>
                                                <div class="doctorl-dp-img doctorl-dp-img-1"
                                                    style="background-image: url('<?= $image ?>')"></div>
                                                <div class="doctor-detail-part">
                                                    <div class="doctorl-part-detail">
                                                        <h5><?php echo e(substr(ucwords(strtolower($sa->name)), 0, 20)); ?></h5>
                                                        <p><?php echo e(substr($sa->about_us, 0, 125)); ?></p>
                                                    </div>
                                                    <div class="icons-images">
                                                        <span class="facebook-doctorl">
                                                            <a
                                                                href="<?php echo e(isset($sa->facebook_id) ? $sa->facebook_id : ''); ?>"><i
                                                                    class="fab fa-facebook-f"></i></a>
                                                        </span>
                                                        <span class="twitter-doctorl">
                                                            <a
                                                                href="<?php echo e(isset($sa->twitter_id) ? $sa->twitter_id : ''); ?>"><i
                                                                    class="fab fa-twitter"></i></a>
                                                        </span>
                                                        <span class="gp-doctorl">
                                                            <a href="<?php echo e(isset($sa->google_id) ? $sa->google_id : ''); ?>"><i
                                                                    class="fab fa-google-plus-g"></i></a>
                                                        </span>
                                                        <span class="instagram-doctorl">
                                                            <a
                                                                href="<?php echo e(isset($sa->instagram_id) ? $sa->instagram_id : ''); ?>"><img
                                                                    src="<?php echo e(asset('front/img/instagram.png')); ?>"></a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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