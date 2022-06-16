<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


    public function handle(Request $request, Closure $next)
    {   
       
        // app()->setLocale($request->segment(1));
        // return $next($request);


        $locale = $request->segment(1);
        
        if (in_array($locale, ['en' , 'ar'])) {
            \App::setLocale($locale);
            return $next($request);
        }

    
        if (!in_array($locale, ['en' , 'ar'])) {
            $segments = $request->segments();
            $lang_push = \App::getLocale();
            //$route = array_merge(array_slice($segments, 0 , 0), array($lang_push), array_slice($segments, 0));
            //return redirect(implode('/', $segments));
            return $next($request);
        }

    
    }
}