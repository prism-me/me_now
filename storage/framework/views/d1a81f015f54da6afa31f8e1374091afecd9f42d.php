 <body>
    
    <div>
        Langauge : <select onchange="changeLanguage(this.value)" >
            <option <?php echo e(session()->has('lang_code')?(session()->get('lang_code')=='en'?'selected':''):''); ?> value="en">English</option>
            <option <?php echo e(session()->has('lang_code')?(session()->get('lang_code')=='er'?'selected':''):''); ?> value="er">Arabic</option>
        </select>
    </div>

    <h2><?php echo e(trans("messages.tanuja")); ?></h2>

    </body>
   <script>
    
    function changeLanguage(lang){
         window.location='<?php echo e(url("change-language")); ?>/'+lang;
     } 
    </script><?php /**PATH C:\xampp\htdocs\meNow\resources\views/lang.blade.php ENDPATH**/ ?>