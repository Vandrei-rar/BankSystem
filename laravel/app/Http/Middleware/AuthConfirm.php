<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthConfirm
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
        if (!Auth::user())
        {
            if ($request->ajax())
            {
                return response('Não autorizado.', 401);
            }
            else
            {
                return redirect()->guest('login')->withErrors([
                    'erro' => 'Logue no sistema.'
                ]);
            }
        }

        return $next($request);
    }
}
