<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Console\MiddlewareMakeCommand;
use Fideloper\Proxy\TrustProxies as Middleware;

class RoleMiddleware extends Middleware
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
        if($request->user()->hasRole('manager') == false )
        {
            return redirect('/login');
        }

        return redirect('home');
    }
}
