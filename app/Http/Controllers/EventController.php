<?php

namespace App\Http\Controllers;

use App\Model\Event;
use Illuminate\Http\Request;

class EventController extends  UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $segment = $request->segment(1);
        $data = Event::where('lang',$segment)->get();
        return view("admin.event.default")->with("data",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.event.add");
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
        if ($img = $request->hasFile('banner_img')) {
               
           $media =  UploadController::upload_media($request->banner_img);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('thumbnail_img')) {
               
           $media =  UploadController::upload_media($request->thumbnail_img);
           $mediaUpload1 = $media['url'];

        }
        $data  =$request->all();
        if($mediaUpload){
            $data['banner_img'] = $mediaUpload;
        }
        if($mediaUpload1){
            $data['thumbnail_img'] = $mediaUpload1;
        }
        $data['lang'] = $segment;
        $eventCreate = Event::create($data);
        return redirect()->route("events",$segment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $slug = $request->segment(4);
        $data = Event::where('slug',$slug)->first();
        return view('admin.event.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $slug = $request->segment(4);
        $data = Event::where('slug',$slug)->first();
        return view('admin.event.save')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $slug = $request->segment(4);
        $segment = $request->segment(1);
        $mediaUpload = "";
        $mediaUpload1 = "";
        if ($img = $request->hasFile('banner_img')) {
               
           $media =  UploadController::upload_media($request->banner_img);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('thumbnail_img')) {
               
           $media =  UploadController::upload_media($request->thumbnail_img);
           $mediaUpload1 = $media['url'];

        }
        $data  =$request->except('_token');
        if($mediaUpload){
            $data['banner_img'] = $mediaUpload;
        }
        if($mediaUpload1){
            $data['thumbnail_img'] = $mediaUpload1;
        }
        $eventCreate = Event::where('slug',$slug)->update($data);
        return redirect()->route("events",$segment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $slug = $request->segment(4);
        $segment = $request->segment(1);

        $event = Event::where('slug',$slug)->delete();
        return redirect()->route("events",$segment);
      
        
    }
}
