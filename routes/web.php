<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', function() {
    // Artisan::call('optimize');
    $lang = Session::get('locale') == null ? 'en' : Session::get('locale');
        return redirect("/".$lang);
    });

    


    



    Route::get('changeLang/{lang}','LangController@change');


    Route::get('instagram','FrontController@instagram');
    Route::get("add_doctor_review","AuthenticatedoctorController@show_product_review_user");
    Route::post("checkoutbrain","braintreeController@checkoutbrain");
    Route::get("sendnotification","FrontController@sendnotification");
    Route::get("privacy_policy","HomeController@privacy");


    Route::group([ 'prefix' => '{locale}', 'middleware' => 'setLocale'] , function () { 

     Route::get('auth/{driver}', 'Auth\FacebookController@redirectToProvider')->name('social.oauth');
     Route::get('auth/{driver}/callback', 'Auth\FacebookController@handleProviderCallback')->name('social.callback');
     Route::get("/","FrontController@showhome");
     Route::get("about-us","FrontController@about")->name('about-us');
     Route::get("blog","FrontController@blog");
     Route::get("services","FrontController@services");
     Route::get("faqs","FrontController@faqs");
     Route::get("women-empowerment","FrontController@women_empowerment")->name('women-empowerment');
     Route::get("special-membership-for-women","FrontController@become_member");
     Route::get("workshop","FrontController@workshop");
     Route::get("events","FrontController@events");
     Route::get("rooms/{slug}","FrontController@rooms");
     Route::get("workshop/{id}","FrontController@workshopdetail");
     Route::get("getserviceanddoctor/{id}","FrontController@getserviceanddoctor");
     Route::post("bookappoinment","FrontController@bookappoinment");
     Route::get("allfacilites","FrontController@allfacilites");
     Route::get("services/{service}","FrontController@department")->name('services');
     Route::get("services/{service}/{subservice}","FrontController@departmentdetail");
     Route::get("doctorlist","FrontController@doctorlist");
     Route::get("gallery","FrontController@gallery");
     Route::get("contact-us","FrontController@contact_us");
     Route::any("savecontact","FrontController@savecontact");
     Route::any("savesubscribe/{email}","FrontController@savesubscribe");
     Route::any("pricing","FrontController@pricing");
     Route::any("termcondition","FrontController@termcondition");
     Route::any("privacypolicy","FrontController@privacypolicy");
     Route::get("postregister","FrontController@postregister");
     Route::get("postlogin","FrontController@postlogin");
     Route::get("userlogout","FrontController@userlogout");
     Route::get("postforgot","FrontController@postforgot");
     Route::get("doctordetails/{slug}","FrontController@doctordetails");
     Route::any("addreview","FrontController@addreview");
     Route::post("mediaupload","FrontController@mediaupload");
     Route::post("deletemedia","FrontController@deletemedia");

     Route::get("myaccount","FrontController@myaccount");
     Route::post("updateprofile","FrontController@updateprofile");
     Route::get("checkcurrentpwd","FrontController@checkcurrentpwd");
     Route::any("changepasswords","FrontController@changepasswords");

	 Route::get("settimezone/{time}","HomeController@settimezone");

     Route::get("subscription/{package_id}","SubscriptionController@showorderpage");
     Route::post("userlogin","FrontController@userlogin");

     Route::post("paymentsubscription","SubscriptionController@paymentsubscription");
     Route::get("resetpassword/{code}","FrontController@resetpwd");
     Route::any("resetnewpwd","FrontController@resetpassword");
     Route::Get("getcurrenttime/{offset}","HomeController@getcurrenttime");
     Route::get("blog","FrontController@blog");
     Route::get("blog-detail/{id}","FrontController@blogdetails");
     Route::post("workshop-booking","FrontController@workshopBooking");
     Route::get("events","FrontController@events");

    });

    Route::group(['prefix' => '{locale}', 'middleware' => 'setAdminLocale'], function () {
        
        Route::group(['prefix' => 'admin'], function () {        
            Route::get("/","HomeController@showlogin");
            Route::post("postlogin","HomeController@postlogin");

                Route::group([ 'middleware' => 'admincheckexiste'], function () {

                    Route::get("dashboard","HomeController@showdashboard")->name("dashboard");
                    Route::get("logout","HomeController@logout");
                    Route::get("settimezone/{time}","HomeController@settimezone");

                    #Department
                    Route::get('department', 'DepartmentController@index')->name('department');
                    Route::get('add-department', 'DepartmentController@create');
                    Route::post('create-department', 'DepartmentController@store');
                    Route::get("savedepartment/{id}","DepartmentController@saveddepartment");
                    Route::post("updatedepartment","DepartmentController@updatedepartment");
                    Route::post("deletedepartment/{id}","DepartmentController@deletedepartment");

                    #Department service
                    Route::get("departmentservice/{id}","DepartmentController@departmentservice")->name('departmentservice');
                    Route::get("savedepartmentservice/{dept_id}/{id}","DepartmentController@savedepartmentservice");
                    Route::post("updatedepartmentservice","DepartmentController@updatedepartmentservice");
                    Route::post("deletedepartmentservice/{id}","DepartmentController@deletedepartmentservice");

                    #Doctor
                    Route::get("doctor","DoctorController@index")->name('doctor');
                    Route::get("savedoctor/{id}/{tab_id}","DoctorController@savedoctor");
                    Route::post("updatedoctorprofile","DoctorController@updatedoctorprofile");
                    Route::post("deletedoctor/{id}","DoctorController@deletedoctor");
                    Route::post("updateworkinghours","DoctorController@updateworkinghours");

                    Route::get("editprofile","HomeController@editprofile");
                    Route::post("updateprofile","HomeController@updateprofile");
                    Route::get("changepassword","HomeController@changepassword")->name("changepassword");
                    Route::get("samepwd/{id}","HomeController@check_password_same");
                    Route::post("updatepassword","HomeController@updatepassword");

                    Route::resource("notification","NotificationController");
                    Route::post("savenotification","NotificationController@savenotification");



                    Route::get("setting/{id}","NotificationController@showsetting");
                    Route::post("savebasicsetting","NotificationController@savebasicsetting");
                    Route::post("saveserverkey","NotificationController@saveserverkey");
                    Route::post("savesitesetting","NotificationController@savesitesetting");
                    Route::post("saveterms","NotificationController@saveterms");
                    Route::post("saveprivacy","NotificationController@saveprivacy");
                    Route::post("saveuploadsection","NotificationController@saveuploadsection");

                    Route::get("appointment/{start_date}/{end_date}","AppointmentController@showappointment");

                    Route::resource("package","PackageController");
                    Route::get("savepackage/{id}","PackageController@savepackage");
                    Route::post("updatepackage","PackageController@updatepackage");
                    Route::get("deletepackage/{id}","PackageController@deletepackage");
                    Route::get("changesettingstatus/{fields}","NotificationController@changesettingstatus");

                    Route::get("review","DoctorController@showreview");
                    Route::get("deletereview/{id}","DoctorController@deletereview");

                    Route::get("news","NotificationController@shownews");
                    Route::post("sennews","NotificationController@sendnews");
                    Route::get("contactus","HomeController@showcontactus");

                    Route::get("patient","HomeController@showpatient");

                    Route::get("paymentgateway","PackageController@getpaymentgateway");
                    Route::get("editpaymentgateway/{id}","PackageController@editpaymentgateway");
                    Route::post("updatepaymentgateway","PackageController@updatepaymentgateway");
                    Route::get("changestatuspayment/{pay_id}/{status}","PackageController@changestatuspayment");

                    Route::get("subscription","SubscriptionController@showsubscription");
                    Route::get("changepackagestatus/{status}/{id}","SubscriptionController@changepackagestatus");
                    Route::any("chat","HomeController@showchat")->name("chat");


                    #ARticle
                    Route::resource('articles', 'ArticleController');

                    #Blog
                    Route::resource('blogs', 'BlogController');
                    Route::get('edit-blog/{slug}', 'BlogController@edit');
                    Route::post('delete-blog/{slug}', 'BlogController@delete');
                    Route::post('update-blog/{slug}', 'BlogController@update');
                    Route::get('show-blog/{slug}', 'BlogController@show');

                    #Workshop
                    Route::get('workshops', 'WorkshopController@index')->name('workshops');
                    Route::get('add-workshop', 'HomeSectionController@create');
                    Route::post('create-workshop', 'HomeSectionController@store');
                    Route::get('edit-workshop/{slug}', 'WorkshopController@edit');
                    Route::post('update-workshop/{slug}', 'WorkshopController@update');
                    Route::post('delete-workshop/{slug}', 'WorkshopController@delete');
                   

                    #Room
                    Route::get('rooms', 'RoomController@index')->name('rooms');
                    Route::get('add-room', 'RoomController@create');
                    Route::post('create-room', 'RoomController@store');
                    Route::get('edit-room/{slug}', 'RoomController@edit');
                    Route::post('delete-room/{slug}', 'RoomController@delete');
                    Route::post('update-room/{slug}', 'RoomController@update');
                    Route::get('show-room/{slug}', 'RoomController@show');


                    #Subscriber
                    Route::get('subscribers', 'DoctorController@subscribers');
                    Route::post('delete-subscriber/{id}', 'DoctorController@deleteSubscriber');


                    #FAQ
                    Route::get('faqs', 'FaqController@index')->name('faqs');
                    Route::get('add-faq', 'FaqController@create');
                    Route::post('create-faq', 'FaqController@store');
                    Route::get('edit-faq/{slug}', 'FaqController@edit');
                    Route::post('delete-faq/{slug}', 'FaqController@delete');
                    Route::post('update-faq/{slug}', 'FaqController@update');
                    Route::get('show-faq/{slug}', 'FaqController@show');


                    #Events
                    Route::get('events', 'EventController@index')->name('events');
                    Route::get('add-event', 'EventController@create');
                    Route::post('create-event', 'EventController@store');
                    Route::get('edit-event/{slug}', 'EventController@edit');
                    Route::post('delete-event/{slug}', 'EventController@destroy');
                    Route::post('update-event/{slug}', 'EventController@update');
                  

                    #About Us
                    Route::get('about', 'AboutController@index')->name('about');
                    Route::get('add-about', 'AboutController@create');
                    Route::post('create-about', 'AboutController@store');
                    Route::get('edit-about/{slug}', 'AboutController@edit');
                    Route::post('update-about/{slug}', 'AboutController@update');

                    #Women Empowerment  
                    Route::get('women', 'WomenEmpowermentController@index')->name('women');
                    Route::get('add-women', 'WomenEmpowermentController@create');
                    Route::post('create-women', 'WomenEmpowermentController@store');
                    Route::get('edit-women/{slug}', 'WomenEmpowermentController@edit');
                    Route::post('update-women/{slug}', 'WomenEmpowermentController@update');
                    
                    #Home
                    Route::get('home-section', 'HomeSectionController@index')->name('home-section');
                    Route::get('add-home-section', 'HomeSectionController@create');
                    Route::post('create-home-section', 'HomeSectionController@store');
                    Route::get('edit-home/{slug}', 'HomeSectionController@edit');
                    Route::post('update-home/{slug}', 'HomeSectionController@update');;

                    

                });
        });

    });




// Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
//     Route::get('/', 'HomeController@index')->name('home-locale');

//     Route::get('article/{id}', 'HomeController@article')->name('article');
// });