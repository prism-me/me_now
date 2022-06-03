
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="banner-img">
            <img src="<?php echo e(@$workshop->banner_img); ?>" alt="" class="img-fluid">
        </div>
        <div class="meta_content">
            <div class="meta1"> <b>Date:</b>&nbsp;<?php echo e($workshop->event_date); ?></div>
            
            <div class="meta1"> <b>Event Type:</b>&nbsp;<?php echo e(ucfirst($workshop->event_type)); ?></div>
        </div>
        <div class="form-group">
            <div class="col-md-7">
        
                <h3><?php echo e($workshop->title); ?></h3>
                <p>
                    <?php echo $workshop->short_description; ?>

                </p>
                <p>
                    <?php echo e($workshop->description); ?>

                </p>
                <div class="facilitated">
                    <h4>Facilitated by</h4>
                    <div class="content">
                        <img src="https://menow.b-cdn.net/images/d1-1-165390457334.jpg" class="img-circle" alt="profile">
                        <h4>Dr. Aleksandra Shumar</h4>
                        <p><span>Life Coaching Expert</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
            
               <div class="header-appo-main-box">
                    <h1><?php echo e(__('messages.Book Now!')); ?></h1>
                    <?php if(Session::get('message')): ?>
                        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                            <?php echo e(Session::get('message')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <span id="loginerrorreview"></span>
                    <form action="<?php echo e(url('workshop-booking')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="appo-input-main-box">
                            <input type="hidden" name="price" value="<?php echo e($workshop->price); ?>">
                            <input type="hidden" name="name" value="<?php echo e($workshop->title); ?>">
                            <label class="text-sm text-gray-500">Number of attendees? <span class="text-red-500">*</span></label>
                            <input  type="number" name="attendees" min="1" max="5"  required value="1"><br><br>
                            <input type="text" required name="first_name" id="name" placeholder="Your First name">
                            <input type="text" required name="last_name" id="name" placeholder="Your Last Name">
                            <input type="text" required name="email" id="email" placeholder="E-Mail" class="appo-right-input">
                            <input type="text" required name="phone_number" id="phone_no" placeholder="Phone number">
                            <input type="date" required name="dob" id="app_date" data-date-inline-picker="true"
                                min="<?= date('Y-m-d') ?>" placeholder="DOB">
                            <textarea type="text" required name="message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="appo-btn-main-box">
                            <?php if(Auth::id()): ?>
                                <button type="submit"><?php echo e(__('messages.Book Now')); ?></button>
                            <?php else: ?>
                                <button type="button" onclick="changehiddenstatus()" data-toggle="modal"
                                    data-target="#myModal"><?php echo e(__('messages.Book Now')); ?></button>
                            <?php endif; ?>

                        </div>
                    </form>
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/front/workshops_inner.blade.php ENDPATH**/ ?>