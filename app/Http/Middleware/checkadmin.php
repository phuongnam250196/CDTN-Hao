<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;
class checkadmin
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
        if(Auth::check()) {
            if( Auth::user()->level ==1)
            {
              return $next($request);
            }
            if( Auth::user()->level == 3)
            {
                return redirect('/teacher');
            }
            if( Auth::user()->level == 2)
            {
                return redirect('/student');
            }
        }
         return redirect('/');
    }
}
