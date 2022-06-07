
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Save Workshop')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><?php echo e(__('messages.Save Workshop')); ?></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="<?php echo e(url('admin/workshops')); ?>"><?php echo e(__('messages.Workshop')); ?></a></li>
                        <li class="active"><?php echo e(__('messages.Save Workshop')); ?></li>
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
                                    <div class="alert  <?php echo e(Session::get('alert-class', 'alert-info')); ?> alert-dismissible fade show"
                                        role="alert"><?php echo e(Session::get('message')); ?>

                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
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

                            <form action="<?php echo e(URL::to('admin/update-workshop') . '/' . $data->slug); ?>" method="post"
                                novalidate="novalidate" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>


                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Title')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <input type="text" id="title"
                                        placeholder="<?php echo e(__('messages.Enter') . '  ' . __('messages.Title')); ?>"
                                        class="form-control" required name="title"
                                        value="<?php echo e(isset($data->title) ? $data->title : ''); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                    <?php echo e(__('messages.Event Type')); ?>

                                    <span class="reqfield">*</span>
                                    </label>
                                    <input type="text" id="title" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Event Type')); ?>" class="form-control" required name="title" value="<?php echo e(isset($data->event_type)?$data->event_type:''); ?>">
                                </div>
                                 <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                    <?php echo e(__('messages.Doctor')); ?>

                                    <span class="reqfield">*</span>
                                    </label>
                                    <select id="title" placeholder="<?php echo e(__('messages.Enter').'  '.__('messages.Doctor')); ?>" class="form-control" required name="doctor_id" >
                                    <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value['id']); ?>"><?php echo e($value['name']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Short Description')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <textarea id="description" placeholder="<?php echo e(__('messages.Enter') . '  ' . __('messages.Short Description')); ?>"
                                        class="form-control" required name="short_description"
                                        value="<?php echo e(isset($data->short_description) ? $data->short_description : ''); ?>"><?php echo e(isset($data->short_description) ? $data->short_description : ''); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Description')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <textarea id="short_description" placeholder="<?php echo e(__('messages.Enter') . '  ' . __('messages.Description')); ?>"
                                        class="form-control" required name="description"
                                        value="<?php echo e(isset($data->description) ? $data->description : ''); ?>"><?php echo e(isset($data->description) ? $data->description : ''); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Slug')); ?>

                                    </label>
                                    <input type="text" id="slug" required
                                        placeholder="<?php echo e(__('messages.Enter') . ' ' . __('messages.Slug')); ?>"
                                        class="form-control" name="slug"
                                        value="<?php echo e(isset($data->slug) ? $data->slug : ''); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Start Date')); ?>

                                    </label>
                                    <input id="" name="event_date[]" type="datetime-local" class="form-control" required
                                        value="<?php echo e(isset($event_date) && $event_date != 0 ? $event_date : ''); ?>">
                                </div>
                                <button type="button" class="add_event_date">+</button>
                                <div class="add_more_dates"></div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Price')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <input type="text" id="price"
                                        placeholder="<?php echo e(__('messages.Enter') . '  ' . __('messages.Price')); ?>"
                                        class="form-control" required name="price"
                                        value="<?php echo e(isset($data->price) ? $data->price : ''); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="file" class=" form-control-label">
                                        <?php echo e(__('messages.Image')); ?><span class="reqfield">*</span>
                                    </label>
                                    <?php if($data->featured_img): ?>
                                        <img src="<?php echo e($data->featured_img); ?>" class="imgsize1 departmentimg" />
                                    <?php endif; ?>
                                    <input type="file" id="file" name="featured_img" class="form-control-file"
                                        accept="image/*">

                                <div>
                                <div class="form-group">
                                    <label for="file" class=" form-control-label">
                                        <?php echo e(__('messages.Image')); ?><span class="reqfield">*</span>
                                    </label>
                                    <?php if($data->banner_img): ?>
                                        <img src="<?php echo e($data->banner_img); ?>" class="imgsize1 departmentimg" />
                                    <?php endif; ?>
                                    <input type="file" id="file" name="banner_img" class="form-control-file"
                                        accept="image/*">

                                <div>
                                        <div class="form-group">
                                            <?php if(Session::get('is_demo') == '1'): ?>
                                                <button id="payment-button" type="button" onclick="disablebtn()"
                                                    class="btn btn-lg btn-info">
                                                    <?php echo e(__('messages.Submit')); ?>

                                                </button>
                                            <?php else: ?>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info">
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

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {

            $('.add_event_date').on('click', function() {
                $('.add_more_dates').append(
                    '<input name="event_date[]" type="datetime-local" class="form-control" required />');
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views\admin\workshop\saveWorkshop.blade.php ENDPATH**/ ?>