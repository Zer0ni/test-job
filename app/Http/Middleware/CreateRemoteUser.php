<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CreateRemoteUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $request = $next($request);

        return $request;
    }
}
