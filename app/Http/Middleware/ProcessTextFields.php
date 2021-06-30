<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Facades\MessageContentProcessors;

class processTextFields
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
        if(strlen($request->input('messageContent')) > 0) {
            $request->merge(
                [
                    'messageContent' => $this->processMessageContent($request->get('messageContent')),
                ]
            );
        }

        return $next($request);
    }

    public function processMessageContent(string $string):string {

        $string = MessageContentProcessors::doProcess($string);

        return $string;
    }
}
