<?php

namespace App\Http\Controllers;

use App\Model\About;
use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;

class AboutController  extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $data  = About::all();
        return view("admin.about.default")->with("data",$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.about.add");
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
        if ($img = $request->hasFile('icon1')) {
               
           $media =  UploadController::upload_media($request->icon1);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('icon2')) {
               
           $media =  UploadController::upload_media($request->icon2);
           $mediaUpload1 = $media['url'];

        }
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload2 = $media['url'];

        }
        $data  =$request->all();
        
        if($mediaUpload){
            $data['icon1'] = $mediaUpload;
        }
        if($mediaUpload1){
            $data['icon2'] = $mediaUpload1;
        }
        if($mediaUpload2){
            $data['featured_img'] = $mediaUpload2;
        }
       
        $create = About::create($data);
        return redirect("admin/about");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about,$slug)
    {
        $data = About::where('slug',$slug)->first();
        return view('admin.about.save')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about,$slug)
    {
        $mediaUpload = "";
        $mediaUpload1 = "";
        $mediaUpload2 = "";
        if ($img = $request->hasFile('icon1')) {
               
           $media =  UploadController::upload_media($request->icon1);
           $mediaUpload = $media['url'];

        }
        if ($img = $request->hasFile('icon2')) {
               
           $media =  UploadController::upload_media($request->icon2);
           $mediaUpload1 = $media['url'];

        }
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload2 = $media['url'];

        }
        $data  = $request->except('_token');
        
        if($mediaUpload){
            $data['icon1'] = $mediaUpload;
        }
        if($mediaUpload1){
            $data['icon2'] = $mediaUpload1;
        }
        if($mediaUpload2){
            $data['featured_img'] = $mediaUpload2;
        }
       
        $create = About::where('slug',$slug)->update($data);
        return redirect("admin/about");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\About  $about
     * @return \Illuminate\Http\Response
     */
     public function delete( $slug)
    {   

        // $about = About::where('slug',$slug)->delete();
        //  return redirect("admin/about");
      
        
    }
}
