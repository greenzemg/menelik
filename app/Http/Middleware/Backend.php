<?php

namespace Menelik\Http\Middleware;

use Closure;

class Backend
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

        if(\Auth::user()->role_id != 1)
        {
            $error = "You cann't access this page";
            return redirect(route('user.dashboard.index'))->with('error', $error);
        }
        return $next($request);
    }
}
