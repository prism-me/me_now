
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Women Empowerment')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="global-heading">
            <h2><?php echo e($women[0]['title']); ?></h2>
            <p><?php echo $women[0]['description']; ?> </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo e($women[1]['featured_img']); ?>" alt="" class="img-fluid side_woment_emp_img">

                </div>
                <div class="col-md-7">
                    <div class="who_we_are_cotent" data-aos="fade-up">
                        <h2><?php echo e($women[1]['title']); ?></h2>
                        
                        <div class="women-empowerment-" data-aos="zoom-in">
                          <?php echo $women[1]['description']; ?>.
                            <blockquote class="blockquote">
                                <span class="fa fa-quote-left"></span>
                                    <?php echo $women[2]['description']; ?>.
                                <span class="fa fa-quote-right"></span>
                                <footer class="blockquote-footer">CEO's Message</footer>
                            </blockquote>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php echo $__env->make('front.packages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      

    </div>

    






<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\me_now\resources\views/front/women_empowerment.blade.php ENDPATH**/ ?>