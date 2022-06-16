
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Save Department Service')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Save Department Service')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/department')); ?>"><?php echo e(__('messages.Department')); ?></a></li>
               <li><a href="<?php echo e(url('admin/departmentservice').'/'.$departmentservice); ?>"><?php echo e(__('messages.Department Service')); ?></a></li>
               <li class="active"><?php echo e(__('messages.Save Department Service')); ?></li>
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
                  <form action="<?php echo e(url('admin/updatedepartmentservice')); ?>" method="post" novalidate="novalidate" enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>

                     <input type="hidden" name="depart_id" id="depart_id" value="<?php echo e($departmentservice); ?>"/>   
                     <input type="hidden" name="id" id="id" value="<?php echo e($id); ?>"/>                 
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Name')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="name" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Name')); ?>" class="form-control"  name="name" value="<?php echo e(isset($data->name)?$data->name:''); ?>">
                     </div>
                     
                     
                     <div class="form-group">
                        <label for="email" class=" form-control-label">
                        <?php echo e(__('messages.Excerpt')); ?><span class="reqfield" >*</span>
                        </label>
                        <textarea  id="excerpt" name="excerpt"  class="form-control"><?php echo e(isset($data->excerpt)?$data->excerpt:''); ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="email" class=" form-control-label">
                        <?php echo e(__('messages.Short Description')); ?><span class="reqfield" >*</span>
                        </label>
                        <textarea  id="short_description" name="short_description"  class="form-control"><?php echo e(isset($data->short_description)?$data->short_description:''); ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="email" class=" form-control-label">
                        <?php echo e(__('messages.Description')); ?><span class="reqfield" >*</span>
                        </label>
                        <textarea  id="description" name="description"  class="form-control"><?php echo e(isset($data->description)?$data->description:''); ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Slug')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="slug" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Slug')); ?>" class="form-control"  name="slug" value="<?php echo e(isset($data->slug)?$data->slug:''); ?>">
                     </div>
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        Banner Image<span class="reqfield" >*</span>
                        </label>
                        <div>
                           <input type="file" id="file" name="banner_image" class="form-control-file" accept="image/*">
                        </div>
                     </div>
                      <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        <?php echo e(__('messages.Image')); ?><span class="reqfield" >*</span>
                        </label>
                        <img src="<?php echo e(isset($data->img)?$data->img:''); ?>" class="imgsize1 departmentimg" style="width:50px;height:50px;"/> 
                        <div>
                           <input type="file" id="file" name="img" class="form-control-file" accept="img/*">
                        </div>
                     </div>
                       
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
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u877734042/domains/menow.ae/public_html/resources/views/admin/department/addservice.blade.php ENDPATH**/ ?>