<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Role;
use App\User;

class CheckRole
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
        if( !empty($request->user()) && $request->user()->role->name === 'manager' )
        {
            return redirect('/ticket');
        } else {
            return redirect('/ticket/create');
        }
    }
}
