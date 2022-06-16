<?php

namespace App\Http\Controllers;

use App\Model\WomenEmpowerment;
use App\Model\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;

class WomenEmpowermentController extends UploadController
{
  
    public function index()
    {
        $data  = WomenEmpowerment::all();
        return view("admin.women.default")->with("data",$data);
    }

    public function create()
    {
        return view("admin.women.add");
    }

    public function store(Request $request)
    {
        $mediaUpload = "";
       
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
       
       
        $data  =$request->all();
        
        if($mediaUpload){
            $data['featured_img'] = $mediaUpload;
        }
     
       
        $create = WomenEmpowerment::create($data);
        return redirect("admin/women");
    }

 
    public function edit(WomenEmpowerment $womenEmpowerment,$slug)
    {
        $data = WomenEmpowerment::where('slug',$slug)->first();
        return view('admin.women.save')->with('data', $data);
    }

    public function update(Request $request, WomenEmpowerment $womenEmpowerment,$slug)
    {
         $mediaUpload = "";
       
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
       
       
        $data  =$request->except('_token');
        
        if($mediaUpload){
            $data['featured_img'] = $mediaUpload;
        }
     
       
        $create = WomenEmpowerment::where('slug',$slug)->update($data);
        return redirect("admin/women");
    }




    // Home Section
    public function all()
    {
        $data  = Home::all();
        return view("admin.home.default")->with("data",$data);
    }

    public function homeCreate()
    {
        return view("admin.home.add");
    }

    public function homeStore(Request $request)
    {
        $mediaUpload = "";
       
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
       
       
        $data  =$request->all();
        
        if($mediaUpload){
            $data['featured_img'] = $mediaUpload;
        }
     
       
        $create = Home::create($data);
        return redirect("admin/home");
    }

 
    public function homeEdit($slug)
    {
        $data = Home::where('slug',$slug)->first();
        return view('admin.home.save')->with('data', $data);
    }

    public function homeUpdate(Request $request, $slug)
    {
         $mediaUpload = "";
       
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
       
       
        $data  =$request->except('_token');
        
        if($mediaUpload){
            $data['featured_img'] = $mediaUpload;
        }
     
       
        $create = Home::where('slug',$slug)->update($data);
        return redirect("admin/home");
    }

}
