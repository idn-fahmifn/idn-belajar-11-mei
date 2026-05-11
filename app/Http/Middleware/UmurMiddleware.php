<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $umur = $request->session()->get('umur');

        if($umur >= 18){
            return $next($request);
        }

        return back()->with('failed', 'Umur kamu belum cukup');


    }
}
