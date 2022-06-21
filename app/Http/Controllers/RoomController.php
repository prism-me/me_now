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
    public function index(Request $request)
    {
        $segment = $request->segment(1);
        $room = Room::where('lang',$segment)->get();
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
        $segment = $request->segment(1);
        $mediaUpload = "";
        $mediaUpload1 = "";
        $mediaUpload2 = "";
        $mediaUpload3 = "";
        $mediaUpload4  = "";
        if ($img = $request->hasFile('more_img1')) {
               
           $media =  UploadController::upload_media($request->more_img1);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('more_img2')) {
               
           $media =  UploadController::upload_media($request->more_img2);
           $mediaUpload1 = $media['url'];

        }
        if ($img = $request->hasFile('icons')) {

            $media =  UploadController::upload_media($request->icons);
            $mediaUpload2 = $media['url'];  

        }

        if ($img = $request->hasFile('featured_img')) {

            $media =  UploadController::upload_media($request->featured_img);
            $mediaUpload3 = $media['url'];  

        }

        if ($img = $request->hasFile('featured_img2')) {

            $media =  UploadController::upload_media($request->featured_img2);
            $mediaUpload3 = $media['url'];

          

        }
       
      
        
        $data  =$request->all();
        if($mediaUpload){
            $data['more_img1'] = $mediaUpload;
        }

        if($mediaUpload1){
            $data['more_img2'] = $mediaUpload1;
        }

        if($mediaUpload2){
           
            $data['icons'] = $mediaUpload2;
            
        }

        if($mediaUpload3){
            $data['featured_img'] =$mediaUpload3;
        }
        if($mediaUpload4){
            $data['featured_img2'] =$mediaUpload4;
        }
        $data['lang'] = $segment;
        $roomCreate = Room::create($data);
        return redirect("admin/rooms");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $segment = $request->segment(4);
        $data = Room::where('slug',$slug)->first();
        return view('admin.room.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $slug = $request->segment(4);
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
    public function update(Request $request)
    {
        $slug = $request->segment(4);
        $mediaUpload = "";
        $mediaUpload1 = "";
        $mediaUpload2 = "";
        $mediaUpload3 = "";
        $mediaUpload4  = "";
        if ($img = $request->hasFile('more_img1')) {
               
           $media =  UploadController::upload_media($request->more_img1);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('more_img2')) {
               
           $media =  UploadController::upload_media($request->more_img2);
           $mediaUpload1 = $media['url'];

        }
        if ($img = $request->hasFile('icons')) {
               
           $media =  UploadController::upload_media($request->icons);
           $mediaUpload2 = $media['url'];

        }

        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload3 = $media['url'];

        }
        if ($img = $request->hasFile('featured_img2')) {
               
           $media =  UploadController::upload_media($request->featured_img2);
           $mediaUpload4 = $media['url'];

        }
             
        
        $data  =$request->except('_token');
        if($mediaUpload){
            $data['more_img1'] = $mediaUpload;
        }

        if($mediaUpload1){
            $data['more_img2'] = $mediaUpload1;
        }

        if($mediaUpload2){
            $data['icons'] = $mediaUpload2;
        }

        if($mediaUpload3){
            $data['featured_img'] =$mediaUpload3;
        }

        if($mediaUpload4){
            $data['featured_img2'] =$mediaUpload4;
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
    public function delete( Request $request)
    {   
        $slug = $request->segment(4);

        $room = Room::where('slug',$slug)->delete();
         return redirect("admin/rooms");
      
        
    }
}
