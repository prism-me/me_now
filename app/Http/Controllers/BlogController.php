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
            'sub_title'=>'required'
        ]);

        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
       

        $data  =$request->all();
        $blogCreate = Blog::create(array('title' => $data['title'],
                    'sub_title' => $data['sub_title'],
                'description' => $data['description'],
                'posted_by' => $data['posted_by'],
                'featured_img' => $mediaUpload
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
    public function edit(Blog $blog)
    {
       
        return view('admin.blog.saveblog')->with('data', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
       
        if ($img = $request->hasFile('featured_img')) {
               
           $media =  UploadController::upload_media($request->featured_img);
           $mediaUpload = $media['url'];

        }
        $data  =$request->all();
       
        $data['featured_img'] = isset( $mediaUpload->featured_img ) ? $mediaUpload ->featured_img : " " ;
        $blogCreate = Blog::update($data);
        return redirect("admin/blogs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog, $id)
    {   

        $blog = Blog::find($id);
        $blog->delete();
         return redirect("admin/blogs");
      
        
    }
}
