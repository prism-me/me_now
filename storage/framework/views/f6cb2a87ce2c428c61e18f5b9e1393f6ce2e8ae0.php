
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Save Room')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1><?php echo e(__('messages.Save Room')); ?></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><?php echo e(__('messages.Save Room')); ?></li>
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
                              <form action="<?php echo e(URL::to('admin/update-room').'/' . $data->slug); ?>" method="POST" novalidate="novalidate" enctype="multipart/form-data">

                                <?php echo e(csrf_field()); ?>


                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Title')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <input type="text" id="title"
                                        placeholder="Title"
                                        class="form-control"  name="title"
                                        value="<?php echo e(isset($data->title) ? $data->title : ''); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Excerpt')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <textarea id="excerpt" placeholder="Excerpt"
                                        class="form-control"  name="excerpt"
                                        value="<?php echo e(isset($data->excerpt) ? $data->excerpt : ''); ?>"><?php echo e($data->excerpt); ?></textarea>
                                </div>
                               
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Description')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <textarea id="description" placeholder="Description 1"
                                        class="form-control"  name="description"
                                        value="<?php echo e(isset($data->description) ? $data->description : ''); ?>"><?php echo e($data->description); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Description')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <textarea id="description1" placeholder="<?php echo e(__('messages.Enter') . '  ' . __('messages.Description 2')); ?>"
                                        class="form-control"  name="description2"
                                        value="<?php echo e(isset($data->description2) ? $data->description2 : ''); ?>"><?php echo e($data->description2); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Image Title')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <input type="text" id="title"
                                        placeholder="Title"
                                        class="form-control"  name="more_img_title1"
                                        value="<?php echo e(isset($data->more_img_title1) ? $data->more_img_title1 : ''); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Image Title 2')); ?>

                                        <span class="reqfield">*</span>
                                    </label>
                                    <input type="text" id="title"
                                        placeholder="Title"
                                        class="form-control"  name="more_img_title2"
                                        value="<?php echo e(isset($data->more_img_title2) ? $data->more_img_title2 : ''); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="file" class=" form-control-label">
                                        <?php echo e(__('messages.Image 1')); ?><span class="reqfield">*</span>
                                    </label>
                                    <?php if($data->more_img1): ?>
                                        <img src="<?php echo e($data->more_img1); ?>" class="imgsize1 departmentimg" />
                                    <?php endif; ?>
                                    <input type="file" id="file" name="more_img1" class="form-control-file" accept="image/*">

                                </div>
                                <div class="form-group">
                                    <label for="file" class=" form-control-label">
                                        <?php echo e(__('messages.Image 2')); ?><span class="reqfield">*</span>
                                    </label>
                                    <?php if($data->more_img2): ?>
                                        <img src="<?php echo e($data->more_img2); ?>" class="imgsize1 departmentimg" />
                                    <?php endif; ?>
                                    <input type="file" id="file" name="more_img2" class="form-control-file" accept="image/*">

                                </div>
                                <div class="form-group">
                                    <label for="file" class=" form-control-label">
                                        <?php echo e(__('messages.Featured Image')); ?><span class="reqfield">*</span>
                                    </label>
                                    <?php if($data->featured_img): ?>
                                        <img src="<?php echo e($data->featured_img); ?>" class="imgsize1 departmentimg" />
                                    <?php endif; ?>
                                    <input type="file" id="file" name="featured_img" class="form-control-file" accept="image/*">

                                </div>
                                <div class="form-group">
                                    <label for="file" class=" form-control-label">
                                        <?php echo e(__('messages.Featured Image 1')); ?><span class="reqfield">*</span>
                                    </label>
                                    <?php if($data->featured_img2): ?>
                                        <img src="<?php echo e($data->featured_img2); ?>" class="imgsize1 departmentimg" />
                                    <?php endif; ?>
                                    <input type="file" id="file" name="featured_img2" class="form-control-file" accept="image/*">

                                </div>
                                <div class="form-group">
                                    <label for="file" class=" form-control-label">
                                        <?php echo e(__('messages.Icon')); ?><span class="reqfield">*</span>
                                    </label>
                                    <?php if($data->icons): ?>
                                        <img src="<?php echo e($data->icons); ?>" class="imgsize1 departmentimg" />
                                    <?php endif; ?>
                                    <input type="file" id="file" name="icons" class="form-control-file" accept="image/*">

                                </div>
                                
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">
                                        <?php echo e(__('messages.Slug')); ?>

                                    </label>
                                    <input type="text" id="slug" 
                                        placeholder="<?php echo e(__('messages.Enter') . ' ' . __('messages.Slug')); ?>"
                                        class="form-control" name="slug"
                                        value="<?php echo e(isset($data->slug) ? $data->slug : ''); ?>">
                                </div>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\meNow\resources\views/admin/room/save.blade.php ENDPATH**/ ?>