<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class CheckChangePass
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
        if(Session::has('click'))
        {
            return redirect('/error');
        }

        else{
             Session::put('click',1);  
             Session::forget('ok');  
            return $next($request);
            
        }

    }
}