<?php

namespace App\Http\Controllers;

use App\Model\WomenEmpowerment;

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

    public function update(Request $request, WomenEmpowerment $womenEmpowerment)
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
     
       
        $create = WomenEmpowerment::update($data);
        return redirect("admin/women");
    }

}
