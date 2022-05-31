<?php

namespace App\Http\Controllers;

use App\Model\Workshop;
use Illuminate\Http\Request;

class WorkshopController extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshop = Workshop::all();
        return view("admin.workshop.default")->with("data",$workshop);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("admin.workshop.addWorkshop");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'title'=>'required',
            'description'=>'required',
            'featured_img'=>'required',
            'event_date'=>'required',
           
        ]);

        $mediaUpload = "";
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
       

        $data  =$request->all();
        if($mediaUpload){

            $data['featured_img'] = $mediaUpload ;
        }
        $blogCreate = Workshop::create(array(
                    'title' => $data['title'],
                    'description' => $data['description'],
                    'short_description' => isset($data['short_description']) ?  : '',
                    'event_date' => $data['event_date'],
                    'slug' => $data['slug'],
                 
        ));
        return redirect("admin/workshops");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function show(Workshop $workshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Workshop $workshop)
    {
        return view('admin.workshop.saveWorkshop')->with('data', $workshop);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshop $workshop)
    {
        $mediaUpload = "";
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
        $data  =$request->all();
       
        if($mediaUpload){

            $data['featured_img'] = $mediaUpload ;
        }
        $blogCreate = Workshop::update($data);
        return redirect("admin/workshops");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workshop  $workshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop,$id)
    {
        $workshop = Workshop::find($id);
        $workshop->delete();
        return redirect("admin/workshops");
    }
}
