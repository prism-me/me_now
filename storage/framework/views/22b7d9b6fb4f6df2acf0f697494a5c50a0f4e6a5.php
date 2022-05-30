
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="global-heading">
            <h2>Me Now Empowers Women</h2>
            <p>At Me Now Center, we're doing our bit to support women and help them achieve their full
                potential. It is a place where women can feel confident and fulfilled, physically, mentally, and
                emotionally in all aspects of their lives. We are no less than a family dedicated to supporting
                each other and building a community of like-minded, empowered women. Me Now has special
                memberships for women that come with unlimited benefits including discounts on facilities, free
                workshops, and much more
            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-6">
                    <img src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg"
                        alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="who_we_are_cotent">
                        <h2>What Our Membership Holders Get</h2>
                        
                        <p>
                            Our members get exclusive benefits including free access to all the workshops, and discounts on
                            the center’s facilities, including anger rooms. Moreover, free drinks from the coffee corner as
                            well. Our members also get to participate in our events which bring unlimited networking and
                            socializing opportunities. This and much more is waiting yet to be explored by you. Join Me Now
                            and start your journey towards a better, more happening, and fulfilled life.
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="about_tiles">
            <div class="global-heading mb-4">
                <h2>Our Membership Plans</h2>
                <p>Me Now has three different membership plans that come with different and distinct benefits. You can opt
                    for a 1-month membership or go for a tri-monthly or 6-month membership. Each membership plan comes with
                    its own advantages. Explore the plans to know more.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-tile">
                        <div class="inner-single-title">
                            
                            <h4 class="text-center">
                                1 Month
                            </h4>
                            <h5 class="price">AED 3120 </h5>
                            <ul>
                                <li><span class="fa fa-check"></span> For private session /15% Discount</li>
                                <li><span class="fa fa-check"></span> Access for all workshop</li>
                                <li><span class="fa fa-check"></span> They can use anger release room</li>
                                <li><span class="fa fa-check"></span> They can enjoy center coffee corner</li>
                                <li><span class="fa fa-check"></span> They can use center library</li>
                                <li><span class="fa fa-check"></span> Access to all center activities and events</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile middle">
                        <div class="inner-single-title">
                            
                            <h4 class="text-center">
                                3 Months
                            </h4>
                            <h5 class="price"> AED 9,630 </h5>
                            <ul>

                                <li><span class="fa fa-check"></span> They will get 10% Discount</li>
                                <li><span class="fa fa-check"></span> Access for all workshop</li>
                                <li><span class="fa fa-check"></span> They can use anger release room</li>
                                <li><span class="fa fa-check"></span> They can enjoy center coffee corner</li>
                                <li><span class="fa fa-check"></span> They can use center library</li>
                                <li><span class="fa fa-check"></span> Access to all center activities and events</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-tile">
                        <div class="inner-single-title">
                            
                            <h4 class="text-center">
                                6 Months
                            </h4>
                            <h5 class="price"> AED 16,050</h5>
                            <ul>
                                <li><span class="fa fa-check"></span> 1 month free</li>
                                <li><span class="fa fa-check"></span> They will get 10% Discount</li>
                                <li><span class="fa fa-check"></span> Access for all workshop</li>
                                <li><span class="fa fa-check"></span> They can use anger release room</li>
                                <li><span class="fa fa-check"></span> They can enjoy center coffee corner</li>
                                <li><span class="fa fa-check"></span> They can use center library</li>
                                <li><span class="fa fa-check"></span> Access to all center activities and events</li>
                                <li><span class="fa fa-check"></span> 5 session free Holistic Therapy or Hypnosis Therapy
                                    sessions</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="doctorl-main-box">
            <div class="container">
                <div class="global-heading">
                    <h2><?php echo e(__('messages.Meet Our Doctors')); ?></h2>
                    <p><?php echo e(__('messages.Talent wins games, but teamwork and intelligence win championships')); ?></p>
                </div>
                <div class="row">
                    <?php if(count($doctor) > 0): ?>
                        <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 ">
                                <div class="doctorl-part-box">
                                    <?php
                                    if ($d->image) {
                                        $image = $d->image;
                                    } else {
                                        $image = asset('upload/profile/profile.png');
                                    }
                                    ?>
                                    <a href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>" class="anchor-doctor-image">
                                        <div class="doctorl-dp-img doctorl-dp-img-1"
                                            style="background-image: url('<?= $image ?>')"></div>
                                    </a>
                                    <div class="doctorl-part-detail">
                                        <h4><a href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>"
                                                class="anchor-doctor-image"><?php echo e(ucwords($d->name)); ?></a></h4>
                                        <p><?php echo e(substr(trim($d->about_us), 0, 135)); ?> ... <a href="<?php echo e(url('doctordetails/') . '/' . $d->slug); ?>">Read More</a> </p>
                                        <div class="book_appointment_doctor">
                                            <button data-toggle="modal" data-target="#appointmentModal">Make an
                                                Appointment</button>
                                        </div>
                                    </div>
                                    <div class="icons-images">
                                        
                                        
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="numbers-counter-main-box">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="<?php echo e(asset('front/img/n1.png')); ?>">
                            <div class="counter-value" data-count="10200">
                                <?php echo e($setting->happy_client); ?>

                            </div>
                            <div class="counter-name">
                                <p><?php echo e(__('messages.Happy people')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="<?php echo e(asset('front/img/n2.png')); ?>">
                            <div class="counter-value" data-count="700">
                                <?php echo e($setting->surgery_complete); ?>

                            </div>
                            <div class="counter-name">
                                <p><?php echo e(__('messages.SURGERY COMPLETED')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="<?php echo e(asset('front/img/n3.png')); ?>">
                            <div class="counter-value" data-count="189">
                                <?php echo e($setting->expert_doctor); ?>

                            </div>
                            <div class="counter-name">
                                <p><?php echo e(__('messages.Expert doctors')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="numbers-counter-part-box">
                        <div id="counter">
                            <img src="<?php echo e(asset('front/img/n4.png')); ?>">
                            <div class="counter-value" data-count="11">
                                <?php echo e($setting->worldwide_branch); ?>

                            </div>
                            <div class="counter-name">
                                <p><?php echo e(__('messages.World wide branch')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="global-heading">
            <h2><?php echo e(__('messages.Frequently Asked Questions')); ?></h2>
            <p><?php echo e(__('messages.Talent wins games, but teamwork and intelligence win championships')); ?></p>
        </div>
        <div class="faq my-5">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true">
                        <span class="title">Collapsible Group Item #1 </span>
                        <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                    </div>
                    <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        <span class="title">Collapsible Group Item #2</span>
                        <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                    </div>
                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="false">
                        <span class="title">Collapsible Group Item #3</span>
                        <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                    </div>
                    <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
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

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/women_empowerment.blade.php ENDPATH**/ ?>