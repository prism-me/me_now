
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Events')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="global-heading">
            <h2 style="display: block;">Events</h2>
            
        </div>
        <div class="doctorpg-part-main-box mb-5">
            
            <?php $i=1; ?>
            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row event_rows">
                    <?php 
                    if ($i % 2 == 0){
                        $class = 'order-2';
                    }else{
                        $class = 'order';
                    }
                    
                    ?>
                    <div class="col-lg-7 col-md-7 col-sm-6 <?php echo e($class); ?>" data-aos="fade-up">
                        <div class="events-detail">
                            <h2><?php echo e($d->name); ?></h2>
                            <p>Event Date: <?php echo e($d->created_at->diffForHumans()); ?></p>
                            <div class="event-description">
                                <?php echo $d->description; ?>

                            </div>
                            <div class="book_now_event">

                                <a href="https://api.whatsapp.com/send/?phone=00971565553483" class="btn-hover color-9">Book
                                    Now</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-6">
                        <div class="event_pic">
                            <img src="<?php echo e($d->thumbnail_img); ?>" class="img-fluid">
                        </div>
                    </div>
                </div>

                <?php $i++ ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views\front\events.blade.php ENDPATH**/ ?>