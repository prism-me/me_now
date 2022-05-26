
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Workshop')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Workshop')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.Workshop')); ?></li>
            </ol>
         </div>
      </div>
   </div>
</div>
<div class="content mt-3">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-md-12">
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
                  <div>
                     <a href="<?php echo e(URL::to('admin/workshops/create')); ?>" class="btn btn-primary"><?php echo e(__('messages.Add').' '.__('messages.Workshop')); ?></a>
                  </div>
                  <div class="table-responsive">
                  <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('messages.Title')); ?></th>
                           <th><?php echo e(__('messages.Description')); ?></th>
                           <th><?php echo e(__('messages.Image')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(count($data)>0): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                           <td><?php echo e(isset($d->title)?$d->title:""); ?></td>
                           <td><?php echo e(substr($d->short_description, 0,  70)); ?>...</td>
                           <td>
                               <img src="<?php echo e($d->featured_img); ?>" style="width:50px;height: 50px;" class="imgsize1"/>
                           </td>
                           <td>
                                <a href="<?php echo e(URL::to('admin/workshops/'.$d->id.'/edit')); ?>" class="btn btn-primary"><?php echo e(__('messages.Edit')); ?></a>
                                <a href="<?php echo e(URL::to('admin/workshops/'.$d->id.'/show')); ?>" class="btn btn-success"><?php echo e(__('messages.View')); ?></a>
                                <form action="<?php echo e(URL::to('admin/workshops/delete').'/'.$d->id); ?>"  novalidate="novalidate" ><?php echo e(csrf_field()); ?><?php echo e(method_field('Delete')); ?><input type="submit" class="btn btn-danger" name="Delete"></form>
                           </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                     </tbody>
                  </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/admin/workshop/default.blade.php ENDPATH**/ ?>