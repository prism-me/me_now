
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Save Blog')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Save Blog')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li><a href="<?php echo e(url('admin/blogs')); ?>"><?php echo e(__('messages.Blog')); ?></a></li>
               <li class="active"><?php echo e(__('messages.Save Blog')); ?></li>
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
                  <form action="<?php echo e(URL::to('admin/blogs/update/')); ?>" method="PUT" novalidate="novalidate" enctype="multipart/form-data">
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
                        <?php echo e(__('messages.Sub-Title')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="sub-title" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Sub-Title')); ?>" class="form-control" required name="sub_title" value="<?php echo e(isset($data->sub_title)?$data->sub_title:''); ?>">
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Description')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <textarea id="description" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Description')); ?>" class="form-control" required name="description" value="<?php echo e(isset($data->description)?$data->description:''); ?>"></textarea>
                     </div>
                     <div class="form-group">
                        <label for="name" class=" form-control-label">
                        <?php echo e(__('messages.Posted By')); ?>

                        <span class="reqfield">*</span>
                        </label>
                        <input type="text" id="posted-by" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Posted By')); ?>" class="form-control" required name="posted_by" value="<?php echo e(isset($data->posted_by)?$data->posted_by:''); ?>">
                     </div>
                    
                     <div class="form-group">
                        <label for="file" class=" form-control-label">  
                        <?php echo e(__('messages.Image')); ?><span class="reqfield" >*</span>
                        </label>
                        <?php if($data->featured_img): ?>
                           <img src="<?php echo e(asset('public/upload/blog').'/'.$data->featured_img); ?>" class="imgsize1 departmentimg"/> 
                        <?php endif; ?>
                        <input type="file" id="file" name="featured_img" class="form-control-file" accept="image/*">
                    
                     <div>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/admin/blog/saveblog.blade.php ENDPATH**/ ?>