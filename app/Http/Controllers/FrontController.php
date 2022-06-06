<?php

namespace App\Http\Controllers;

use Phpfastcache\Helper\Psr16Adapter;
use Illuminate\Http\Request;
use Auth;
use App\Model\Doctor;
use App\Model\Department;
use App\Model\TimeTable;
use App\Model\Appointment;
use App\Model\DepartService;
use App\Model\Token;
use App\Model\WorkshopBooking;
use App\Model\Workshop;
use App\Model\Event;
use App\Model\Review;
use App\Model\Blog;
use App\Model\Room;
use App\Model\Service;
use App\Model\Setting;
use App\Model\Package;
use App\Model\Album;
use App\Model\ContactUs;
use App\Model\Subscription;
use App\Model\NewsLetter;
use Twilio\Rest\Client;
use App\Model\Resetpassword;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use App\User;
use Session;
use DateTime;
use DateTimeZone;
use Mail;
use validate;
use App\Mail\BookingMail;
class FrontController extends Controller
{   
    public $instagram_feed ;
    public function __construct(){
        $setting = Setting::find(1);
    //   Session::put("main_color","#000");
    //   Session::put("text_color","#fff");
    //   Session::put("headingtext_color","#0f4a86");
    //   Session::put("lowbackground_box_color","#ededc2");
    //   Session::put("slider_color","#f1f5ff");          
        Session::put("main_banner",asset('upload/web').'/'.$setting->main_banner);
        
        // 'menowdubai', 'CXZ0988998565'
        //$instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'muhammadbilal11203', 'Bilal$786', new Psr16Adapter('Files'));
        // $instagram = new \InstagramScraper\Instagram(new \GuzzleHttp\Client());
        //$instagram->login(false , true); // will use cached session if you want to force login $instagram->login(true)
        //$instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
        //$account = $instagram->getAccount('menowdubai');
        //dd($account);
        // $this->instagram_feed = $instagram->medias;

        
    }

    public function instagram(){


        // dd($accountMedias);
        // foreach ($accountMedias as $key  => $accountMedia) {
        //     $images[$key] = str_replace("&amp;","&", $accountMedia->getimageHighResolutionUrl());     
        //     $path = $images[$key];
        //     $imageName = $key.'.png';
        //     $img = public_path('insta/images/') . $imageName;
        //     file_put_contents($img, file_get_contents($path));
        // }
        // return view('gallery', compact('images'));
    }
    

