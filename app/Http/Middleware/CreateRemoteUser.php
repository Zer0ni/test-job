<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use App\Facades\ExternalUser;

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
        $response = $next($request);
        //in real app-random password.
        ExternalUser::createUser($request->input('user_email'),$request->input('user_email'));
        return $request;
    }
}
