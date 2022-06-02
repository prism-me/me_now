
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Save Doctor')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Save Doctor')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/doctor')); ?>"><?php echo e(__('messages.Doctors')); ?></a></li>
               <li class="active"><?php echo e(__('messages.Save Doctor')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row rowcenter">
         <div class="col-md-10">
            <div class="card">
               <div class="card-body">
                  <?php if(Session::get("message")): ?>
                  <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                     <?php echo e(Session::get("message")); ?>

                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <?php endif; ?>
                  <?php if($errors->any()): ?>
                  <div class="alert alert-danger">
                     <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </div>
                  <?php endif; ?>  
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item">
                        <?php echo e(__('messages.Basic Information')); ?>

                     </li>
                    
                  </ul>
                  <div class="tab-content pl-3 p-1" id="myTabContent">
                        <form action="<?php echo e(url('admin/updatedoctorprofile')); ?>" method="post"  enctype="multipart/form-data">
                           <?php echo e(csrf_field()); ?>

                           <input type="hidden" name="id" id="id" value="<?php echo e($doctor_id); ?>"/>
                           <input type="hidden" name="real_image" id="real_image" value="<?php echo e(isset($data->image)?$data->image:''); ?>"/>
                           <div class="form-group">
                              <div class="col-md-6" >
                                 <label for="name" class=" form-control-label">
                                 <?php echo e(__('messages.Select Department')); ?>

                                 <span class="reqfield" >*</span>
                                 </label>
                                 <select id="department" name="department"  class="form-control">
                                    <option value=""><?php echo e(__('messages.Select Department')); ?></option>
                                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($d->id); ?>" <?= isset($data->department_id) && $data->department_id == $d->id ? "selected='selected'" : "" ?> ><?php echo e($d->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select>
                              </div>
                              <div class="col-md-6"> 
                                 <label for="name" class=" form-control-label">
                                 <?php echo e(__('messages.Doctor Name')); ?>

                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="name" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Doctor Name')); ?>" class="form-control"  name="name" value="<?php echo e(isset($data->name)?$data->name:''); ?>">
                              </div>
                           </div>
                           <div class="form-group">
                              <div class="col-md-6">
                                 <label for="email" class=" form-control-label">
                                 <?php echo e(__('messages.Email')); ?>

                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="email" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Email')); ?>" class="form-control"  name="email" value="<?php echo e(isset($data->email)?$data->email:''); ?>">
                              </div>
                              
                           </div>
                           <div class="form-group">
                              <div class="col-md-6">
                                 <label for="phone" class=" form-control-label">
                                 <?php echo e(__('messages.Phone No')); ?>

                                 <span class="reqfield" >*</span>
                                 </label>
                                 <input type="text" id="phone_no" placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Phone No')); ?>" class="form-control"  name="phone_no" value="<?php echo e(isset($data->phone_no)?$data->phone_no:''); ?>">
                              </div>
                              <div class="col-md-6">
                              </div>
                           </div>
                           
                           <div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              <?php echo e(__('messages.Short Description')); ?><span class="reqfield" >*</span>
                              </label>
                              <textarea  id="short_description" name="short_description"  class="form-control"><?php echo e(isset($data->short_description)?$data->short_description:''); ?></textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              <?php echo e(__('messages.Description')); ?><span class="reqfield" >*</span>
                              </label>
                              <textarea  id="description" name="description"  class="form-control"><?php echo e(isset($data->description)?$data->description:''); ?></textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              <?php echo e(__('messages.About')); ?><span class="reqfield" >*</span>
                              </label>
                              <textarea  id="description" name="about_us"  class="form-control"><?php echo e(isset($data->about_us)?$data->about_us:''); ?></textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="email" class=" form-control-label">
                              <?php echo e(__('messages.Service')); ?><span class="reqfield" >*</span>
                              </label>
                              <textarea  id="description" name="service"  class="form-control"><?php echo e(isset($data->service)?$data->service:''); ?></textarea>
                           </div>
                           <div class="col-md-12 form-group">
                              <label for="file" class=" form-control-label">  
                              <?php echo e(__('messages.Image')); ?><span class="reqfield" >*</span>
                              </label>
                              <?php if($doctor_id!=0): ?>
                              <img src="<?php echo e($data->image); ?>" class="imgsize1 btndepartwarning" /> 
                              <?php endif; ?>
                                 <input type="file" id="file" name="image" class="form-control-file" accept="image/*">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <label for="name" class=" form-control-label">
                              <?php echo e(__('messages.Slug')); ?>

                              </label>
                              <input type="text" id="slug"  placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Slug')); ?>"  class="form-control"  name="slug" value="<?php echo e(isset($data->slug)?$data->slug:''); ?>">
                           </div>
                                                   
                           <div class="col-md-12 form-group">

                              <?php if(Session::get("is_demo")=='1'): ?>
                              <button id="payment-button" type="button" onclick="disablebtn()"  class="btn btn-lg btn-info floatright">
                              <?php echo e(__('messages.Submit')); ?>

                              </button>
                                 <?php else: ?>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info floatright">
                                       <?php echo e(__('messages.Submit')); ?>

                                       </button>
                                 <?php endif; ?>
                             
                           </div>
                        </form>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/admin/doctor/savedoctor.blade.php ENDPATH**/ ?>