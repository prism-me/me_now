
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="workshop_wrapper">
        <div class="banner-img">
            <div class="row no-gutters">
                <div class="col-md-9">
                    <img src="<?php echo e(@$workshop->banner_img); ?>" alt="" class="img-fluid banner workshop-banner">

                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="workshop_inner_overlay" data-aos="fade-left">
                <div class="meta_content">
                    <div class="meta1"><span class="fa fa-chevron-right"></span> <b>Date & Time:
                        </b>&nbsp;
                        <?php $event_date = $workshop->event_date; ?>
                        <select name="date_time" id="" class="form-control" style="color:#000;width:80%;font-size: 13px;
                                padding-left: 7px;">
                            <option value="0">Select Date and Time</option>
                            <?php $__currentLoopData = $event_date; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($date); ?>"><?php echo e(date('m/d/Y H:i:s', strtotime($date))); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    
                    <div class="meta1"><span class="fa fa-chevron-right"></span> <b>Workshop Type:
                        </b>&nbsp;<?php echo e(ucfirst($workshop->event_type)); ?></div>
                    <div class="meta1"><span class="fa fa-chevron-right"></span> <b>Age: </b>&nbsp; Adults (18
                        Yrs+) </div>
                    <div class="meta1"><span class="fa fa-chevron-right"></span> <b>Facilitated by: </b></div>

                </div>
                <div class="facilitated">
                    
                    <div class="content">
                        <img src="<?php echo e($workshop->doctor->image); ?>" class="img-circle" alt="profile">
                        <h4><?php echo e($workshop->doctor->name); ?></h4>
                        <p><span><?php echo e($workshop->doctor->designation); ?></span></p>
                    </div>
                </div>

                <span class="workshop-share"><b>Share:</b></span>
                <?php echo $social; ?>



                
            </div>
        </div>

        <div class="container-fluid">

            

            
            <div class="row workshop-inner-wrapper global-heading" data-aos="zoom-in">
                <div class="col-md-7 col-sm-12 col-12">

                    <h2 class="text-left"><?php echo e($workshop->title); ?></h2>
                    <div class="text-justify">
                        <?php echo $workshop->description; ?>

                    </div>

                </div>
                <div class="col-md-5 col-sm-12 col-12">

                    <div class="header-appo-main-box ">
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
                                
                                <input type="text" required name="first_name" id="name" placeholder="First Name">
                                <input type="text" required name="last_name" id="name" placeholder="Last Name">
                                <input type="text" required name="email" id="email" placeholder="Email"
                                    class="appo-right-input">
                                <input type="text" required name="phone_number" id="phone_no" placeholder="Phone Number">
                                <?php $event_date = $workshop->event_date; ?>
                                <select name="date" id="" class="form-control" style="color:#000;width:100%;">
                                    <option value="0">Select Date and Time</option>
                                    <?php $__currentLoopData = $event_date; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($date); ?>"><?php echo e(date('m/d/Y H:i:s', strtotime($date))); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <textarea type="text" required name="message" id="message_workshop" placeholder="Your Message"></textarea>
                            </div>
                            <div class="appo-btn-main-box">

                                <button type="submit" ><?php echo e(__('messages.Book Now')); ?></button>


                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        // $(document).ready(function() {

        //     $(".workshop-banner").hover(function() {

        //         $('.workshop_inner_overlay').css({'display' : 'block'});
        //         // $('.workshop_inner_overlay').attr("data-aos", "fade-left");

        //     }, function() {

        //         $('.workshop_inner_overlay').css({'display' : 'none'});
        //         $(this).attr("data-aos", "");

        //     });
        // });

        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/workshops_inner.blade.php ENDPATH**/ ?>