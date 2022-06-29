<?php

namespace App\Http\Middleware;

use Closure;
use phpDocumentor\Reflection\Types\Null_;

class AdminAuth
{

    public function handle($request, Closure $next,$guard=null)
    {
        if (! auth()->guard($guard)->check()){

            return  redirect(route('admin.login'));
        }
        return $next($request);
    }
}
