<?php

namespace App\Http\Middleware;


use Closure;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Strings;
use Symfony\Component\HttpFoundation\Response;

class AdminRedirectIfAuthenticated
{
    
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        if (Auth::guard('admin') -> check())
        {
            return redirect() -> route('admin.dashboard') ;
        }

        return route('admin.login');
    }


}
