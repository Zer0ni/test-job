<?php

namespace App\Http\Middleware;

use App\Mail\TicketCreated;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendTickedConfirmationMail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request   $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        //Mail::to($request->input('user_email'))->send(new TicketCreated($request));

        return $response;
    }
}
