<?php

namespace App\Http\Middleware;

use Closure;

class IsFruta
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
        if($request->route('fruta')){
//            return redirect('cebollas');
            return redirect()->action('HuertoController@cebollas')->withInput();
        }
        return $next($request);
    }
}
