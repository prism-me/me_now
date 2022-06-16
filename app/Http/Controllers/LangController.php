<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App;
  
class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('lang');
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function change(Request $request)
    {
        if($request->lang){
            
            App::setLocale($request->lang);
            session()->put('locale', $request->lang);
            
        }else{
            App::setLocale('en');
            session()->put('locale', 'app.locale');
        }

        return redirect()->back();
    }
}