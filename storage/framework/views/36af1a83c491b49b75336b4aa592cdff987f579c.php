
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Save Event')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Save Event')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/events')); ?>"><?php echo e(__('messages.Event')); ?></a></li>
               <li class="active"><?php echo e(__('messages.Save Event')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row rowcenter">
         <div class="col-md-9">
            <div class="card">
               <div class="card-body">
                  <?php if(Session::has('message')): ?>
                  <div class="col-sm-12">
                     <div class="alert  <?php echo e(Session::get('alert-class', 'alert-info')); ?> alert-dismissible fade show" role="alert"><?php echo e(Session::get('message')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
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
                  <form action="<?php echo e(URL::to('admin/update-event' .'/'.$data->slug)); ?>" method="POST"  novalidate="novalidate" enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>

                             
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Name')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="name" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Name')); ?>" class="form-control" required name="name" value="<?php echo e(isset($data->name)?$data->name:''); ?>">
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Short Description')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="short_description" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Short Description')); ?>" class="form-control" required name="short_description" value=""><?php echo e($data->short_description); ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Description')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="description" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Description')); ?>" class="form-control" required name="description" value=""><?php echo e($data->description); ?></textarea>
                     </div>
                     <div class="form-group">
                        
                        <label for="file" class=" form-control-label">  
                           <img src="<?php echo e(isset($data->banner_img)?$data->banner_img:''); ?>" class="img-fluid" style="width:50px;height:50px;"/> 
                        <?php echo e(__('messages.Banner Image')); ?><span class="reqfield" >*</span>

                        </label>
                        <input type="file" id="file" name="banner_img" class="form-control-file" accept="image/*">
                    
                     <div>
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        <img src="<?php echo e(isset($data->thumbnail_img)?$data->thumbnail_img:''); ?>" class="img-fluid" style="width:50px;height:50px;"/> 

                        <?php echo e(__('messages.Thumbnail Image')); ?><span class="reqfield" >*</span>
                        </label>
                        <input type="file" id="file" name="thumbnail_img" class="form-control-file" accept="image/*">
                    
                     <div>
                     <div class="form-group">
                           <label for="name" class=" form-control-label">
                           <?php echo e(__('messages.Slug')); ?>

                           </label>
                           <input type="text" id="slug" required placeholder="<?php echo e(__('messages.Enter').' '.__('messages.Slug')); ?>"  class="form-control"  name="slug" value="<?php echo e(isset($data->slug)?$data->slug:''); ?>">
                     </div>
                     <div class="form-group">
                        <?php if(Session::get("is_demo")=='1'): ?>
                           <button id="payment-button" type="button"  onclick="disablebtn()" class="btn btn-lg btn-info" >
                              <?php echo e(__('messages.Submit')); ?>

                              </button>
                        <?php else: ?>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info" >
                              <?php echo e(__('messages.Submit')); ?>

                              </button>
                        <?php endif; ?>
                     </div>
                       
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/admin/event/save.blade.php ENDPATH**/ ?>