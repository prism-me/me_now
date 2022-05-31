
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
                <h2>Events</h2>
                
            </div>

            

            <div class="doctorpg-part-main-box">
                <div id="all" class="tabcontent">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 " data-aos="fade-up">
                            <a href="<?php echo e(url('workshop') . '/' . $d->id); ?>" class="denone">
                                <div class="d-detail-collapse-doctor">
                                    <div class="doctorl-part-box">
                                        <img src="<?php echo e($d->featured_img); ?>" class="img-fluid">
                                        

                                        <div class="doctorl-part-detail">
                                            <h4><?php echo e(ucwords(strtolower($d->title))); ?></h4>
                                            <p>Event Date:<?php echo e($d->event_date); ?></p>
                                            <p style="color:rgb(108, 108, 108)">
                                                <?php echo e(substr($d->short_description, 0, 150)); ?>....

                                                <a href="<?php echo e(url('workshop') . '/' . $d->id); ?>" stle="color:#49B7C6;">Read
                                                    More</a>
                                            </p>
                                            <div class="book_appointment_doctor">
                                                <button>Book Event</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/events.blade.php ENDPATH**/ ?>