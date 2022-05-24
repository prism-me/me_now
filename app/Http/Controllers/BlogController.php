<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
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
        if ($request->hasFile('featured_img')) 
        {
            $file = $request->file('featured_img');
            $filename = $file->getClientOriginalName();
           
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/blog';
            $picture = 'blog'.mt_rand(100000,999999). '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('featured_img')->move($destinationPath, $picture);
            $img_url = $picture;
            $image_path = public_path() ."/upload/blog/".$request->get("featured_img");
            
        }else{
            $img_url = $request->get("featured_img");
        }
        $data  =$request->all();
        $blogCreate = Blog::create(array('title' => $data['title'],
                    'sub_title' => $data['sub_title'],
                'description' => $data['description'],
                'posted_by' => $data['posted_by'],
                'featured_img' => $img_url
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
        dd('blog');
        if ($request->hasFile('featured_img')) 
        {
            $file = $request->file('featured_img');
            $filename = $file->getClientOriginalName();
           
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName = '/upload/blog';
            $picture = 'blog'.mt_rand(100000,999999). '.' . $extension;
            $destinationPath = public_path() . $folderName;
            $request->file('featured_img')->move($destinationPath, $picture);
            $img_url = $picture;
            $image_path = public_path() ."/upload/blog/".$request->get("featured_img");
            
        }else{
            $img_url = $request->get("featured_img");
        }
        $data  =$request->all();
        $data['featured_img'] = $img_url;
        $blogCreate = Blog::update($data);
        return redirect("admin/blogs");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
