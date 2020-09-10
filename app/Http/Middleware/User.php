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
        if (Auth::user()->role != 'user') {

            return response()->json('Please enter valid user type');
            // Session::flash('flash_message', 'You have not a permission');
            // Session::flash('flash_type', 'error');
            // return redirect('login');
        }
        return $next($request);
    }
}
