<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Doctor;
use App\Model\Department;
use App\Model\TimeTable;
use App\Model\Appointment;
use App\Model\Token;
use App\Model\Review;
use App\Model\NewsLetter;
use App\User;
use App\Model\Setting;
use Session;
use validate;
class DoctorController extends UploadController
{
 
    public function index(){
        $data=Doctor::with('department')->get();
        
        return view("admin.doctor.default")->with("data",$data);
    }
  
    public function savedoctor($id,$tab_id){
        $department=Department::all();
        $data=Doctor::find($id);
        $workinghour=TimeTable::where("doctor_id",$id)->get();
        return view("admin.doctor.savedoctor")->with("doctor_id",$id)->with("department",$department)->with("data",$data)->with("tab_id",$tab_id)->with("workinghour",$workinghour);
    }

    public function updatedoctorprofile(Request $request){
        
            $setting=Setting::find(1);
            if($request->get("id")!="0"){
                $request->validate([
                    'department' => 'required',
                    'name' => 'required',
                    'phone_no'=>'required',
                    'about_us'=>'required',
                    'service'=>'required'
                ]);
              }else{
                $request->validate([
                    'department' => 'required',
                    'name' => 'required',
                    'email' => 'required',
                    'phone_no'=>'required',
                    'about_us'=>'required',
                    'service'=>'required',
                    
                ]);
             }

            $mediaUpload ="";
            if ($img = $request->hasFile('image')) {
               
                $media =  UploadController::upload_media($request->image);
                $mediaUpload = $media['url'];

            }
           
            if($request->get("id")!="0"){
               
                $store=Doctor::find($request->get("id"));
                $msg=__('messages.Doctor Update Successfully');
                // $checkemail=User::where("email",$request->get("email"))->where("id",'!=',$store->user_id)->first();
                // if($checkemail){
                //         Session::flash('message',__('messages.Email Id Already Existe')); 
                //         Session::flash('alert-class', 'alert-danger'); 
                //         return redirect("admin/savedoctor/".$store->id.'/1');
                // }
                $usd=User::find($store->user_id);
                $usd->name=$request->get("name");
                $usd->email=$request->get("email");
                $usd->password=$request->get("password");
                $usd->phone_no=$request->get("phone_no");
                $usd->usertype='3';
                $usd->save();
            }else{
                $store=new Doctor();
                $usd=new User();
                $usd->name=$request->get("name");
                $usd->email=$request->get("email");
                $usd->password=$request->get("password");
                $usd->phone_no=$request->get("phone_no");
                $usd->usertype='3';
               
                $usd->save();
                $store->user_id=$usd->id;
                $msg=__('messages.Doctor Add Successfully');

            }
            $store->department_id=$request->get("department");
            $store->name=$request->get("name");
            $store->email=$request->get("email");
            $store->phone_no=$request->get("phone_no");
            $store->about_us=$request->get("about_us");
            $store->service=$request->get("service");
            // $store->facebook_id=$request->get("facebook");
            // $store->twitter_id=$request->get("twitter_id");
            // $store->google_id=$request->get("google_id");
            $store->description = $request->get("description");
            $store->slug = $request->get("slug");
            $store->short_description=$request->get("short_description");
             if($mediaUpload){
                    $usd->image = $mediaUpload;
            }
            $store->save(); 
            return redirect("admin/doctor");

    }
 
    
    public function deletedoctor($id){
          $data=Doctor::find($id);
          if($data){
                     $deletereview=Review::where("doctor_id",$id)->get();
                     if(count($deletereview)>0){
                        foreach ($deletereview as $d) {
                              $d->delete();//delete doctor review
                        }
                     }
                     $gettimetable=TimeTable::where("doctor_id",$id)->get();
                     if(count($gettimetable)>0){
                        foreach ($gettimetable as $d) {
                              $d->delete();//delete doctor working hour
                        }
                     }
                     $removetoken=Token::where("doctor_id",$id)->get();
                     if(count($removetoken)>0){
                        foreach ($removetoken as $d) {
                              $d->delete();//delete doctor token
                        }
                     }
                     $removetoken=Appointment::where("doc_id",$id)->get();
                     if(count($removetoken)>0){
                        foreach ($removetoken as $d) {
                              $d->delete();//delete doctor token
                        }
                     }
                      $image_path = public_path() ."/upload/doctor/".$data->image;
                      if(file_exists($image_path)&&$data->image!="") {
                            try {
                                   unlink($image_path);
                            }
                            catch(Exception $e) {
                            }                        
                      }
                      $data->delete();
          }
         
          Session::flash('message',__('messages.Doctor Delete Successfully')); 
          Session::flash('alert-class', 'alert-success');
          return redirect("admin/doctor");
    }

    public function showreview(){
       $data=Review::with("doctors","users")->get();
       return view("admin.doctor.review")->with("data",$data);
    }

    public function deletereview($id){
        $data=Review::find($id);
        $data->delete();
         Session::flash('message',__('messages.Review Delete Successfully')); 
          Session::flash('alert-class', 'alert-success');
          return redirect("admin/review");
    }


    public function subscribers(){

        $data  = NewsLetter::all();
        return view('admin.subscribers')->with('data',$data);
    }

    public function deleteSubscriber($id){
         $data  = NewsLetter::where('id',$id)->delete();
        return redirect("admin/subscribers");

    }



  
}
