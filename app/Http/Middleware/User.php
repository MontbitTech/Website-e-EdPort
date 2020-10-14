<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

class User

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $role = explode(',', Auth::user()->role);

        if(Auth::user()->role == "admin"){
             return $next($request);
         }
        if(in_array('e-EdPort Parental Control App',$role) && $request->path()=="product/request/e-edport-parental-control-app"){
             return $next($request);
         }

         if(in_array('e-EdPort Student Self Learning Solution',$role) && $request->path()=="product/request/e-edport-student-self-learning-solution"){
            return $next($request);
         }

         if(in_array('e-EdPort Virtual Classroom Solution',$role) && $request->path()=="product/request/e-edport-virtual-classroom-solution"){
            return $next($request);
         }

         if(in_array('e-EdPort Smart Teacher Training',$role) && $request->path()=="service/request/e-edport-smart-teacher-training"){
            return $next($request);
         }

         if(in_array('e-EdPort Smart Teacher Certification',$role) && $request->path()=="service/request/e-edport-smart-teacher-certification"){
            return $next($request);
         }
         else{
            Session::flash('flash_message', 'You have not a permission');
            Session::flash('flash_type', 'error');
            return back();
         }
          return $next($request);
    }
}
