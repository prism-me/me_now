
<style>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>

</style>
<?php $__env->startSection('title'); ?>
<?php echo e(__('messages.Doctors')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumbs">
   <div class="col-sm-4">
      <div class="page-header float-left">
         <div class="page-title">
            <h1><?php echo e(__('messages.Doctors')); ?></h1>
         </div>
      </div>
   </div>
   <div class="col-sm-8">
      <div class="page-header float-right">
         <div class="page-title">
            <ol class="breadcrumb text-right">
               <li class="active"><?php echo e(__('messages.Doctors')); ?></li>
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
                     <a href="<?php echo e(url('admin/savedoctor/0/1')); ?>" class="btn btn-primary"><?php echo e(__('messages.Add').' '.__('messages.Doctors')); ?></a>
                     <form action="<?php echo e(url('admin/doctor')); ?>" class="selectLang" >

                        <select id="title"  class="form-control" required name="isArabic" onchange="fetch_select(this.value);"><i class="fa fa-language" aria-hidden="true"></i>
                          
                           <option > &#xf042;</option>
                           <option value="0">English</option>
                           <option value="1">Arabic</option>
                           
                        </select>
                     
                     </form>
                  
                     </div>
                  <div class="table-responsive">
                    <table id="service" class="table  table-striped table-bordered">
                     <thead>
                        <tr>
                           <th><?php echo e(__('messages.Id')); ?></th>
                           <th><?php echo e(__('messages.Image')); ?></th>
                           <th><?php echo e(__('messages.Department')); ?></th>
                           <th><?php echo e(__('messages.Name')); ?></th>
                           <th><?php echo e(__('messages.Email')); ?></th>
                           <th><?php echo e(__('messages.Phone No')); ?></th>
                           <th><?php echo e(__('messages.Action')); ?></th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(count($data)>0): ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td><?php echo e(isset($d->id)?$d->id:""); ?></td>
                           <td>
                                <img src="<?php echo e($d->image); ?>" class="imgList"/>
                           </td>
                           <td><?php echo e($d->department->name); ?></td>
                           <td><?php echo e($d->name); ?></td>
                           <td><?php echo e($d->email); ?></td>
                           <td><?php echo e($d->phone_no); ?></td>
                           <td>
                              <div class="group">
                                <a href="<?php echo e(url('admin/savedoctor/').'/'.$d->id.'/1'); ?>" > <i class='fa fa-pencil fa-lg' aria-hidden="true"> </i> </a>
                              </div>
                              <div class="group">
                                
                                 <a href="javascript:deleterow('deletedoctor','<?= $d->id ?>')" >
                                   <i class='fa fa-trash fa-lg'></i>
                                 </a>
                               
                              </div>
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

<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
        <script type="text/javascript">
        function fetch_select (val){
         
         
            $.ajax({
               headers: {
                    'X-CSRF-Token': token 
               },
                type: 'post',
                url: '/admin/doctor',
                datatype:'json',
                data: { option:val },
                success: function (response) {
                    alert(response);
                }
            });
        }
    </script>
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/admin/doctor/default.blade.php ENDPATH**/ ?>