<div class="header-appo-main-box">
    <h1><?php echo e(__('messages.Appointment Now!')); ?></h1>
    <?php if(Session::get('message')): ?>
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <?php echo e(Session::get('message')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    <?php endif; ?>
    <span id="loginerrorreview"></span>
    <form action="<?php echo e(url('bookappoinment')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="appo-select-main-box">
            <div class="appo-select-box">
                <select id="department" required class="dropdown" name="department_id"
                    onchange="getserviceanddoctor(this.value)">
                    <option value="" disabled="disabled" selected="selected">
                        <?php echo e(__('messages.Select Services')); ?></option>
                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="appo-select-box">
                <select id="doctors" required class="dropdown" name="doctors">
                    <option value="" disabled="disabled" selected="selected">-
                        <option value="" disabled="disabled" selected="selected">
                        <?php echo e(__('messages.Select Doctor')); ?></option>
                    <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
           

        </div>
        <div class="appo-input-main-box">
            <input type="text" required name="name" id="name" placeholder="Your name"
                value="<?php echo e(Auth::user() ? Auth::user()->name : ''); ?>">
            <input type="text" required name="phone_no" id="phone_no" placeholder="Phone number"
                class="appo-right-input" value="<?php echo e(Auth::user() ? Auth::user()->phone_no : ''); ?>">
            <input type="date" required name="date" id="app_date" data-date-inline-picker="true"
                min="<?= date('Y-m-d') ?>" placeholder="dd/mm/yyyy">
            <input type="time" required name="time" placeholder="Time" class="appo-right-input">
            <textarea rows="3" required name="messages" placeholder="Message"></textarea>
        </div>
        <div class="appo-btn-main-box">
            <?php if(Auth::id()): ?>
                <button type="submit"><?php echo e(__('messages.Book Now')); ?></button>
            <?php else: ?>
                <button type="button" onclick="changehiddenstatus()" data-toggle="modal"
                    data-target="#myModal"><?php echo e(__('messages.Book Now')); ?></button>
            <?php endif; ?>

        </div>
    </form>
</div><?php /**PATH C:\xampp\htdocs\meNow\resources\views\front\book_now_popup.blade.php ENDPATH**/ ?>