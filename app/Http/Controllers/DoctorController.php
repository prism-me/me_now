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
 
    public function index(Request $request){
        $segment = $request->segment(1);
        $data=Doctor::with('department')->where('lang',$segment)->get();
        
        return view("admin.doctor.default")->with("data",$data);
    }
  
    public function savedoctor( Request $request, $id){
       
        $segment = $request->segment(1);
        $id = $request->segment(4);
        $department=Department::where('lang',$segment)->get();
        $data=Doctor::where('lang',$segment)->where('id',$id)->first();
        return view("admin.doctor.savedoctor")->with("doctor_id",$id)->with("department",$department)->with("data",$data);
    }

    public function updatedoctorprofile(Request $request){
            $segment = $request->segment(1);
        
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
               
            }else{
                $store=new Doctor();
                $msg=__('messages.Doctor Add Successfully');

            }
            $store->department_id=$request->get("department");
            $store->name=$request->get("name");
            $store->email=$request->get("email");
            $store->phone_no=$request->get("phone_no");
            $store->about_us=$request->get("about_us");
            $store->service=$request->get("service");
            $store->description = $request->get("description");
            $store->designation = $request->get("designation");
            $store->excerpt = $request->get("excerpt");
            $store->slug = $request->get("slug");
            $store->lang = $segment;
            $store->short_description=$request->get("short_description");
             if($mediaUpload){
                    $store->image = $mediaUpload;
            }
            $store->save(); 
            return redirect("admin/doctor");

    }
 
    
    public function deletedoctor($id){
        $data=Doctor::find($id);
        if($data){
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
