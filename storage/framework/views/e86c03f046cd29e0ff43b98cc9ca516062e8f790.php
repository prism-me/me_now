
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Doctor Details')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="d-detailpg-main-box">
<div class="container">
   <div class="d-detailpg-part-main-box">
      <div class="row">
         <div class="col-lg-9 col-md-12">
            <?php if(Session::get("message")): ?>
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
               <?php echo e(Session::get("message")); ?>

               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">×</span>
               </button>
            </div>
            <?php endif; ?>
            <div class="row">
               <div class="col-md-5">
                  <?php if ($doctorDetail->image) {
                     $image = $doctorDetail->image;
                     } else {
                     $image = asset('upload/profile/profile.png');
                     } 
                     ?>
                  <div class="doctor-detail-img-box" style="background-image: url('<?= $image ?>')">
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="doctor-detail-main-box">
                     <h4><?php echo e($doctorDetail->name); ?></h4>
                     <h6><?php echo e(isset($doctorDetail->department)?$doctorDetail->department->name:""); ?></h6>
                     <span>
                        <?php
                           $arr = explode(".", $doctorDetail->ratting);
                           
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
                        <h3>( <?php echo e($doctorDetail->total_ratting); ?> <?php echo e(__('messages.Rating')); ?> )</h3>
                     </span>
                     <p><?php echo e(substr($doctorDetail->about_us,0,250)); ?></p>
                     <div class="icons-images doctor-detail-icon-box">
                        <span class="facebook-doctorl">
                        <a href="<?php echo e(isset($doctorDetail->facebook_id)?$doctorDetail->facebook_id:''); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </span>
                        <span class="twitter-doctorl">
                        <a href="<?php echo e(isset($doctorDetail->twitter_id)?$doctorDetail->twitter_id:''); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        </span>
                        <span class="gp-doctorl">
                        <a href="<?php echo e(isset($doctorDetail->google_id)?$doctorDetail->google_id:''); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        </span>
                        <span class="instagram-doctorl">
                        <a href="<?php echo e(isset($doctorDetail->instagram_id)?$doctorDetail->instagram_id:''); ?>" target="_blank"><img src="<?php echo e(asset('front/img/instagram.png')); ?>"></a>
                        </span>
                     </div>
                     <div class="appo-btn-main-box">
                    
                        <a href="#" data-toggle="modal" data-target="#appointmentModal" onclick="changedatamodelapp('<?php echo e($doctorDetail->department_id); ?>','<?php echo e($doctorDetail->department->name); ?>','<?php echo e($doctorDetail->user_id); ?>','<?php echo e($doctorDetail->name); ?>')"><?php echo e(__('messages.Make an appointment')); ?></a>
                       
                        
                     </div> 
                  </div>
               </div>
            </div>
            <div class="d-detail-main-box">
               <div class="d-pricelist-main-box">
                  <div class="global-part-heading global-heading">
                     <h3><?php echo e(__('messages.Working time')); ?></h3>
                  </div>
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="pricelist-part-detail-mainbox">
                           <?php $arr = [__('messages.Monday'), __('messages.Tuesday'), __('messages.Wednesday'), __('messages.Thursday'), __('messages.Friday'), __('messages.Saturday'), __('messages.Sunday')]; ?>
                           <div class="pricelist-part-detail-box">
                              <p><?php echo e($arr[0]); ?></p>
                              <?php if (isset($doctorDetail->TimeTabledata[0])) {
                                 @$starttime = date_format(date_create($doctorDetail->TimeTabledata[0]->from), "H:i a");
                                 $endtime = date_format(date_create($doctorDetail->TimeTabledata[0]->to), "h:i a");
                                 } ?>
                              <span>- <?php echo e(@$starttime); ?> <?php echo e(__('messages.To')); ?> <?php echo e($endtime); ?></span>
                           </div>
                           <div class="pricelist-part-detail-box">
                              <p><?php echo e($arr[1]); ?></p>
                              <?php if (isset($doctorDetail->TimeTabledata[1])) {
                                 $starttime = date_format(date_create($doctorDetail->TimeTabledata[1]->from), "H:i a");
                                 $endtime = date_format(date_create($doctor->TimeTabledata[1]->to), "h:i a");
                                 } ?>
                              <span>- <?php echo e($starttime); ?> <?php echo e(__('messages.To')); ?> <?php echo e($endtime); ?></span>
                           </div>
                           <div class="pricelist-part-detail-box">
                              <p><?php echo e($arr[2]); ?></p>
                              <?php if (isset($doctor->TimeTabledata[2])) {
                                 $starttime = date_format(date_create($doctor->TimeTabledata[2]->from), "H:i a");
                                 $endtime = date_format(date_create($doctor->TimeTabledata[2]->to), "h:i a");
                                 } ?>
                              <span>- <?php echo e($starttime); ?> <?php echo e(__('messages.To')); ?> <?php echo e($endtime); ?></span>
                           </div>
                           <div class="pricelist-part-detail-box">
                              <p><?php echo e($arr[3]); ?></p>
                              <?php if (isset($doctor->TimeTabledata[3])) {
                                 $starttime = date_format(date_create($doctor->TimeTabledata[3]->from), "H:i a");
                                 $endtime = date_format(date_create($doctor->TimeTabledata[3]->to), "h:i a");
                                 } ?>
                              <span>- <?php echo e($starttime); ?> <?php echo e(__('messages.To')); ?> <?php echo e($endtime); ?></span>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="pricelist-part-detail-mainbox">
                           <div class="pricelist-part-detail-box">
                              <p><?php echo e($arr[4]); ?></p>
                              <?php if (isset($doctor->TimeTabledata[4])) {
                                 $starttime = date_format(date_create($doctor->TimeTabledata[4]->from), "H:i a");
                                 $endtime = date_format(date_create($doctor->TimeTabledata[4]->to), "h:i a");
                                 } ?>
                              <span>- <?php echo e($starttime); ?> to <?php echo e($endtime); ?></span>
                           </div>
                           <div class="pricelist-part-detail-box">
                              <p><?php echo e($arr[5]); ?></p>
                              <?php if (isset($doctor->TimeTabledata[5])) {
                                 $starttime = date_format(date_create($doctor->TimeTabledata[5]->from), "H:i a");
                                 $endtime = date_format(date_create($doctor->TimeTabledata[5]->to), "h:i a");
                                 }
                                 ?>
                              <span>- <?php echo e($starttime); ?> to <?php echo e($endtime); ?></span>
                           </div>
                           <div class="pricelist-part-detail-box">
                              <p><?php echo e($arr[6]); ?></p>
                              <?php if (isset($doctor->TimeTabledata[6])) {
                                 $starttime = date_format(date_create($doctor->TimeTabledata[6]->from), "H:i a");
                                 $endtime = date_format(date_create($doctor->TimeTabledata[6]->to), "h:i a");
                                 }
                                 ?>
                              <span>- <?php echo e($starttime); ?> to <?php echo e($endtime); ?></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="doctorpg-tab-mainbox doctordetailpg-tab-mainbox">
               <section class="customer-logos slider tab">
                  <div class="slide tablinks" id="defaultOpen" onclick="openCity(event, 'aboutdoctor')">
                     <?php echo e(__('messages.About Doctor')); ?>

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
                     <h3><?php echo e(__('messages.About us')); ?></h3>
                     <p><?php echo e($doctor->about_us); ?></p>
                  </div>
               </div>
            </div>
            <div id="services" class="tabcontent">
               <div class="dd-tab-part-mbox">
                  <div class="global-part-heading global-heading">
                     <h3><?php echo e(__('messages.Service')); ?></h3>
                     <p><?php echo e($doctor->service); ?></p>
                  </div>
               </div>
            </div>
            <div id="addreview" class="tabcontent">
               <?php if(Auth::id()): ?>
               <div class="dd-tab-part-mbox">
                  <div class="global-part-heading global-heading">
                     <h3><?php echo e(__('messages.Add review')); ?></h3>
                     <span id="loginerrorreview"></span>
                     <form action="<?php echo e(url('addreview')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>  
                        <input type="hidden" name="doctor_id" value="<?php echo e($id); ?>"> 
                        <div class="yourrating-main-box">
                           <h5><?php echo e(__("messages.Your rating")); ?></h5>
                           <span class="star-rating">
                           <input type="radio" id="5-stars" name="rating" value="5" />
                           <label for="5-stars" class="star"><i class="fas fa-star"></i></label>
                           <input type="radio" id="4-stars" name="rating" value="4" />
                           <label for="4-stars" class="star"><i class="fas fa-star"></i></label>
                           <input type="radio" id="3-stars" name="rating" value="3" />
                           <label for="3-stars" class="star"><i class="fas fa-star"></i></label>
                           <input type="radio" id="2-stars" name="rating" value="2" />
                           <label for="2-stars" class="star"><i class="fas fa-star"></i></label>
                           <input type="radio" id="1-star" name="rating" value="1" />
                           <label for="1-star" class="star"><i class="fas fa-star"></i></label>
                           </span>
                        </div>
                        <div class="yourrating-main-box">
                           <h5><?php echo e(__('messages.Your review')); ?></h5>
                           <textarea id="messages" name="messages" required=""></textarea>
                           <div class="appo-btn-main-box">
                              <?php if(Auth::id()): ?>
                              <button type="submit"><?php echo e(__('messages.submit')); ?></button>
                              <?php else: ?>
                              <button type="button" onclick="userloginalert()"><?php echo e(__('messages.submit')); ?></button>
                              <?php endif; ?>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <?php else: ?>
               <p style="margin-top: 15px;">
                  <?php echo e(__("messages.Please")); ?> <a href="#" onclick="showloginmodel()" data-toggle="modal" data-target="#myModal"><?php echo e(__("messages.Login")); ?></a> <?php echo e(__("messages.Your Account Then Try To Review")); ?>

                  <?php endif; ?>
               </p>
            </div>
         </div>
         <div class="col-lg-3 col-md-12">
            <div class="d-detail-emergency-mainbox">
               <img src="<?php echo e(asset('front/img/emergency.png')); ?>">
               <p><?php echo e(__('messages.Emergency Number')); ?></p>
               <h4><?php echo e($doctorDetail->phone_no); ?></h4>
            </div>
            <div class="d-detail-emergency-mainbox">
               <img src="<?php echo e(asset('front/img/mailoutline.png')); ?>">
               <p><?php echo e(__('messages.Email address')); ?></p>
               <h4><?php echo e($doctorDetail->email); ?></h4>
            </div>
            
         </div>
         
      </div>
   </div>
</div>
<?php if(count($review)>0): ?>
<div class="testimonial-main-box">
   <div class="container">
      <div class="global-heading">
         <h2><?php echo e(__('messages.Patient Reviews')); ?></h2>
         <p><?php echo e(__('messages.reviewline')); ?></p>
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
						    				 if($r->users->profile_pic!=""){
									     	   		$image=asset('upload/profile')."/".$r->users->profile_pic;
									     	   }elseif(isset($r->doctors)&&isset($r->doctors-> $image)){
									     	   		$image=asset('upload/doctor')."/".$r->doctors->image;
									     	   }else{
									     	   		 $image=asset('upload/profile/profile.png');
									     	   }
						    			?>
						    			<img src="<?php echo e($image); ?>" class="testimonial-profile-img">
						    		    </div>
						    		    <div class="col-md-9 testtext">
						    		        	<p class="testip"><?php echo e($r->review); ?></p>
						    				<span class="testimonialspan"></span>
						    			<?php if(isset($r->users->name)): ?>
						    			<h3 class="testimonialh">- <?php echo e($r->users->name); ?></h3>
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
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/doctordetails.blade.php ENDPATH**/ ?>