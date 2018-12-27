<?php

namespace App\Http\Middleware;

use App\Fortaleza;
use Closure;
use Illuminate\Support\Facades\Auth;

class Avances
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
         return $next($request);
    }
}

//if($f->b2 == 1){
//    $redirect = 'foda_1_3';
//}
