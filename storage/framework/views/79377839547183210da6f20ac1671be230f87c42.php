
<?php $__env->startSection('title'); ?>
    <?php echo e(__('messages.Workshops')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('loader'); ?>
    <div id="overlayer"></div>
    <span class="loader"><span class="loader-inner"></span></span>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="global-heading">
            <h2>Me Now Empowers Women</h2>
            <p>At Me Now Center, we're doing our bit to support women and help them achieve their full potential. It is a
                place where women can feel confident and fulfilled, physically, mentally, and emotionally. We are no less
                than a family dedicated to supporting each other and building a community of like-minded, empowered women.
                Me Now has special memberships for women that come with unlimited benefits including discounts on
                facilities, free workshops, and much more.

            </p>
        </div>
        <div class="who_we_are">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo e(asset('front/img/woman-empowerment.jpg')); ?>" alt="" class="img-fluid side_woment_emp_img">

                </div>
                <div class="col-md-7">
                    <div class="who_we_are_cotent" data-aos="fade-up">
                        <h2>What Our Membership Holders Get</h2>
                        
                        <div class="women-empowerment-" data-aos="zoom-in">
                            <p>We utilize a custom-made strategy known as the <strong>'5 P Model’</strong> that stands for
                                five novel
                                approaches
                                to empower women:</p>
                            <ul>
                                <li><strong>Proud</strong> to be a woman with dignity, strength, and courage.</li>
                                <li><strong>Powerful</strong> to stand up for and with yourself and then stand up for your
                                    families.</li>
                                <li><strong>Preciousness</strong> that comes from the face you see in the mirror.</li>
                                <li><strong>Peace</strong> which comes with your smile.</li>
                                <li><strong>Potential</strong> which is endless, do what you were created to do.</li>
                            </ul>
                            <blockquote class="blockquote">
                                <span class="fa fa-quote-left"></span>
                                Women, you’re the game-changers. Raising generations, driving entrepreneurship, and
                                building homes, there is nothing you can’t do. We believe that a woman, armed with the
                                right mindset, can break all barriers and achieve greatness. Me Now strives to offer
                                women a community that they can be proud to be a part of. We will make sure to put you
                                on the right path to success by giving you hope, a clear vision, and meaningful social
                                life where you can feel comfortable, happy and fulfilled.
                                <span class="fa fa-quote-right"></span>
                                <footer class="blockquote-footer">CEO Message</footer>
                            </blockquote>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php echo $__env->make('front.packages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

    </div>

    









<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
    <script>
        AOS.init();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\Menow\me_now\resources\views\front\women_empowerment.blade.php ENDPATH**/ ?>