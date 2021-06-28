<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Snipe\BanBuilder\CensorWords;

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
        $request->merge(['content' => $this->doProcess($request->get('content'))]);

        return $next($request);
    }

    /*TODO move to processors
    * Copy data processor conception from https://github.com/czim/laravel-processor
    */
    public function doProcess($string) {

        $string = htmlspecialchars($string);
        $censor = new CensorWords;
        $string = $censor->censorString($string);

        return $string;
    }
}
