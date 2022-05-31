
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
                    <img src="<?php echo e(asset('front/img/woman-empowerment.jpg')); ?>" alt="" class="img-fluid">

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


                                <li><span class="fa fa-check"></span> Free access to all Me Now workshops</li>
                                <li><span class="fa fa-check"></span>15% off on all private sessions</li>
                                <li><span class="fa fa-check"></span> Access to anger release room</li>
                                <li><span class="fa fa-check"></span> Free beverages from the coffee corner</li>
                                <li><span class="fa fa-check"></span> Access to the center’s liberary</li>
                                <li><span class="fa fa-check"></span> Participation in all the Me Now events</li>
                                <li><span class="fa fa-check"></span> Unlimited networking & socializing opportunities
                                </li>
                                <li><span class="fa fa-check"></span> Be a part of an exclusive group, always ready to
                                    help and be there for each other</li>

                            </ul>
                            <button class="btn btn-primary get-in-touch-button" data-toggle="modal"
                                data-target="#appointmentModal"><?php echo e(__('Book Now')); ?></button>
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

                                <li><span class="fa fa-check"></span> 10% discount on all the center’s facilities</li>
                                <li><span class="fa fa-check"></span> Free access to all Me Now workshops</li>
                                <li><span class="fa fa-check"></span> Access to anger release room</li>
                                <li><span class="fa fa-check"></span> Free beverages from the coffee corner</li>
                                <li><span class="fa fa-check"></span> Access to the center’s liberary</li>
                                <li><span class="fa fa-check"></span> Participation in all the Me Now events</li>
                                <li><span class="fa fa-check"></span> Unlimited networking & socializing opportunities
                                </li>
                                <li><span class="fa fa-check"></span> Be a part of an exclusive group, always ready to
                                    help and be there for each other.</li>


                            </ul>
                            <button class="btn btn-primary get-in-touch-button" data-toggle="modal"
                                data-target="#appointmentModal"><?php echo e(__('Book Now')); ?></button>
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
                                <li><span class="fa fa-check"></span>Get 1 month free</li>
                                <li><span class="fa fa-check"></span>Get 5 free sessions of Holistinc Therapy or hypnosis
                                    therapy sessions</li>
                                <li><span class="fa fa-check"></span>10% discount on all the center’s facilities</li>
                                <li><span class="fa fa-check"></span>Free access to all Me Now workshops</li>
                                <li><span class="fa fa-check"></span> Access to anger release room</li>
                                <li><span class="fa fa-check"></span> Free beverages from the coffee corner</li>
                                <li><span class="fa fa-check"></span> Access to the center’s liberary</li>
                                <li><span class="fa fa-check"></span>Participation in all the Me Now events</li>
                                <li><span class="fa fa-check"></span> Unlimited networking & socializing opportunities</li>


                            </ul>
                            <button class="btn btn-primary get-in-touch-button" data-toggle="modal"
                                data-target="#appointmentModal"><?php echo e(__('Book Now')); ?></button>
                        </div>
                    </div>
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