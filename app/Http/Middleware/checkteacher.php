<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class checkteacher
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
            if( Auth::user()->level ==3)
            {
              return $next($request);
            }
            if( Auth::user()->level == 2)
            {
                return redirect('/student');
            }
            if( Auth::user()->level == 1)
            {
                return redirect('/admin');
            }
        }
         return redirect('/');
    }
}
