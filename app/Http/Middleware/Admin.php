<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Illuminate\Support\Facades\Auth;


class Admin
{
    protected $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function __construct(Guard $admin){
        $this->admin=$admin;
    }
    
    public function handle($request, Closure $next)
{
    if ($this->admin->guest()) {
        if ($request->ajax()) {
            return response('Unauthorized.', 401);
        } else {
            return redirect()->guest('login');
        }
    }
    
    if($request->path() == 'order-detail') return $next($request);
    
    if(auth()->user()->type != "admin"){
       $message = 'Permiso denegado: Solo los administradores pueden entrar a esta sección';
       return redirect('/')->with('message', $message);
    }
 
    return $next($request);
}
}
