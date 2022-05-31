<?php

namespace App\Http\Controllers;

use App\Model\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;

class BlogController extends UploadController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  
    public function index()
    {
        $blog = Blog::all();
        return view("admin.blog.default")->with("data",$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.blog.addBlog");

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
            'short_description'=>'required'
        ]);
        $mediaUpload = "";
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
        $data  =$request->all();
        if($mediaUpload){
            $data['featured_img'] = $mediaUpload;
        }
        $blogCreate = Blog::create(array('title' => $data['title'],
                                    'short_description' => $data['short_description'],
                                    'description' => $data['description'],
                                    'posted_by' => $data['posted_by'],
                                    'slug' => $data['slug']
                ));
        return redirect("admin/blogs");
    }
  

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog,$slug)
    {
       
       $data = Blog::where('slug',$slug)->first();
        return view('admin.blog.saveblog')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $slug)
    {
       
        $mediaUpload = "";
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }

        $data  =$request->except('_token');
        if($mediaUpload){

            $data['featured_img'] = $mediaUpload ;
        }
        $blogCreate = Blog::where('slug',$slug)->update($data);
        return redirect("admin/blogs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function delete(Blog $blog, $id)
    {   

        $blog = Blog::where('slug',$id)->delete();
         return redirect("admin/blogs");
      
        
    }
}
