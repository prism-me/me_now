<?php

namespace App\Http\Controllers;

use App\Model\WomenEmpowerment;
use App\Model\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;

class WomenEmpowermentController extends UploadController
{
  
    public function index(Request $request)
    {
        $segment = $request->segment(1);
        $data  = WomenEmpowerment::where('lang',$segment)->get();
        return view("admin.women.default")->with("data",$data);
    }

    public function create()
    {
        return view("admin.women.add");
    }

    public function store(Request $request)
    {
        $segment = $request->segment(1);
        $mediaUpload = "";
       
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
       
       
        $data  =$request->all();
        
        if($mediaUpload){
            $data['featured_img'] = $mediaUpload;
        }
        $data['lang'] = $segment;
       
        $create = WomenEmpowerment::create($data);
        return redirect()->route("women",$segment);
    }

 
    public function edit(Request $request)
    {
        $slug = $request->segment(4);
        $data = WomenEmpowerment::where('slug',$slug)->first();
        return view('admin.women.save')->with('data', $data);
    }

    public function update(Request $request)
    {
        $slug = $request->segment(4);
        $segment = $request->segment(1);
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
        return redirect()->route("women",$segment);
    }




    

}
