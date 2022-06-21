<?php

namespace App\Http\Controllers;

use App\Model\Workshop;
use App\Model\Doctor;
use Illuminate\Http\Request;

class WorkshopController extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $segment = $request->segment(1);
        $workshop = Workshop::where('lang',$segment)->get();
        return view("admin.workshop.default")->with("data",$workshop);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor  = Doctor::all();
        return view("admin.workshop.addWorkshop")->with("doctor",$doctor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $segment = $request->segment(1);
        $mediaUpload = "";
        $mediaUpload1 = "";

        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload1 = $media['url'];

        }
       

        $data  =$request->all();
        if($mediaUpload){

            $data['featured_img'] = $mediaUpload ;
        }
        if($mediaUpload1){

            $data['banner_img'] = $mediaUpload1 ;
        }
        $workshopCreate = Workshop::create($data);
        return redirect()->route('workshops',$segment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $data = Workshop::where('slug',$slug)->first();
        return view('admin.workshop.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Workshop $workshop,$slug)
    {
        $slug = $request->segment(4);
        $doctor  = Doctor::all();
        $data = Workshop::where('slug',$slug)->first();
        return view('admin.workshop.saveWorkshop')->with('data', $data)->with('doctor', $doctor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Workshop $workshop)
    {
        $slug = $request->segment(4);
        $segment = $request->segment(1);
       
        $mediaUpload = "";
        $mediaUpload1 = "";
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('banner_img')) {
               
           $media =  UploadController::upload_media($request->banner_img);
           $mediaUpload1 = $media['url'];

        }

        $data  =$request->except('_token');
        if($mediaUpload){

            $data['featured_img'] = $mediaUpload ;
        }
        if($mediaUpload1){

            $data['banner_img'] = $mediaUpload1 ;
        }
        $workshopCreate = Workshop::where('slug',$slug)->update($data);
        return redirect()->route('workshops',$segment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $slug = $request->segment(4);

        $blog = Workshop::where('slug',$slug)->delete();
         return redirect("admin/workshops");
      
        
    }
}
