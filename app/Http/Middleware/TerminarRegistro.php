<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class TerminarRegistro
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
        if(Auth::user()->reg == 1){
            return $next($request);
        }else{
            //$alert = session(['alert'=>'Debes de completar el formulario para continuar!']);
            return redirect()->back();//->with($alert);
        }
    }
}
