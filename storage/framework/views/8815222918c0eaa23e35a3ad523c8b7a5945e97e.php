
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Doctor Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="d-detailpg-main-box">
        <div class="container-fluid">
            <div class="d-detailpg-part-main-box">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <?php if(Session::get('message')): ?>
                            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                <?php echo e(Session::get('message')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-md-5">
                                <?php if ($doctor->image) {
                                    $image = $doctor->image;
                                } else {
                                    $image = asset('upload/profile/profile.png');
                                }
                                ?>
                                <div class="doctor-detail-img-box" style="background-image: url('<?= $image ?>')">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="doctor-detail-main-box">
                                    <h4><?php echo e($doctor->name); ?></h4>
                                    <h6><?php echo e($doctor->designation); ?></h6>
                                    <span>
                                        <?php
                           $arr = explode(".", $doctor->ratting);
                           
                           if (!empty($arr[0])) {
                               $i = 0;
                               if (isset($arr[0])) {
                                   for ($i = 0; $i < $arr[0]; $i++) {
                                       echo '<i class="fas fa-star"></i>';
                                   }
                               }
                               if (isset($arr[1])) {
                                   $remaing = 5 - $i;
                                   for ($j = 0; $j < $remaing; $j++) {
                                       echo '<i class="fas fa-star doctor-review-s-color"></i>';
                                   }
                               } else {
                                   $remaing = 5 - $i;
                                   for ($j = 0; $j < $remaing; $j++) {
                                       echo '<i class="fas fa-star doctor-review-s-color"></i>';
                                   }
                               }
                               if ($i == 0) { ?>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <?php }
                           } else {
                                ?>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <i class="fas fa-star doctor-review-s-color"></i>
                                        <?php
                           }
                           ?>
                                        <h3>( <?php echo e($doctor->total_ratting); ?> <?php echo e(__('messages.Rating')); ?> )</h3>
                                    </span>
                                    <p><?php echo e($doctor->about_us); ?></p>
                                    
                                    <div class="appo-btn-main-box">

                                        <button data-toggle="modal"
                                            data-target="#appointmentModal"><?php echo e(__('messages.Make an appointment')); ?></button>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="doctorpg-tab-mainbox doctorpg-tab-mainbox">
                            <section class="customer-logos slider tab">
                                <div class="slide tablinks" id="defaultOpen" onclick="openCity(event, 'aboutdoctor')">
                                    <?php echo e(__('messages.Experience')); ?>

                                </div>
                                <div class="slide tablinks" onclick="openCity(event, 'services')">
                                    <?php echo e(__('messages.Service')); ?>

                                </div>
                                <div class="slide tablinks" onclick="openCity(event, 'addreview')">
                                    <?php echo e(__('messages.Add review')); ?>

                                </div>
                            </section>
                        </div>
                        <div id="aboutdoctor" class="tabcontent">
                            <div class="dd-tab-part-mbox">
                                <div class="global-part-heading global-heading">
                                    
                                    <div><?php echo $doctor->description; ?></div>
                                </div>
                            </div>
                        </div>
                        <div id="services" class="tabcontent">
                            <div class="dd-tab-part-mbox">
                                <div class="global-part-heading global-heading">
                                    
                                    <?php $data = explode(',', $doctor->service); ?>
                                    <ul class="service-doctor">
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($value); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="addreview" class="tabcontent">
                            
                                <div class="dd-tab-part-mbox">
                                    <div class="global-part-heading global-heading dcotors-heading-effect">
                                        
                                        <span id="loginerrorreview"></span>
                                        <form action="/<?php echo e(Session::get('locale')); ?>/addreview" method="post">
                                            <?php echo e(csrf_field()); ?>

                                        
                                            <input type="hidden" name="doctor_id" value="<?php echo e($doctor->slug); ?>">
                                            <div class="yourrating-main-box">
                                                <h5><?php echo e(__('messages.Your rating')); ?></h5>
                                                <span class="star-rating">
                                                    <input type="radio" id="5-stars" name="ratting" value="5" />
                                                    <label for="5-stars" class="star"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" id="4-stars" name="ratting" value="4" />
                                                    <label for="4-stars" class="star"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" id="3-stars" name="ratting" value="3" />
                                                    <label for="3-stars" class="star"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" id="2-stars" name="ratting" value="2" />
                                                    <label for="2-stars" class="star"><i
                                                            class="fas fa-star"></i></label>
                                                    <input type="radio" id="1-star" name="ratting" value="1" />
                                                    <label for="1-star" class="star"><i
                                                            class="fas fa-star"></i></label>
                                                </span>
                                            </div>
                                            <div class="yourrating-main-box">
                                                <h5><?php echo e(__('messages.Name')); ?></h5>
                                                
                                                <input name="name" class="form-control review" required /><br>
                                                
                                                <h5><?php echo e(__('messages.E-Mail')); ?></h5>
                                                
                                                <input name="email" class="form-control review" required /><br>
                                                <h5><?php echo e(__('messages.Review')); ?></h5>
                                                
                                                <textarea id="messages" name="review" required=""></textarea>
                                                <div class="appo-btn-main-box">
                                                        <button type="submit"><?php echo e(__('messages.Submit')); ?></button>
                                                   
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="d-detail-emergency-mainbox">
                            <img src="<?php echo e(asset('front/img/emergency.png')); ?>">
                            <p><?php echo e(__('messages.Contact Me Now')); ?></p>
                            <h4><a href="tel:+971 4 239 8448"> <?php echo e($doctor->phone_no); ?></a></h4>
                        </div>
                        <div class="d-detail-emergency-mainbox">
                            <img src="<?php echo e(asset('front/img/mailoutline.png')); ?>">
                            <p><?php echo e(__('messages.Email address')); ?></p>
                            <h4><a href="mailto:<?php echo e($doctor->email); ?>"><?php echo e($doctor->email); ?></a></h4>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
        <?php if(count($review) > 0): ?>
            <div class="testimonial-main-box">
                <div class="container-fluid">
                    <div class="global-heading">
                        <h2>Client’s Reviews</h2>
                        <p>See what our clients have to say about the Me Now Center and our
                            mental health services</p>
                    </div>
                    <div class="testimonial-part-main-box">
                        <div class="owl-carousel testimonial-carousel">
                            <?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($r->users)): ?>
                                    <div class="single-testimonial">
                                        <div class="testimonial-part-box">
                                            <div class="testimonial-inner-images">
                                                <div class="col-md-3 testimage">
                                                    <?php
                                                    if ($r->users->profile_pic != '') {
                                                        $image = asset('upload/profile') . '/' . $r->users->profile_pic;
                                                    } elseif (isset($r->doctors) && isset($r->doctors->$image)) {
                                                        $image = asset('upload/doctor') . '/' . $r->doctors->image;
                                                    } else {
                                                        $image = asset('upload/profile/profile.png');
                                                    }
                                                    ?>
                                                    <img src="<?php echo e($r->img); ?>" class="testimonial-profile-img">
                                                </div>
                                                <div class="col-md-9 testtext">
                                                    <p class="testip"><?php echo e($r->review); ?></p>
                                                    <span class="testimonialspan"></span>
                                                    <?php if(isset($r->name)): ?>
                                                        <h3 class="testimonialh">- <?php echo e($r->name); ?></h3>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\me_now\resources\views/front/doctordetails.blade.php ENDPATH**/ ?>