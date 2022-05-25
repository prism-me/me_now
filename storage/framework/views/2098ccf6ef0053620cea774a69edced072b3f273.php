
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="banner-img">
            <img src="https://lighthouse-media.s3.us-east-2.amazonaws.com/601679ac8e54020017840684/1640001095057_dreamstime_xxl_54964318%20%28Large%29.jpg"
                alt="" class="img-fluid">
        </div>
        <div class="meta_content">
            <div class="meta1"> <b>Date</b> 25 May 2015</div>
            <div class="meta1"> <b>Time</b> : 6:00 pm to 7:00 pm </div>
            <div class="meta1"> <b>Event Type</b> : Support Groups </div>
        </div>
        <div class="event_content">
            <h3>Workshop Heading</h3>
            <p>
                his support group provides a safe, confidential and relaxed setting online for parents of children with
                Autism (ages 5 - 18 years).

                Benefits of this support group:

                • Meet other parents with children experiencing similar challenges

                • Discuss common Autism related challenges and strategies to help your child at home/school

                • Find encouragement and emotional support

                • Share resources for children with Autism and their families

                • Discuss ‘Caregiver Burnout’ and how you can tend to your own wellbeing

                Support Group Etiquette:

                Participation and respect for the group and for others is important.
                Please ensure that your video camera is turned on for the full duration of the group,
                just as you would if you were seeing others face-to-face for an in-person group. Admission
                into the group will close 10 minutes after it has started. We thank you in advance and look
                forward to welcoming you.
            </p>
        </div>

    </div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views/front/workshops_inner.blade.php ENDPATH**/ ?>