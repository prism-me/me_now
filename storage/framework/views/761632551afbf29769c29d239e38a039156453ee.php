<div class="doctorl-main-box " data-aos="zoom-in">
    <div class="container-fluid">
        <div class="global-heading">
            <h2>Me Now Team</h2>

            <p>Me Now Center is rooted in the belief that all people deserve high-quality mental health care. We take
                pride in offering the most comprehensive and holistic approach to mental health care and our team
                includes licensed therapists, psychologists, and psychiatrists with expertise in ADHD, PTSD, and other
                mental health-related problems. Our mental health practitioners are eager to help you in your battles
                against mental health and to assist you in achieving mental wellbeing.</p>
        </div>
        <div class="row">
            <?php if(count($doctor) > 0): ?>
                <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="doctorl-part-box hover-doctor-portal">
                            <?php
                            if ($d->image) {
                                $image = $d->image;
                            } else {
                                $image = asset('upload/profile/profile.png');
                            }
                            ?>
                            <a href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>" class="box-container">
                                <img class="doctorl-dp-img doctorl-dp-img-1 doctor_img_hover" src="<?= $image ?>" />
                            </a>
                            <div class="doctorl-part-detail text-center">
                                <h4><?php echo e(ucwords($d->name)); ?></h4>
                                <div class="overlay_doctors">
                                    <div class="inner_overlay_doctor">
                                        <h4><?php echo e(ucwords($d->name)); ?></h4>
                                        <p><?php echo e(substr(trim($d->about_us), 0, 250)); ?> ... <a
                                                href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>">Read More</a></p>
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
<?php /**PATH D:\Projects\Menow\me_now\resources\views/front/doctor_section.blade.php ENDPATH**/ ?>