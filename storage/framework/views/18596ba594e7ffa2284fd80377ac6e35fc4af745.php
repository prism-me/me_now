
<?php $__env->startSection('title'); ?>
 <?php echo e(__('messages.Facilities')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?php echo e(__('messages.Facilities')); ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><?php echo e(__('messages.Facilities')); ?></li>
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
                                    <a href="<?php echo e(url('admin/saveservice/0')); ?>" class="btn btn-primary"><?php echo e(__('messages.Add').' '.__('messages.Facilities')); ?></a>
                                </div>
                                <div class="table-responsive">
                                <table id="service" class="table  table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('messages.Id')); ?></th>
                                            <th><?php echo e(__('messages.Name')); ?></th>
                                            <th><?php echo e(__('messages.Image')); ?></th>
                                            <th><?php echo e(__('messages.Description')); ?></th>
                                            <th><?php echo e(__('messages.Action')); ?></th>
                                        </tr>
                                    </thead> 
                                    <tbody>  
                                            <?php if(count($data)>0): ?>
                                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                                                        <td><?php echo e(isset($d->name)?$d->name:""); ?></td>
                                                        <td>
                                                                <img src="<?php echo e(asset('public/upload/service').'/'.$d->icon); ?>" class="imgsize1"  />
                                                        </td>
                                                        <td><?php echo e(isset($d->description)?$d->description:""); ?></td>
                                                        <td>
                                                                <a href="<?php echo e(url('admin/saveservice/').'/'.$d->id); ?>" class="btn btn-primary"><?php echo e(__('messages.Edit')); ?></a>
                                                                <a href="javascript:deleterow('deleteservice','<?= $d->id ?>')" class="btn btn-danger"><?php echo e(__('messages.Delete')); ?></a>
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
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/admin/service/default.blade.php ENDPATH**/ ?>