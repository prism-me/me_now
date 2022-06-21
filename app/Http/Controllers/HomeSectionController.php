<?php

namespace App\Http\Controllers;

use App\Model\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;

class HomeSectionController extends  UploadController
{
     public function index(Request $request)
    {
        $segment = $request->segment(1);
        $data  = Home::where('lang',$segment)->get();
        return view("admin.home.default")->with("data",$data);
    }

    public function create()
    {
        return view("admin.home.add");
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
     
       
        $create = Home::create($data);
        return redirect("admin/home-section");
    }

 
    public function edit(Request $request)
    {
        $slug = $request->segment(4);
        $data = Home::where('slug',$slug)->first();
        return view('admin.home.save')->with('data', $data);
    }

    public function update(Request $request)
    {
        $slug = $request->segment(4);
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
        return redirect("admin/home-section");
    }
}
