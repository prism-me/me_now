
<?php $__env->startSection('title'); ?>
 <?php echo e(__('messages.Terms & Condition')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   <div class="departmentpg-main-box">
		<div class="container">
			<div class="global-heading">
				<h2><?php echo e(__('messages.Terms & Condition')); ?></h2>
				<p><?php echo e(__("messages.People should think things out fresh and not just accept conventional terms and the conventional way of doing things")); ?></p>
			</div>
			<div class="department-part-main-box">
				<div class="row termsmar">
					<?=html_entity_decode($setting->terms_condition)?>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u877734042/domains/menow.ae/public_html/resources/views/front/termcondition.blade.php ENDPATH**/ ?>