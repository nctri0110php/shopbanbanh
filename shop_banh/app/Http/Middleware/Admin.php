<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use guard;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //  public function handle($request, Closure $next, $guard="")
    // {
    //     switch ($guard) {
    //       case 'admin':
    //         if (Auth::guard($guard)->check()) {
    //           return redirect()->route('dashboard');
    //         }
    //         break;
    //       default:
    //         if (Auth::guard($guard)->check()) {
    //           return redirect('/admin-login');
    //         }
    //         break;
    //     }
    //     return $next($request);
    // }
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/admin-login');
        }
        return $next($request);
    }

}