    public function showhome(){
        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
        }
        //$service=Service::get()->take(8);
        // $package= Package::get()->take(3);
        $doctor= Doctor::get()->take(4);
        $rooms = Room::get()->take(3);
        $department= Department::with('service')->get();
        $setting= Setting::find(1);
        $reviews= Review::with('doctors','users')->get()->take(4);
        return view("front.home")->with('rooms',$rooms)->with("setting",$setting)->with("department",$department)->with("review",$reviews)->with("doctor",$doctor)->with("chatpage",'1');;
    }

    public function blog(){

        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
        }
        $service=Service::get()->take(8);
        $package=Package::get()->take(3);
        $doctor=Doctor::get()->take(4);
        $department=Department::with('service')->get();
        $setting=Setting::find(1);
        $blog= Blog::all();
        $reviews=Review::with('doctors','users')->get()->take(4);
        return view("front.blog")->with("services",$service)->with("setting",$setting)->with("department",$department)->with('blog',$blog);
    
    }



    public function blogdetails($slug){

        $blogdetails = Blog::where('slug',$slug)->first();
        $blog = Blog::get()->take(4);
        $department=Department::with('service')->get();

        $setting=Setting::find(1);
        return view("front.blog_inner")->with("department",$department)->with("setting",$setting)->with("blogdetails", $blogdetails)->with('blog',$blog);
    }

    

    public function workshop(){
        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
         }
         $service=Service::get()->take(8);
         $workshop=Workshop::get()->take(8);
         $package=Package::get()->take(3);
         $doctor=Doctor::get()->take(4);
         $department=Department::with('service')->get();
         $setting=Setting::find(1);
         $reviews=Review::with('doctors','users')->get()->take(4);
        return view("front.workshop")->with('doctor',$doctor)->with("services",$service)->with("setting",$setting)->with("department",$department)->with("workshop",$workshop);
    }

    public function events(){
        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
         }
         $events=Event::get()->take(8);
         $department=Department::with('service')->get();
         $setting=Setting::find(1);
        return view("front.events")->with("setting",$setting)->with("department",$department)->with("events",$events);
    }

    public function workshopdetail($id){
        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
         }
         $service=Service::get()->take(8);
         $package=Package::get()->take(3);
         $doctor=Doctor::get()->take(4);
         $department=Department::with('service')->get();
         $setting=Setting::find(1);
         $reviews=Review::with('doctors','users')->get()->take(4);
         
         $workshop=  Workshop::where('slug',$id)->first();
        //  dd($workshop->short_description);
        //https://prismdigital.ae/why-do-business-websites-need-a-good-design/ - test url
         $social = \Share::page('http://127.0.0.1:8000/workshop/'. $workshop->slug , $workshop->title)->facebook()->linkedin()->whatsapp()->twitter();
        //   dd($social);
       return view("front.workshops_inner")->with('social', $social)->with('doctor',$doctor)->with("services",$service)->with("setting",$setting)->with("department",$department)->with('workshop',$workshop);
    }
    public function faqs(){
        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
         }
         $service=Service::get()->take(8);
         $package=Package::get()->take(3);
         $doctor=Doctor::get()->take(4);
         $department=Department::with('service')->get();
         $setting=Setting::find(1);
         $reviews=Review::with('doctors','users')->get()->take(4);
       return view("front.faqs")->with('doctor',$doctor)->with("services",$service)->with("setting",$setting)->with("department",$department);
     
    }

    public function about(){
        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
         }
         $service=Service::get()->take(8);
         $package=Package::get()->take(3);
         $doctor=Doctor::get()->take(4);
         $department=Department::with('service')->get();
         $setting=Setting::find(1);
         $reviews=Review::with('doctors','users')->get()->take(4);
       return view("front.about")->with('doctor',$doctor)->with("services",$service)->with("setting",$setting)->with("department",$department);
     
    }
    
    public function become_member(){
        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
         }
        //  $service=Service::get()->take(8);
         $department=Department::with('service')->get();
         $setting=Setting::find(1);
        //  $reviews=Review::with('doctors','users')->get()->take(4);
       return view("front.become_member")->with("setting",$setting)->with("department",$department);
     
    }

    public function women_empowerment(){
        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
         }
        //  $service=Service::get()->take(8);
        //  $doctor=Doctor::get()->take(4);
         $department=Department::with('service')->get();
         $setting=Setting::find(1);
        //  $reviews=Review::with('doctors','users')->get()->take(4);
       return view("front.women_empowerment")->with("setting",$setting)->with("department",$department);
     
    }
    public function rooms($slug){

        if(!isset($_COOKIE['fload'])){
            setcookie('fload','1', time() + (86400 * 30), "/");
         }

         $rooms = Room::where('slug',$slug)->first();
         dd($rooms);
         $service = Service::get()->take(8);
        //  $package = Package::get()->take(3);
        //  $doctor = Doctor::get()->take(4);
         $department = Department::with('service')->get();
         $setting = Setting::find(1);
         $reviews = Review::with('doctors','users')->get()->take(4);
       return view("front.rooms")->with('rooms',$rooms)->with("services",$service)->with("setting",$setting)->with("department",$department);
       
    }
    

       public function getserviceanddoctor($department_id){
           $departmentservice=DepartService::where("department_id",$department_id)->get();
           $doctorlist=Doctor::where("department_id",$department_id)->get();
           $data=array("service"=> $departmentservice,"doctor"=>$doctorlist);
           return json_encode($data);
       }

      public function sendNotification(Request $request)
    {
        $setting =Setting::find(1);
        $api_key = $setting->web_key;
        $data = [
            "registration_ids" => array($request->get("token")),
            "notification" => [
                "title" => $request->get("sender_name"),
                "body" =>substr($request->get('message'),0,75),  
                "icon"=>$request->get('image')
            ]
        ];
        $dataString = json_encode($data);
    
        $headers = [
            'Authorization: key=' . $api_key,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);
        $date = new DateTime("now", new DateTimeZone('Asia/Kolkata') );
        $date->setTimeZone(new DateTimeZone('UTC')); 
        return $date->format('Y-m-d H:i:s.u');
       
    }
      
       public function allfacilites(){
           $service=Service::all();
           $department=Department::all();
           $setting=Setting::find(1);
           return view("front.facilites")->with("department",$department)->with("facilites",$service)->with("setting",$setting);
       }

        public function department($service){
            $departmentId = Department::where('slug' , $service)->first();
            $departmentService=DepartService::where("department_id",$departmentId->id)->get();
            $department=Department::with('service')->get();
    
            $setting=Setting::find(1);
            return view("front.department")->with("department",$department)->with("setting",$setting)->with("departmentService",$departmentService)->with('serviceSlug' , $service)->with('current',$departmentId);
        }

        public function departmentdetail($service,$subService){
            
           $department = Department::with('service')->get();
            
           //current sub service
           $currentService = DepartService::where("slug", $subService)->first();

            //sub services            
            $subServices =  DepartService::where('department_id', $currentService->department_id)->get();
                        
            // dd($subServices);    
            //doctors and sub services of the selected service
            $departmentdetails= Department::with("doctor")->where('slug' ,$service)->get();
            //get doctors
            $doctors = $departmentdetails[0]->doctor;
                        
            $setting=Setting::find(1);

           return view("front.departmentdetails")->with('service_slug',$service)->with('doctors',$doctors)->with('current',$currentService)->with('subServices',$subServices)->with("department",$department)->with("departmentdetails",$departmentdetails)->with("setting",$setting);

       }


       public function contact_us(){
           $department=Department::all();
           $setting=Setting::find(1);
           return view("front.contactus")->with("department",$department)->with("setting",$setting);
       }

       public function myaccount(){
         if(Auth::id()&&isset(Auth::user()->usertype)&&Auth::user()->usertype=='1'){
           $department=Department::all();
           $subscription=Subscription::with('packagedata')->where("user_id",Auth::id())->get();
           $future=Appointment::with("doctors","services","department")->where("user_id",Auth::id())->where("date",">=",date('Y-m-d'))->get()->take(15);
           foreach ($future as $k) {
              if($k->doctors){
                $getuser=Doctor::where("user_id",$k->doc_id)->first();
                if($getuser){
                 $k->doctors->image=$getuser->image;
                }else{
                  $k->doctors->image="";
                }
              }
           }
           $past=Appointment::with("doctors","services","department")->where("user_id",Auth::id())->where("date","<=",date('Y-m-d'))->get()->take(15);
           foreach ($past as $k) {
              if($k->doctors){
                $getuser=Doctor::where("user_id",$k->doc_id)->first();
                if($getuser){
                 $k->doctors->image=$getuser->image;
                }else{
                  $k->doctors->image="";
                }
              }
           }
            $setting=Setting::find(1);
            return view("front.myaccount")->with("department",$department)->with("upcomming",$future)->with("past",$past)->with("subscription",$subscription)->with("setting",$setting);
         }else{
            return redirect("/");
         }
       }

       public function updateprofile(Request $request){
         $img_url=Auth::user()->profile_pic;
                if ($request->hasFile('image')) 
                  {
                     $file = $request->file('image');
                     $filename = $file->getClientOriginalName();
                     $extension = $file->getClientOriginalExtension() ?: 'png';
                     $folderName = '/upload/profile';
                     $picture = 'profile_'.mt_rand(100000,999999). '.' . $extension;
                     $destinationPath = public_path() . $folderName;
                     $request->file('image')->move($destinationPath, $picture);
                     $img_url = $picture;
                 }
          $user=User::find(Auth::id());
          $user->name=$request->get("name");
          $user->phone_no=$request->get("phone_no");
          $user->profile_pic=$img_url;
          $user->save();
          $img="";
          Session::put("profile_pic",asset("public/upload/profile/").'/'.$img_url);          
          Session::flash('message',__('messages.Profile Update Successfully')); 
          Session::flash('alert-class', 'alert-success');
          return redirect()->back();
       }

       public function checkcurrentpwd(Request $request){
          if(Auth::user()->password==$request->get("pwd")){
              return 1;
          }else{
              return 0;
          }
       }

      
       public function changepasswords(Request $request){
          $store=User::find(Auth::id());
          $store->password=$request->get("npwd");
          $store->save();
           Session::flash('message',__('messages.Password Change Successfully')); 
            Session::flash('alert-class', 'alert-success');
            return redirect()->back();
       }

       
       public function doctorlist(){
           
          $department=Department::all();
          $doctor=Doctor::all();
          $departmentdoctor=Department::with('doctor')->get();
          $setting=Setting::find(1);
          $department=Department::with('service')->get();
          return view("front.doctorlist")->with("department",$department)->with("doctor",$doctor)->with("departmentdoctor",$departmentdoctor)->with("setting",$setting);
       }

       public function doctordetails($slug){

            $department=Department::all();
            $doctor=Doctor::with("TimeTabledata")->where('slug',$slug)->first();
            $departmentdetails=Department::with("doctor","service")->find($doctor->department_id); 
            $doctor->total_ratting=count(Review::where("doctor_id",$doctor->id)->get());
            $doctor->ratting=Review::where("doctor_id",$doctor->id)->avg('ratting');
            $reviews=Review::with('doctors','users')->where("doctor_id",$doctor->id)->get();
             $setting=Setting::find(1);
            return view("front.doctordetails")->with("department",$department)->with("review",$reviews)->with("doctor",$doctor)->with("departmentdetails",$departmentdetails)->with("id",$doctor->id)->with("setting",$setting);
       }

     
       public function gallery(){
           $department=Department::all();
           $albumlist=Album::with("gallerydata")->get();
           $setting=Setting::find(1);
           return view("front.gallery")->with("department",$department)->with("albumlist",$albumlist)->with("setting",$setting);
       }

       public function savecontact(Request $request){
          $store=new ContactUs();
          $store->name=$request->get("name");
          $store->email=$request->get("email");
          $store->topic=$request->get("topic");
          $store->phone=$request->get("phone");
          $store->message=$request->get("message");
          $store->save();
          Session::flash('message',__('messages.We, Will try to connect with you very soon')); 
          Session::flash('alert-class', 'alert-success'); 
          return redirect()->back();
       }

       public function addreview(Request $request){
                $data=new Review();
                $data->doctor_id=$request->get("doctor_id");
                $data->user_id=Auth::id();
                $data->review=$request->get("messages");
                $data->ratting=$request->get("rating");
                $data->save();
                Session::flash('message',__('messages.Review Add Successfully')); 
          Session::flash('alert-class', 'alert-success'); 
          return redirect()->back();
       }


       public function savesubscribe($email){
          $store=new NewsLetter();
          $store->email=$email;
          if($store->save()){
          return "You have subscribed successfully.";
          }else{
            return "Server Error.";
          }
       }

       public function pricing(){
           $department=Department::all();
           $pricing=Package::all();
            $setting=Setting::find(1);
           return view("front.pricing")->with("department",$department)->with("pricing",$pricing)->with("setting",$setting);
       }

       public function termcondition(){
          $department=Department::all();
           $setting=Setting::find(1);
           return view("front.termcondition")->with("department",$department)->with("setting",$setting);
       }

       public function privacypolicy(){
           $department=Department::all();
           $setting=Setting::find(1);
           return view("front.privacypolicy")->with("department",$department)->with("setting",$setting);
       }

       public function postregister(Request $request){
           $getemail=User::where("email",$request->get("email"))->first();
           if($getemail){
              $data = array("status"=>'0',"data"=>__("messages.Email Id Already Existe"));
              return json_encode($data);
           }else{
               
               $store=new User();
               $store->name=$request->get("name");
               $store->email=$request->get("email");
               $store->phone_no=$request->get("phone");
               $store->login_type=1;
               $store->usertype=1;
               $store->password=$request->get("password");
               $store->save();
               Auth::login($store, true);              
               Session::put("profile_pic",asset("public/upload/profile/profile.png"));
               $store->profile_pic = "profile/profile.png";
               $data = array("status"=>'1',"data"=>$store);
               return json_encode($data);
           }
       }

       public function postlogin(Request $request){
            $checkuser=User::where("email",$request->get("email"))->where("password",$request->get("password"))->where("usertype",'1')->first();
            if($checkuser){
              Auth::login($checkuser, true);
              if($request->get("rem_me")==1){
                    setcookie('email', $request->get("email"), time() + (86400 * 30), "/");
                    setcookie('password',$request->get("password"), time() + (86400 * 30), "/");
                    setcookie('rem_me',1, time() + (86400 * 30), "/");

               }
                 if($checkuser->profile_pic!=""){
                       Session::put("profile_pic",asset("public/upload/profile").'/'.$checkuser->profile_pic);
                       $image="profile/".$checkuser->profile_pic;
                 }
                 else{
                       Session::put("profile_pic",asset("public/upload/profile/profile.png"));
                       $image="profile/profile.png";
                       $checkuser->profile_pic = "profile/profile.png";
                 }
              $data = array("status"=>'1',"data"=>$checkuser);
              return json_encode($data);
            
        }else{   
              $data = array("status"=>'0',"data"=>__('messages.Login credentials are wrong'));
              return json_encode($data); 
        }
    }

       public function userlogin(Request $request){
          $checkuser=User::where("email",$request->get("email"))->where("password",$request->get("password"))->where("usertype",'1')->first();
            if($checkuser){
              Auth::login($checkuser, true);
              if($request->get("rem_me")==1){
                    setcookie('email', $request->get("email"), time() + (86400 * 30), "/");
                    setcookie('password',$request->get("password"), time() + (86400 * 30), "/");
                    setcookie('rem_me',1, time() + (86400 * 30), "/");

               }
               if($checkuser->profile_pic!=""){
                       Session::put("profile_pic",asset("public/upload/profile").'/'.$checkuser->profile_pic);
                       $image="profile/".$checkuser->profile_pic;
                 }
                 else{
                       Session::put("profile_pic",asset("public/upload/profile/profile.png"));
                       $image="profile/profile.png";
                       $checkuser->profile_pic = "profile/profile.png";
                 }
                
               
              return redirect()->back();
            
        }else{  
                Session::flash('message',__('messages.Login credentials are wrong')); 
                Session::flash('alert-class', 'alert-danger');           
                return redirect()->back();
        }
       }

       public function userlogout(){
           Auth::logout();
           return redirect('/');
       }

       public function bookappoinment(Request $request){
                       $data=new Appointment();
                       $data->department_id=$request->get("department");
                       $data->service_id=$request->get("service");
                       $data->doc_id=$request->get("doctors");
                       $data->name=$request->get("name");
                       $data->phone_no=$request->get("phone_no");
                       $data->user_id=Auth::id();
                       $data->date=$request->get("app_date");
                       $data->time=$request->get("app_time");
                       $data->messages=$request->get("messages");   
                       $data->status=1;              
                       $data->save();
                        Session::flash('message',__('messages.Appointement Book Successfully')); 
                        Session::flash('alert-class', 'alert-success'); 
                        return redirect()->back();
       }

       public function postforgot(Request $request){
           $checkmobile=User::where("email",$request->get("email"))->first();
          
         if(!empty($checkmobile)){
             
             $code=mt_rand(100000, 999999);
             $store=array();
             if(!isset($checkmobile->email)){
                 return 0;
             }
             $store['email']=$checkmobile->email;
             $store['name']=$checkmobile->name;
             $store['code']=$code;
             $add=new Resetpassword();
             $add->user_id=$checkmobile->id;
             $add->code=$code;
             $add->save();
              try {
                     Mail::send('email.forgotpassword', ['user' => $store], function($message) use ($store){
                      $message->to($store['email'],$store['name'])->subject(__("messages.Forgot Password"));
                    });
              } catch (\Exception $e) {
              }
            
            return 1;
         }
         else{
            return 0;
         }
       }

        public function resetpwd($code){
           $data=Resetpassword::where("code",$code)->get();
           $setting=Setting::find(1);
           if(count($data)!=0){
               return view('resetpwd')->with("id",$data[0]->user_id)->with("code",$code)->with("setting",$setting);
           }
           else{
              return view('resetpwd')->with("msg",__('messages.code_ex'))->with("setting",$setting);
           }
       }
       
       public function resetpassword(Request $request){
          if($request->get('id')==""){
              return view('resetpwd')->with("msg",__('messages.pwd_success'));
          }
          else{
            $user=User::find($request->get('id'));
           $user->password=$request->get('npwd');
           $user->save();
           $setting=Setting::find(1);
           $codedel=Resetpassword::where('user_id',$request->get("id"))->delete();
           return view('resetpwd')->with("msg",__('messages.pwd_success'))->with("setting",$setting);
          }
           
       }


    public function show_chat_area($id){
        if(Auth::id()){
            $department=Department::all();
            $timezone_name = timezone_name_from_abbr("", 330*60, false);
            $date = new DateTime("now", new DateTimeZone('Asia/Kolkata') );
            $date->setTimeZone(new DateTimeZone('UTC')); 
            $setting=Setting::find(1);
             $user = User::find($id);
             $factory = (new Factory)->withServiceAccount(env('FIREBASE_CREDENTIALS'));
        $factory = (new Factory())->withDatabaseUri(env('FIREBASE_DATABASE_URL'));
            $database = $factory->createDatabase(); 
            if($user->usertype=='1'){
                $img = 'profile/'.$user->profile_pic;
            }else if($user->usertype=='3'){
                $doctor = Doctor::where("user_id",$id)->first();
                if($doctor){
                    $img="doctor/".$doctor->image;
                }
            }else if($user->usertype=='2'){
                $img = 'profile/'.$user->profile_pic;
            }else{
                $img = 'profile/'.$user->profile_pic;
            }
            //echo $img;exit;
            $reference = $database->getReference($id);
            $snapshot = $reference->getSnapshot();
            $value = $snapshot->getValue();
            if(empty($value)){
                 $newPost =  $database
                    ->getReference($id)
                    ->set([
                            'name' => $user->name,
                            'profile'=> $img,
                            'usertype'=>$user->usertype
                    ]);
            }
            return view("front.chatarea")->with("department",$department)->with("timezone_name",$timezone_name)->with("setting",$setting)->with("chatuserid",$id);
        }else{
            return redirect('/');
        }
        
    }

    public function mediaupload(Request $request){
      
        if ($files = $request->file('file')) {
                $str=explode("/", $_FILES['file']['type']);
                if(isset($str[0])&&$str[0]=='image'){
                    $type="1";
                }else{
                    $type="2";
                }
                $file = $request->file('file');
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension() ?: 'png';
                $folderName = '/upload/chat';
                $picture = uniqid(). '.' . $extension;
                $destinationPath = public_path() . $folderName;
                $request->file('file')->move($destinationPath, $picture);
                $img_url =$picture;
                $date = new DateTime("now", new DateTimeZone('Asia/Kolkata') );
                $date->setTimeZone(new DateTimeZone('UTC'));
                return json_encode(array("media"=>$img_url,"type"=>$type,"time"=>$date->format('Y-m-d H:i:s.u')));
       }
       return 0;
    }

    public function deletemedia(Request $request)
    {
        $image_path = public_path() ."/upload/chat/".$request->get("name");
        if(file_exists($image_path)) {
                        try {
                             unlink($image_path);
                        }
                        catch(Exception $e) {
                          
                        }                        
                  }
                  return "done";
    }


    public function workshopBooking(Request $request){

        $emailData = $request->all();
        $data = $request->except('name');
       
        $add = WorkshopBooking::create($data);
        $userEmail = $request['email'];
        // $mail = Mail::to($userEmail)->send(new BookingMail($emailData));

        Session::flash('message',__('messages.Booking Done Successfully. Please Check Your Registered E-Mail to confirm the Booking.')); 
        Session::flash('alert-class', 'alert-success');           
        return redirect()->back();


    }


   
}
