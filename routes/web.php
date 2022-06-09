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
   Artisan::call('config:cache');
    return redirect('home');
});
 Route::get("/brain","braintreeController@showbrain");
 
 Route::get('instagram','FrontController@instagram');
 
Route::get("add_doctor_review","AuthenticatedoctorController@show_product_review_user");
Route::post("checkoutbrain","braintreeController@checkoutbrain");
Route::get("sendnotification","FrontController@sendnotification");
Route::get("privacy_policy","HomeController@privacy");
Route::group(['prefix' => '/'], function () {
     Route::get('auth/{driver}', 'Auth\FacebookController@redirectToProvider')->name('social.oauth');
     Route::get('auth/{driver}/callback', 'Auth\FacebookController@handleProviderCallback')->name('social.callback');
     Route::get("/","FrontController@showhome");
     Route::get("about","FrontController@about");
     Route::get("blog","FrontController@blog");
     Route::get("faqs","FrontController@faqs");
     Route::get("women-empowerment","FrontController@women_empowerment");
     Route::get("become-a-member","FrontController@become_member");
     Route::get("workshop","FrontController@workshop");
     Route::get("events","FrontController@events");
     Route::get("rooms/{slug}","FrontController@rooms");
     Route::get("workshop/{id}","FrontController@workshopdetail");
     Route::get("getserviceanddoctor/{id}","FrontController@getserviceanddoctor");
     Route::post("bookappoinment","FrontController@bookappoinment");
     Route::get("allfacilites","FrontController@allfacilites");
     Route::get("services/{service}","FrontController@department");
     Route::get("services/{service}/{subservice}","FrontController@departmentdetail");
     Route::get("doctorlist","FrontController@doctorlist");
     Route::get("gallery","FrontController@gallery");
     Route::get("contact_us","FrontController@contact_us");
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


     
     
});

Route::group(['prefix' => 'admin'], function () {
        Route::get("/","HomeController@showlogin");
        Route::post("postlogin","HomeController@postlogin");

        Route::group(['middleware' => ['admincheckexiste']], function () {
        Route::get("dashboard","HomeController@showdashboard")->name("dashboard");
        Route::get("logout","HomeController@logout");
        Route::get("settimezone/{time}","HomeController@settimezone");
   
        #Department
        Route::resource("department","DepartmentController");
        Route::get("savedepartment/{id}","DepartmentController@saveddepartment");
        Route::post("updatedepartment","DepartmentController@updatedepartment");
        Route::get("deletedepartment/{id}","DepartmentController@deletedepartment");


        Route::get("departmentservice/{id}","DepartmentController@departmentservice");
        Route::get("savedepartmentservice/{dept_id}/{id}","DepartmentController@savedepartmentservice");
        Route::post("updatedepartmentservice","DepartmentController@updatedepartmentservice");
        Route::get("deletedepartmentservice/{id}","DepartmentController@deletedepartmentservice");

        #Doctor
        Route::resource("doctor","DoctorController");
        Route::get("savedoctor/{id}/{tab_id}","DoctorController@savedoctor");
        Route::post("updatedoctorprofile","DoctorController@updatedoctorprofile");
        Route::get("deletedoctor/{id}","DoctorController@deletedoctor");
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
        Route::resource('workshops', 'WorkshopController');
        Route::get('edit-workshop/{slug}', 'WorkshopController@edit');
        Route::post('delete-workshop/{slug}', 'WorkshopController@delete');
        Route::post('update-workshop/{slug}', 'WorkshopController@update');
        Route::get('show-workshop/{slug}', 'WorkshopController@show');

        #Room 
        Route::resource('rooms', 'RoomController');
        Route::get('edit-room/{slug}', 'RoomController@edit');
        Route::post('delete-room/{slug}', 'RoomController@delete');
        Route::post('update-room/{slug}', 'RoomController@update');
        Route::get('show-room/{slug}', 'RoomController@show');

      
        #Subscriber 
        Route::get('subscribers', 'DoctorController@subscribers');
        Route::post('delete-subscriber/{id}', 'DoctorController@deleteSubscriber');


        #FAQ 
        Route::resource('faqs', 'FaqController');
        Route::get('edit-faq/{slug}', 'FaqController@edit');
        Route::post('delete-faq/{slug}', 'FaqController@delete');
        Route::post('update-faq/{slug}', 'FaqController@update');
        Route::get('show-faq/{slug}', 'FaqController@show');


	 });

});



    
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}']], function () {
    Route::get('/', 'HomeController@index')->name('home-locale');

    Route::get('article/{id}', 'HomeController@article')->name('article');
});



