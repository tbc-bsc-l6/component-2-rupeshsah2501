<?php

namespace App\Http\Middleware;

//use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate extends Middleware
{
    
    protected function redirectTo(Request $request): ? String
    {
        return $request -> exceptsJson() ? null :route ('admin.login');
         return $next($request);
    }

    protected function authenticate($request, array $guards)
    {
        if($this->auth -> guard('admin')-> check()){
            return $this->auth->shouldUse('admin');
        }
        $this->unauthenticated($request,['admin']);
    }

}
