<?php

namespace App\Http\Controllers;

use App\Model\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $segment = $request->segment(1);
        $faq = Faq::where('lang', $segment)->get();
        return view("admin.faq.default")->with("data",$faq);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view("admin.faq.add");
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
        $data  =$request->all();
        $data['lang'] = $segment;
        $create = Faq::create($data);
        $msg=__('messages.Faq Added Successfully');
        return redirect("admin/faqs");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faq f
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit( Request $request)
    {
        $slug= $request->segment(4);
        $data = Faq::where('slug',$slug)->first();
        return view('admin.faq.save')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $segment = $request->segment(1);
        $slug = $request->segment(4);
        $data  =$request->except('_token');
        $create = Faq::where('slug',$slug)->update($data);
        $msg=__('messages.Faq Updated Successfully');
        return redirect()->route("faqs",$segment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $segment = $request->segment(1);
        $slug = $request->segment(4);
        $data = Faq::where('slug',$slug)->delete();
        $msg=__('messages.Faq Deleted Successfully');
         return redirect()->route("faqs",$segment);
    }
}
