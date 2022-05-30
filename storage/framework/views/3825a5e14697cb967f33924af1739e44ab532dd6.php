
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Contact Us')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta_title'); ?>
    <meta name="title" content='<?php echo e(__('messages.Contact Us')); ?>'>
    <meta name="description"
        content='<?php echo e(__('messages.Do you have any questions? Please do not hesitate to contact us directly')); ?>' />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="contactpg-main-box">
        <div class="contactpg-part1-main-box">
            <div class="part1-part-main-box">
                <div class="part1-part-box">
                    <div class="global-heading">
                        <h2>Contact the Experts</h2>
                        <p>Need any help? Reach out to us now!</p>
                    </div>
                    <div class="part-form-main-box mt-5">
                        <?php if(Session::get('message')): ?>
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                <?php echo e(Session::get('message')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo e(url('savecontact')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <input type="text" required name="name" id="name"
                                placeholder="<?php echo e(__('messages.Enter Your Full Name')); ?>">
                            <input type="email" required name="email" id="name"
                                placeholder="<?php echo e(__('messages.Enter Your Email')); ?>">
                            <input type="text" required name="topic" id="topic"
                                placeholder="<?php echo e(__('messages.Your query topic')); ?>">
                            <input type="text" required name="phone" id="phone"
                                placeholder="<?php echo e(__('messages.Enter Phone number')); ?>">
                            <textarea name="message" required id="message" placeholder="<?php echo e(__('messages.Enter Your Messages')); ?>"></textarea>
                            <button type="submit"><?php echo e(__('messages.Submit')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contactpg-part2-main-box">
            <div class="part1-part-main-box">
                <div class="part2-first-main-box">
                    <div class="part2-part-main-box">
                        <div class="part2-icon-main-box">
                            <img src="<?php echo e(asset('front/img/cphone.png')); ?>">
                        </div>
                        <h3><?php echo e(__('messages.Call us')); ?></h3>
                        <p><?php echo e($setting->phone_no); ?></p>
                    </div>
                    <div class="part2-part-main-box">
                        <div class="part2-icon-main-box">
                            <img src="<?php echo e(asset('front/img/cmail.png')); ?>">
                        </div>
                        <h3><?php echo e(__('messages.Email address')); ?></h3>
                        <p><?php echo e($setting->email); ?></p>
                    </div>
                    <div class="part2-part-main-box part2-part-font-main-box">
                        <p> Our team is working tirelessly to assist you</p>
                        <div class="part2-icon-main-box">
                            <a href="<?php echo e($setting->facebook_id); ?>"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="part2-icon-main-box">
                            <a href="<?php echo e($setting->instagram_id); ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/contactus.blade.php ENDPATH**/ ?>