
<?php $__env->startSection('title'); ?>
 <?php echo e(__("messages.Privacy Policy")); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="departmentpg-main-box">
		<div class="container">
			<div class="global-heading">
				<h2><?php echo e(__("messages.Privacy Policy")); ?></h2>
				<p><?php echo e(__("messages.People should think things out fresh and not just accept conventional terms and the conventional way of doing things")); ?></p>
			</div>
			<div class="department-part-main-box">
				<div class="row termsmar">
					<?=html_entity_decode($setting->privacy_policy)?>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views\front\privacypolicy.blade.php ENDPATH**/ ?>