<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Department;
use App\Model\DepartService;
use App\Model\Doctor;
use App\Model\Appointment;
use App\Model\Review;
use App\Model\TimeTable;
use App\Model\Token;
use Session;
use validate;
class DepartmentController extends UploadController
{
 
    public function index(Request $request){
        $segment = $request->segment(1);
        $department=Department::where('lang',$segment)->get();
        return view("admin.department.default")->with("data",$department);
    }

    public function saveddepartment(Request $request){
        $id = $request->segment(4);
        $data=Department::where('id',$id)->first();
        return view("admin.department.savedepartment")->with("data",$data)->with("department_id",$id);
    }

    public function updatedepartment(Request $request){
          $segment = $request->segment(1);
             if($request->get("id")!="0"){
                $request->validate([
                    'name' => 'required',
                    'description' => 'required|min:40',
                ]);
              }else{
                $request->validate([
                    'name' => 'required',
                    'description' => 'required|min:40',
                ]);
             }
            $mediaUpload = "" ;
            $mediaUpload_banner = "";
            if ($img = $request->hasFile('image') ) {
               
                $media =  UploadController::upload_media($request->image);
                $mediaUpload = $media['url'];

            }
            if ($banner_image = $request->hasFile('banner_image') ) {
               
                $media =  UploadController::upload_media($request->banner_image);
                $mediaUpload_banner = $media['url'];

            }
       

            if($request->get("id")!="0"){
                $store=Department::find($request->get("id"));
                $msg=__('messages.Department Update Successfully');
            }else{
                $store=new Department();
                $msg=__('messages.Department Add Successfully');
            }

            $store->name=$request->get("name");
            $store->lang=$segment;
            $store->description=$request->get("description");
            $store->short_description=$request->get("short_description");
            $store->slug=$request->get("slug");
            // $store->emergency_no = $request->get("emergency_no");
            if($mediaUpload){

                $store->image = $mediaUpload;

            }
            if($mediaUpload_banner){
                $store->banner_image = $mediaUpload_banner;
            }
            $store->save(); 
            Session::flash('message',$msg); 
            Session::flash('alert-class', 'alert-success');
             return redirect()->route('department',$segment);
    }

    public function deletedepartment(Request $request){
        $id = $request->segment('4');
        $segment = $request->segment('1');
        $data=Department::where('id',$id)->first();
        if($data){
        $data->delete();
        }
        //   $data=Department::find($id);
        //   if($data){
        //        $departser=DepartService::where("department_id",$id)->get();
        //        if(count($departser)>0){
        //             foreach ($departser as $d) {
        //                 $d->delete();//delete department service
        //             }
        //        }
        //        $deletedoc=Doctor::where("department_id",$id)->get();
        //        if(count($deletedoc)>0){
        //           foreach ($deletedoc as $k) {
        //              $deletereview=Review::where("doctor_id",$k->id)->get();
        //              if(count($deletereview)>0){
        //                 foreach ($deletereview as $d) {
        //                       $d->delete();//delete doctor review
        //                 }
        //              }
        //              $gettimetable=TimeTable::where("doctor_id",$k->id)->get();
        //              if(count($gettimetable)>0){
        //                 foreach ($gettimetable as $d) {
        //                       $d->delete();//delete doctor working hour
        //                 }
        //              }
        //              $removetoken=Token::where("doctor_id",$k->id)->get();
        //              if(count($removetoken)>0){
        //                 foreach ($removetoken as $d) {
        //                       $d->delete();//delete doctor token
        //                 }
        //              }
        //              $image_path = public_path() ."/upload/doctor/".$k->image;
        //               if(file_exists($image_path)) {
        //                     try {
        //                            unlink($image_path);//delete doctor pic
        //                     }
        //                     catch(Exception $e) {
        //                     }                        
        //               }
        //                 $k->delete();//delete doctor
        //             }
        //        }
        //        $appointment=Appointment::where("department_id",$id)->get();
        //        if(count($appointment)>0){
        //             foreach ($appointment as $d) {
        //                 $d->delete();//appointemnt delete
        //             }
        //        }
        //       $image_path = public_path() ."/upload/department/".$data->image;
        //       if(file_exists($image_path)) {
        //             try {
        //                    unlink($image_path);//department image delete
        //             }
        //             catch(Exception $e) {
        //             }                        
        //       }
        //       $data->delete();//department delete
        //   }          
          Session::flash('message',__('messages.Department Delete Successfully')); 
          Session::flash('alert-class', 'alert-success');
          return redirect()->route('department',$segment);
    }

    public function departmentservice($id){ 
        $data=DepartService::where("department_id",$id)->get();      
        return view("admin.department.saveservice")->with("department_id",$id)->with("data",$data);
    }

    public function savedepartmentservice($depart_id,$id){
        
        $data=DepartService::find($id);
        return view("admin.department.addservice")->with("departmentservice",$depart_id)->with("id",$id)->with("data",$data);
    }

    public function updatedepartmentservice(Request $request){
        if($request->get("id")!="0"){
                $request->validate([
                    'name' => 'required'
                ]);
              }else{
                $request->validate([
                    'name' => 'required'
                ]);
             }         

            if($request->get("id")!="0"){
                $store=DepartService::find($request->get("id"));
                $msg=__('messages.Department Service Update Successfully');
            }else{
                $store=new DepartService();
                $msg=__('messages.Department Service Add Successfully');
            }
            $mediaUpload = "" ;
            $mediaUpload_banner ="";
            if ($img = $request->hasFile('img')) {
               
                $media =  UploadController::upload_media($request->img);
                $mediaUpload = $media['url'];

            }
            if ($banner_image = $request->hasFile('banner_image') ) {
               
                $media =  UploadController::upload_media($request->banner_image);
                $mediaUpload_banner = $media['url'];

            }

            $store->name=$request->get("name");
            $store->price=isset( $store->price ) ? $store->price : " " ;
            $store->department_id= $request->get("depart_id");   
            $store->price= isset( $request->get['price'] ) ? $request->get['price'] : " " ;
            $store->description= $request->get("description");
            $store->slug= $request->get("slug");
            $store->excerpt= $request->get("excerpt");
            $store->short_description= $request->get("short_description");
            $store->price_for=isset( $request->get['price_for'] ) ? $request->get['price_for'] : " " ;
            
            if($mediaUpload){

                $store->img = $mediaUpload;

            }
            if($mediaUpload_banner){

                $store->banner_image = $mediaUpload_banner;

            }
            $store->save(); 
            Session::flash('message',$msg); 
            Session::flash('alert-class', 'alert-success');
            return redirect("admin/departmentservice/".$store->department_id);
    }

    public function deletedepartmentservice($id){
         $data=DepartService::find($id);  
         $appointment=Appointment::where("service_id",$id)->get();
               if(count($appointment)>0){
                    foreach ($appointment as $d) {
                        $d->delete();//appointemnt delete
                    }
               }        
         $data->delete();
         Session::flash('message',__('messages.Department Service Delete Successfully')); 
         Session::flash('alert-class', 'alert-success');
         return redirect()->back();
    }
  
}
