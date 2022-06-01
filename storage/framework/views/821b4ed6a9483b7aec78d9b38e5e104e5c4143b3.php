
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Event')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Event')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.Event')); ?></li>
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
                     <a href="<?php echo e(URL::to('admin/events/create')); ?>" class="btn btn-primary"><?php echo e(__('messages.Add').' '.__('messages.Event')); ?></a>
                  </div>
                  <div class="table-responsive">
                  <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('messages.Name')); ?></th>
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
                           <td><?php echo e(isset($d->name)?$d->name:""); ?></td>
                           <td><?php echo e(substr($d->short_description, 0,50)); ?>..</td>
                           <td>
                               <img src="<?php echo e($d->thumbnail_img); ?>" style="width:50px;height: 50px;" class="imgsize1"/>
                           </td>
                           <td>
                                <a href="<?php echo e(URL::to('admin/edit-event') . '/' . $d->slug); ?>" class="btn btn-primary"><?php echo e(__('messages.Edit')); ?></a>
                                <a href="<?php echo e(URL::to('admin/show-event') .'/' . $d->slug); ?>" class="btn btn-success"><?php echo e(__('messages.View')); ?></a>
                                <a href="<?php echo e(URL::to('admin/delete-event') .'/' . $d->slug); ?>" class="btn btn-success"><?php echo e(__('messages.View')); ?></a>
                                 <form action="<?php echo e(url('admin/delete-event'.'/' . $d->slug)); ?>"  novalidate="novalidate"  method="POST"  ><?php echo e(csrf_field()); ?><input type="submit" class="btn btn-danger" value="<?php echo e(__('messages.Delete')); ?>" name="Delete"></form>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/admin/event/default.blade.php ENDPATH**/ ?>