
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Save Faq')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Save FAQ')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/faqs')); ?>"><?php echo e(__('messages.FAQ')); ?></a></li>
               <li class="active"><?php echo e(__('messages.Save FAQ')); ?></li>
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
                  <form action="<?php echo e(URL::to('admin/faqs')); ?>" method="POST" novalidate="novalidate" enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>

                             
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Title')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="title" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Title')); ?>" class="form-control" required name="title" value="<?php echo e(isset($data->title)?$data->title:''); ?>">
                     </div>
                     
                     
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Description')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="description" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Description')); ?>" class="form-control" required name="description" value="<?php echo e(isset($data->description)?$data->description:''); ?>"><?php echo e(isset($data->description)?$data->description:''); ?></textarea>
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Slug')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="slug" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Slug')); ?>" class="form-control" required name="slug" value="<?php echo e(isset($data->slug)?$data->slug:''); ?>"><?php echo e(isset($data->slug)?$data->slug:''); ?></textarea>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views\admin\faq\add.blade.php ENDPATH**/ ?>