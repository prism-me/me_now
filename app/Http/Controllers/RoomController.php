<?php

namespace App\Http\Controllers;

use App\Model\Room;
use Illuminate\Http\Request;

class RoomController extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $room = Room::all();
       
        return view("admin.room.default")->with("data",$room);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("admin.room.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $mediaUpload = "";
        $mediaUpload1 = "";
        $mediaUpload2 = "";
        $mediaUpload3 = "";
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('icons')) {
               
           $media =  UploadController::upload_media($request->icons);
           $mediaUpload1 = $media['url'];

        }
        if ($img = $request->hasFile('slider_images')) {
            $arr = [];
            foreach ($request->slider_images as $image){
                 $media =  UploadController::upload_media($image);
                 $arr[] = $media['url'];
            }
          
            
           $mediaUpload2 = $arr;

        }
        if ($img = $request->hasFile('additional_images')) {
               
           $arr = [];
            foreach ($request->additional_images as $image){
                 $media =  UploadController::upload_media($image);
                 $arr[] = $media['url'];
            }
          
            
           $mediaUpload3 = $arr;

        }
        $data  =$request->all();
        if($mediaUpload){
            $data['featured_img'] = $mediaUpload;
        }

        if($mediaUpload1){
            $data['icons'] = $mediaUpload1;
        }
        if($mediaUpload2){
            $data['slider_images'] = json_encode($mediaUpload2);
        }
        if($mediaUpload3){
            $data['additional_images'] =json_encode($mediaUpload3);
        }
        $roomCreate = Room::create($data);
        return redirect("admin/rooms");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show( $slug)
    {
        $data = Room::where('slug',$slug)->first();
        return view('admin.room.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = Room::where('slug',$slug)->first();
        return view('admin.room.save')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $slug)
    {
        $mediaUpload = "";
        $mediaUpload1 = "";
        $mediaUpload2 = "";
        $mediaUpload3 = "";
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('icons')) {
               
           $media =  UploadController::upload_media($request->icons);
           $mediaUpload1 = $media['url'];

        }
        if ($img = $request->hasFile('slider_images')) {
            $arr = [];
            foreach ($request->slider_images as $image){
                 $media =  UploadController::upload_media($image);
                 $arr[] = $media['url'];
            }
          
            
           $mediaUpload2 = $arr;

        }
        if ($img = $request->hasFile('additional_images')) {
               
           $arr = [];
            foreach ($request->additional_images as $image){
                 $media =  UploadController::upload_media($image);
                 $arr[] = $media['url'];
            }
          
            
           $mediaUpload3 = $arr;

        }
        $data  =$request->except('_token');
        if($mediaUpload){
            $data['featured_img'] = $mediaUpload;
        }

        if($mediaUpload1){
            $data['icons'] = $mediaUpload1;
        }
        if($mediaUpload2){
            $data['slider_images'] = json_encode($mediaUpload2);
        }
        if($mediaUpload3){
            $data['additional_images'] =json_encode($mediaUpload3);
        }
        $blogCreate = Room::where('slug',$slug)->update($data);
        return redirect("admin/rooms");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function delete( $slug)
    {   

        $room = Room::where('slug',$slug)->delete();
         return redirect("admin/rooms");
      
        
    }
}
