
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
                
            </div>

            <div class="doctorpg-part-main-box mb-5">
                <div id="all" class="tabcontent">
                    <div class="row">
                        <?php $__currentLoopData = $workshop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-up">
                                <div class="d-detail-collapse-doctor">
                                    <div class="doctorl-part-box workshops-wrapper">
                                        <a href="<?php echo e(url('workshop') . '/' . $d->slug); ?>" class="denone box-container">
                                            <img src="<?php echo e($d->featured_img); ?>" class="img-fluid">
                                        </a>

                                        <div class="workshop-part-detail">
                                            <h4><a
                                                    href="<?php echo e(url('workshop') . '/' . $d->slug); ?>"><?php echo e(ucwords($d->title)); ?></a>
                                            </h4>
                                            <div class="workshop-schedule row">

                                                <div class="col-md-4 col-5" style="padding-left:0px;">
                                                    <span><?php echo e(__('messages.Workshop Date')); ?>:</span>
                                                </div>
                                                <?php if(Session::get('locale') == 'en'): ?>
                                                    <div class="col-md-8 col-7" style="padding-right:0px;">
                                                    <?php else: ?>
                                                        <div class="col-md-8 col-7" style="padding-right:0px;">
                                                <?php endif; ?>

                                                <?php $event_date = $d->event_date; ?>

                                                <select name="dob" id="" class="form-control"
                                                    style="color:#000;width:90%;">
                                                    <option value="0"><?php echo e(__('messages.Select Date and Time')); ?>

                                                    </option>
                                                    <?php if(!is_null($event_date)): ?>
                                                        <?php $__currentLoopData = $event_date; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($date); ?>">
                                                                <?php echo e(date('m/d/Y H:i:s', strtotime($date))); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </select>
                                            </div>

                                        </div>
                                        
                                        <div class="book_appointment_doctor">
                                            
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


    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/workshop.blade.php ENDPATH**/ ?>