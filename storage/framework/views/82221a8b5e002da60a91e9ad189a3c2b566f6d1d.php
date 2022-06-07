
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Room')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Room')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.Room')); ?></li>
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
                     <a href="<?php echo e(URL::to('admin/rooms/create')); ?>" class="btn btn-primary"><?php echo e(__('messages.Add').' '.__('messages.Room')); ?></a>
                  </div>
                  <div class="table-responsive">
                  <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('messages.Title')); ?></th>
                           <th><?php echo e(__('messages.Description')); ?></th>
                           <th><?php echo e(__('messages.Icon')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(count($data)>0): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                           <td><?php echo e(isset($d->title)?$d->title:""); ?></td>
                           <td><?php echo e(substr($d->short_description , 0,50)); ?>..</td>
                           <td><img src="<?php echo e($d->icons); ?>" class="img-fluid"></td>
                           
                           <td>
                                <a href="<?php echo e(URL::to('admin/edit-room') . '/' . $d->slug); ?>" class="btn btn-primary"><?php echo e(__('messages.Edit')); ?></a>
                                <a href="<?php echo e(URL::to('admin/show-room') .'/' . $d->slug); ?>" class="btn btn-success"><?php echo e(__('messages.View')); ?></a>
                                 <form action="<?php echo e(url('admin/delete-room'.'/' . $d->slug)); ?>"  novalidate="novalidate"  method="POST"  ><?php echo e(csrf_field()); ?><input type="submit" class="btn btn-danger" value="<?php echo e(__('messages.Delete')); ?>" name="Delete"></form>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views\admin\room\default.blade.php ENDPATH**/ ?>