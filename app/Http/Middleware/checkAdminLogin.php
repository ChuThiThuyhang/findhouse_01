<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class checkAdminLogin
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
        if (Auth::check())
        {
            $user = Auth::user();
            // nếu level =1 (admin), status = 1 (actived) thì cho qua.
            if ($user->role == 1)
            {
                return $next($request);
            }
            else
            {
                // Auth::logout();
                return redirect('/');
            }
        } else
            return redirect('/login');
        }
}
