<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">


<head>
    <title id="changeunreadcount"><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->yieldContent('meta_title'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/css/bootstrap.min.css">
    
    <link rel="shortcut icon" href="<?php echo e(asset('App_icon.png')); ?>">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e(url('/')); ?>" />
    <meta property="og:title" content="<?php echo e(__('messages.site name')); ?>" />
    <meta property="og:image" content="<?php echo e(asset('App_icon.png')); ?>" />
    <meta property="og:image:width" content="250px" />
    <meta property="og:image:height" content="250px" />
    <meta property="og:site_name" content="<?php echo e(__('messages.site name')); ?>" />
    <meta property="og:description" content="<?php echo e(__('messages.meta_description_admin')); ?>" />
    <meta property="og:keyword" content="<?php echo e(__('messages.meta_keyword')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/css/bootstrap.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/css/custom-style.css')); ?>">

    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <?php if(Session::get('locale') == 'ar'): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/css/rtl-style.css?v=5r12')); ?>">
    <?php else: ?>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/css/style.css?v=45d')); ?>">
    <?php endif; ?>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://rawgit.com/OwlCarousel2/OwlCarousel2/develop/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/css/responsive.css?v=ftgyert4')); ?>">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <input type="hidden" id="authid" value="<?php echo e(Auth::id()); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    
</head>

<body onload="gettimezone()" class="animated fadeIn">
    
    
    


    <div class="header-pinned fixed-top" id="header">
        
        <div class="container-fluid">
            <div class="navigation-custom-single">
                <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        
                        
                        <img src="<?php echo e(asset('front/img/logo.png')); ?>" class="logo-img">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#CollapsingNavbar"
                        aria-controls="exCollapsingNavbar2" aria-expanded="false" aria-label="Toggle navigation">
                        &#9776;
                    </button>
                    <div class="collapse navbar-collapse navbar-toggleable-sm" id="CollapsingNavbar">
                        <?php if(Session::get('locale') == 'ar'): ?>
                            <ul class="nav navbar-nav mr-auto">
                            <?php else: ?>
                                <ul class="nav navbar-nav ml-auto">
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo e(url('about-us')); ?>><?php echo e(__('messages.About')); ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                                data-toggle="dropdown"><?php echo e(__('messages.Services')); ?></a>
                            <ul class="dropdown-menu services-dropdown">


                                <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item"
                                            href="<?php echo e(route('department.service/',[Session::get('locale'), $departments->slug])); ?>">
                                            <?php echo e($departments->name); ?> </a>

                                        <?php if(!blank($departments->service)): ?>
                                            <ul class="submenu dropdown-menu">
                                                <?php $__currentLoopData = $departments->service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subdepartment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><a class="dropdown-item"
                                                            href="<?php echo e(route('services/',[Session::get('locale'), $departments->slug , $subdepartment->slug])); ?>">
                                                            <?php echo e($subdepartment->name); ?></a>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        <?php endif; ?>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="dropdown-item" href="<?php echo e(route('rooms/',[Session::get('locale'),  $room->slug])); ?>">
                                            <?php echo e($room->title); ?> </a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('doctorlist')); ?>"><?php echo e(__('messages.Our Team')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo e(url('workshop')); ?>"><?php echo e(trans('messages.Workshops')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('events')); ?>"><?php echo e(__('messages.Events')); ?></a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="women-empowerment"><?php echo e(__('messages.Women Empowerment')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo e(url('special-membership-for-women')); ?>"><?php echo e(__('messages.Become a Member')); ?></a>
                        </li>
                        <li class="nav-item book-now-nav">
                            <a class="nav-link btn-hover color-9"
                                style="color:white !important; width: 132px;padding: 0.5rem !important;"
                                href="#" data-toggle="modal"
                                data-target="#appointmentModal"><?php echo e(__('messages.Book Now')); ?></a>
                        </li>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    <?php echo e(__('messages.Language')); ?> <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"
                                        href="<?php echo e(url('en')); ?>"><?php echo e(__('messages.English')); ?></a>
                                    <a class="dropdown-item"
                                        href="<?php echo e(url('ar')); ?>"><?php echo e(__('messages.Arabic')); ?></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <div class="spacefor-global">
    </div>

    <div class="sticky_buttons">
        <a href="https://wa.me/+971565553483" target="_blank"><img src="<?php echo e(asset('front/img/whatsapp.png')); ?>"
                alt="Whatsapp Action"></a>
        <a href="tel:+97142398448"><img src="<?php echo e(asset('front/img/call_now.png')); ?>" alt="Call Action"></a>
    </div>
    <div class="sticky_bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn-hover color-9" data-toggle="modal"
                        data-target="#appointmentModal"><?php echo e(__('messages.Book Now')); ?></button>
                </div>
                <div class="col-3">
                    <a href="tel:+97142398448"><img src="<?php echo e(asset('front/img/call_now.png')); ?>"
                            alt=""></a>
                </div>
                <div class="col-3">
                    <a href="https://wa.me/+971565553483" target="_blank"><img
                            src="<?php echo e(asset('front/img/whatsapp.png')); ?>" alt="Whatsapp Action"
                            class="static_whatsapp_icon"></a>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->yieldContent('content'); ?>

    <div class="modal" id="appointmentModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="loginmodel">
                        <h2><?php echo e(__('messages.Appointment Now!')); ?></h2>
                        <div class="part-form-main-box">
                            <form action="/<?php echo e(Session::get('locale')); ?>/bookappoinment" method="post">
                                <?php echo e(csrf_field()); ?>

                                <div class="appo-select-main-box">
                                    <div class="appo-select-box">
                                        <select id="department" required class="dropdown" name="department_id"
                                            onchange="getserviceanddoctor(this.value)">
                                            <option value="" disabled="disabled" selected="selected">-
                                                <?php echo e(__('messages.Select Service')); ?></option>
                                            <?php if(isset($department)): ?>
                                                <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="appo-select-box11">
                                        <select id="service" class="dropdown appo-select-box" name="service_id">
                                            <option value="" disabled="disabled" selected="selected"><?php echo e(__('messages.Select Sub Service')); ?></option>
                                               

                                            <?php if(isset($department)): ?>
                                                <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if(!empty($d)): ?>
                                                        <option value="<?php echo e($d->id); ?>"><?php echo e($d->name); ?>

                                                        </option>
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="appo-input-main-box">
                                    <input type="text" required name="name" id="name"
                                        placeholder="<?php echo e(__('messages.Enter Your Full Name')); ?>" value="">
                                    <input type="text" required name="phone_no" id="phone_no"
                                        placeholder="<?php echo e(__('messages.Enter Phone number')); ?>"
                                        class="appo-right-input" value="">
                                    <input type="date" required name="date" id="app_date"
                                        min="<?= date('Y-m-d') ?>" placeholder="<?php echo e(__('messages.dd/mm/yyyy')); ?>">
                                    <input type="time" required name="time" placeholder="Time"
                                        class="appo-right-input">
                                    <textarea rows="3" required name="messages" placeholder="<?php echo e(__('messages.Enter Your Messages')); ?>"></textarea>
                                </div>
                                <div class="appo-btn-main-box">
                                    <button type="submit"> <?php echo e(__('messages.Book Appointment')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('front.instagram_feeds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="footer-main-box">
        <div class="container-fluid">
            <div class="footer-part-main-box">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="footer-r1-box">
                            <div class="footer-logo-box">
                                <?php if(isset($setting->logo)): ?>
                                    <img src="<?php echo e(asset('front/img/logo.png')); ?>" class="logo-img">
                                    
                                <?php else: ?>
                                    <img src="<?php echo e(Session::get('logo')); ?>">
                                <?php endif; ?>

                            </div>
                            <div class="footer-r1-detail">
                                <div class="footer-d1-box">
                                    
                                    
                                    <p>
                                        <?php echo e(__('messages.With the goal of de-stigmatizing mental illness and providing patients with a variety of treatment options, we re a group of compassionate, dedicated, and experienced practitioners who want nothing more than to see a different you walk out the door after working with us.')); ?>

                                    </p>
                                </div>
                                <div class="footer-d1-box">
                                    <h3><?php echo e(__('messages.Contact Us')); ?></h3>
                                    <p><span class="fa fa-phone phone-icon"></span><a
                                            href="tel:+97142398448"><?php echo e(__('messages.04 239 8448')); ?></a>
                                    </p>
                                    <p><span class="fa fa-envelope mail-icon"></span><a
                                            href="mailto:info@menow.me"><?php echo e(isset($setting->email) ? $setting->email : Session::get('email')); ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-r1-box">
                            <div class="footer-r1-detail">
                                <div class="footer-d1-box">
                                    <h3><?php echo e(__('messages.Our Services')); ?></h3>
                                    <?php $i = 0; ?>
                                    <?php if(isset($department)): ?>
                                        <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($i < 5): ?>
                                                <a href="services/<?php echo e($d->slug); ?>"><?php echo e($d->name); ?>

                                                </a>
                                                <?php $i++; ?>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <?php if(Session::get('departmentlist')): ?>
                                            <?php $__currentLoopData = Session::get('departmentlist'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($i < 5): ?>
                                                    <a href="<?php echo e(url('services') . '/' . $d->slug); ?>"><?php echo e($d->name); ?>

                                                    </a>
                                                    <?php $i++; ?>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-r1-box">
                            <div class="footer-r1-detail">
                                <div class="footer-d1-box">
                                    <h3><?php echo e(__('messages.Helpful links')); ?></h3>

                                    <a href="<?php echo e(url('about-us')); ?>"><?php echo e(__('messages.About')); ?></a>
                                    <a href="<?php echo e(url('events')); ?>"><?php echo e(__('messages.Events')); ?></a>
                                    <a href="<?php echo e(url('workshop')); ?>"><?php echo e(trans('messages.Workshops')); ?></a>
                                    
                                    <a href="<?php echo e(url('faqs')); ?>"><?php echo e(__('messages.FAQs')); ?></a>
                                    <a href="<?php echo e(url('contact-us')); ?>"><?php echo e(__('messages.Contact Us')); ?></a>
                                    <a
                                        href="<?php echo e(url('termcondition')); ?>"><?php echo e(__('messages.Terms & Condition')); ?></a>
                                    <a
                                        href="<?php echo e(url('women-empowerment')); ?>"><?php echo e(__('messages.Women Empowerment')); ?></a>
                                    <a href="<?php echo e(url('privacypolicy')); ?>"><?php echo e(__('messages.Privacy Policy')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="footer-r1-box">
                            <div class="footer-r1-detail">
                                <div class="footer-d1-box">
                                    <h3><?php echo e(__('messages.Address')); ?></h3>
                                    <p><a
                                            href="https://maps.app.goo.gl/4DJn6E47x4QUAW5S6"><?php echo e(__('messages.24-32 - 5 B St -Jumeirah -Jumeirah 1 - Dubai, UAE')); ?></a>
                                    </p>
                                </div>
                                <div class="footer-d1-box">
                                    <p><?php echo e(__('messages.Subscribe More Info')); ?></p>
                                    <form>
                                        <div class="inputWithIcon">
                                            <input type="text" name="subscribeemail" id="subscribeemail"
                                                placeholder="<?php echo e(__('messages.Email')); ?>">
                                            <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                                        </div>
                                        <div class="subcribe-button-box">
                                            <button type="button"
                                                onclick="savesubscribe()"><?php echo e(__('messages.Subscribe')); ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-part2-main-box">
                <div class="footer-bottom-main-box">

                    <div class="row my-4">

                        <div class="col-md-9 footer-bottom-left">
                            <?php echo e(__('messages.Copyright')); ?> @ <?php echo e(date('Y')); ?>

                            <?php echo e(__('messages.Me Now')); ?> <?php echo e(__('messages.All Right Reserved')); ?>


                            <span class="privacy_pages">
                                <a href="termcondition"><?php echo e(__('messages.Terms of Service')); ?></a>

                                <a href="privacypolicy"><?php echo e(__('messages.Privacy Policy')); ?></a>

                                
                            </span>
                        </div>

                        <div class="col-md-3 footer-bottom-right">
                            <a
                                href="https://www.prism-me.com"><?php echo e(__('messages.Designed and Managed by Prism')); ?></a>

                        </div>

                    </div>



                    
                    
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" id="is_chat" value="0" />
    

    <input type="hidden" id="siteurl" value="<?php echo e(url('/')); ?>">
    <input type="hidden" id="own_url" value="<?php echo e(url('/')); ?>" />
    <input type="hidden" id="soundnotify" value="<?php echo e(asset('sound/notification/beltekpar.mp3')); ?>">
    <input type="hidden" id="site_name_lang" value="<?php echo e(__('messages.site name')); ?>" />
    <input type="hidden" id="loginalert" value="<?php echo e(__('messages.Please Login Your Account')); ?>" />
    <input type="hidden" id="currentusername" value="<?php echo e(isset(Auth::user()->name) ? Auth::user()->name : ''); ?>">
    <input type="hidden" id="mycurrentuser" value="<?php echo e(isset(Auth::user()->id) ? Auth::user()->id : ''); ?>">
    <input type="hidden" id="authprofile"
        value="/profile/<?php echo e(isset(Auth::user()->profile_pic) ? Auth::user()->profile_pic : 'profile.png'); ?>">
    <input type="hidden" id="newsletteralert"
        value="<?php echo e(__('messages.Thanks for subscribing we will inform you for Upcoming event')); ?>">
    <input type="hidden" id="emailreq" value="<?php echo e(__('messages.email_required')); ?>">
    <input type="hidden" id="vaildemail" value="<?php echo e(__('messages.vaild_email')); ?>">
    <input type="hidden" id="rtl" value="<?php echo e(isset($setting->is_rtl) ? $setting->is_rtl : ''); ?>" />
    <input type="hidden" id="pwdreq" value="<?php echo e(__('messages.pwdreq')); ?>">
    <input type="hidden" id="namereq" value="<?php echo e(__('messages.namereq')); ?>">
    <input type="hidden" id="incomming" value="0" />
    <input type="hidden" id="phonereq" value="<?php echo e(__('messages.phonereq')); ?>">
    <input type="hidden" id="confirmpwdreq" value="<?php echo e(__('messages.confirmpwdreq')); ?>">
    <input type="hidden" id="registersuccess" value="<?php echo e(__('messages.registersuccess')); ?>">
    <input type="hidden" id="alreadyemailexiste" value="<?php echo e(__('messages.alreadyemailexiste')); ?>">
    <input type="hidden" id="checkcpwd" value="<?php echo e(__('messages.Please Enter Correct Password')); ?>">
    <input type="hidden" id="mailsend" value="<?php echo e(__('messages.mailsend')); ?>">
    <input type="hidden" id="notfoundemail" value="<?php echo e(__('messages.notfoundemail')); ?>">
    <input type="hidden" id="bothpwdsame" value="<?php echo e(__('messages.bothpwdsame')); ?>">
    <input type="hidden" id="rightimg" value='<?php echo e(asset('front/img/left.png')); ?>' />
    <input type="hidden" id="leftimg" value='<?php echo e(asset('front/img/right.png')); ?>' />
    <script type="text/javascript" src="<?php echo e(asset('js/script.js')); ?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.4/js/tether.min.js"></script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="https://rawgit.com/OwlCarousel2/OwlCarousel2/develop/dist/owl.carousel.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@iconfu/svg-inject@1.2.3/dist/svg-inject.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.23/moment-timezone-with-data-2012-2022.min.js">
    </script>


    <script src=<?php echo e(asset('js/share.js')); ?>></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <?php echo $__env->yieldContent('footer'); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <script>
        $(document).on('click', '.dropdown-menu', function(e) {
            e.stopPropagation();
        });

       
    </script>
  

</body>

</html>
<?php /**PATH C:\xampp\htdocs\me_now\resources\views/front/layout.blade.php ENDPATH**/ ?>