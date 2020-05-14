<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }
/*
        if ($this->auth->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('auth/login');
            }
        }
        
        if($request->path() == 'order-detail') return $next($request);
        
        if(auth()->user()->type != 'admin'){
           // $message = 'Permiso denegado: Solo los administradores pueden entrar a esta sección';
            return redirect()->route('home');//->with('message', $message);
        }
*/
        return $next($request);
    }
}
